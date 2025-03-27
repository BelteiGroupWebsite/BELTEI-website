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
        $response = Http::get("https://ipinfo.io/{$ip}/json");
        $data = $response->json();

        Log::info('Visitor data', $data);

        $region = $data['region'] ?? 'Unknown';
        $countryName = $data['country'] ?? 'Unknown';

        Log::info('Visitor region', $region);
        Log::info('Visitor country', $countryName);

        $country = Country::firstOrCreate(
            ['name' => $countryName],
            ['region' => $region]
        );

        Log::info('Country', $country);

        $visitor = Visitor::firstOrCreate(
            ['ip_address' => $ip],
            ['country_id' => $country->id]
        );

        Log::info('visitor', $visitor);
        
        $visitor->increment('visits');
        $visitor->save();

        return $next($request);
    }
}
