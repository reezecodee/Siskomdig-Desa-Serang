<?php

use App\Http\Controllers\Admin\Backend\ManageAdminController;
use App\Http\Controllers\Admin\Backend\ManageAgendaController;
use App\Http\Controllers\Admin\Backend\ManageApplicationController;
use App\Http\Controllers\Admin\Backend\ManageArchiveController;
use App\Http\Controllers\Admin\Backend\ManageBussinessFieldController;
use App\Http\Controllers\Admin\Backend\ManageInformationController;
use App\Http\Controllers\Admin\Backend\ManageMemberController;
use App\Http\Controllers\Admin\Backend\ManageOrganizationController;
use App\Http\Controllers\Admin\Backend\ManagePasswordController;
use App\Http\Controllers\Admin\Backend\ManagePolicyController;
use App\Http\Controllers\Admin\Backend\ManageProfileController;
use App\Http\Controllers\Admin\Backend\ManageUserFeedbackController;
use App\Http\Controllers\Admin\Backend\ManageVisiMisionController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::controller(ManageApplicationController::class)->group(function () {
        Route::put('/update-info-aplikasi', 'updateAppInfo')->name('update.application');
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
        Route::put('/update-status/anggota/{id}', 'editStatus')->name('update.memberStatus');
    });

    Route::controller(ManageBussinessFieldController::class)->group(function () {
        Route::post('/add-bidang-usaha', 'addBusinessField')->name('store.businessField');
        Route::put('/update-bidang-usaha/{id}', 'editBusinessField')->name('update.businessField');
        Route::delete('/delete-business-field/{id}', 'deleteBusinessField')->name('destroy.businessField');
    });

    Route::controller(ManageUserFeedbackController::class)->group(function () {
        Route::post('/add-user-feedback', 'addUserFeedback')->name('store.userFeedback');
        Route::delete('/delete-user-feedback/{id}', 'deleteUserFeedback')->name('destroy.userFeedback');
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

    Route::controller(ManagePasswordController::class)->group(function () {
        Route::post('/change-password', 'changePassword')->name('change.password');
    });

    Route::controller(ManagePolicyController::class)->group(function () {
        Route::put('/add-policy', 'configPolicy')->name('config.policy');
    });
});
