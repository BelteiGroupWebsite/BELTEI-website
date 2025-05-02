<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;

class ShowCertificateController extends Controller
{
    public function view($encryptedFilename)
    {
        try {
            $filename = Crypt::decryptString($encryptedFilename);
        } catch (\Exception $e) {
            abort(404);
        }

        // $path = "private/upload/certificate/school/" . $filename;
        $path = "private/upload/certificate/" . $filename;

        // dd($filename);
        if (!Storage::exists($path)) {
            abort(404);
        }


        return response()->file(storage_path("app/{$path}"));
    }

    public function check($encryptedFilename)
    {
        try {
            $filename = Crypt::decryptString($encryptedFilename);
        } catch (\Exception $e) {
            abort(404);
        }

        // $path = "private/upload/certificate/school/" . $filename;
        $path = "private/upload/certificate/" . $filename;

        if (!Storage::exists($path)) {
            return response()->json(['status' => false]);
        }

        return response()->json(['status' => true]);
    }   

    public function viewEn($encryptedFilename)
    {
        try {
            $filename = base64_decode($encryptedFilename);
        } catch (\Exception $e) {
            abort(404);
        }

        // $path = "private/upload/certificate/school/" . $filename;
        $path = "private/upload/certificate/" . $filename;

        // dd($filename);
        if (!Storage::exists($path)) {
            abort(404);
        }


        return response()->file(storage_path("app/{$path}"));
    }   

    
}
