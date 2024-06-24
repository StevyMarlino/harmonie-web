<?php

use App\Http\Controllers\DemandeController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\WordPresidentController;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Route;

/**
 * Route site gabon
 */

Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/publications',[PublicationController::class,'index'])->name('publications');

Route::get('/demandes',[DemandeController::class,'index'])->name('demandes');
Route::get('/demandes-code-role',[DemandeController::class,'roleAndCode'])->name('code.role');

Route::post('/vos-demandes-demarches',[DemandeController::class,'search'])->name('demandes.demarches');
Route::post('/seach-code-role',[DemandeController::class,'searchLitigeByRoleAndPhone'])->name('seach.code.role');

Route::get('/publication-details/{slug}', [PublicationController::class,'details'])->name("publication-details");

Route::get('/mission',[MissionController::class,'index'])->name('mission');
Route::get('/mot-du-premier-president',[WordPresidentController::class,'index'])->name('mot.pp');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});