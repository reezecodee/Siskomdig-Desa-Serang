<?php

use App\Http\Controllers\Admin\Backend\ManageAdminController;
use App\Http\Controllers\Admin\Backend\ManageAgendaController;
use App\Http\Controllers\Admin\Backend\ManageApplicationController;
use App\Http\Controllers\Admin\Backend\ManageCategoryController;
use App\Http\Controllers\Admin\Backend\ManageOrganizationController;
use App\Http\Controllers\Admin\Backend\ManageVisiMisionController;
use Illuminate\Support\Facades\Route;

Route::controller(ManageApplicationController::class)->group(function(){
    Route::put('/update-info-aplikasi', 'updateAppInfo')->name('update.application');
});

Route::controller(ManageCategoryController::class)->group(function(){
    Route::post('/add-kategori-baru', 'addCategory')->name('store.category');
    Route::put('/update-kategori/{id}', 'editCategory')->name('update.category');
    Route::delete('/delete-kategori/{id}', 'deleteCategory')->name('destroy.category');
});

Route::controller(ManageVisiMisionController::class)->group(function(){
    Route::put('/update-visi-misi', 'editVisiMision')->name('update.visiMision');
});

Route::controller(ManageOrganizationController::class)->group(function(){
    Route::put('/update-struktur-organisasi', 'editOrganization')->name('update.organization');
});

Route::controller(ManageAgendaController::class)->group(function(){
    Route::post('add-agenda-baru', 'addAgenda')->name('store.agenda');
    Route::put('/update-agenda/{id}', 'editAgenda')->name('update.agenda');
    Route::delete('/delete-agenda/{id}', 'deleteAgenda')->name('destroy.agenda');
    Route::delete('/delete-grup-agenda/{month}/{year}', 'deleteGroupAgenda')->name('destroy.groupAgenda');
});

Route::controller(ManageAdminController::class)->group(function(){
    Route::post('/add-admin-baru', 'addAdmin')->name('store.admin');
    Route::delete('/delete-admin/{id}', 'deleteAdmin')->name('destroy.admin');
});
