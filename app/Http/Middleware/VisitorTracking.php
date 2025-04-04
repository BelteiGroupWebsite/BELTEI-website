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
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class VisitorTracking
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $ip = $request->ip();

        if ($this->isIpBlocked($ip)) {
            throw new NotFoundHttpException('Access denied');
        }

        try {
            $visitor = Visitor::where('ip_address', $ip)->first();

            if ($visitor) {
                $this->handleExistingVisitor($visitor);
            } else {
                $this->handleNewVisitor($ip);
            }
        } catch (\Exception $e) {
            $this->logError($ip, $e);

            if ($e instanceof NotFoundHttpException) {
                throw $e;
            }
        }

        return $next($request);
    }

    private function handleExistingVisitor(Visitor $visitor): void
    {
        if ($visitor->country->name !== "KH") {
            $this->blockIp($visitor->ip_address); // Block this IP
            throw new NotFoundHttpException('Access denied');
        }

        $visitor->increment('visits');
    }

    private function handleNewVisitor(string $ip): void
    {
        // Check if we have cached country data
        $cachedData = Cache::get("ipinfo:$ip");
        
        if (!$cachedData) {
            // Fetch IP details from ipinfo.io
            $response = Http::get("https://ipinfo.io/{$ip}?token=fa209dfb8db28e");
            $cachedData = $response->json();
            
            // Store result in cache for 24 hours
            Cache::put("ipinfo:$ip", $cachedData, now()->addDay());
        }

        $countryName = $cachedData['country'] ?? 'Unknown';
        $region = $cachedData['region'] ?? 'Unknown';

        Log::channel('visitor')->info('Visitor IP Information', [
            'ip' => $ip,
            'country' => $countryName,
            'region' => $region
        ]);

        // Block if not from Cambodia
        if ($countryName !== 'KH') {
            $this->blockIp($ip);
            throw new NotFoundHttpException('Access denied');
        }

        $country = Country::firstOrCreate(['name' => $countryName], ['region' => $region]);

        Visitor::firstOrCreate(
            ['ip_address' => $ip],
            ['country_id' => $country->id]
        )->increment('visits');
    }

    private function logError(string $ip, \Exception $e): void
    {
        Log::channel('visitor')->error('Visitor Tracking Error', [
            'ip' => $ip,
            'error' => $e->getMessage()
        ]);
    }

    /**
     * Dynamically block IPs that should not access the site.
     */
    private function blockIp(string $ip): void
    {
        // Cache the blocked IP for 1 hour
        Cache::put("blocked_ip:$ip", true, now()->addHours(1));
    
        // Write the IP to .htaccess
        $this->updateHtaccess($ip);
    
        Log::channel('visitor')->warning("IP Blocked via .htaccess", ['ip' => $ip]);
    }
    
    /**
     * Update .htaccess file to deny access to blocked IPs.
     */
    private function updateHtaccess(string $ip): void
    {
        $htaccessPath = base_path('.htaccess');
    
        // Check if the file exists
        if (!file_exists($htaccessPath)) {
            file_put_contents($htaccessPath, ""); // Create if not exists
        }
    
        // Read the current .htaccess content
        $htaccessContent = file_get_contents($htaccessPath);
    
        // Check if the IP is already blocked
        if (strpos($htaccessContent, "Deny from $ip") === false) {
            // Append IP to the .htaccess file
            file_put_contents($htaccessPath, "\nDeny from $ip", FILE_APPEND);
        }
    }
    

    /**
     * Check if an IP is already blocked.
     */
    private function isIpBlocked(string $ip): bool
    {
        return Cache::has("blocked_ip:$ip");
    }
    
}
