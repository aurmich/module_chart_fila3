import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin';

export default defineConfig({
    build: {
        // Directory di output per i file compilati
        outDir: './resources/dist',
        emptyOutDir: false,
        manifest: "manifest.json",
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
            publicDirectory: '../../../public_html',
            buildDirectory: 'assets/chart',
            input: [
                // __dirname + '/resources/assets/sass/app.scss',
                __dirname + '/resources/css/app.css',
                __dirname + '/resources/js/app.js',
                __dirname + '/resources/js/filament-chart-js-plugins'
            ],
            ...refreshPaths,
            refresh: true,
        }),
    ],
});
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
