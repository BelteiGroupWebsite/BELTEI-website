<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class CountdownController extends Controller
{
    public function showCountdown()
    {
        session(['locale' => 'en']);
        // Set the specific future date
        $futureDate = Carbon::create(2025, 7, 5, 0, 0, 0); // 30th Dec 2024, Midnight
        return view('web.client.beltei_university.asaihl.index', ['futureDate' => $futureDate]);
    }
}
