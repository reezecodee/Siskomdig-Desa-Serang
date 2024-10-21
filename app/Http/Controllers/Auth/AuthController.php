<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ForgotPasswordRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginPage()
    {
        $title = 'Login Ke Aplikasi';
        $userCount = User::count();

        return view('auth.login', compact('title', 'userCount'));
    }

    public function loginHandler(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $remember = $request->remember ? true : false;

        if (Auth::attempt($credentials, $remember)) {
            $user = Auth::user(); // Ambil user yang baru saja login

            // Cek apakah user belum terverifikasi (cek kolom email_verified_at)
            if (is_null($user->email_verified_at)) {
                $user->update([
                    'is_verified' => true,
                    'email_verified_at' => now(), // Mengisi waktu saat ini
                ]);

                return redirect()->route('show.dashboardAdmin')
                    ->withSuccess('Akun Anda telah terverifikasi. Selamat datang Admin.');
            }

            // Jika sudah terverifikasi, lanjutkan ke dashboard
            $request->session()->regenerate();
            return redirect()->route('show.dashboardAdmin')
                ->withSuccess('Login berhasil! Selamat datang Admin.');
        }

        return back()->withErrors([
            'error' => 'Email atau password tidak sesuai.',
        ])->onlyInput('email');
    }

    public function registerPage()
    {
        $title = 'Buat Akun Admin Pertama';

        return view('auth.register', compact('title'));
    }

    public function registerHandler(RegisterRequest $request)
    {
        $validatedData = $request->validated();

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);
        return redirect()->route('show.login')->withSuccess('Berhasil membuat akun, silahkan login.');
    }

    public function forgotPasswordPage()
    {
        $title = 'Lupa Password Akun';

        return view('auth.forgot-password', compact('title'));
    }

    public function changePassword(ForgotPasswordRequest $request)
    {
        $validatedData = $request->validated();
        // Cari pengguna berdasarkan email atau username
        $user = User::where('email', $validatedData['email'])
            ->orWhere('username', $validatedData['username'])
            ->first();

        // Update password baru
        $user->password = bcrypt($validatedData['new_password']);
        $user->save();

        return redirect()->route('show.login')->withSuccess('Berhasil mengatur ulang password');
    }

    public function logoutHandler(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
