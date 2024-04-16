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
        $Size = Size::get();
        $Color = Color::get();
        return view('Products.form', ['Category'=> $Category, 'Size'=> $Size, 'Color'=> $Color]);
    }
    public function save(Request $request){
        $Products = [
            'img'=> $request->img,
            'product_code' => $request->product_code,
            'product_name' => $request->product_name,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'size_id'=> $request->size_id,
            'color_id'=> $request->color_id
        ];
        Products::create($Products);

        return redirect()->route('products');
    }
    public function edit($id){
        $Products = Products::find($id);
        $Category = Category::get();
        $Size = Size::get();
        $Color = Color::get();

        return view('Products.form', ['Products'=> $Products, 'Category'=> $Category,'Size'=> $Size,'Color'=> $Color]);
    }
    public function update(Request $request, $id){
        $Products = [
            'img'=> $request->img,
            'product_code'=> $request->product_code,
            'product_name'=> $request->product_name,
            'category_id' => $request->category_id,
            'price'=> $request->price,
            'quantity'=> $request->quantity,
            'size_id'=> $request->size_id,
            'color_id'=> $request->color_id
        ];
        Products::find($id)->update($Products);
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

    public function store(Request $request)
    {
    $request->validate([
        'img' => 'required|img|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $img = $request->file('img')->store('pictures', 'public');

    $Product = new Products();
    $Product->img = $img;
    $Product->save();

    return redirect('products')->with('success', 'Product created successfully.');
    }
}
