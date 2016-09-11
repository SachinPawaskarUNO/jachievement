var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss', 'resources/assets/css');

    mix.styles([
        //'libs/bootstrap.min.css',
        //'libs/font-awesome.min.css',
        //'libs/select2.min.css',
        //'libs/jquery.dataTables.min.css',
        //'libs/bipartite.css',
        'app.css'
    ]);

    mix.scripts([
        //'libs/jquery.js',
        //'libs/bootstrap.min.js',
        //'libs/select2.min/js',
        //'libs/jquery.dataTables.min.js',
        //'libs/dataTables.bootstrap.min.js',
        //'libs/bipartite.js'
        'app.js'
    ]);

    //mix.version('public/css/all.css');
    mix.version(['public/css/all.css', 'public/js/all.js']);
});
