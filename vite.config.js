import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin'

export default defineConfig({
    build: {
        //outDir: '../../../public_html/assets/chart',
        outDir: './resources/dist',
        emptyOutDir: false,
        manifest: "manifest.json",
        /*rollupOptions: {
			output: {
				entryFileNames: `assets/[name].js`,
				chunkFileNames: `assets/[name].js`,
				assetFileNames: `assets/[name].[ext]`
			}
		}*/
    },
    plugins: [
        laravel({
            publicDirectory: '../../../public_html',
            buildDirectory: 'assets/chart',
            //buildDirectory: 'build-mymodule',
            input: [
<<<<<<< HEAD
                //__dirname + '/Resources/assets/sass/app.scss',
=======
                //__dirname + '/resources/assets/sass/app.scss',
>>>>>>> 7d3b0bb (.)
                __dirname + '/resources/css/app.css',
                __dirname + '/resources/js/app.js',
                __dirname + '/resources/js/filament-chart-js-plugins'
            ],
            ...refreshPaths,
            refresh: true,
        }),
    ],
});

//export const paths = [
<<<<<<< HEAD
//    'Modules/Quaeris/Resources/assets/sass/app.scss',
//    'Modules/Quaeris/Resources/assets/js/app.js',
=======
//    'Modules/Quaeris/resources/assets/sass/app.scss',
//    'Modules/Quaeris/resources/assets/js/app.js',
>>>>>>> 7d3b0bb (.)
//];
