<?php

use App\Http\Controllers\Static\HelpCenterController;
use App\Http\Controllers\Static\SeenCookiePolicyController;
use App\Http\Livewire\Customer\App\AccountSettings;
use App\Http\Livewire\Customer\App\Dashboard;
use App\Http\Livewire\Customer\App\History;
use App\Http\Livewire\Customer\App\InvestmentApprove;
use App\Http\Livewire\Customer\App\InvestmentCreate;
use App\Http\Livewire\Customer\App\Investments;
use App\Http\Livewire\Customer\App\Payouts\Index;
use App\Http\Livewire\Customer\App\Profile;
use Illuminate\Support\Facades\Route;

Route::middleware(['seenCookiePolicyAlert'])->group(function () {
    Route::get('/', function () {
        return view('pages.static.home');
    })->name('home');

    Route::get('/about', function () {
        return view('pages.static.about');
    })->name('about');

    Route::get('/investment', function () {
        return view('pages.static.investments');
    })->name('investment.plans');

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

Route::middleware(['auth', 'customer', 'verified'])
    ->group(function () {
        Route::get('/dashboard', Dashboard::class)->name('dashboard');

        Route::name('investments.')->prefix('investments')->group(function () {
            Route::get('/', Investments::class)->name('index');

            Route::get('/create', InvestmentCreate::class)->name('create');

            Route::get('/{payment}/approve', InvestmentApprove::class)->name('approve');
        });

        Route::get('/payouts', Index::class)->name('payouts');

        Route::get('/history', History::class)->name('history');

        Route::get('/profile', Profile::class)->name('profile');

        Route::get('/account-settings', AccountSettings::class)->name('account-settings');
    });

require __DIR__ . '/auth.php';
