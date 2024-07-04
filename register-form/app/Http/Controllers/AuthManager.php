<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Session\Session;

class AuthManager extends Controller
{
    public function login(){
        return view("login");
    }
    
    public function register(){
        return view("registration");
    }

    public function loginPost(Request $request){
        
        $request->validate([
            "email"=> "required",
            "password"=> "required",
        ]);

        $credentials = $request->only("email","password");

        if(Auth::attempt($credentials)){
            return redirect()->intended(route("products.index"));
        }
        return redirect(route("login"))->with("error","Login details are not valid");
    }



    public function  registerPost(Request $request){
        
        $request->validate([
            "name"=> "required",
            "email"=> "required|email|unique:users",
            "password"=> "required",
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);

        $user = User::create($data);
        if(!$user){
            return redirect(route('register'))->with('error','Registration failed, try again.');
        }

        return redirect(route("login"))->with("success","Registration success, Login to access the app");
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
