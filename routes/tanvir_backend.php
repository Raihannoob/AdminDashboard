<?php

use App\Http\Controllers\Backend\ProductPromotionsController;
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


//route for ProductPromotionsController
Route::controller(ProductPromotionsController::class)->prefix('product-promotions')->name('product.promotion.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::delete('/destroy/{id}', 'destroy')->name('destroy');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::post('/update', 'update')->name('update');
    Route::get('/status/{id}', 'status')->name('status');
});