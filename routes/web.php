<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Models\Cart;

Route::get('payment', function () {
    return view('auth.payment');
});
Route::controller(AuthController::class)->group(function(){
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function(){
    Route::get('dashboard', function () {
        return view('admin.dashboard');
    });

    Route::controller(ProductController::class)->prefix('products')->group(function(){
        Route::get('','index')->name('products');
        Route::get('add','add')->name('products.add');
        Route::post('add','save')->name('products.add.save');
        Route::get('edit/{id}','edit')->name('products.edit');
        Route::post('edit/{id}','update')->name('products.add.update');
        Route::get('delete/{id}','delete')->name('products.delete');
    });

    Route::controller(CategoryController::class)->prefix('category')->group(function(){
        Route::get('','index')->name('category');
        Route::get('add','add')->name('category.add');
        Route::post('add','save')->name('category.add.save');
        Route::get('edit/{id}','edit')->name('category.edit');
        Route::post('edit/{id}','update')->name('category.add.update');
        Route::get('delete/{id}','delete')->name('category.delete');

    });

    Route::controller(SizeController::class)->prefix('size')->group(function(){
        Route::get('','index')->name('size');
        Route::get('add','add')->name('size.add');
        Route::post('add','save')->name('size.add.save');
        Route::get('edit/{id}','edit')->name('size.edit');
        Route::post('edit/{id}','update')->name('size.add.update');
        Route::get('delete/{id}','delete')->name('size.delete');
    });

    Route::controller(CartController::class)->prefix('cart')->group(function(){
        Route::get('','cart')->name('cart');
        Route::get('delete/{id}','delete')->name('cart.delete');
    });
    Route::get('cart', function () {
        return view('Cart.cart');
    });

    Route::get('/', function () {
        return redirect()->route('index');
    });


Route::get('index', [HomeController::class, 'index'])->name('index');
Route::get('cart', [CartController::class, 'cart'])->name('cart');
Route::get('cart', [HomeController::class, 'cart'])->name('cart');
Route::get('fitting', [SizeController::class, 'fitting'])->name('fitting');
Route::get('female', [HomeController::class, 'female'])->name('female');
Route::get('male', [HomeController::class, 'male'])->name('male');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('payment', [HomeController::class, 'payment'])->name('payment');
Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
});
