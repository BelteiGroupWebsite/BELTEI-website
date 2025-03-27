<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Http;
use App\Models\Country;
use App\Models\Visitor;
use Illuminate\Support\Facades\Log;

class VisitorTracking
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $ip = $request->ip();

        // Skip localhost or private IPs
        if ($ip === '127.0.0.1' || $ip === '::1') {
            return $next($request);
        }

        try {
            $response = Http::timeout(5)->get("https://ipinfo.io/{$ip}/json");

            if ($response->successful()) {
                $data = $response->json();

                $region = $data['region'] ?? 'Unknown';
                $countryName = $data['country'] ?? 'Unknown';

                $country = Country::firstOrCreate(
                    ['name' => $countryName],
                    ['region' => $region]
                );

                $visitor = Visitor::firstOrCreate(
                    ['ip_address' => $ip],
                    ['country_id' => $country->id, 'visits' => 0]
                );

                $visitor->increment('visits');

                // Optional: Log useful info
                Log::info('Visitor tracked', [
                    'ip' => $ip,
                    'country' => $countryName,
                    'region' => $region,
                    'uri' => $request->getRequestUri(),
                    'visits' => $visitor->visits + 1
                ]);
            } else {
                Log::warning('Failed to fetch visitor info', ['ip' => $ip]);
            }
        } catch (\Exception $e) {
            Log::error('Visitor tracking error', [
                'ip' => $ip,
                'error' => $e->getMessage()
            ]);
        }

        return $next($request);
    }
}
