<?php

use App\Http\Controllers\AuthManager;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::controller(AuthManager::class)->group(function(){
Route::get('/register', "register")->name("register");
Route::post('/register', "registerPost")->name("register.post");

Route::get('/login', 'login')->name('login');

Route::post('/login', 'loginPost')->name('login.post');

Route::get('/logout', 'logout')->name('logout');
});

