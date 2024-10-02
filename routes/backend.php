<?php

use App\Http\Controllers\Admin\Backend\ManageApplicationController;
use Illuminate\Support\Facades\Route;

Route::controller(ManageApplicationController::class)->group(function(){
    Route::put('/update-info-aplikasi', 'updateAppInfo')->name('update.application');
});

