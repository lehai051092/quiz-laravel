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

mix.copyDirectory('resources/assets/css', 'public/admin/css')
    .copyDirectory('resources/assets/js', 'public/admin/js')
    .copyDirectory('resources/assets/images', 'public/admin/images')
    .copyDirectory('resources/assets/fonts', 'public/admin/fonts').version();
