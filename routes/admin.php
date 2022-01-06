<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])
  ->name('admin.')
  ->group(function () {
    Route::withoutMiddleware(['auth'])->group(function () {
      Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
    });

    Route::get('/dashboard', [DashboardController::class, '__invoke'])->name('dashboard');

    Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
  });
