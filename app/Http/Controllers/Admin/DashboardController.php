<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboardPage()
    {
        $title = 'Dashboard Admin';
        
        return view('admin.dashboard', compact('title'));
    }
}
