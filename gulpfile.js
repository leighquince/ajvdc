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

var elixir = require('laravel-elixir');
 
var bowerDir = './resources/assets/vendor/';
 
var lessPaths = [
    bowerDir + "bootstrap/less",
    bowerDir + "font-awesome/less",
    bowerDir + "animate.css",
    bowerDir + "pretty-photo/css",
];
 
elixir(function(mix) {
    mix.less('app.less', 'public/css', { paths: lessPaths })
        .scripts([
            'jquery/dist/jquery.min.js',
            'bootstrap/dist/js/bootstrap.min.js',
            'pretty-photo/js/jquery.prettyPhoto.js',
            'html5shiv/dist/html5shiv.min.js',
            'isotope/dist/isotope.pkgd.min.js',
            ], 'public/js/vendor.js', bowerDir)
        .copy('resources/assets/js/app.js', 'public/js/app.js')
        .copy('resources/assets/vendor/pretty-photo/images/prettyPhoto', 'public/image/prettyPhoto')
        .copy(bowerDir + 'font-awesome/fonts', 'public/fonts');
 
});
