let mix = require('laravel-mix')

mix.js('resources/js/field.js', 'assets/js')
   .sass('resources/sass/field.scss', 'assets/css')
    .webpackConfig({
        resolve: {
            symlinks: false
        }
    })
