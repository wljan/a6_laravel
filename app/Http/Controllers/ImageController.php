<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $images = $user->images;
        return view('dashboard', ['contacts' => $images]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|min:3',
            'image' => 'required|file|mimes:jpeg,jpg,png',
        ]);

        $user = Auth::user();

        // Access the 'image' file from the validated data
        $image = $request->file('image');

        // Store the image file in the 'public/images' directory
        $imagePath = $image->store('images', 'public');

        $newImage = $user->images()->create([
            'title' => $validatedData['title'],
            'image_path' => $imagePath,
        ]);

        return back();
    }
}
