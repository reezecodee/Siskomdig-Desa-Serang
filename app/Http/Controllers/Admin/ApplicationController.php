<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function applicationPage()
    {
        $title = 'Pengaturan Aplikasi';
        $data = Application::latest()->first();

        if (!$data) {
            $data = new Application();
            $data->favicon = null;
        }

        return view('admin.application.index', compact('title', 'data'));
    }
}
