<?php

use App\Http\Controllers\Static\HelpCenterController;
use App\Http\Controllers\Static\SeenCookiePolicyController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['seenCookiePolicyAlert'])->group(function () {
    Route::get('/', function () {
        return view('pages.static.home');
    })->name('home');

    Route::get('/about', function () {
        return view('pages.static.about');
    })->name('about');

    Route::get('/investments', function () {
        return view('pages.static.investments');
    })->name('investments');

    Route::get('/contact', function () {
        return view('pages.static.contact');
    })->name('contact');

    Route::get('/terms-and-conditions', function () {
        return view('pages.static.terms-and-conditions');
    })->name('terms');

    Route::get('/privacy-policy', function () {
        return view('pages.static.privacy-policy');
    })->name('privacy');

    Route::get('/cookie-policy', function () {
        return view('pages.static.cookie-policy');
    })->name('cookie');

    Route::get('/help-center', [HelpCenterController::class, 'index'])->name('help');
});

Route::middleware(['throttle:xhrFormRequest'])->group(function () {
    Route::post('cookie/accept', [SeenCookiePolicyController::class, 'accept'])->name('cookie.accept');
});

Route::get('/dashboard', function () {
    return view('pages.customer.dashboard');
})->middleware(['auth', 'customer'])->name('dashboard');

require __DIR__ . '/auth.php';
