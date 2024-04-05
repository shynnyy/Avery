<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('login', function () {
    return view('auth.login');
});

Route::get('payment', function () {
    return view('auth.payment');
});

Route::get('register', function () {
    return view('auth.register');
});

Route::get('index', [HomeController::class, 'index'])->name('index');
Route::get('female', [HomeController::class, 'female'])->name('female');
Route::get('male', [HomeController::class, 'male'])->name('male');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('payment', [HomeController::class, 'payment'])->name('payment');
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');


