<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
@php
    $isLanding =Route::currentRouteName()=='home' && !Auth::check();
    $margin = $isLanding ? "margin: 0px" : "margin: 20px";
@endphp

@if($isLanding)
<x-layouts.main :is-landing="$isLanding ?? false">
    
    <div class="flex flex-col min-h-screen">
    <div class="flex-1 {{ $margin }}">
        {{ $slot }}
    </div>
    <x-section slug="footer" />
</div>
</x-layouts.main>
@else
<x-layouts.main :is-landing="$isLanding ?? false">
    <x-section slug="header" tpl="v1" />
    <div class="bg-[#E6EBF7] flex flex-col min-h-screen">
    <div style="background-image: url(/img/inmp-trasparenza-5.svg); background-size: contain; background-repeat: no-repeat; background-position: center" class="flex-1 m-5">
        {{ $slot }}
    </div>
    <x-section slug="footer" />
</div>
</x-layouts.main>
@endif
<<<<<<< HEAD
=======
=======
<x-layouts.main :is-landing="$isLanding ?? false">
    <x-section slug="header" />
    <div style="background-image: url(/img/inmp-trasparenza-5.svg); background-size: contain; background-repeat: no-repeat; background-position: center" class="flex-1 m-5">
        {{ $slot }}
    </div>
    <x-section slug="footer" />
</x-layouts.main>
>>>>>>> aurmich/dev
=======
<x-layouts.main>
=======
<x-layouts.main :is-landing="$isLanding ?? false">
>>>>>>> f7d3ce4f (- update landing-page;)
    <x-section slug="header" />
    <div class="flex-1">
        {{ $slot }}
    </div>

<<<<<<< HEAD
<<<<<<< HEAD
    <x-section slug="footer" />
</x-layouts.main>
>>>>>>> 54f4fa16 (.)
=======
    <!-- Contenuto principale -->
    <div class="mx-auto py-6 max-w-7xl">
        <div class="px-4 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </div>

    <!-- Breadcrumb opzionale -->
    @if (isset($breadcrumb))
        <div class="bg-gray-50 dark:bg-gray-800/30 py-3 border-t border-gray-100 dark:border-gray-800">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <nav class="flex text-sm text-gray-500 dark:text-gray-400">
                    {{ $breadcrumb }}
                </nav>
            </div>
        </div>
    @endif
</x-layouts.main>
>>>>>>> 15cb84fb (fix collisions)
=======
    <x-section slug="footer" />
</x-layouts.main>
>>>>>>> d23ba493 (add calendar)
>>>>>>> aurmich/dev
