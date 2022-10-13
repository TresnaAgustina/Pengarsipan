<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
        // Login
        public function authenticate(Request $request){

            $credentials = $request->validate([
                'username' => 'required | string',
                'password' => 'required | min: 8',
            ]);

            // ddd();

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('/dashboard');
            }

            return back()->with('loginError', 'Login failed. Please check your username or password')->onlyInput('username');
        }

        public function destroy(Request $request){
            Auth::guard('web')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect('/');
        }
}
