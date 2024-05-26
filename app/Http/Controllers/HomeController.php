<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User; // Menentukan namespace dari kelas User

class HomeController extends HomeController
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
            return back()->withErrors(['email' => 'Kredensial tidak valid']);
        }
    }

    public function register(Request $request)
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // Validasi dan simpan pengguna
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required|string|min:8',
        ]);

        $pengguna = User::create([
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        if (!$pengguna) {
            return back()->withErrors(['email' => 'Gagal membuat pengguna. Silakan coba lagi.']);
        }

        Auth::login($pengguna);
        return redirect()->route('home');
    }
}