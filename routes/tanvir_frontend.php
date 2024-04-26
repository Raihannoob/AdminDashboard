<?php

use App\Http\Controllers\Web\Frontend\HomePage\HomePageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::controller(HomePageController::class)->name('home.')->group(function () {
    Route::get('/', 'index')->name('index');
});