Laravel package providing ready to use template files to mimic 
the [2016 KU Leuven web layout](https://stijl.kuleuven.be/2016/release/latest/howto_devs.html).

This package should be considered as a boilerplate. It is intended to be installed and configured just once per project.
Afterwards, updates will not be reflected automatically to your template files.

# Features
* [Gulp](http://gulpjs.com) rules 
  * to fetch the latest version of templates and other resources files from ICTS
  * download all necessarily resources to your public directory, to make your app independant from the outside world
* Master layout file that loads the necessary concatenated and compressed resource files
* Possiblity to apply [TinyMCE](https://www.tinymce.com) and [Select2](https://select2.github.io/) to form elements. Compatible with Bootstrap 4
* Some usability and accessibility improvements (print css, [AreYouSure](https://github.com/codedance/jquery.AreYouSure), opening external links in new window, autofocus on first form element)
* Security features such as [CSP 2](https://en.wikipedia.org/wiki/Content_Security_Policy) support
* Possiblity to display the following user interface elements, dynamically built and compatible with the Bootstrap 4 and Laravel system:
  * Displaying a dynamic menu
  * Breadcrumbs
  * Language switcher

# Prerequisites
* A local machine supporting unix commands
* A freshly installed [Laravel 5.3](http://www.laravel.com)
* [Composer](http://getcomposer.org) command installed
* [Gulp](http://gulpjs.com) command installed
* [Bower](http://bower.io) command installed
* [Compass](http://compass-style.org/) command installed

# Installation in Laravel 5.3

Install the package and publish the files to your resources
``` bash
composer require screenager/kuleuven-laravel-template;
php artisan vendor:publish --provider="Screenager\KULeuvenBoilerplate\KULeuvenBoilerplateServiceProvider" --force;
```

Add following line to the classmap in your root composer.json file
```
"app/Helpers"
```
..followed by running "composer dump-autoload". Indeed, this package should better ship with a laravel facade, but we're working on it!

Add the following sevice provider to your app.php :
```
Screenager\KULeuvenBoilerplate\KULeuvenBoilerplateServiceProvider::class,
```

Install the vendors and compile the media files
``` bash
npm install;
bower install;
gulp;
```

If "npm install" doesn't work, try "sudo npm install".

Finally, add following lines to .env and fill in the correct values
```
APP_URL=http://www.myapp.com
APP_NAME="My app"
SUB_LAYOUT=default # options : default, intranet, hosted-by, kulak, landingpage

GOOGLE_ANALYTICS_ENABLED=false
GOOGLE_ANALYTICS_TRACKING_ID=
```

You can now go extending the published layout to your needs!

### Optional Laravel packages
The template is optimized to work together with following Laravel vendors.
All are entirely optional.

#### laravel-menu
[laravel-menu](https://github.com/lavary/laravel-menu) is a powerful package to build and display a menu structure.

#### laravel-breadcrumbs
[laravel-breadcrumbs](https://github.com/davejamesmiller/laravel-breadcrumbs) is not maintained any longer, but can still be used as a tool to dynamically build a breadcrumb structure.

To support the KU Leuven layout, after  installation, change the 'view' parameter of the config/breadcrumbs.php file to

```
'view' => 'layouts.kul_2016.partials.breadcrumbs.bootstrap4',
```

#### stevenmaguire/laravel-middleware-csp
[stevenmaguire/laravel-middleware-csp](https://github.com/stevenmaguire/laravel-middleware-csp) allows you to serve a policy file (CSP) to browsers telling them which frontend resources are safe to be loaded on your webpage.

#### mcamara/laravel-localization
[mcamara/laravel-localization](https://github.com/mcamara/laravel-localization) is a powerful extension for the supporting multiple languages in Laravel.

#### laravelcollective/html
[Laravel Collective](https://github.com/laravelcollective/html) provides an easier way to build forms.

#### mews/purifier
[Purifier](https://github.com/mewebstudio/Purifier) comes with a method "clean" to selectively filter HTML from a string.


## Applying updates
As this package serves as a boilerplate, fetching updates won't have effect to your layout,
because the only way to alter the resources is to republish these package files which might probably overwrite your customizations you made for your app.

Running "gulp" again however, will fetch the latest HTML and CSS of the templates from ICTS. 
This is intended, as the ICTS template files are still in development. 
Also, this way the university related menu items in the header and footer of the layout are brought to their latest version in accordance with the other KU Leuven websites.

You might want to split the gulp command into a command to update your CSS/JS, and one to fetch the latest ICTS resources, but this is entirely up to you.