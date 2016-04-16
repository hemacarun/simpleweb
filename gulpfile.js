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
var elixir =require('laravel-elixir');
elixir(function(mix) {
    //mix.sass('app.scss');
    mix.styles([
         "resources/assets/css/bootstrap.css",
         "resources/assets/css/bootstrap-material-design.css",
         "resources/assets/css/ripples.css",
         
                ],'public/css');
    
    mix.scripts([
                 "resources/assets/js/app.js"
                 ],'public/js');
    
    mix.version(["css/all.css","js/all.js"]);

});
