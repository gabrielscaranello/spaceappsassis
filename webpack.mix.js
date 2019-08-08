const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
mix.extract(['vue', 'bootstrap']);

if (mix.inProduction()) {
    mix.version();
}

mix.browserSync('localhost:8000');
