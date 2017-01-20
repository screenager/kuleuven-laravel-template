Laravel package providing ready to use template files to mimic the [2016 KU Leuven web layout](https://stijl.kuleuven.be/2016/release/latest/howto_devs.html).

This package should be considered as a boilerplate. It is intended to be installed and configured just once per project.
Afterwards, updates will not be reflected automatically to your template files.

# For Laravel 5.3
Soon!

# For Laravel 5.2

## Prerequisites
* A local machine supporting unix commands
* A freshly installed Laravel 5.2
* [Composer](http://getcomposer.org)
* [Gulp](http://gulpjs.com)
* [Bower](http://bower.io)
* [Compass](http://compass-style.org/)

## Install

Install the package and publish the files to your resources
``` bash
composer require screenager/kuleuven-laravel-template
php artisan vendor:publish --provider="Screenager\KULeuvenBoilerplate\KULeuvenBoilerplateServiceProvider" --force
```

After installation, install the vendors and compile the media files
``` bash
npm install;
bower install;
gulp;
```

If "npm install" doesn't work, try "sudo npm install".

### Optional Laravel packages
The template is optimized to work together with following Laravel vendors.
All are entirely optional.

#### laravel-menu
[laravel-menu](https://github.com/lavary/laravel-menu).

#### laravel-breadcrumbs
[laravel-breadcrumbs](https://github.com/davejamesmiller/laravel-breadcrumbs).

#### stevenmaguire/laravel-middleware-csp
[stevenmaguire/laravel-middleware-csp](https://github.com/stevenmaguire/laravel-middleware-csp).

#### mcamara/laravel-localization
[mcamara/laravel-localization](https://github.com/mcamara/laravel-localization).