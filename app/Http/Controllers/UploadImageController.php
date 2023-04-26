<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadImageController extends Controller
{
    public function upload(Request $request) {
        $file_path = $request->file('file');

        $uploadImage = cloudinary()
                        ->upload($file_path)
                        ->getRealPath();

        return $uploadImage;
    }
}
