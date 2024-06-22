<?php

use App\Http\Controllers\PublicationController;
use App\Http\Controllers\SiteController;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Route;

/**
 * Route site gabon
 */

Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/publications',[PublicationController::class,'index'])->name('publications');
Route::get('/publication-details/{slug}', [PublicationController::class,'details'])->name("publication-details");

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});