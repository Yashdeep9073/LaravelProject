<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('About');
});

Route::get('/post', function () {
    return view('Post');
});

Route::get('/test',function (){
    return view('Test');
});

function getUser(){
    return [
        '1'=>['name'=>'Yash', 'city'=>'Jalandher','email'=>'ydeep9073@gmail.com'],
        '2'=>['name'=>'Yash', 'city'=>'Jalandher','email'=>'ydeep9073@gmail.com'],
        '3'=>['name'=>'Yash', 'city'=>'Jalandher','email'=>'ydeep9073@gmail.com'],
        '4'=>['name'=>'Yash', 'city'=>'Jalandher','email'=>'ydeep9073@gmail.com'],
        '5'=>['name'=>'Yash', 'city'=>'Jalandher','email'=>'ydeep9073@gmail.com'],
    ];
}

Route::get('/user',function (){
    $name ='Yash';
    $city = '';
    $users = getUser();
 
    return view('User',[
        'users'=>$users
        // 'user'=> $name,
        // 'city'=> $city,
        // 'scripts'=>'<script>alert("HI AM FUCKING GOOOD!!!")</script>',
    ]);

    // return view('User')
    // ->with('user' , $name)
    // ->with('city' , $city);


});

Route::get('/user/{id}',function ($id){
    $users = getUser();
    
    abort_if(!isset($users[$id]),404);
    $user = $users[$id];

    return view('pages.user',[
        'id'=>$user
    ]);
})->name('view.user');
