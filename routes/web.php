<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// })->name('welcome');

Route::view('/', 'layouts.landing_pages.app');
Route::get('/home', function () {
    return view('home');
})->name('home');

Route::group(['prefix' => 'master'], function () {

    Route::resource('category', CategoryController::class);
    Route::resource('product', ProductController::class);
    Route::resource('user',UserController::class);
    Route::resource('member', MemberController::class);
});
