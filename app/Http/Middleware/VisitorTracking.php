<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use App\Models\Country;
use App\Models\Visitor;
use App\Models\VisitorInfo;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Jenssegers\Agent\Agent;

class VisitorTracking
{
    // How many hits per hour a single IP is allowed before getting blocked
    protected int $visitThreshold = 100;

    // How long the IP will be blocked (in seconds)
    protected int $blockDuration = 3600; // 1 hour

    public function handle(Request $request, Closure $next): Response
    {
        $ip = $request->ip(); // Get the client's IP address

        if ($this->isIpBlocked($ip)) {
            // If IP is already blocked, deny access
            throw new NotFoundHttpException('Access denied');
        }

        try {
            $this->checkVisitRate($ip); // Check if the IP exceeds visit threshold

            $visitor = Visitor::firstWhere('ip_address', $ip); // Look for existing visitor record
            $agent = new Agent(); // User agent parser
            $agent->setUserAgent($request->userAgent());

            if ($visitor) {
                $this->updateVisitor($visitor, $agent, $request); // Update visit count and info
            } else {
                $this->createVisitor($ip, $agent, $request); // Create new visitor record
            }

            

            $this->cleanExpiredBlocks(); // Remove expired IP blocks from .htaccess





        } catch (\Throwable $e) {
            $this->logError($ip, $e); // Log any errors

            if ($e instanceof NotFoundHttpException) throw $e;
        }

        return $next($request); // Continue with request
    }

    private function checkVisitRate(string $ip): void
    {
        $key = "visit_count:$ip"; // Cache key
        $count = Cache::increment($key); // Increment visit count
        Cache::put($key, $count, now()->addHour()); // Store it for 1 hour

        if ($count > $this->visitThreshold) {
            // Block IP if it exceeds the threshold

            // unblock 
            $this->blockIp($ip);
            throw new NotFoundHttpException('Access denied');

        }
    }

    private function updateVisitor(Visitor $visitor, Agent $agent, Request $request): void
    {
        $visitor->increment('visits'); // Increase total visit count

        // Create or find detailed visitor info
        VisitorInfo::firstOrCreate([
            'visitor_id' => $visitor->id,
            'user_agent' => $request->userAgent(),
            'platform'   => $agent->platform(),
            'browser'    => $agent->browser(),
            'device'     => $agent->device(),
        ]);
    }

    private function createVisitor(string $ip, Agent $agent, Request $request): void
    {
        // Use ipinfo.io to get geolocation info
        $data = Cache::remember("ipinfo:$ip", now()->addDay(), function () use ($ip) {
            return Http::timeout(5)->get("https://ipinfo.io/{$ip}?token=fa209dfb8db28e")->json();
        });

        $countryCode = $data['country'] ?? 'Unknown';
        $region = $data['region'] ?? 'Unknown';

        // Log new visitor info
        Log::channel('visitor')->info('New Visitor IP Info', [
            'ip' => $ip,
            'country' => $countryCode,
            'region' => $region,
        ]);

        // Save country info
        $country = Country::firstOrCreate(
            ['name' => $countryCode],
            ['region' => $region]
        );

        // Create main visitor record
        $visitor = Visitor::create([
            'ip_address' => $ip,
            'country_id' => $country->id,
            'visits' => 1
        ]);

        // Save detailed browser/device info
        VisitorInfo::create([
            'visitor_id' => $visitor->id,
            'user_agent' => $request->userAgent(),
            'platform'   => $agent->platform(),
            'browser'    => $agent->browser(),
            'device'     => $agent->device(),
        ]);
    }

    private function logError(string $ip, \Throwable $e): void
    {
        Log::channel('visitor')->error('Tracking Error', [
            'ip' => $ip,
            'error' => $e->getMessage(),
        ]);
    }

    public function blockIp(string $ip): void
    {
        // Store block in cache
        Cache::put("blocked_ip:$ip", now()->addSeconds($this->blockDuration));

        // Add to .htaccess
        // $this->updateHtaccess($ip, true);

        Log::channel('visitor')->warning("IP blocked", ['ip' => $ip]);
    }

    public function unblockIp(string $ip): void
    {
        // Remove from .htaccess
        // $this->updateHtaccess($ip, false);

        Log::channel('visitor')->info("IP unblocked", ['ip' => $ip]);
    }

    private function isIpBlocked(string $ip): bool
    {
        // Check if IP is currently in block cache
        return Cache::has("blocked_ip:$ip");
    }

    private function updateHtaccess(string $ip, bool $block = true): void
    {
        $htaccessPath = base_path('../public_html/.htaccess');
        $denyLine = "Deny from $ip";

        // Create .htaccess if it doesn't exist
        // if (!file_exists($htaccessPath)) {
        //     file_put_contents($htaccessPath, "Order Allow,Deny\nAllow from all\n");
        // }

        $content = file_get_contents($htaccessPath);

        if ($block && !str_contains($content, $denyLine)) {
            // Add deny line if not already present
            file_put_contents($htaccessPath, "$denyLine\n", FILE_APPEND);
        } elseif (!$block && str_contains($content, $denyLine)) {
            // Remove deny line if present
            $content = str_replace("$denyLine\n", '', $content);
            file_put_contents($htaccessPath, $content);
        }
    }

    private function cleanExpiredBlocks(): void
    {
        $htaccessPath = base_path('../public_html/.htaccess');
        if (!file_exists($htaccessPath)) return;

        $lines = explode("\n", file_get_contents($htaccessPath));
        $newLines = [];

        foreach ($lines as $line) {
            if (str_starts_with($line, "Deny from")) {
                $ip = trim(str_replace("Deny from", '', $line));

                // Keep deny line only if still in cache
                if (Cache::has("blocked_ip:$ip")) {
                    $newLines[] = $line;
                }
            } else {
                $newLines[] = $line;
            }
        }

        // Rewrite .htaccess with valid lines only
        file_put_contents($htaccessPath, implode("\n", $newLines));
    }
}
