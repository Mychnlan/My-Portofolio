<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    public function download(Request $request)
    {
        $filePath = storage_path('app/public/MilanHeru_CV.pdf');

        if (file_exists($filePath)) {
            return response()->download($filePath);
        } else {
            abort(404, 'File not found');
        }
    }
}
