<?php

use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\WordPresidentController;

/**
 * Route site gabon
 */

Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/publications',[PublicationController::class,'index'])->name('publications');

Route::get('/demandes',[DemandeController::class,'index'])->name('demandes');
Route::get('/demandes-code-role',[DemandeController::class,'roleAndCode'])->name('code.role');

Route::post('/vos-demandes-demarches',[DemandeController::class,'search'])->name('demandes.demarches');
Route::post('/seach-code-role',[DemandeController::class,'searchLitigeByRoleAndPhone'])->name('seach.code.role');

Route::post('/get-count',[DemandeController::class,'getCount'])->name('get.count');

Route::get('/publication-details/{slug}', [PublicationController::class,'details'])->name("publication-details");

Route::get('/mission',[MissionController::class,'index'])->name('mission');
Route::get('/mot-du-premier-president',[WordPresidentController::class,'index'])->name('mot.pp');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/send',[ContactController::class, 'send'])->name('send');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});