<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function applicationPage()
    {
        $title = 'Pengaturan Aplikasi';

        return view('admin.application.index', compact('title'));
    }
}
