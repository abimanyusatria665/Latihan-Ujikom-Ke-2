<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function loginInput(Request $request){
        try {
        $request->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required'
        ],[
            'email.exists' => "This User Doesn't exist"
        ]);

            $user = $request->only('email', 'password');            
            Auth::attempt($user);
               
            return redirect('/');

        } catch (\Throwable $th) {
            return redirect()->back()->with('failed', 'These Credentials are incorrect');
        }
    }

    public function register(){
        return view('auth.register');

    }

    public function registerInput(Request $request){
        try {
            $data = $request->validate([
                'name' => 'required',
                'password' => 'required',
                'email' => 'required'
            ]);
    
            $user = User::create($data);

            return redirect('/login')->with('success', "Successfully Create Account!");
        } catch (\Throwable $th) {
            return redirect()->back()->with('failed', 'failed to register account');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
