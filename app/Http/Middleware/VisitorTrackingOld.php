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

class VisitorTrackingOld
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
            throw new NotFoundHttpException('Access denied');
        }

        $visitor->increment('visits');
        $visitor->save();
    }

    private function handleNewVisitor(string $ip): void
    {
        $response = Http::get("https://ipinfo.io/{$ip}?token=fa209dfb8db28e");
        $data = $response->json();

        Log::channel('visitor')->info('Visitor IP Information', [
            'ip' => $ip,
            'data' => $data
        ]);

        $region = $data['region'] ?? 'Unknown';
        $countryName = $data['country'] ?? 'Unknown';

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
    }

    private function logError(string $ip, \Exception $e): void
    {
        Log::channel('visitor')->error('Visitor Tracking Error', [
            'ip' => $ip,
            'error' => $e->getMessage()
        ]);
    }
}
