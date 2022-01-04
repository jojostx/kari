<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
  return redirect()->route('admin.dashboard');
})->name('admin.dashboard');

Route::get('/dashboard', function () {
  return view('pages.admin.dashboard');
})->name('admin.dashboard');

Route::get('/login', function () {
  return view('pages.admin.dashboard');
})->name('admin.login');

Route::get('/dashboard/logout', function (Request $request) {
  Auth::guard('web')->logout();

  $request->session()->invalidate();

  $request->session()->regenerateToken();

  return redirect('/login');
})->middleware('auth')->name('admin.logout');