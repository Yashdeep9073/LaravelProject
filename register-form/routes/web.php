<?php

use App\Http\Controllers\AuthManager;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::controller(AuthManager::class)->group(function(){

Route::get('/register', "register")->name("register");
Route::post('/register', "registerPost")->name("register.post");

Route::get('/login', 'login')->name('login');

Route::post('/login', 'loginPost')->name('login.post');

Route::get('/logout', 'logout')->name('logout');
});

Route::controller(ProductController::class)->group(function(){

Route::get('/product','index')->name('products.index');
Route::get('/product/{product}','show')->name('products.show');

});

Route::controller(CartController::class)->group(function(){

Route::get('/cart','index')->name('cart.index');
Route::post('/cart/{product}','add')->name('cart.add');
Route::delete('/cart/{cartItem}','remove')->name('cart.remove');

});

Route::resource('products', ProductController::class);


