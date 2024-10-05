<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginPage()
    {
        $title = 'Login Ke Aplikasi';
        $bcrypt = bcrypt('12345678');

        return view('auth.login', compact('title', 'bcrypt'));
    }

    public function loginHandler(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Untuk debugging, tambahkan ini sementara
        // dd([
        //     'credentials' => $credentials,
        //     'user_exists' => \App\Models\User::where('email', $credentials['email'])->exists(),
        //     'auth_attempt' => Auth::attempt($credentials)
        // ]);

        if (Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password']])) {
            $request->session()->regenerate();
            return redirect()->intended('/admin/dashboard');
        }

        return back()->withErrors([
            'email' => 'Email atau password tidak sesuai.',
        ])->onlyInput('email');
    }


    public function logoutHandler(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
