const mix = require('laravel-mix');
require('laravel-mix-merge-manifest');

/**
 * Configurazione Laravel Mix per il modulo Chart
 *
 * Imposta percorso pubblico e unisce i manifest
 * Compila JavaScript e CSS del modulo
 */

// Imposta il percorso pubblico e unisce il manifest
mix.setPublicPath('../../public').mergeManifest();

<<<<<<< HEAD
// Compila i file JS e CSS del modulo
mix.js('resources/js/app.js', 'public/js')
   .js('resources/js/chart.js', 'public/js')
   .js('resources/js/filament-chart-js-plugins.js', 'public/js')
   .css('resources/css/app.css', 'public/css')
   .css('resources/css/chart.css', 'public/css')
   .version();
=======
// Compila i file JS e SCSS del modulo
mix.js(__dirname + '/Resources/assets/js/app.js', 'js/chart.js')
    .sass(__dirname + '/Resources/assets/sass/app.scss', 'css/chart.css');
>>>>>>> 516d04a (.)

if (mix.inProduction()) {
    mix.sourceMaps();
}
