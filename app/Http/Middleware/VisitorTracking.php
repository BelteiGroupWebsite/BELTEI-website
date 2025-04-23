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
    protected int $visitThreshold = 100; // Customize: how many hits/hour before block
    protected int $blockDuration = 3600; // in seconds (1 hour)

    public function handle(Request $request, Closure $next): Response
    {
        $ip = $request->ip();

        if ($this->isIpBlocked($ip)) {
            throw new NotFoundHttpException('Access denied');
        }

        try {
            $this->checkVisitRate($ip); // check if needs to be blocked

            $visitor = Visitor::firstWhere('ip_address', $ip);
            $agent = new Agent();
            $agent->setUserAgent($request->userAgent());

            if ($visitor) {
                $this->updateVisitor($visitor, $agent, $request);
            } else {
                $this->createVisitor($ip, $agent, $request);
            }

            $this->cleanExpiredBlocks(); // cleanup .htaccess
        } catch (\Throwable $e) {
            $this->logError($ip, $e);
            if ($e instanceof NotFoundHttpException) throw $e;
        }

        return $next($request);
    }

    private function checkVisitRate(string $ip): void
    {
        $key = "visit_count:$ip";
        $count = Cache::increment($key);
        Cache::put($key, $count, now()->addHour());

        if ($count > $this->visitThreshold) {
            $this->blockIp($ip);
            throw new NotFoundHttpException('Access denied');
        }
    }

    private function updateVisitor(Visitor $visitor, Agent $agent, Request $request): void
    {
        $visitor->increment('visits');

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
        $data = Cache::remember("ipinfo:$ip", now()->addDay(), function () use ($ip) {
            return Http::timeout(5)->get("https://ipinfo.io/{$ip}?token=fa209dfb8db28e")->json();
        });

        $countryCode = $data['country'] ?? 'Unknown';
        $region = $data['region'] ?? 'Unknown';

        Log::channel('visitor')->info('New Visitor IP Info', [
            'ip' => $ip,
            'country' => $countryCode,
            'region' => $region,
        ]);

        $country = Country::firstOrCreate(
            ['name' => $countryCode],
            ['region' => $region]
        );

        $visitor = Visitor::create([
            'ip_address' => $ip,
            'country_id' => $country->id,
            'visits' => 1
        ]);

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
        // dd('Blocking IP:', $ip);
        Cache::put("blocked_ip:$ip", now()->addSeconds($this->blockDuration));
        $this->updateHtaccess($ip, true);
        Log::channel('visitor')->warning("IP blocked", ['ip' => $ip]);
    }

    public function unblockIp(string $ip): void
    {
        $this->updateHtaccess($ip, false);
        Log::channel('visitor')->info("IP unblocked", ['ip' => $ip]);
    }


    private function isIpBlocked(string $ip): bool
    {
        return Cache::has("blocked_ip:$ip");
    }

    private function updateHtaccess(string $ip, bool $block = true): void
    {
        $htaccessPath = base_path('../public_html/.htaccess');
        $denyLine = "Deny from $ip";

        // dd($htaccessPath);

        if (!file_exists($htaccessPath)) {
            file_put_contents($htaccessPath, "Order Allow,Deny\nAllow from all\n");
        }

        $content = file_get_contents($htaccessPath);

        if ($block && !str_contains($content, $denyLine)) {
            file_put_contents($htaccessPath, "$denyLine\n", FILE_APPEND);
        } elseif (!$block && str_contains($content, $denyLine)) {
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
                if (Cache::has("blocked_ip:$ip")) {
                    $newLines[] = $line;
                }
            } else {
                $newLines[] = $line;
            }
        }

        file_put_contents($htaccessPath, implode("\n", $newLines));
    }
}
