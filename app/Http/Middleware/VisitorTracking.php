<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Http;
use App\Models\Country;
use App\Models\Visitor;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

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
            // $response = Http::get("https://ipinfo.io/{$ip}/json");
            $response = Http::get("https://ipinfo.io/{$ip}?token=fa209dfb8db28e");
            $data = $response->json();

            // Log the entire data array with context
            Log::channel('visitor')->info('Visitor IP Information', [
                'ip' => $ip,
                'data' => $data
            ]);

            $region = $data['region'] ?? 'Unknown';
            $countryName = $data['country'] ?? 'Unknown';

            // Explicitly check if the country is not Cambodia (KH)
            if ($countryName !== 'KH') {
                Log::channel('visitor')->warning('Non-Cambodian visitor blocked', [
                    'ip' => $ip,
                    'country' => $countryName
                ]);
                
                throw new NotFoundHttpException('Access denied');
            }

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

            // Re-throw the exception if it's a NotFoundHttpException
            if ($e instanceof NotFoundHttpException) {
                throw $e;
            }
        }

        return $next($request);
    }
}