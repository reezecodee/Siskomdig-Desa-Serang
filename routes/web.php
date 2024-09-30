<?php

use App\Http\Controllers\Admin\ActivityController;
use App\Http\Controllers\Admin\ApplicationController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ChangePasswordController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\InformationController;
use App\Http\Controllers\Admin\MitraController;
use App\Http\Controllers\Admin\OrganizationStructureController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SearchResultController;
use App\Http\Controllers\Admin\StorageController;
use App\Http\Controllers\Admin\VisiMisionController;
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

    Route::controller(InformationController::class)->group(function(){
        Route::prefix('informasi')->group(function(){
            Route::get('/semua', 'informationPage')->name('show.allInformation');
            Route::get('/milik-saya', 'myInformationPage')->name('show.myInformation');
            Route::get('/{id}/edit', 'editMyInformationPage')->name('show.editMyInformation');
        });
    });

    Route::controller(VisiMisionController::class)->group(function () {
        Route::get('/visi-misi', 'visiMisionPage')->name('show.visiMisi');
    });

    Route::controller(OrganizationStructureController::class)->group(function () {
        Route::get('/struktur-organisasi', 'organizationStructurePage')->name('show.organizationStructure');
    });

    Route::controller(ActivityController::class)->group(function () {
        Route::prefix('agenda-kegiatan')->group(function(){
            Route::get('/', 'activityAgendaPage')->name('show.activityAgenda');
            Route::get('/api', 'activityAgendaAPI')->name('api.activityAgendaAPI');
            Route::get('/tambah', 'addActivityAgendaPage')->name('show.addActivityAgenda');
            Route::get('/{id}/edit', 'editActivityAgendaPage')->name('show.editActivityAgenda');
            Route::get('/{year}/{month}/detail', 'detailActivityAgendaPage')->name('show.editActivityAgenda');
        });

        Route::prefix('arsip-kegiatan')->group(function(){
            Route::get('/', 'activityArchivePage')->name('show.activityArchive');
            Route::get('/tambah', 'addActivityArchivePage')->name('show.addActivityArchive');
        });
    });

    Route::controller(MitraController::class)->group(function () {
        Route::prefix('anggota-umkm')->group(function(){
            Route::get('/', 'memberPage')->name('show.memberUMKM');
            Route::get('/{id}/edit', 'editMemberPage')->name('show.editMemberUMKM');
            Route::get('/{id}/detail', 'detailMemberPage')->name('show.detailMemberUMKM');
        });

        Route::prefix('produk-umkm')->group(function(){
            Route::get('/', 'productPage')->name('show.productUMKM');
            Route::get('/{id}/edit', 'editProductPage')->name('show.editProductUMKM');
            Route::get('/{id}/detail', 'detailProductPage')->name('show.detailProductUMKM');
        });
    });

    Route::controller(CategoryController::class)->group(function () {
        Route::get('/kategori-produk', 'categoryPage')->name('show.category');
    });

    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile-saya', 'profilePage')->name('show.profile');
    });

    Route::controller(ChangePasswordController::class)->group(function () {
        Route::get('/ganti-password', 'chPasswordPage')->name('show.chPassword');
    });

    Route::controller(SearchResultController::class)->group(function () {
        Route::get('/hasil-pencarian', 'searchResultPage')->name('show.searchResult');
    });

    Route::controller(StorageController::class)->group(function(){
        Route::get('/penyimpanan', 'storagePage')->name('show.storage');
        Route::get('/penyimpanan/{fileType}', 'storageImagesPage')->name('show.images');
        Route::get('/penyimpanan/arsip/zip-arsip', 'storageArchivesPage')->name('show.archives');
    });

    Route::controller(ApplicationController::class)->group(function(){
        Route::get('/pengaturan-aplikasi', 'applicationPage')->name('show.application');
    });
});

Route::controller(SiteController::class)->group(function () {
    Route::get('/', 'berandaPage')->name('site.beranda');
    Route::get('/visi-dan-misi', 'visiMisiPage')->name('site.visiMisi');
    Route::prefix('profile-komunitas')->group(function () {
        Route::get('/struktur-organisasi', 'organizationStructurePage')->name('site.strukturOrganisasi');
        Route::get('/agenda-kegiatan', 'activityAgendaPage')->name('site.agendaKegiatan');
        Route::get('/arsip-kegiatan', 'activityArchivePage')->name('site.arsipKegiatan');
        Route::get('/informasi', 'informationPage')->name('site.informasi');
    });
    Route::prefix('mitra-komunitas')->group(function () {
        Route::get('/anggota-umkm', 'memberUMKM')->name('site.anggotaUMKM');
        Route::get('/produk-umkm', 'productUMKM')->name('site.produkUMKM');
    });
});

require __DIR__ . '/api.php';
