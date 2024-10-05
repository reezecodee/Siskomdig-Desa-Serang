<?php

use App\Http\Controllers\Admin\Backend\ManageAdminController;
use App\Http\Controllers\Admin\Backend\ManageAgendaController;
use App\Http\Controllers\Admin\Backend\ManageApplicationController;
use App\Http\Controllers\Admin\Backend\ManageArchiveController;
use App\Http\Controllers\Admin\Backend\ManageCategoryController;
use App\Http\Controllers\Admin\Backend\ManageInformationController;
use App\Http\Controllers\Admin\Backend\ManageMemberController;
use App\Http\Controllers\Admin\Backend\ManageOrganizationController;
use App\Http\Controllers\Admin\Backend\ManageProductController;
use App\Http\Controllers\Admin\Backend\ManageProfileController;
use App\Http\Controllers\Admin\Backend\ManageVisiMisionController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::controller(ManageApplicationController::class)->group(function () {
        Route::put('/update-info-aplikasi', 'updateAppInfo')->name('update.application');
    });

    Route::controller(ManageCategoryController::class)->group(function () {
        Route::post('/add-kategori-baru', 'addCategory')->name('store.category');
        Route::put('/update-kategori/{id}', 'editCategory')->name('update.category');
        Route::delete('/delete-kategori/{id}', 'deleteCategory')->name('destroy.category');
    });

    Route::controller(ManageVisiMisionController::class)->group(function () {
        Route::put('/update-visi-misi', 'editVisiMision')->name('update.visiMision');
    });

    Route::controller(ManageOrganizationController::class)->group(function () {
        Route::put('/update-struktur-organisasi', 'editOrganization')->name('update.organization');
    });

    Route::controller(ManageAgendaController::class)->group(function () {
        Route::post('add-agenda-baru', 'addAgenda')->name('store.agenda');
        Route::put('/update-agenda/{id}', 'editAgenda')->name('update.agenda');
        Route::delete('/delete-agenda/{id}', 'deleteAgenda')->name('destroy.agenda');
        Route::delete('/delete-grup-agenda/{month}/{year}', 'deleteGroupAgenda')->name('destroy.groupAgenda');
    });

    Route::controller(ManageAdminController::class)->group(function () {
        Route::post('/add-admin-baru', 'addAdmin')->name('store.admin');
        Route::delete('/delete-admin/{id}', 'deleteAdmin')->name('destroy.admin');
    });

    Route::controller(ManageMemberController::class)->group(function () {
        Route::post('/add-anggota-baru', 'addMember')->name('store.member');
        Route::put('/update-anggota/{id}', 'editMember')->name('update.member');
        Route::delete('/delete-anggota/{id}', 'deleteMember')->name('destroy.member');
    });

    Route::controller(ManageProductController::class)->group(function () {
        Route::post('/add-produk', 'addProduct')->name('store.product');
        Route::put('/update-produk/{id}', 'editProduct')->name('update.product');
        Route::delete('/delete-produk/{id}', 'deleteProduct')->name('destroy.product');
    });

    Route::controller(ManageInformationController::class)->group(function () {
        Route::post('/add-informasi', 'addInformation')->name('store.information');
        Route::put('/update-informasi/{id}', 'editInformation')->name('update.information');
        Route::delete('/delete-informasi/{id}', 'deleteInformation')->name('destroy.information');
    });

    Route::controller(ManageArchiveController::class)->group(function () {
        Route::post('/add-arsip', 'addArchive')->name('store.archive');
        ROute::delete('/delete-arsip/{id}', 'deleteArchive')->name('destroy.archive');
    });

    Route::controller(ManageProfileController::class)->group(function () {
        Route::put('/update-profile/{id}', 'editProfile')->name('update.profile');
        Route::delete('/delete-avatar/{id}', 'deleteAvatar')->name('destroy.avatar');
    });
});
