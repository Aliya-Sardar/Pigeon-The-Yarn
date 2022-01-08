<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{   
    // show signin page
    public function signin()
    {
        return view('AllUsers.signin');
    }  
      


    // Check email and password and authenticate the user
    public function loginAuth(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);


        $credentials = $request->only('email', 'password');
         
        if (Auth::attempt($credentials)) {
            return redirect()->route('shipping_dashboard');
        }
  
        // if the given data is not correct 
        return redirect()->route('signin');
    }



    // show signup page
    public function signup()
    {
        return view('AllUsers.signup');
    }
      

    // Register new user
    public function Registration(Request $request)
    {  
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required| min:8'
        ]);

        $data =  User::create([
            'name' => $request -> input('name'),
            'email' => $request -> input('email'),
            'password' => Hash::make($request -> input('password'))
          ]);
         
        return redirect()->route('shipping_dashboard');
    } 
    

    // Signout 
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return redirect()->route('signin');
    }
}
