const mix = require('laravel-mix');

mix.webpackConfig({
    resolve: {
        extensions: ['.js', '.vue'],
        alias: {
            '@': __dirname + '/resources/js/'
        }
    },
    output: {
        chunkFilename: 'js/[name].js',
    },
});

mix.js('resources/js/app.js', 'public');
mix.extract(['vue', 'bootstrap', 'axios', 'sweetalert2'])

if (mix.inProduction()) {
    mix.version();
}

mix.browserSync('localhost:8000');
