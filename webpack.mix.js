const mix = require('laravel-mix');
require('laravel-mix-merge-manifest');

<<<<<<< HEAD
mix.setPublicPath('../../public').mergeManifest();

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6440866 (.)
mix.js(__dirname + '/Resources/assets/js/app.js', 'js/blog.js')
    .sass(__dirname + '/Resources/assets/sass/app.scss', 'css/blog.css');

if (mix.inProduction()) {
    mix.version();
<<<<<<< HEAD
}
=======
mix.js(__dirname + '/resources/assets/js/app.js', 'js/blog.js')
    .sass(__dirname + '/resources/assets/sass/app.scss', 'css/blog.css');

if (mix.inProduction()) {
    mix.version();
}
>>>>>>> 7d3b0bb (.)
=======
}
>>>>>>> 6440866 (.)
=======
/**
 * Configurazione Laravel Mix per il modulo Blog
 * 
 * Imposta percorso pubblico e unisce i manifest
 * Compila JavaScript e SCSS del modulo
 */

// Imposta il percorso pubblico e unisce il manifest
mix.setPublicPath('../../public').mergeManifest();

// Compila i file JS e SCSS del modulo
mix.js(__dirname + '/Resources/assets/js/app.js', 'js/blog.js')
    .sass(__dirname + '/Resources/assets/sass/app.scss', 'css/blog.css');

// Versiona gli asset in produzione
if (mix.inProduction()) {
    mix.version();
}
>>>>>>> d2e74a3 (.)
