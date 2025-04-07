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

        $path = "private/upload/certificate/school/" . $filename;

        // dd($filename);
        if (!Storage::exists($path)) {
            abort(404);
        }


        return response()->file(storage_path("app/{$path}"));
    }

    
}
