<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\HomesController;
use App\Http\Controllers\Admin\FeaturesController;
use App\Http\Controllers\Admin\FavSettingsController;
use App\Http\Controllers\Admin\ClintController;




Route::get('admin-login',[AuthController::class,'login'])->name('admin.login');
Route::post('admin-post-login',[AuthController::class,'postLogin'])->name('admin.postLogin');
Route::get('admin-logout',[AuthController::class,'logout'])->name('admin.logout');


Route::group(['prefix' => 'admin', 'middleware' => ['auth:admin']], function(){
    Route::get('dashboard',[AuthController::class,'getDashboard'])->name('admin.getDashboard');
 
    Route::get('team',[TeamController::class,'index'])->name('team');
    Route::post('team-post',[TeamController::class,'postTeam'])->name('postTeam');
    Route::get('teamlist', [TeamController::class, 'show'])->name('teamList');
    Route::get('delete/{id}', [TeamController::class, 'delete'])->name('delete');
    Route::get('teamedit/{id}', [TeamController::class, 'teamedit'])->name('teamedit');
    Route::post('team-update', [TeamController::class, 'teamUpdate'])->name('teamUpdate');

    Route::get('homes',[HomesController::class,'index'])->name('homes');
    Route::post('homes-post',[HomesController::class,'postHomes'])->name('postHomes');
    Route::get('plist', [HomesController::class, 'show'])->name('show');
    Route::get('hdelete/{id}', [HomesController::class, 'delete'])->name('hdelete');
    Route::get('edit/{id}', [HomesController::class, 'edit'])->name('edit');
    Route::post('pUpdate', [HomesController::class, 'pUpdate'])->name('pUpdate');

    Route::get('features',[FeaturesController::class,'index'])->name('features');
    Route::post('features-post',[FeaturesController::class,'featurespost'])->name('featurespost');
    Route::get('fdelete/{id}', [FeaturesController::class, 'delete'])->name('fdelete');
    Route::get('featureslist', [FeaturesController::class, 'fshow'])->name('fshow');

    Route::get('favsettings',[FavSettingsController::class,'index'])->name('favsettings');
    Route::post('favsettings-post',[FavSettingsController::class,'favsettingspost'])->name('favsettingspost');
    Route::get('favsettingslist', [FavSettingsController::class, 'show'])->name('favshow');
    Route::get('favdelete/{id}', [FavSettingsController::class, 'delete'])->name('favdelete');

    Route::get('clint',[ClintController::class,'index'])->name('clint');
    Route::post('clint-post',[ClintController::class,'clintpost'])->name('clintpost');
    Route::get('clintlist', [ClintController::class, 'show'])->name('cshow');
    Route::get('cdelete/{id}', [ClintController::class, 'delete'])->name('cdelete');
    Route::get('cedit/{id}', [ClintController::class, 'cedit'])->name('cedit');
    Route::post('cUpdate', [ClintController::class, 'cUpdate'])->name('cUpdate');







});
