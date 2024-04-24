<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DynamicpageController;
use App\Http\Controllers\Backend\SocialmediaController;
use App\Http\Controllers\Backend\SystemSettingController;

/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
|
| Here is where you can register backend routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::controller(SystemSettingController::class)->group(function () {
    Route::get('/system-setting', 'index')->name('system.setting');
    Route::post('/system-setting', 'update')->name('system.update');
    Route::get('/system/mail', 'mailSetting')->name('mailsetting');
    Route::post('/system/mail', 'mailSettingUpdate')->name('mail.setting.update');
    Route::get( '/system/profile', 'profileindex')->name( 'profilesetting' );
});

Route::controller(SocialmediaController::class)->group(function(){
    Route::get('/system/social','index')->name('socialmedia');
    Route::post('/system/social', 'update')->name('socialmedia.update');
    Route::delete('/system/social/{id}', 'destroy')->name('socialmedia.delete');
});

Route::controller(DynamicpageController::class)->group(function(){
    Route::get( '/dynamic-page', 'index')->name( 'dynamic_page' );
    Route::get( '/dynamic-page/create', 'dynamicPageCreate')->name( 'dynamic_page.create' );
    Route::post( '/dynamic-page/create', 'dynamicPageStore')->name( 'dynamic_page.store' );
    Route::get( '/dynamic-page/update/{id}', 'dynamicPageEdit')->name( 'dynamic_page.edit' );
    Route::post( '/dynamic-page/update/{id}', 'dynamicPageUpdate')->name( 'dynamic_page.update' );
    Route::delete( '/dynamic-page/delete/{id}', 'dynamicPageDelete')->name( 'dynamic_page.delete' );
    Route::get( '/dynamic-page/status/{id}',  'status')->name( 'dynamic_page.status' );
});