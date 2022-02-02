<?php

use App\Http\Controllers\Static\HelpCenterController;
use App\Http\Controllers\Static\SeenCookiePolicyController;
use App\Http\Livewire\Customer\App\AccountSettings;
use App\Http\Livewire\Customer\App\History;
use App\Http\Livewire\Customer\App\Investments;
use App\Http\Livewire\Customer\App\Payments;
use App\Http\Livewire\Customer\App\Payouts;
use App\Http\Livewire\Customer\App\Profile;
use App\Http\Livewire\Customer\App\Subscriptions;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth', 'customer'])
    ->group(function () {
        Route::get('/dashboard', Investments::class)->name('dashboard');

        Route::get('/subscriptions', Subscriptions::class)->name('subscriptions');
        
        Route::get('/payments', Payments::class)->name('payments');
        
        Route::get('/payouts', Payouts::class)->name('payouts');
        
        Route::get('/history', History::class)->name('history');
        
        Route::get('/profile', Profile::class)->name('profile');
        
        Route::get('/account-settings', AccountSettings::class)->name('account-settings');
    });

require __DIR__ . '/auth.php';
