<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/home',function () {
    return view('home');
})->name('home');

Route::group(['prefix'=>'master'],function(){
    Route::resource('category',CategoryController::class);
    Route::resource('product',ProductController::class);
});
