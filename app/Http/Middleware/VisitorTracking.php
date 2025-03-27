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
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $ip = $request->ip();
        
        try {
            $response = Http::get("https://ipinfo.io/{$ip}/json");
            $data = $response->json();

            // Log the entire data array with context
            Log::channel('visitor')->info('Visitor IP Information', [
                'ip' => $ip,
                'data' => $data
            ]);

            $region = $data['region'] ?? 'Unknown';
            $countryName = $data['country'] ?? 'Unknown';

            $country = Country::firstOrCreate(
                ['name' => $countryName],
                ['region' => $region]
            );

            $visitor = Visitor::firstOrCreate(
                ['ip_address' => $ip],
                ['country_id' => $country->id]
            );
            $visitor->increment('visits');
            $visitor->save();
        } catch (\Exception $e) {
            // Log any errors that occur during the process
            Log::channel('visitor')->error('Visitor Tracking Error', [
                'ip' => $ip,
                'error' => $e->getMessage()
            ]);
        }

        return $next($request);
    }
}