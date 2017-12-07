<?php

namespace App\Http\Controllers;


use Illuminate\Container\Container;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        return view('imageUpload');
    }
    public function upload(Request $request)
    {
        // $this->validate($request, ['required|image|mimes:jpeg,png,jpg,gif,svg|max:2048']);
        $imageName = time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $imageName);
        return back()
            ->with('success', 'Image Uploaded successfully.')
            ->with('path', $imageName);
    }
}

?>
