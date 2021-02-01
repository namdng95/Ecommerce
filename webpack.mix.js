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
mix.js('public/assets/js/app.js', 'public/js')
   .sass('public/assets/sass/app.scss', 'public/css')
   .styles([
      'public/assets/css/bootstrap.min.css',
      'public/assets/css/main.css',
      'public/assets/css/responsive.css',
      'public/assets/css/animate.css',
      'public/assets/css/prettyPhoto.css',
      'public/assets/css/price-range.css',
      'public/assets/css/sweetalert.css',
      'public/assets/css/mycss.css',
   ], 'public/css/all.css')
   .styles('public/assets/css/font-awesome.min.css', 'public/css/font-awe.css')
   .styles('public/assets/css/sb-admin-2.css', 'public/css/admin.css')
   .copy('node_modules/font-awesome/fonts/*', 'public/fonts')
   .scripts([
      'public/assets/js/sweetalert.js',
      'public/assets/js/jquery.js',
      'public/assets/js/bootstrap.min.js',
      'public/assets/js/newJs.js',
      'public/assets/js/main.js',
      'public/assets/js/gmaps.js',
      'public/assets/js/html5shiv.js',
      'public/assets/js/jquery.scrollUp.js',
      'public/assets/js/jquery.prettyPhoto.js',
      'public/assets/js/contact.js',
      'public/assets/js/price-range.js',
   ], 'public/js/all.js')
   .scripts([
      'public/assets/vendor/jquery/jquery.min.js',
      'public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
      'public/assets/vendor/jquery-easing/jquery.easing.min.js',
      'public/assets/vendor/sb-admin-2.min.js',
      'public/assets/vendor/chart.js/Chart.min.js',
   ], 'public/vendor/admin.js')
   .version();
