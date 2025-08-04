const mix = require('laravel-mix');
<<<<<<< HEAD
<<<<<<< HEAD
require('laravel-mix-merge-manifest');

/**
 * Configurazione Laravel Mix per il modulo Chart
 *
 * Imposta percorso pubblico e unisce i manifest
 * Compila JavaScript e CSS del modulo
 */

// Imposta il percorso pubblico e unisce il manifest
mix.setPublicPath('../../public').mergeManifest();

// Compila i file JS e CSS del modulo
mix.js('resources/js/app.js', 'public/js')
   .js('resources/js/chart.js', 'public/js')
   .js('resources/js/filament-chart-js-plugins.js', 'public/js')
   .css('resources/css/app.css', 'public/css')
   .css('resources/css/chart.css', 'public/css')
   .version();
// Compila i file JS e SCSS del modulo
//mix.js(__dirname + '/resources/assets/js/app.js', 'js/chart.js')
//    .sass(__dirname + '/resources/assets/sass/app.scss', 'css/chart.css');

if (mix.inProduction()) {
    mix.sourceMaps();
}
=======
=======
>>>>>>> 8f11126c (Squashed 'laravel/Modules/Geo/' content from commit 9f987ec)

mix.options({
    purifyCss: false,
 });

 mix.autoload({
        jquery: ['$', 'window.jQuery', 'jQuery'], // more than one
        tether: ['window.Tether', 'Tether'],
        'tether-shepherd': ['Shepherd'],
        'popper.js/dist/popper.js': ['Popper'],
        sweetalert2:['Swal'],
        'magnific-popup':['magnificPopup'],
        moment: 'moment', // only one
        axios: 'axios',
        leaflet: ['leaflet','L']
    });


// require('laravel-mix-merge-manifest');
//mix.setPublicPath('../../public').mergeManifest();

 var src=__dirname + '/Resources';
 var dest= 'resources/dist'

 mix.js(src+'/js/app.js', dest+'/js/geo.js')
    .sass(src + '/sass/app.scss', dest+'/css/geo.css')
    .setResourceRoot('../')
    .setPublicPath(dest);

 mix.vue({ version: 3 });

 mix.autoload({
        jquery: ['$', 'window.jQuery', 'jQuery'], // more than one
        moment: 'moment' // only one
        //tether: ['Tether', 'windows.Tether'],
    });

 mix.extract([
    'axios',
    'vue',
    'tether',
    'lodash',
    'popper.js',
    'jquery',
    'sweetalert2',
    'moment',
    'nouislider',
    'bootstrap',
    'video.js',
    'videojs',
 ]);


 if (mix.inProduction()) {
     mix.version();
 }
<<<<<<< HEAD
>>>>>>> 8f11126c (Squashed 'laravel/Modules/Geo/' content from commit 9f987ec)
=======
>>>>>>> 8f11126c (Squashed 'laravel/Modules/Geo/' content from commit 9f987ec)
