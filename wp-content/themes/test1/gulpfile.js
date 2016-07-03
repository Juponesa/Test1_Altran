var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.less('style.less', 'css');
    mix.scripts([
        '*.js',
        '../../../node_modules/bootstrap/dist/js/bootstrap.min.js'
    ], 'js/app.js', 'resources/assets/js');
});
