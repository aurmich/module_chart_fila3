import { defineConfig } from 'vite';
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
    },
    plugins: [
        laravel({
            publicDirectory: '../../../public_html',
            buildDirectory: 'assets/chart',
            input: [
                // __dirname + '/Resources/assets/sass/app.scss', // Percorso storico, lasciato commentato per riferimento
                __dirname + '/resources/css/app.css',
                __dirname + '/resources/js/app.js',
                __dirname + '/resources/js/filament-chart-js-plugins'
            ],
            ...refreshPaths,
            refresh: true,
        }),
    ],
});
