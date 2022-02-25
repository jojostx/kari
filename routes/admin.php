<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Livewire\Admin\App\Dashboard;
use App\Http\Livewire\Admin\App\Investment\Customers\Index as CustomersIndex;
use App\Http\Livewire\Admin\App\Investment\Customers\View;
use App\Http\Livewire\Admin\App\Investment\Payments\Index as PaymentsIndex;
use App\Http\Livewire\Admin\App\Investment\Payouts\Index as PayoutsIndex;
use App\Http\Livewire\Admin\App\Investment\Plans\Edit as PlansEdit;
use App\Http\Livewire\Admin\App\Investment\Plans\Index as PlansIndex;
use App\Http\Livewire\Admin\App\Investment\Subscriptions\Index as SubscriptionsIndex;
use App\Http\Livewire\Admin\App\Investment\Subscriptions\View as SubscriptionsView;
use App\Http\Livewire\Admin\App\Static\Faqs\Create;
use App\Http\Livewire\Admin\App\Static\Faqs\Edit;
use App\Http\Livewire\Admin\App\Static\Faqs\Index;
use App\Http\Livewire\Admin\App\Static\NewsFeeds\Feeds\Create as FeedsCreate;
use App\Http\Livewire\Admin\App\Static\NewsFeeds\Feeds\Edit as FeedsEdit;
use App\Http\Livewire\Admin\App\Static\NewsFeeds\Feeds\Index as FeedsIndex;
use App\Http\Livewire\Admin\App\Static\NewsFeeds\Subscribers\Index as SubscribersIndex;
use App\Http\Livewire\Admin\App\Static\NewsFeeds\Subscribers\View as SubscribersView;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'admin'])
  ->name('admin.')
  ->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');

    Route::name('investment.')->group(function () {
      Route::name('plans.')->prefix('plans')->group(function () {
        Route::get('/', PlansIndex::class)->name('index');

        Route::get('/{plan}/edit', PlansEdit::class)->name('edit');
      });

      Route::name('customers.')->prefix('customers')->group(function () {
        Route::get('/', CustomersIndex::class)->name('index');

        Route::get('/{customer}/edit', Edit::class)->name('edit');

        Route::get('/{customer}/view', View::class)->name('view');
      });

      Route::name('subscriptions.')->prefix('subscriptions')->group(function () {
        Route::get('/', SubscriptionsIndex::class)->name('index');
       
        Route::get('/{subscription}/view', SubscriptionsView::class)->name('view');
      });

      Route::name('payments.')->prefix('payments')->group(function () {
        Route::get('/', PaymentsIndex::class)->name('index');
      });

      Route::name('payouts.')->prefix('payouts')->group(function () {
        Route::get('/', PayoutsIndex::class)->name('index');
      });
    });

    Route::name('static.')->group(function () {
      Route::name('faqs.')->prefix('faqs')->group(function () {
        Route::get('/', Index::class)->name('index');

        Route::get('/create', Create::class)->name('create');

        Route::get('/{faq}/edit', Edit::class)->name('edit');
      });

      Route::name('newsfeeds.')->prefix('newsfeeds')->group(function () {
        Route::name('feeds.')->prefix('feeds')->group(function () {
          Route::get('/', FeedsIndex::class)->name('index');

          Route::get('/create', FeedsCreate::class)->name('create');

          Route::get('/{feed}/edit', FeedsEdit::class)->name('edit');
        });

        Route::name('subscribers.')->prefix('subscribers')->group(function () {
          Route::get('/', SubscribersIndex::class)->name('index');

          Route::get('/{subscriber}/view', SubscribersView::class)->name('view');
        });
      });

      Route::name('contact-inbox.')->prefix('contact-inbox')->group(function () {
        Route::name('messages.')->prefix('messages')->group(function () {
          Route::get('/', FeedsIndex::class)->name('index');

          Route::get('/{message}/view', Edit::class)->name('view');
        });

        Route::name('replies.')->prefix('replies')->group(function () {
          Route::get('/', FeedsIndex::class)->name('index');

          Route::get('/{reply}/create', Index::class)->name('create');

          Route::get('/{reply}/edit', Index::class)->name('edit');
        });
      });
    });

    Route::middleware(['guest'])->withoutMiddleware(['auth', 'admin'])->group(function () {
      Route::redirect('/', '/login')->name('home');

      Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
    });

    Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
  });
