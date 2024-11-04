<?php

use App\Http\Controllers\Admin\AgendaController;
use App\Http\Controllers\Admin\ApplicationController;
use App\Http\Controllers\Admin\ArchiveController;
use App\Http\Controllers\Admin\ChangePasswordController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\InformationController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\OrganizationStructureController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SearchResultController;
use App\Http\Controllers\Admin\StorageController;
use App\Http\Controllers\Admin\VisiMisionController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;


Route::controller(AuthController::class)->middleware(['guest', 'web'])->group(function () {
    Route::get('/login', 'loginPage')->name('show.login');
    Route::post('/login-handler', 'loginHandler')->name('login.handler');
    Route::get('/lupa-password', 'forgotPasswordPage')->name('show.forgotPassword');
    Route::post('/perbarui-password', 'changePassword')->name('password.changePassword');

    Route::middleware('checkUser')->group(function () {
        Route::get('/register', 'registerPage')->name('show.register');
        Route::post('register-handler', 'registerHandler')->name('register.handler');
    });
});

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logoutHandler'])->name('logout');

    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'dashboardPage')->name('show.dashboardAdmin');
    });

    Route::controller(InformationController::class)->group(function () {
        Route::prefix('informasi')->group(function () {
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

    Route::controller(AgendaController::class)->group(function () {
        Route::prefix('agenda-kegiatan')->group(function () {
            Route::get('/', 'activityAgendaPage')->name('show.activityAgenda');
            Route::get('/api', 'activityAgendaAPI')->name('api.activityAgendaAPI');
            Route::get('/tambah', 'addActivityAgendaPage')->name('show.addActivityAgenda');
            Route::get('/{id}/edit', 'editActivityAgendaPage')->name('show.editActivityAgenda');
            Route::get('/{year}/{month}/detail', 'detailActivityAgendaPage')->name('show.detailActivityAgenda');
            Route::get('/export/{year}/{month}', 'exportAgenda')->name('export.agenda');
        });
    });

    Route::controller(ArchiveController::class)->group(function () {
        Route::prefix('arsip-kegiatan')->group(function () {
            Route::get('/', 'activityArchivePage')->name('show.activityArchive');
            Route::get('/tambah', 'addActivityArchivePage')->name('show.addActivityArchive');
        });
    });

    Route::controller(MemberController::class)->group(function () {
        Route::prefix('anggota-umkm')->group(function () {
            Route::get('/', 'memberPage')->name('show.memberUMKM');
            Route::get('/{id}/edit', 'editMemberPage')->name('show.editMemberUMKM');
            Route::get('/{id}/detail', 'detailMemberPage')->name('show.detailMemberUMKM');
        });
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

    Route::controller(StorageController::class)->group(function () {
        Route::get('/penyimpanan', 'storagePage')->name('show.storage');
        Route::get('/penyimpanan/{fileType}', 'storageImagesPage')->name('show.images');
        Route::get('/penyimpanan/arsip/zip-arsip', 'storageArchivesPage')->name('show.archives');
    });

    Route::controller(ApplicationController::class)->group(function () {
        Route::get('/pengaturan-aplikasi', 'applicationPage')->name('show.application');
    });
});

Route::controller(SiteController::class)->group(function () {
    Route::get('/', 'berandaPage')->name('site.beranda');
    Route::get('/visi-dan-misi', 'visiMisiPage')->name('site.visiMisi');

    Route::prefix('agenda')->group(function () {
        Route::get('/agenda-kegiatan', 'activityAgendaPage')->name('site.agendaKegiatan');
        Route::get('/arsip-kegiatan', 'activityArchivePage')->name('site.arsipKegiatan');
        Route::get('/arsip-kegiatan/{id}/detail', 'detailArchivePage')->name('site.detailArsipKegiatan');
    });

    Route::get('/struktur-organisasi', 'organizationStructurePage')->name('site.strukturOrganisasi');
    Route::get('/informasi', 'informationPage')->name('site.informasi');
    Route::get('/informasi/{id}/baca', 'readInformationPage')->name('site.bacaInformasi');

    Route::prefix('mitra-komunitas')->group(function () {
        Route::get('/anggota-umkm', 'memberUMKMPage')->name('site.anggotaUMKM');
        Route::get('/anggota-umkm/{id}/detail', 'detailMemberUMKMPage')->name('site.detailAnggotaUMKM');

        Route::get('/bidang-usaha', 'businessFieldPage')->name('site.businessField');
        Route::get('/bidang-usaha/{id}/detail', 'detailBusinessFieldPage')->name('site.detailBusinessField');
    });
});

require __DIR__ . '/datatables.php';
require __DIR__ . '/backend.php';
