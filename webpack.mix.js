const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .styles([
      'resources/assets/css/bootstrap.min.css',
      'resources/assets/css/main.css',
      'resources/assets/css/responsive.css',
      'resources/assets/css/animate.css',
      'resources/assets/css/prettyPhoto.css',
      'resources/assets/css/price-range.css',
   ], 'public/css/all.css')
   .styles('resources/assets/css/font-awesome.min.css', 'public/css/font-awe.css')
   .styles('resources/assets/css/sb-admin-2.css', 'public/css/admin.css')
   .copy('node_modules/font-awesome/fonts/*', 'public/fonts')
   .scripts([
      'resources/assets/js/jquery.js',
      'resources/assets/js/bootstrap.min.js',
      'resources/assets/js/main.js',
      'resources/assets/js/gmaps.js',
      'resources/assets/js/html5shiv.js',
      'resources/assets/js/jquery.scrollUp.js',
      'resources/assets/js/jquery.prettyPhoto.js',
      'resources/assets/js/contact.js',
      'resources/assets/js/price-range.js',
   ], 'public/js/all.js')
   .scripts([
      'resources/assets/vendor/jquery/jquery.min.js',
      'resources/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
      'resources/assets/vendor/jquery-easing/jquery.easing.min.js',
      'resources/assets/vendor/sb-admin-2.min.js',
      'resources/assets/vendor/chart.js/Chart.min.js',
   ], 'public/vendor/admin.js')
   .version();
