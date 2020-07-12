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
 .sass('resources/sass/app.scss', 'public/css');
 */

mix.js('resources/js/app.js', 'public/js')
    .scripts('resources/js/main.js', 'public/js/all.js')
    .styles('public/css/main.css','public/css/styles.css')
    .scripts('resources/js/admmain.js','public/js/admall.js')
    .styles('public/css/admmain.css','public/css/admstyles.css');
    
