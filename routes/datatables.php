<?php

use App\Http\Controllers\Admin\API\AdminDatatablesController;
use App\Http\Controllers\Admin\API\AgendaDatatablesController;
use App\Http\Controllers\Admin\API\ArchiveDatatablesController;
use App\Http\Controllers\Admin\API\CategoryDatatablesController;
use App\Http\Controllers\Admin\API\InformationDatatablesController;
use App\Http\Controllers\Admin\API\MemberDatatablesController;
use App\Http\Controllers\Admin\API\ProductDatatablesController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::controller(CategoryDatatablesController::class)->group(function () {
        Route::get('/api/categories', 'index')->name('api.categories');
        Route::get('/api/product-categories/{id}', 'products')->name('api.productCategories');
    });

    Route::controller(AgendaDatatablesController::class)->group(function () {
        Route::get('/api/agendas', 'index')->name('api.agendas');
        Route::get('/api/agendas/{year}/{month}', 'schedules')->name('api.schedules');
    });

    Route::controller(ArchiveDatatablesController::class)->group(function () {
        Route::get('/api/archives', 'index')->name('api.archives');
    });

    Route::controller(MemberDatatablesController::class)->group(function () {
        Route::get('/api/members', 'index')->name('api.members');
    });

    Route::controller(ProductDatatablesController::class)->group(function () {
        Route::get('/api/products', 'index')->name('api.products');
    });

    Route::controller(InformationDatatablesController::class)->group(function () {
        Route::get('/api/all-informations', 'index')->name('api.allInformations');
        Route::get('/api/my-informations', 'myInformations')->name('api.myInformations');
    });

    Route::controller(AdminDatatablesController::class)->group(function () {
        Route::get('/api/all-admin', 'index')->name('api.allAdmin');
    });
});
