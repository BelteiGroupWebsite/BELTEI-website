<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Country;
use App\Models\Visitor;
class VisitorController extends Controller
{
    public function handleVisitor(Request $request)
    {
        $ip = $request->ip();
        $response = Http::get("https://ipinfo.io/{$ip}/json");
        $data = $response->json();

        $region = $data['region'] ?? 'Unknown';
        $countryName = $data['country'] ?? 'Unknown'; // Fetch country code or name

        // First, check if the country exists or create it
        $country = Country::firstOrCreate(
            ['name' => $countryName], // Fill in other columns if necessary
            ['region' => $region]     // Fill in other columns if necessary
        );

        // Ensure you have a unique index on 'ip_address' in Visitor model for firstOrCreate to work properly
        $visitor = Visitor::firstOrCreate(
            ['ip_address' => $ip],
            ['country_id' => $country->id] // Ensure correct column name for foreign key
        );
        $visitor->increment('visits');
        $visitor->save();
    }
}
