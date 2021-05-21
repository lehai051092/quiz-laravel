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

mix.copyDirectory('resources/assets/admin/css', 'public/admin/css')
    .copyDirectory('resources/assets/admin/js', 'public/admin/js')
    .copyDirectory('resources/assets/admin/images', 'public/admin/images')
    .copyDirectory('resources/assets/admin/fonts', 'public/admin/fonts').version();
