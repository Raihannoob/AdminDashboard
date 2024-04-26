<?php

use App\Http\Controllers\Frontend\HomePage\HomePageController;
use App\Http\Controllers\Frontend\listingPage\CarListingPageController;
use App\Http\Controllers\Frontend\AboutUsPage\AboutUsPageController;
use App\Http\Controllers\Frontend\FaqPage\FaqPageController;
use App\Http\Controllers\Frontend\ViewDetailPage\ViewDetailPageController;
use App\Http\Controllers\Frontend\RentHistoryPage\RentHistoryPageController;
use App\Http\Controllers\Frontend\UserProfilePage\UserProfilePageController;
use App\Http\Controllers\Frontend\EditProfilePage\EditProfilePageController;
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

Route::controller(CarListingPageController::class)->name('car-listing.')->group(function () {
    Route::get('/car-listing', 'index')->name('index');
});

Route::controller(AboutUsPageController::class)->name('about-us.')->group(function () {
    Route::get('/about-us', 'index')->name('index');
});

Route::controller(FaqPageController::class)->name('faq-page.')->group(function () {
    Route::get('/faq-page', 'index')->name('index');
});

Route::controller(ViewDetailPageController::class)->name('view-details.')->group(function () {
    Route::get('/view-detail', 'index')->name('index');
});

Route::controller(RentHistoryPageController::class)->name('rent-history.')->group(function () {
    Route::get('/rent-history', 'index')->name('index');
});

Route::controller(UserProfilePageController::class)->name('user-profile.')->group(function () {
    Route::get('/user-profile', 'index')->name('index');
});


Route::controller(EditProfilePageController::class)->name('edit-profile.')->group(function () {
    Route::get('/edit-profile', 'index')->name('index');
});