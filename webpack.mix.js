const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

/* Admin dependencias */
mix.sass('resources/views/admin/layout/assets/sass/style.scss', 'admin/assets/css/style.css');
mix.js('resources/views/admin/layout/assets/js/scripts.js', 'admin/assets/js/scripts.js');
mix.js('resources/views/admin/layout/assets/js/bootstrap.min.js', 'admin/assets/js/bootstrap.min.js');
mix.copy('node_modules/fontawesome-free/js/all.min.js', 'public/admin/assets/fontawesome/js/fontawesome.min.js');
mix.copy('node_modules/fontawesome-free/css/all.min.css', 'public/admin/assets/fontawesome/css/fontawesome.min.css');
mix.copyDirectory('node_modules/fontawesome-free/webfonts', 'public/admin/assets/fontawesome/webfonts');
mix.copyDirectory('node_modules/jquery/dist/jquery.min.js', 'public/admin/assets/js/jquery.min.js');
mix.copyDirectory('node_modules/sweetalert2/dist/sweetalert2.all.min.js', 'public/admin/assets/js/sweertalert2.min.js');
/* Fim admin depencias */