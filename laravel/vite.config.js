import {
    defineConfig
} from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
<<<<<<< HEAD
            refresh: true,
=======
            refresh: [`resources/views/**/*`],
>>>>>>> 54f4fa16 (.)
        }),
        tailwindcss(),
    ],
    server: {
        cors: true,
    },
<<<<<<< HEAD
});
=======
});
>>>>>>> 54f4fa16 (.)
