<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $Category = Category::get();
        return view("Category.product", ["Category"=> $Category]);
    }

    public function add()
    {
        Return view("Category.form");
    }
    public function save(Request $request)
    {
        Category::create(['name'=>$request->name]);
        return redirect()->route('category');
    }
    public function edit($id){
        $Category = Category::find($id);

        return view('Category.form', ['Category'=> $Category]);
    }
    public function delete($id){
        Category::find($id)->delete();
        return redirect()->route('category');
    }

    public function update(Request $request, $id){
        $Category = [
            'name'=> $request->name,
        ];
        Category::find($id)->update($Category);
        return redirect()->route('category');
    }
}
