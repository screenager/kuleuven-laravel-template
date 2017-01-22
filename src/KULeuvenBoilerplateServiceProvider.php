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
      dirname(__FILE__) .'/views/layouts' => resource_path('views/layouts'),
      dirname(__FILE__) .'/views/welcome.blade.php' => resource_path('views/welcome.blade.php'),
      dirname(__FILE__) .'/views/about.blade.php' => resource_path('views/about.blade.php'),
      dirname(__FILE__) .'/views/conditions.blade.php' => resource_path('views/conditions.blade.php'),
      dirname(__FILE__) .'/views/terms.blade.php' => resource_path('views/terms.blade.php'),
      dirname(__FILE__) .'/views/contact.blade.php' => resource_path('views/contact.blade.php'),
      dirname(__FILE__) .'/resources/assets/style2016' => resource_path('assets/style2016'),
      dirname(__FILE__) .'/resources/assets/app.js' => resource_path('assets/app.js'),
      dirname(__FILE__) .'/resources/assets/usability.js' => resource_path('assets/usability.js'),
      dirname(__FILE__) .'/resources/assets/app.scss' => resource_path('assets/app.scss'),

      dirname(__FILE__) .'/resources/lang/nl/interface.php' => resource_path('lang/nl/interface.php'),
      dirname(__FILE__) .'/resources/lang/en/interface.php' => resource_path('lang/en/interface.php'),

      dirname(__FILE__) .'/routes/web.php' => base_path('routes/web.php'),
      dirname(__FILE__) .'/routes/breadcrumbs.php' => base_path('routes/breadcrumbs.php'),
      dirname(__FILE__) .'/app/Helpers/LayoutHelper.php' => app_path('Helpers/LayoutHelper.php'),
      dirname(__FILE__) .'/app/Http/Kernel.php' => app_path('Http/Kernel.php'),
      dirname(__FILE__) .'/app/Http/Middleware/MenuMiddleware.php' => app_path('Http/Middleware/MenuMiddleware.php'),
      dirname(__FILE__) .'/config/app.php' => config_path('app.php'),
      dirname(__FILE__) .'/config/breadcrumbs.php' => config_path('breadcrumbs.php'),
    ]);
  }
}
