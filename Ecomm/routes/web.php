<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Log;


Route::get('/', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
Route::get('/create', [ProductController::class, 'create'])->name('products.create');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/{product}', [CartController::class, 'add'])->name('cart.add');
Route::delete('/cart/{cartItem}', [CartController::class, 'remove'])->name('cart.remove');

Route::resource('products', ProductController::class);


Route::middleware('web')->group(function () {
    Route::get('/products/create', function () {
        Log::info('Products create route accessed');
        return view('products.create');
    });
});