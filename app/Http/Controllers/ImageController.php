<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\Auth;

class ImageController extends Controller
{

    public function index()
{
    $images = Image::all();

    return view('dashboard', ['images' => $images]);
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

    return redirect()->route('dashboard.index')->with('success', 'Image uploaded successfully!');
}
}
