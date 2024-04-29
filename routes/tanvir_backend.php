<?php
use App\Http\Controllers\Backend\FAQController;
use App\Http\Controllers\Backend\HappyUserController;
use App\Http\Controllers\Backend\HomePage\HomePageSettingController;
use App\Http\Controllers\Backend\HomePage\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ProductPromotionsController;
use App\Http\Controllers\Backend\CarInventory\CarAmenitiesController;
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
    Route::get('/happyuser', 'index')->name('happyuser.index');
    Route::get('/happyuser/create', 'create')->name('happyuser.create');
    Route::post('/happyuser/store', 'store')->name('happyuser.store');
    Route::get('/happyuser/edit/{id}', 'edit')->name('happyuser.edit');
    Route::put('/happyuser/update/{id}', 'update')->name('happyuser.update');
    Route::get('/happyuser/status/{id}', 'status')->name('happyuser.status');
    Route::delete('/happyuser/destroy/{id}', 'destroy')->name('happyuser.destroy');
});

Route::controller(CategoryController::class)->prefix('productcategory')->name('productcategory.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/store', 'store')->name('store');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::get('/status/{id}', 'status')->name('status');
    Route::delete('/destroy/{id}', 'destroy')->name('destroy');
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

//Home Page settings Route
Route::controller(HomePageSettingController::class)->prefix('home-page-setting')->name('homesetting.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/update', 'update')->name('update');
    Route::get('/delete/{id}', 'destroy')->name('delete');

});

//car Inventory settings Start
//Car ammenities
Route::controller(CarAmenitiesController::class)->prefix('car-amenities')->name('car-amenities.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('store', 'store')->name('store');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::get('/status/{id}', 'status')->name('status');
    Route::delete('/destroy/{id}', 'destroy')->name('destroy');
});