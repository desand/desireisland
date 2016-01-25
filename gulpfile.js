var elixir = require('laravel-elixir');
var paths = {
    "assets": "./resources/assets/",
    "bootstrap": "resources/assets/fonts/bootstrap"
}

require('laravel-elixir-vueify');
require('laravel-elixir-stylus');

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
    /*mix.sass('app.sass')
       .browserify('app.js')
       .stylus('main.styl')
       .copy(paths.bootstrap, "public/fonts/bootstrap");*/

    mix.browserify('main.js');
});
