/** @type {import('tailwindcss').Config} */
<<<<<<< HEAD
import preset from "./vendor/filament/support/tailwind.config.preset";
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
import preset from "./vendor/filament/support/tailwind.config.preset";
=======
import preset from './vendor/filament/support/tailwind.config.preset'
>>>>>>> 54f4fa16 (.)
=======
import preset from "./vendor/filament/support/tailwind.config.preset";
>>>>>>> 3b3eb49d (- aggiornato stile della landing page;)
=======
import preset from './vendor/filament/support/tailwind.config.preset'
>>>>>>> 15cb84fb (fix collisions)
=======
import preset from "./vendor/filament/support/tailwind.config.preset";
>>>>>>> d23ba493 (add calendar)
>>>>>>> aurmich/dev

export default {
    presets: [preset],
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./assets/**/*.js",
        "./assets/**/*.css",
        "../../app/Filament/**/*.php",
        "../../resources/views/**/*.blade.php",
        "../../vendor/filament/**/*.blade.php",
        "../../Modules/**/Filament/**/*.php",
        "../../Modules/**/resources/views/**/*.blade.php",
        "../../storage/framework/views/*.php",
        "../../vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./node_modules/flowbite/**/*.js",
        "../../../public_html/vendor/**/*.blade.php",
    ],
<<<<<<< HEAD
    darkMode: "class",
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    darkMode: "class",
=======
    darkMode: 'class',
>>>>>>> 54f4fa16 (.)
=======
    darkMode: "class",
>>>>>>> 3b3eb49d (- aggiornato stile della landing page;)
=======
    darkMode: 'class',
>>>>>>> 15cb84fb (fix collisions)
=======
    darkMode: "class",
>>>>>>> d23ba493 (add calendar)
>>>>>>> aurmich/dev
    theme: {
        extend: {
            colors: {
                primary: {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3b3eb49d (- aggiornato stile della landing page;)
=======
>>>>>>> d23ba493 (add calendar)
>>>>>>> aurmich/dev
                    50: "#f0f9ff",
                    100: "#e0f2fe",
                    200: "#bae6fd",
                    300: "#7dd3fc",
                    400: "#38bdf8",
                    500: "#0ea5e9",
                    600: "#0284c7",
                    700: "#0369a1",
                    800: "#075985",
                    900: "#0c4a6e",
                    950: "#082f49",
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
                    50: '#f0f9ff',
                    100: '#e0f2fe',
                    200: '#bae6fd',
                    300: '#7dd3fc',
                    400: '#38bdf8',
                    500: '#0ea5e9',
                    600: '#0284c7',
                    700: '#0369a1',
                    800: '#075985',
                    900: '#0c4a6e',
                    950: '#082f49',
>>>>>>> 15cb84fb (fix collisions)
=======
>>>>>>> d23ba493 (add calendar)
>>>>>>> aurmich/dev
                },
                secondary: {
                    50: "#f8fafc",
                    100: "#f1f5f9",
                    200: "#e2e8f0",
                    300: "#cbd5e1",
                    400: "#94a3b8",
                    500: "#64748b",
                    600: "#475569",
                    700: "#334155",
                    800: "#1e293b",
                    900: "#0f172a",
                },
                header: {
                    700: "#1A467F",
                },
            },
            fontFamily: {
<<<<<<< HEAD
                sans: ["Figtree", "sans-serif"],
=======
<<<<<<< HEAD
<<<<<<< HEAD
                sans: ["Figtree", "sans-serif"],
=======
                    50: '#f0f9ff',
                    100: '#e0f2fe',
                    200: '#bae6fd',
                    300: '#7dd3fc',
                    400: '#38bdf8',
                    500: '#0ea5e9',
                    600: '#0284c7',
                    700: '#0369a1',
                    800: '#075985',
                    900: '#0c4a6e',
                    950: '#082f49',
=======
>>>>>>> 3b3eb49d (- aggiornato stile della landing page;)
                },
                secondary: {
                    50: "#f8fafc",
                    100: "#f1f5f9",
                    200: "#e2e8f0",
                    300: "#cbd5e1",
                    400: "#94a3b8",
                    500: "#64748b",
                    600: "#475569",
                    700: "#334155",
                    800: "#1e293b",
                    900: "#0f172a",
                },
                header: {
                    700: "#1A467F",
                },
            },
            fontFamily: {
<<<<<<< HEAD
                sans: ['Figtree', 'sans-serif'],
>>>>>>> 54f4fa16 (.)
=======
                sans: ["Figtree", "sans-serif"],
>>>>>>> 3b3eb49d (- aggiornato stile della landing page;)
=======
                sans: ['Figtree', 'sans-serif'],
>>>>>>> 15cb84fb (fix collisions)
=======
                sans: ["Figtree", "sans-serif"],
>>>>>>> d23ba493 (add calendar)
>>>>>>> aurmich/dev
            },
        },
    },
    plugins: [
<<<<<<< HEAD
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
        require("flowbite/plugin"),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
        require("flowbite/plugin"),
=======
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('flowbite/plugin'),
>>>>>>> 54f4fa16 (.)
=======
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
        require("flowbite/plugin"),
>>>>>>> 3b3eb49d (- aggiornato stile della landing page;)
=======
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('flowbite/plugin'),
>>>>>>> 15cb84fb (fix collisions)
=======
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
        require("flowbite/plugin"),
>>>>>>> d23ba493 (add calendar)
>>>>>>> aurmich/dev
    ],
};
