import { defineConfig } from 'vite';
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
                //__dirname + '/Resources/assets/sass/app.scss',
=======
                //__dirname + '/resources/assets/sass/app.scss',
>>>>>>> 7d3b0bb (.)
=======
                //__dirname + '/Resources/assets/sass/app.scss',
>>>>>>> 6440866 (.)
=======
import laravel, { refreshPaths } from 'laravel-vite-plugin';

export default defineConfig({
    build: {
        // Definizione della directory di output per i file compilati
        outDir: './resources/dist',
        emptyOutDir: false,
        manifest: "manifest.json",
        // Opzioni rollup commentate ma mantenute per riferimento futuro
        /* 
        rollupOptions: {
            output: {
                entryFileNames: `assets/[name].js`,
                chunkFileNames: `assets/[name].js`,
                assetFileNames: `assets/[name].[ext]`
            }
        }
        */
    },
    plugins: [
        laravel({
            // Directory pubblica per i file compilati
            publicDirectory: '../../../public_html',
            buildDirectory: 'assets/chart',
            input: [
                // File SCSS commentato - manteniamo il percorso con nomenclatura Resources (maiuscolo)
                // __dirname + '/Resources/assets/sass/app.scss',
>>>>>>> d2e74a3 (.)
=======
                //__dirname + '/resources/assets/sass/app.scss',
>>>>>>> dacab4a (.)
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
//export const paths = [
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
//    'Modules/Quaeris/Resources/assets/sass/app.scss',
//    'Modules/Quaeris/Resources/assets/js/app.js',
=======
//    'Modules/Quaeris/resources/assets/sass/app.scss',
//    'Modules/Quaeris/resources/assets/js/app.js',
>>>>>>> 7d3b0bb (.)
=======
//    'Modules/Quaeris/Resources/assets/sass/app.scss',
//    'Modules/Quaeris/Resources/assets/js/app.js',
>>>>>>> 6440866 (.)
=======
//    'Modules/Quaeris/resources/assets/sass/app.scss',
//    'Modules/Quaeris/resources/assets/js/app.js',
>>>>>>> dacab4a (.)
//];
=======
// Percorsi commentati mantenuti per riferimento
// export const paths = [
//    'Modules/Quaeris/Resources/assets/sass/app.scss',
//    'Modules/Quaeris/Resources/assets/js/app.js',
// ];
>>>>>>> d2e74a3 (.)
