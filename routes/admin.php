<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
  return 'Routing to subdomain';
})->middleware('guest')->name('register');
