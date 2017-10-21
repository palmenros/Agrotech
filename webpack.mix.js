let mix = require('laravel-mix');

mix.js('resources/assets/js/app.js', 'public/js')
    .extract(['vue', 'axios', 'chart.js'], 'public/js/vendor.js')
    .sourceMaps(false)
    .sass('resources/assets/sass/app.scss', 'public/css');
