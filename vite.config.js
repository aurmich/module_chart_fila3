import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin'

export default defineConfig({
    build: {
        outDir: './Resources/dist',
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
            input: [
                __dirname + '/Resources/css/app.css',
                __dirname + '/Resources/js/app.js',
                __dirname + '/Resources/js/filament-chart-js-plugins'
            ],
            ...refreshPaths,
            refresh: true,
        }),
    ],
});

//export const paths = [
//    'Modules/Quaeris/Resources/assets/sass/app.scss',
//    'Modules/Quaeris/Resources/assets/js/app.js',
//];
