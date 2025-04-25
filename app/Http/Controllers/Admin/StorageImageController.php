<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class StorageImageController extends Controller
{
    //
    public function show($filename)
    {
        $path = 'private/upload/certificate/' . $filename;

        if (!Storage::exists($path)) {
            abort(404);
        }

        $file = Storage::get($path);
        $type = Storage::mimeType($path);

        return response($file, 200)->header('Content-Type', $type);
        // return response()->file(storage_path("app/{$path}"));
    }
}
