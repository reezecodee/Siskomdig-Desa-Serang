<?php

use App\Http\Controllers\Admin\Backend\ManageApplicationController;
use App\Http\Controllers\Admin\Backend\ManageCategoryController;
use Illuminate\Support\Facades\Route;

Route::controller(ManageApplicationController::class)->group(function(){
    Route::put('/update-info-aplikasi', 'updateAppInfo')->name('update.application');
});

Route::controller(ManageCategoryController::class)->group(function(){
    Route::post('/add-kategori-baru', 'addCategory')->name('store.category');
    Route::put('/update-kategori/{id}', 'editCategory')->name('update.category');
    Route::delete('/delete-kategori/{id}', 'deleteCategory')->name('destroy.category');
});

