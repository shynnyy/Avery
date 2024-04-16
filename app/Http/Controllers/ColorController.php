<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function index()
    {
        $Color = Color::get();
        return view("Color.product", ["Color"=> $Color]);
    }
    public function add()
    {
        Return view("Color.form");
    }
    public function save(Request $request)
    {
        Color::create(['name'=>$request->name]);
        return redirect()->route('color');
    }
    public function edit($id){
        $Color = Color::find($id);

        return view('Color.form', ['Color'=> $Color]);
    }
    public function update(Request $request, $id){
        $Color = [
            'name'=> $request->name,
        ];
        Color::find($id)->update($Color);
        return redirect()->route('color');
    }
}
