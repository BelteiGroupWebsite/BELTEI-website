<?php

namespace App\Http\Controllers\Client\University;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class RedirectCertificateController extends Controller
{
    public function __invoke($degree, $batch, $prefix, $filename)
    {
        // $path = storage_path("app/private/upload/certificate/university/$degree/$batch/$prefix/$filename");

        $encryptedPath = Crypt::encryptString(
            "university/$degree/$batch/$prefix/$filename"
        );

        return redirect()->route('certificate.view', ['filename' => $encryptedPath]);
    }
}
