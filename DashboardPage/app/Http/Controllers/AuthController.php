<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //Register Conroller
    public function register(){
        return view('register') ; 
    }
    public function registerPost(Request $request){
        $request->validate([
            "name"=> "required",
            "email"=> "required|email|unique:users",
            "password"=> "required",
        ]); 

        $data["name"] = $request->name;
        $data["email"] = $request->email;
        $data["password"] = Hash::make($request->password);

        $user  = User::create($data);

        if(!$user){
            return redirect(route("register"))->with('error','Registration failed try again');
        }
        return redirect(route("login"))->with('success','Registration successfull , Login to access the app');

    }

    //Login Controller
    public function login(){
        return view('login') ; 
    }
    public function loginPost(Request $request){
        $request->validate([
            "email"=>"required",
            "password"=>"required",
        ]); 

        $credentials = $request->only("email","password");

        if(Auth::attempt($credentials)){
            return redirect()->intended(route("dashboard"));
        }

        return redirect(route("login"))->with("error","Login details are wrong");
    }

    public function dashboard(Request $request){


             return view('dashboard') ; 

    }

    
    public function logout(Request $request){
        // Session::flush();

        //user logout
        Auth::logout();

        //clear the session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        //redirect to the login route
        return redirect()->route("login");

    }
}
