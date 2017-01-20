process.env.DISABLE_NOTIFIER = true;
const elixir = require('laravel-elixir');
const download = require("gulp-download");
const rename = require("gulp-rename");
const gulp = require('gulp');


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
  var vendorDir = './resources/assets/vendor/';

  // KUL 2016 style
  var latestKulStijlUrl = 'https://stijl.kuleuven.be/2016/release/latest';
  var kulAssets2016Dir = './resources/assets/style2016/';
  var fetchedTemplatesDir = './resources/views/layouts/kul_2016/fetched_with_gulp';

  download(latestKulStijlUrl + '/css/main.css')
    .pipe(gulp.dest(vendorDir + 'kul_latest/css'));

  download(latestKulStijlUrl + '/js/all.min.js')
    .pipe(gulp.dest(vendorDir + 'kul_latest/js'));

  download('https://fonts.googleapis.com/css?family=Material+Icons|Open+Sans:400italic,600italic,700italic,400,700,600|Merriweather:400italic,400,700')
    .pipe(rename('google-for-kul'))
    .pipe(gulp.dest(vendorDir + 'kul_latest/fonts'));

  var layoutsDirs = [
    '', // default one
    '/intranet',
    '/kulak',
    '/hosted-by',
    '/corp',
    '/landingpage',
  ];
  layoutsDirs.forEach(function(layoutDir) {
    download([
      latestKulStijlUrl + '/includes' + layoutDir + '/header.nl.inc',
      latestKulStijlUrl + '/includes' + layoutDir + '/header.en.inc',
      latestKulStijlUrl + '/includes' + layoutDir + '/footer.nl.inc',
      latestKulStijlUrl + '/includes' + layoutDir + '/footer.en.inc',
      latestKulStijlUrl + '/includes' + layoutDir + '/flyout.nl.inc',
      latestKulStijlUrl + '/includes' + layoutDir + '/flyout.en.inc',
    ])
    // convert the name of the .inc files to Laravel Blade files
      .pipe(rename(function (path) {
        path.basename = path.basename.replace('.inc', '')
        path.basename = path.basename.replace('.', '_')
        path.extname = ".blade.php"
      }))
      .pipe(gulp.dest(fetchedTemplatesDir + "/icts" + layoutDir));
  });

  mix.scripts([
    kulAssets2016Dir + 'layout2016.js',
    './resources/assets/app.js',
    './resources/assets/usability.js',
  ], 'public/js/style2016/app.js')

  mix.sass(kulAssets2016Dir + 'layout2016.scss', 'public/css/style2016/app.css')

  mix.styles([
    vendorDir + '/select2/dist/css/select2.min.css',
    vendorDir + '/select2-bootstrap-theme/dist/select2-bootstrap.css',
    // .. place more vendor css dependencies here
  ], 'public/css/style2016/all.css');

  mix.scripts([
    'kul_latest/js/all.min.js',
    'tinymce/tinymce.js',
    'bootstrap-sass/assets/javascripts/bootstrap.min.js',
    'bootstrap/js/tab.js',
    'select2/dist/js/select2.min.js',
    'jquery.are-you-sure/jquery.are-you-sure.js',
    // .. place more vendor scripts dependencies here
  ], 'public/js/style2016/vendors.js', vendorDir)

  mix.copy(vendorDir + 'tinymce/themes/modern', 'public/tinymce/themes/modern')
  mix.copy(vendorDir + 'tinymce/skins/lightgray', 'public/tinymce/skins/lightgray')
  mix.copy(vendorDir + 'tinymce/plugins', 'public/tinymce/plugins')

});