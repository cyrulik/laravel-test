var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.less([
            'editor/raptor-front-end.less',
            'editor/example.less'
        ])
        .stylesIn('public/css')
        .scripts([
            'editor/raptor.js',
            'library/jquery.js',
            'library/jquery-ui.js'
        ])
        .version([
            'css/all.css',
            'js/all.js'
        ]);
});
