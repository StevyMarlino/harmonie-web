<?php

use App\Http\Controllers\SiteController;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Route;

/**
 * Route site gabon
 */

Route::get('/', [SiteController::class, 'home'])->name('home');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});