<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;



// start: ============================================= //
// start: ================== GUEST ==================== //
// start: ============================================= //

include __DIR__ . DIRECTORY_SEPARATOR . 'landing.php';

// Route::middleware(['guest'])->group(function () {
//     include __DIR__ . DIRECTORY_SEPARATOR . 'auth.php';
// });


// end: ============================================= //
// end: ================== GUEST ==================== //
// end: ============================================= //

// start: ============================================= //
// start: ================== Auth ===================== //
// start: ============================================= //

// Route::middleware(['auth'])->group(function () {
//     Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
// });

// end: ============================================= //
// end: ================== Auth ===================== //
// end: ============================================= //

// start: ============================================= //
// start: ================== User ===================== //
// start: ============================================= //

// Route::prefix('workplace')->group(function () {
//     include __DIR__ . DIRECTORY_SEPARATOR . 'workPlace.php';
// });

// end: ============================================= //
// end: ================== User ===================== //
// end: ============================================= //

// start: ============================================= //
// start: ================== Admin ==================== //
// start: ============================================= //

// Route::middleware(['verified', 'role:admin'])->prefix('dashboard')->group(function () {
//     include __DIR__ . DIRECTORY_SEPARATOR . 'dashboard.php';
// });

// end: ============================================= //
// end: ================== Admin ==================== //
// end: ============================================= //


// Route::group([
//     'prefix' => LaravelLocalization::setLocale(),
//     'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
// ], function () {
// });
