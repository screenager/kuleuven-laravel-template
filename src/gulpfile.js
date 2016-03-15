var elixir = require('laravel-elixir');
process.env.DISABLE_NOTIFIER = true;

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    var bowerDir = './resources/assets/vendor/';
    var kulAssetsDir = './resources/assets/kuleuven_bootstrap/';
    var kulPublicImgDir = './public/img/kuleuven_bootstrap/';

    var sassPaths = [
        bowerDir + "bootstrap-sass/assets/stylesheets",
        bowerDir + "font-awesome/scss",
    ];

    elixir(function(mix) {
        mix
          .sass('app.scss', 'public/css', { includePaths: sassPaths })
          .scripts([
              'jquery/dist/jquery.min.js',
              'bootstrap-sass/assets/javascripts/bootstrap.min.js',
              'bootstrap-sortable/Scripts/bootstrap-sortable.js',
              'jquery.maxlength/jquery.plugin.min.js',
              'jquery.maxlength/jquery.maxlength.min.js',
              'summernote/dist/summernote.min.js',
          ], 'public/js/vendor.js', bowerDir)
          .copy('resources/assets/js/app.js', 'public/js/app.js')
          .copy(bowerDir + 'font-awesome/fonts', 'public/fonts')
          .copy(bowerDir + 'summernote/dist/font/summernote.eot', 'public/css/font/summernote.eot')
          .copy(bowerDir + 'summernote/dist/font/summernote.ttf', 'public/css/font/summernote.ttf')
          .copy(bowerDir + 'summernote/dist/font/summernote.woff', 'public/css/font/summernote.woff')
          .styles([
            bowerDir + '/bootstrap-sortable/Contents/bootstrap-sortable.css',
            bowerDir + '/jquery.maxlength/jquery.maxlength.css',
            bowerDir + '/summernote/dist/summernote.css'
          ])

          // for KULeuven Bootstrap package
          .styles([
            kulAssetsDir + '/css/main.css',
            kulAssetsDir + '/css/responsive.css',
          ], 'public/css/kul-vendors.css')
          .styles([
            kulAssetsDir + '/css/IE.css',
            kulAssetsDir + '/css/ieresp.css',
          ], 'public/css/kul-ie.css')
          .sass([
            kulAssetsDir + '/improvements_by_ppw.scss'
          ], 'public/css/kul-improvements-by-ppw.css')
          .copy(kulAssetsDir + 'img', kulPublicImgDir)
          .copy(kulAssetsDir + 'kul2014.js', 'public/js/kul2014.js')


    });

});