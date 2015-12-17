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
    mix.sass('app.scss','./resources/assets/css/app.css')
    	.scripts([
    		'sweetalert-dev.js',
    		'lity.js'
    		], './public/js/libs.js')
    	.styles([
    		'sweetalert.css',
    		'app.css',
    		'lity.css'
    		], './public/css/libs.css');
});
