<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
@php
    $isLanding =Route::currentRouteName()=='home' && !Auth::check();
@endphp

<<<<<<< HEAD
=======
=======
>>>>>>> aurmich/dev
=======
>>>>>>> 54f4fa16 (.)
>>>>>>> aurmich/dev
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
        <meta name="description" content="SaluteOra - La piattaforma per la gestione della tua salute">
        <meta name="keywords" content="salute, medici, studi, appuntamenti, prenotazioni">
        <meta name="author" content="SaluteOra">
        <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
        @filamentStyles
        @vite(['resources/css/app.css', 'resources/js/app.js'],'themes/One')
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
        <title>{{ $title ?? 'SaluteOra - La tua salute, ora' }}</title>
    </head>
    <body>
        <div>
            <!-- Contenuto principale -->
            <main>
                {{ $slot }}
            </main>
        </div>

        {{--
        @livewire('notifications')

        --}}
        @filamentScripts
        @vite(['resources/js/app.js'],'themes/One')
<<<<<<< HEAD
=======
=======

=======
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
        {{--
            Policy: il layout DEVE includere @livewireStyles e @livewireScripts per evitare errori 419 Page Expired nei widget Filament/Livewire.
            Vedi docs/widget-deleting-method-error.md e docs/rules/filament_best_practices.md
        --}}
<<<<<<< HEAD
=======

>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======
        <meta name="description" content="<nome progetto> - La piattaforma per la gestione della tua salute">
        <meta name="keywords" content="salute, medici, studi, appuntamenti, prenotazioni">
        <meta name="author" content="<nome progetto>">

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
>>>>>>> 15cb84fb (fix collisions)
=======

        {{--
            Policy: il layout DEVE includere @livewireStyles e @livewireScripts per evitare errori 419 Page Expired nei widget Filament/Livewire.
            Vedi docs/widget-deleting-method-error.md e docs/rules/filament_best_practices.md
        --}}
>>>>>>> d23ba493 (add calendar)

        {!! $_theme->metatags() !!}
        <!-- Used to add dark mode right away, adding here prevents any flicker -->
        <script>
            if (typeof(Storage) !== "undefined") {
                if(localStorage.getItem('dark_mode') && localStorage.getItem('dark_mode') == 'true'){
                    document.documentElement.classList.add('dark');
                }
            }
        </script>
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d23ba493 (add calendar)
        <style>
			[x-cloak] {
			display: none !important;
			}
		</style>
		@filamentStyles
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        @livewireStyles
=======

>>>>>>> 54f4fa16 (.)
=======
        @livewireStyles
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======
>>>>>>> 15cb84fb (fix collisions)
=======
        @livewireStyles
>>>>>>> d23ba493 (add calendar)

        @vite(['resources/css/app.css'],'themes/One')


    </head>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    <body class="min-h-screen flex flex-col bg-[#E6EBF7]">
=======
    <body class="min-h-screen antialiased bg-white dark:bg-gradient-to-b dark:from-gray-950 dark:to-gray-900">
>>>>>>> 54f4fa16 (.)
=======
    <body class="min-h-screen antialiased bg-white dark:bg-gradient-to-b dark:from-gray-950 dark:to-gray-900">
>>>>>>> ff138484 (- update dettaglio paziente)
=======
    <body class="min-h-screen flex flex-col bg-[#E6EBF7]">
>>>>>>> 0e655426 (- aggiunti modal di delete e di dettaglio nelle pagine degli appuntamenti;)
        {{ $slot }}
        {{--
=======
    <body class="min-h-screen antialiased bg-gray-50 dark:bg-gradient-to-b dark:from-gray-950 dark:to-gray-900 font-sans">
        <div class="flex flex-col min-h-screen">
            <!-- Contenuto principale -->
            <main class="flex-grow">
                {{ $slot }}
            </main>

            <!-- Footer -->
            <footer class="bg-blue-900 text-white py-8 mt-auto">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Colonna 1: Logo e info -->
                        <div class="flex flex-col space-y-4">
                            <div class="flex items-center">
                                <x-ui.logo class="block w-auto fill-current h-8 text-white" />
                                <span class="ml-2 font-semibold text-lg"><nome progetto></span>
                            </div>
                            <p class="text-sm text-blue-200">La piattaforma innovativa per la gestione della tua salute, sempre a portata di mano.</p>
                        </div>

                        <!-- Colonna 2: Link utili -->
                        <div class="flex flex-col space-y-4">
                            <h3 class="font-medium text-lg">Link Utili</h3>
                            <div class="grid grid-cols-2 gap-2 text-sm">
                                <a href="/" class="text-blue-200 hover:text-white transition-colors duration-200">Home</a>
                                <a href="/servizi" class="text-blue-200 hover:text-white transition-colors duration-200">Servizi</a>
                                <a href="/medici" class="text-blue-200 hover:text-white transition-colors duration-200">Medici</a>
                                <a href="/studi" class="text-blue-200 hover:text-white transition-colors duration-200">Studi</a>
                                <a href="/contatti" class="text-blue-200 hover:text-white transition-colors duration-200">Contatti</a>
                                <a href="/faq" class="text-blue-200 hover:text-white transition-colors duration-200">FAQ</a>
                            </div>
                        </div>

                        <!-- Colonna 3: Contatti -->
                        <div class="flex flex-col space-y-4">
                            <h3 class="font-medium text-lg">Contattaci</h3>
                            <div class="space-y-2 text-sm">
                                <p class="flex items-center text-blue-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                    </svg>
                                    info@<nome progetto>.it
                                </p>
                                <p class="flex items-center text-blue-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                    </svg>
                                    +39 02 1234567
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Copyright -->
                    <div class="mt-8 pt-4 border-t border-blue-800 text-center text-sm text-blue-300">
                        <p>&copy; {{ date('Y') }} <nome progetto>. Tutti i diritti riservati.</p>
                    </div>
                </div>
            </footer>
        </div>

        <!-- Notifiche e Script -->
>>>>>>> 15cb84fb (fix collisions)
=======
    <body class="min-h-screen antialiased bg-white dark:bg-gradient-to-b dark:from-gray-950 dark:to-gray-900">
=======
    <body class="antialiased bg-white dark:bg-gradient-to-b dark:from-gray-950 dark:to-gray-900">
>>>>>>> 58d017c2 (- aggiornato stile dettaglio paziente)
        {{ $slot }}
        {{--
>>>>>>> d23ba493 (add calendar)
        <livewire:toast />
        --}}
        @livewire('notifications')
<<<<<<< HEAD
<<<<<<< HEAD
		@filamentScripts
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
        @livewireScripts
        @vite(['resources/js/app.js'],'themes/One')
        <link rel="stylesheet" type="text/css" href="{{asset("vendor/cookie-consent/css/cookie-consent.css")}}">
>>>>>>> aurmich/dev
=======
        @vite(['resources/js/app.js'],'themes/One')
        <link rel="stylesheet" type="text/css" href="{{asset("vendor/cookie-consent/css/cookie-consent.css")}}">
>>>>>>> 54f4fa16 (.)
=======
        @filamentScripts
        @vite(['resources/js/app.js'],'themes/One')
>>>>>>> 15cb84fb (fix collisions)
=======
		@filamentScripts
        @livewireScripts
        @vite(['resources/js/app.js'],'themes/One')
        <link rel="stylesheet" type="text/css" href="{{asset("vendor/cookie-consent/css/cookie-consent.css")}}">
>>>>>>> d23ba493 (add calendar)
>>>>>>> aurmich/dev
    </body>
</html>
