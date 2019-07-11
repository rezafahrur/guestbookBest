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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/components/anniversary.js', 'public/js')
    .js('resources/js/components/cake.js', 'public/js')
    .less('resources/sass/counter.less', 'public/css')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/form.scss', 'public/css')
    .sass('resources/sass/loginTamu.scss', 'public/css')
    .sass('resources/sass/gameCounter.scss', 'public/css')
    .sass('resources/sass/home.scss', 'public/css')
    .sass('resources/sass/tables.scss', 'public/css')
    .sass('resources/sass/visited.scss', 'public/css')
    .sass('resources/sass/cake.scss', 'public/css')
    .sass('resources/sass/anniversary.scss', 'public/css')
    .sass('resources/sass/gallery.scss', 'public/css');
