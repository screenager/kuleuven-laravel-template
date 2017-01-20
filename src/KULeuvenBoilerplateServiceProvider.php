<?php

namespace PPWDict\KULeuvenBoilerplate;

use Illuminate\Support\ServiceProvider;

class KULeuvenBoilerplateServiceProvider extends ServiceProvider
{
  /**
   * Bootstrap the application services.
   *
   * @return void
   */
  public function boot()
  {
    $this->publishes([
      __DIR__.'/.env' => base_path('.env'),
      __DIR__.'/.bowerrc' => base_path('.bowerrc'),
      __DIR__.'/package.json' => base_path('package.json'),
      __DIR__.'/bower.json' => base_path('bower.json'),
      __DIR__.'/gulpfile.js' => base_path('gulpfile.js'),
      __DIR__.'/views/layouts' => base_path('resources/views/layouts'),
      // todo media
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
