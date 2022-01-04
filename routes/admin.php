<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('admin.login');

Route::get('/dashboard', [DashboardController::class, '__invoke'])->name('admin.dashboard');

Route::get('/dashboard/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware('auth')->name('admin.logout');
