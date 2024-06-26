<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

//Register user
Route::get('/register',[AuthController::class,"register"])->name('register');
Route::post('/register',[AuthController::class,"registerPost"])->name('register.post');

//Login
Route::get('/login',[AuthController::class,"login"])->name('login');
Route::post('/login',[AuthController::class,"loginPost"])->name('login.post');

Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard')->middleware('auth');
//Logout 
Route::get('/logout',[AuthController::class,'logout'])->name('logout');


