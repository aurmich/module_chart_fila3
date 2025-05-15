import { defineConfig } from 'vite';
<<<<<<< HEAD
import laravel, { refreshPaths } from 'laravel-vite-plugin';

export default defineConfig({
    build: {
        // Directory di output per i file compilati del modulo Chart
        outDir: './resources/dist',
        emptyOutDir: false,
        manifest: "manifest.json",
        // Opzioni rollup commentate per riferimento futuro
        /*
        rollupOptions: {
            output: {
                entryFileNames: `assets/[name].js`,
                chunkFileNames: `assets/[name].js`,
                assetFileNames: `assets/[name].[ext]`
            }
        }
        */
=======
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
>>>>>>> 99e5306 (.)
    },
    plugins: [
        laravel({
            publicDirectory: '../../../public_html',
            buildDirectory: 'assets/chart',
<<<<<<< HEAD
            input: [
                // __dirname + '/Resources/assets/sass/app.scss', // Percorso storico, lasciato commentato per riferimento
=======
            //buildDirectory: 'build-mymodule',
            input: [
                //__dirname + '/Resources/assets/sass/app.scss',
>>>>>>> 99e5306 (.)
                __dirname + '/resources/css/app.css',
                __dirname + '/resources/js/app.js',
                __dirname + '/resources/js/filament-chart-js-plugins'
            ],
            ...refreshPaths,
            refresh: true,
        }),
    ],
});
<<<<<<< HEAD
//    'Modules/Quaeris/Resources/assets/sass/app.scss',
//    'Modules/Quaeris/Resources/assets/js/app.js',
//    'Modules/Quaeris/resources/assets/sass/app.scss',
//    'Modules/Quaeris/resources/assets/js/app.js',
//    'Modules/Quaeris/Resources/assets/sass/app.scss',
//    'Modules/Quaeris/Resources/assets/js/app.js',
//];
// Percorsi commentati mantenuti per riferimento
// export const paths = [
//    'Modules/Quaeris/Resources/assets/sass/app.scss',
//    'Modules/Quaeris/Resources/assets/js/app.js',
// ];
=======

//export const paths = [
//    'Modules/Quaeris/Resources/assets/sass/app.scss',
//    'Modules/Quaeris/Resources/assets/js/app.js',
//];
>>>>>>> 99e5306 (.)
