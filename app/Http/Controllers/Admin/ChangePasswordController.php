<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChangePasswordController extends Controller
{
    public function chPasswordPage(){
        $title = 'Ganti Password';

        return view('admin.change-password.index', compact('title'));
    }
}
