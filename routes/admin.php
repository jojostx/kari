<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Livewire\Admin\App\Dashboard;
use App\Http\Livewire\Admin\App\Static\Faqs\Create;
use App\Http\Livewire\Admin\App\Static\Faqs\Edit;
use App\Http\Livewire\Admin\App\Static\Faqs\Index;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'admin'])
  ->name('admin.')
  ->group(function () {

    Route::redirect('/', '/login')->middleware(['guest'])->withoutMiddleware(['auth', 'admin'])->name('home');
    
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])->middleware(['guest'])->withoutMiddleware(['auth', 'admin'])->name('login');

    Route::get('/dashboard', Dashboard::class)->name('dashboard');

    Route::name('static.')->group(function () {
      Route::name('faqs.')->group(function () {
        Route::get('/faqs', Index::class)->name('index');

        Route::get('/faqs/create', Create::class)->name('create');
        
        Route::get('/faqs/{faq}/edit', Edit::class)->name('edit');
      });
    });

    Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
  });
