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
=======
            refresh: true,
        }),
        tailwindcss(),
    ],
<<<<<<< HEAD
});
>>>>>>> 03b27bf2 (✨ (laravel): update .env.example to remove DEBUGBAR_ENABLED and improve clarity)
=======
    server: {
        cors: true,
    },
});
>>>>>>> e9942509 (fix: session)
