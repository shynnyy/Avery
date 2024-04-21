<?php

namespace App\Http\Controllers;
use App\Models\Products;
use App\Models\Size;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function index($sortBy = 'newest') {
        if ($sortBy == 'highest') {
            $products = Products::orderBy('price', 'desc')->get();
        } elseif ($sortBy == 'lowest') {
            $products = Products::orderBy('price', 'asc')->get();
        } else { // Default to newest
            $products = Products::orderBy('created_at', 'desc')->get();
        }

        $sizes = Size::all();

        return view("frontend.catalogue", ['Products' => $products, 'Sizes' => $sizes]);
    }

    public function female(){
        $products = Products::where('gender', 'Female')->get();
        $sizes = Size::all();

        return view("frontend.catalogue", ['Products' => $products, 'Sizes' => $sizes]);
    }

    public function male(){
        $products = Products::where('gender', 'Male')->get();
        $sizes = Size::all();

        return view("frontend.catalogue", ['Products' => $products, 'Sizes' => $sizes]);
    }

    public function about(){
        return view("frontend.about");
    }

    public function size(){
        return view("Size.Size");
    }
    public function cart(){
        return view("Cart.cart");
    }
}
