<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class AuthController extends Auth
{
    public function login(Request $request)
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only(['email', 'password']);
        if (Auth::attempt($credentials)) {
            return redirect()->intended('home');
        } else {
            return back()->withErrors(['email' => 'Invalid credentials']);
        }
    }

    public function register(Request $request)
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // Validate and store the user
        $user = User::create($request->all());
        Auth::login($user);
        return redirect()->route('home');
    }
}
