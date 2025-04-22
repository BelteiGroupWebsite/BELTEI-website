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
    public function handle(Request $request, Closure $next): Response
    {
        $ip = $request->ip();

        // Skip localhost during dev (optional)
        // if ($ip === '127.0.0.1') return $next($request);

        if ($this->isIpBlocked($ip)) {
            throw new NotFoundHttpException('Access denied');
        }

        try {
            $visitor = Visitor::firstWhere('ip_address', $ip);

            $agent = new Agent();
            $agent->setUserAgent($request->userAgent());

            if ($visitor) {
                $this->updateVisitor($visitor, $agent, $request);
            } else {
                $this->createVisitor($ip, $agent, $request);
            }
        } catch (\Throwable $e) {
            $this->logError($ip, $e);
            if ($e instanceof NotFoundHttpException) throw $e;
        }

        return $next($request);
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

        // Optional: restrict access to Cambodia only
        // if ($countryCode !== 'KH') {
        //     $this->blockIp($ip);
        //     throw new NotFoundHttpException('Access denied');
        // }

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

    private function blockIp(string $ip): void
    {
        Cache::put("blocked_ip:$ip", true, now()->addHours(1));
        $this->updateHtaccess($ip);
        Log::channel('visitor')->warning("IP blocked", ['ip' => $ip]);
    }

    private function updateHtaccess(string $ip): void
    {
        $htaccessPath = base_path('.htaccess');
        $line = "Deny from $ip";

        if (!file_exists($htaccessPath)) {
            file_put_contents($htaccessPath, "$line\n");
        } else {
            $content = file_get_contents($htaccessPath);
            if (!str_contains($content, $line)) {
                file_put_contents($htaccessPath, "\n$line", FILE_APPEND);
            }
        }
    }

    private function isIpBlocked(string $ip): bool
    {
        return Cache::has("blocked_ip:$ip");
    }
}
