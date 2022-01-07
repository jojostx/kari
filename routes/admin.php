<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'admin'])
  ->name('admin.')
  ->group(function () {

    Route::redirect('/', '/login')->middleware(['guest'])->withoutMiddleware(['auth', 'admin'])->name('home');
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])->middleware(['guest'])->withoutMiddleware(['auth', 'admin'])->name('login');

    Route::get('/dashboard', [DashboardController::class, '__invoke'])->name('dashboard');
    Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
  });
