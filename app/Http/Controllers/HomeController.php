<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function index(){
        // Get all file names from the pictures directory
        $imageFiles = File::files(public_path('pictures'));

        // Convert file paths to URLs
        $images = collect($imageFiles)->map(function ($file) {
            return asset('pictures/' . $file->getFilename());
        })->shuffle()->all();

        // Pass the shuffled images to the view
        return view("frontend.index", ['images' => $images]);
    }

    public function female(){
        return view("frontend.female");
    }

    public function male(){
        return view("frontend.male");
    }

    public function about(){
        return view("frontend.about");
    }

    public function size(){
        return view("Size.Size");
    }
}
