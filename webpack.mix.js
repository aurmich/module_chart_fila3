const mix = require('laravel-mix');
require('laravel-mix-merge-manifest');

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
