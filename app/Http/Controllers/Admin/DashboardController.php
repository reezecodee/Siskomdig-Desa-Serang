<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BusinessField;
use App\Models\Information;
use App\Models\Member;
use App\Models\User;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function dashboardPage()
    {
        $title = 'Dashboard Admin';

        $countMembersSevenDaysAgo = Member::whereBetween('created_at', [Carbon::now()->subDays(7), Carbon::now()])
            ->count();
        $countBusinessFieldSevenDaysAgo = BusinessField::whereBetween('created_at', [Carbon::now()->subDays(7), Carbon::now()])
            ->count();
        $countInformationSevenDaysAgo = Information::whereBetween('created_at', [Carbon::now()->subDays(7), Carbon::now()])
            ->count();

        $countAllMembers = Member::count();
        $countAllBusinesses = BusinessField::count();
        $countAllInformations = Information::count();
        $countAllAdmins = User::count();

        return view('admin.dashboard', compact('title', 'countMembersSevenDaysAgo', 'countBusinessFieldSevenDaysAgo', 'countInformationsSevenDaysAgo', 'countAllMembers', 'countAllBusinesses', 'countAllInformations', 'countAllAdmins'));
    }
}
