var elixir = require('laravel-elixir');
var gulp = require('gulp'),
    rename = require('gulp-rename')
    uglify = require('gulp-uglify');

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
elixir.config.js.browserify.transformers.push({
    name: 'aliasify',
    options: {}
});
elixir.config.sourcemaps = false;

elixir(function(mix) {
    mix.sass('app.scss');

    //404
    mix.scripts(['modernizr.custom.js', '404.min.js'], 'public/js/404.min.js');

    mix.copy('resources/assets/img', 'public/img');
    mix.copy('vendor/bower_dl/typed.js/dist/typed.min.js', 'public/js/typed.min.js');
    //mix.copy('vendor/bower_dl/typed.js/dist/typed.min.js', 'public/js/typed.min.js');
});