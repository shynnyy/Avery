<?php

namespace App\Http\Controllers;

use App\Models\Size;
use App\Models\Color;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index(){
        $Products = Products::get();
        return view('Products.product', ['Products'=> $Products]);
    }
    public function add(){
        $Category = Category::get();
        return view('Products.form', ['Category'=> $Category]);
    }
    public function save(Request $request){
        if ($request->hasFile('img')) {
            $imageName = $request->file('img')->getClientOriginalName();
            $request->file('img')->move('pictures/', $imageName);
        } else {
            $imageName = null;
        }

        $Products = [
            'img'=> $imageName,
            'product_code' => $request->product_code,
            'product_name' => $request->product_name,
            'gender'=> $request->gender,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'quantity' => $request->quantity,
        ];

        Products::create($Products);
        return redirect()->route('products');
    }

    public function edit($id){
        $Products = Products::find($id);
        $Category = Category::get();

        return view('Products.form', ['Products'=> $Products, 'Category'=> $Category]);
    }
    public function update(Request $request, $id){
        $Products = Products::find($id);

        if ($request->hasFile('img')) {
            if ($Products->img) {
                unlink(public_path('pictures/' . $Products->img));
            }

        $imageName = $request->file('img')->getClientOriginalName();
        $request->file('img')->move('pictures/', $imageName);
        $Products->img = $imageName;
    }

    $Products->product_code = $request->product_code;
    $Products->product_name = $request->product_name;
    $Products->gender = $request->gender;
    $Products->category_id = $request->category_id;
    $Products->price = $request->price;
    $Products->quantity = $request->quantity;

    $Products->save();

    return redirect()->route('products');
    }
    public function delete($id){
        Products::find($id)->delete();
        return redirect()->route('products');
    }

    public function create()
    {
    return view('product.create');
    }
}
