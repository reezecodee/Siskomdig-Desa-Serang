<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginPage()
    {
        $title = 'Login Ke Aplikasi';

        return view('auth.login', compact('title'));
    }
}
