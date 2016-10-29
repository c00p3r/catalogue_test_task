process.env.DISABLE_NOTIFIER = true;

const elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir(function (mix) {
    mix
        .sass(['app.scss'], './public/css/app.css')
        .scripts(['main.js', 'ie10-viewport-bug-workaround.js'], './public/js/all.js');

    if (elixir.config.production) {
        mix
            .webpack(['app.js', './public/js/all.js'], './public/js/bundle.js');
        // .version([
        //     './public/css/app.css',
        //     './public/js/bundle.js'
        // ]);
    }
});