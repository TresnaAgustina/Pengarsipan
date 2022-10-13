<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Rules\Password;


class RegisController extends Controller
{
    public function store(Request $request)
    {
        //store data to db user
        $request->validate([
            'username' => ['required', 'string', 'max: 20'],
            'password' => ['required', password::min(8)],
        ]);

        $user = User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password)
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect()->intended('/');
    }
}
