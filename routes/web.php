<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('hello', function () {
    return view('frontend.female');
});
Route::get('index', [HomeController::class, 'index'])->name('index');
Route::get('female', [HomeController::class, 'female'])->name('female');

