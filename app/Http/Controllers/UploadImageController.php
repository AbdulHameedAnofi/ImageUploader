<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadImageRequest;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;

class UploadImageController extends Controller
{
    public function upload(UploadImageRequest $request) {
        $file_path = $request->file('file');

        $uploadImage = Cloudinary::upload($file_path->getRealPath());

        return response()
                ->json([
                    'file_path' => $uploadImage->getSecurePath()
                ]);
    }
}
