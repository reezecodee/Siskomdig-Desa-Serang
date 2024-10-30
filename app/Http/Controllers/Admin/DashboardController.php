<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\UmkmMember;
use App\Models\UmkmProduct;
use App\Models\User;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function dashboardPage()
    {
        $title = 'Dashboard Admin';

        $countMembersSevenDaysAgo = UmkmMember::whereBetween('created_at', [Carbon::now()->subDays(7), Carbon::now()])
            ->count();
        $countProductsSevenDaysAgo = UmkmProduct::whereBetween('created_at', [Carbon::now()->subDays(7), Carbon::now()])
            ->count();
        $countCategoriesSevenDaysAgo = Category::whereBetween('created_at', [Carbon::now()->subDays(7), Carbon::now()])
            ->count();

        $countAllMembers = UmkmMember::count();
        $countAllProducts = UmkmProduct::count();
        $countAllCategories = Category::count();
        $countAllAdmins = User::count();

        return view('admin.dashboard', compact('title', 'countMembersSevenDaysAgo', 'countProductsSevenDaysAgo', 'countCategoriesSevenDaysAgo', 'countAllMembers', 'countAllProducts', 'countAllCategories', 'countAllAdmins'));
    }
}
