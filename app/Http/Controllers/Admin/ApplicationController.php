<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Policy;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function applicationPage()
    {
        $title = 'Pengaturan Aplikasi';
        $data = Application::latest()->first();
        $policy = Policy::latest()->first();

        if (!$data) {
            $data = new Application();
            $data->favicon = null;
        }

        if (!$policy) {
            $policy = new Application();
        }

        return view('admin.application.index', compact('title', 'data', 'policy'));
    }
}
