<?php

namespace App\Providers;

use App\View\Composers\ProfileComposer;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

class ViewServiceProvider extends ServiceProvider
{
  /**
   * Register any application services.
   *
   * @return void
   */
  public function register()
  {
    //
  }

  /**
   * Bootstrap any application services.
   *
   * @return void
   */
  public function boot()
  {
    view()->composer(['layouts.admin.app'], function (View $view) {
      $title = config('page-titles.' . Route::currentRouteName(), 'Kari');

      return $view->with('title', $title);
    });

    view()->composer(['layouts.app'], function (View $view) {
      $title = config('page-titles.customers.' . Route::currentRouteName(), 'Kari');

      return $view->with('title', $title);
    });

    view()->composer(['layouts.guest'], function (View $view) {
      $title = config('page-titles.guests.' . Route::currentRouteName(), 'Kari');

      return $view->with('title', $title);
    });
  }
}
