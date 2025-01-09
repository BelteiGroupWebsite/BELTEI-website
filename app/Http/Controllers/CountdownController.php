<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class CountdownController extends Controller
{
    public function showCountdown()
    {
        // Set the specific future date
        $futureDate = Carbon::create(2025, 7, 5, 0, 0, 0); // 5th July 2025, Midnight

        // Set the locale in the session
        session(['locale' => 'en']);

        // Dynamically set the application locale
        app()->setLocale(session('locale'));

        return view('web.client.beltei_university.asaihl.index', ['futureDate' => $futureDate]);
    }
}
