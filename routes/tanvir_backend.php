<?php
use App\Http\Controllers\Backend\FAQController;
use App\Http\Controllers\Backend\HappyUserController;
use App\Http\Controllers\Backend\ProductCategoryController;
use App\Http\Controllers\Backend\ProductController;
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
Route::controller(FAQController::class)->group(function () {
    Route::get('/faq', 'index')->name('faq.index');
    Route::get('/faq/create', 'create')->name('faq.create');
    Route::post('/faq/store', 'store')->name('faq.store');
    Route::get('/faq/edit/{id}', 'edit')->name('faq.edit');
    Route::put('/faq/update/{id}', 'update')->name('faq.update');
    Route::get('/faq/status/{id}', 'status')->name('faq.status');
    Route::delete('/faq/destroy/{id}', 'destroy')->name('faq.destroy');
});

Route::controller(HappyUserController::class)->group(function () {
    Route::get('/happyuser/', 'index')->name('happyuser.index');
    Route::get('/happyuser/create', 'create')->name('happyuser.create');
    Route::post('/happyuser/store', 'store')->name('happyuser.store');
    Route::get('/happyuser/edit/{id}', 'edit')->name('happyuser.edit');
    Route::put('/happyuser/update/{id}', 'update')->name('happyuser.update');
    Route::get('/happyuser/status/{id}', 'status')->name('happyuser.status');
    Route::delete('/happyuser/destroy/{id}', 'destroy')->name('happyuser.destroy');
});

Route::controller(ProductCategoryController::class)->group(function () {
    Route::get('/productcategory/', 'index')->name('productcategory.index');
    Route::get('/productcategory/create', 'create')->name('productcategory.create');
    Route::post('/productcategory/store', 'store')->name('productcategory.store');
    Route::get('/productcategory/edit/{id}', 'edit')->name('productcategory.edit');
    Route::put('/productcategory/update/{id}', 'update')->name('productcategory.update');
    Route::get('/productcategory/status/{id}', 'status')->name('productcategory.status');
    Route::delete('/productcategory/destroy/{id}', 'destroy')->name('productcategory.destroy');
});

Route::controller(ProductController::class)->group(function () {
    Route::get('/product/', 'index')->name('product.index');
    Route::get('/product/create', 'create')->name('product.create');
    Route::post('/product/store', 'store')->name('product.store');
    Route::get('/product/edit/{id}', 'edit')->name('product.edit');
    Route::put('/product/update/{id}', 'update')->name('product.update');
    Route::get('/product/status/{id}', 'status')->name('product.status');
    Route::delete('/product/destroy/{id}', 'destroy')->name('product.destroy');
});