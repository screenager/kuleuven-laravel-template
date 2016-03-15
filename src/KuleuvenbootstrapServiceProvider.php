<?php

namespace PPWDict\KULeuvenBootstrap;

use Illuminate\Support\ServiceProvider;

class KuleuvenbootstrapServiceProvider extends ServiceProvider
{
  /**
   * Bootstrap the application services.
   *
   * @return void
   */
  public function boot()
  {
    $this->publishes([
      __DIR__.'/.bowerrc' => base_path('.bowerrc'),
      __DIR__.'/gulpfile.js' => base_path('gulpfile.js'),
      __DIR__.'/views' => base_path('resources/views/kuleuven_bootstrap'),
      __DIR__.'/stijl_2014' => base_path('resources/assets/kuleuven_bootstrap'),
    ], 'kuleuven_bootstrap');

    // Method Tutorial 2
    /*
    $this->loadViewsFrom(__DIR__.'/views', 'kuleuven_bootstrap');
    */

    // Method Tutorial 2
    if (is_dir(base_path() . '/resources/views/kuleuven_bootstrap')) {
      // The package views have been published - use those views.
      $this->loadViewsFrom(base_path() . '/resources/views/kuleuven_bootstrap', 'kuleuven_bootstrap');
    } else {
      // The package views have not been published. Use the defaults.
      $this->loadViewsFrom(__DIR___ . '/views', 'kuleuven_bootstrap');
    }
  }

  /**
   * Register the application services.
   *
   * @return void
   */
  public function register()
  {
    //
  }
}
