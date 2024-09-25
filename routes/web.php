<?php

use App\Http\Controllers\Admin\ChangePasswordController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'loginPage')->name('show.login');
    Route::get('/logout', 'logout')->name('logout');
});

Route::prefix('admin')->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'dashboardPage')->name('show.dashboardAdmin');
    });

    Route::controller(ProfileController::class)->group(function(){
        Route::get('/profile-saya', 'profilePage')->name('show.profile');
    });

    Route::controller(ChangePasswordController::class)->group(function(){
        Route::get('/ganti-password', 'chPasswordPage')->name('show.chPassword');
    });
});
