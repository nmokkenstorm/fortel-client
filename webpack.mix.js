let mix = require('laravel-mix');

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

var tailwindcss = require('tailwindcss');

mix.postCss('resources/assets/tailwind/app.css', 'public/css', [
    tailwindcss('./tailwind.js'),
]).js('resources/assets/js/app.js', 'public/js');

