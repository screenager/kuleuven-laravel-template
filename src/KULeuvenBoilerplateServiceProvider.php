<?php

namespace Screenager\KULeuvenBoilerplate;

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
      dirname(__FILE__) .'/.bowerrc' => base_path('.bowerrc'),
      dirname(__FILE__) .'/package.json' => base_path('package.json'),
      dirname(__FILE__) .'/bower.json' => base_path('bower.json'),
      dirname(__FILE__) .'/gulpfile.js' => base_path('gulpfile.js'),
      dirname(__FILE__) .'/views/layouts' => base_path('resources/views/layouts'),
      dirname(__FILE__) .'/views/welcome.blade.php' => base_path('resources/views/welcome.blade.php'),
      dirname(__FILE__) .'/resources/assets/style2016' => base_path('resources/assets/style2016'),
      dirname(__FILE__) .'/resources/assets/app.js' => base_path('resources/assets/app.js'),
      dirname(__FILE__) .'/resources/assets/usability.js' => base_path('resources/assets/usability.js'),
      dirname(__FILE__) .'/resources/assets/app.scss' => base_path('resources/assets/app.scss'),

      dirname(__FILE__) .'/resources/lang/nl/interface.php' => base_path('resources/lang/nl/interface.php'),
      dirname(__FILE__) .'/resources/lang/en/interface.php' => base_path('resources/lang/en/interface.php'),

      dirname(__FILE__) .'/routes/web.php' => base_path('routes/web.php'),
      dirname(__FILE__) .'/routes/breadcrumbs.php' => base_path('routes/breadcrumbs.php'),
      dirname(__FILE__) .'/app/Http/Kernel.php' => base_path('app/Http/Kernel.php'),
      dirname(__FILE__) .'/app/Http/Middleware/MenuMiddleware.php' => base_path('app/Http/MenuMiddleware.php'),
      dirname(__FILE__) .'/config/app.php' => base_path('config/app.php'),
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
      $this->loadViewsFrom(dirname(__FILE__) . '/views', 'kuleuven_bootstrap');
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
