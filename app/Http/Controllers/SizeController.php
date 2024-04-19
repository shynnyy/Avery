<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    public function index()
    {
        $size = Size::get();
        return view("Size.product", ["Size"=> $size]);
    }
    public function add()
    {
        Return view("Size.form");
    }
    public function save(Request $request)
    {
        Size::create(['name'=>$request->name]);
        return redirect()->route('size');
    }
    public function edit($id){
        $Size = Size::find($id);

        return view('Size.form', ['Size'=> $Size]);
    }

    public function delete($id){
        Size::find($id)->delete();
        return redirect()->route('size');
    }

    public function update(Request $request, $id){
        $Size = [
            'name'=> $request->name,
        ];
        Size::find($id)->update($Size);
        return redirect()->route('size');
    }
}
