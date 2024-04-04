<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return view("frontend.index");
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
}
