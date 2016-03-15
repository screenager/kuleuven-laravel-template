# For Laravel 4

Not supported yet


# For Laravel 5

## Install

``` bash
composer require ppwdict/kuleuven_bootstrap
php artisan vendor:publish --tag=kuleuven_bootstrap
```

### Settings
..

On production:
``` bash
php artisan config:cache
```

### Gulp
After the installation, a gulpfile.js will be placed in your root directory.
Before running "gulp" to copy compile the resources to the public directory, 
make sure the vendors specified in this gulpfile are present. 

We advice to use Bower for fetching these vendors. 
A .bowerrc is already provided so the vendors will be downloaded in the correct directory

### Laravel-menu
The template is optimized to work together with [laravel-menu](https://github.com/lavary/laravel-menu).

For the menu in the navigation bar, you can rely on the kul2014.js script that injects the code scraped from the ppw.kuleuven.be domain.
Notice that this will not work when running the application on a different environment, such as your local machine.

## Updates 

``` bash
composer update ppwdict/kuleuven_bootstrap
php artisan vendor:publish --tag=kuleuven_bootstrap
```

