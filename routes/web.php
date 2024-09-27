<?php

use App\Http\Controllers\Admin\ChangePasswordController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SearchResultController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;


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

    Route::controller(SearchResultController::class)->group(function(){
        Route::get('/hasil-pencarian', 'searchResultPage')->name('show.searchResult');
    });
});

Route::controller(SiteController::class)->group(function(){
    Route::get('/', 'berandaPage')->name('site.beranda');
    Route::get('/visi-dan-misi', 'visiMisiPage')->name('site.visiMisi');
    Route::prefix('profile-komunitas')->group(function(){
        Route::get('/struktur-organisasi', 'organizationStructurePage')->name('site.strukturOrganisasi');
        Route::get('/agenda-kegiatan', 'activityAgendaPage')->name('site.agendaKegiatan');
        Route::get('/arsip-kegiatan', 'activityArchivePage')->name('site.arsipKegiatan');
        Route::get('/informasi', 'informationPage')->name('site.informasi');
    });
    Route::prefix('mitra-komunitas')->group(function(){
        Route::get('/anggota-umkm', 'memberUMKM')->name('site.anggotaUMKM');
        Route::get('/produk-umkm', 'productUMKM')->name('site.produkUMKM');
    });
});
