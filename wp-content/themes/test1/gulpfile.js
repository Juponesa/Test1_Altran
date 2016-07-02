var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.less('style.less', 'css');
    mix.scripts([
        '*.js'
    ], 'js/app.js', 'resources/assets/js');
});
