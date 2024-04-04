<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('login', function () {
    return view('auth.login');
});

Route::get('payment', function () {
    return view('auth.payment');
});


Route::get('index', [HomeController::class, 'index'])->name('index');
Route::get('female', [HomeController::class, 'female'])->name('female');
Route::get('male', [HomeController::class, 'male'])->name('male');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('payment', [HomeController::class, 'payment'])->name('payment');



