let mix = require('laravel-mix');

mix.js('resources/assets/js/main.js', 'public/assets/js/main.js')
    .css('resources/assets/css/main.css', 'public/assets/css/main.css', [
        require('tailwindcss')
    ]);