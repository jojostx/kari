<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
  return 'Routing to subdomain [home]';
})->name('admin.home');

Route::get('/dashboard', function () {
  return 'Routing to subdomain [dashboard]';
})->name('admin.dashboard');