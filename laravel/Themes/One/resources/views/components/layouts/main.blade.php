<<<<<<< HEAD
<<<<<<< HEAD
@php
    $isLanding =Route::currentRouteName()=='home' && !Auth::check();
@endphp

=======
>>>>>>> aurmich/dev
=======
>>>>>>> 54f4fa16 (.)
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
<<<<<<< HEAD
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

        {!! $_theme->metatags() !!}
        <!-- Used to add dark mode right away, adding here prevents any flicker -->
        <script>
            if (typeof(Storage) !== "undefined") {
                if(localStorage.getItem('dark_mode') && localStorage.getItem('dark_mode') == 'true'){
                    document.documentElement.classList.add('dark');
                }
            }
        </script>
        <style>
			[x-cloak] {
			display: none !important;
			}
		</style>
		@filamentStyles
<<<<<<< HEAD
<<<<<<< HEAD
        @livewireStyles
=======

>>>>>>> 54f4fa16 (.)
=======
        @livewireStyles
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)

        @vite(['resources/css/app.css'],'themes/One')


    </head>
<<<<<<< HEAD
    <body class="min-h-screen flex flex-col bg-[#E6EBF7]">
=======
    <body class="min-h-screen antialiased bg-white dark:bg-gradient-to-b dark:from-gray-950 dark:to-gray-900">
>>>>>>> 54f4fa16 (.)
        {{ $slot }}
        {{--
        <livewire:toast />
        --}}
        @livewire('notifications')
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
    </body>
</html>
