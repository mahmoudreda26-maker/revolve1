<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UploadImageRequest;

class ImageController extends Controller
{
    public function store(UploadImageRequest $request)
    {
        $path = $request->file('image')->store('images','public');

        return back()->with('success','Image uploaded');
    }
}
