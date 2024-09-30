<?php

use App\Http\Controllers\Admin\API\CategoryDatatablesController;
use Illuminate\Support\Facades\Route;

Route::controller(CategoryDatatablesController::class)->group(function(){
    Route::get('/api/categories', 'index')->name('api.categories');
});
