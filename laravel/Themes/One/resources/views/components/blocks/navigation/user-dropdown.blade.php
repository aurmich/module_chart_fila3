@props([
    'alignment' => 'right',
    'width' => '48',
    'contentClasses' => 'py-1 bg-white dark:bg-gray-800',
    'menu_items' => [],
    'guest_view' => 'pub_theme::components.blocks.navigation.login-buttons'
])

@php
    use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
<<<<<<< HEAD
<<<<<<< HEAD
    use Modules\SaluteOra\Enums\UserTypeEnum;
=======
>>>>>>> 54f4fa16 (.)
=======
    use Modules\SaluteOra\Enums\UserTypeEnum;
>>>>>>> f7d3ce4f (- update landing-page;)

    // Inizializzazione delle variabili con valori di default
    $user = $user ?? auth()->user();
    $locale = LaravelLocalization::getCurrentLocale();
    $isLoggedIn = auth()->check();

    // Definizione delle classi CSS per il menu
    $menuClasses = [
        'base' => 'py-1',
        'light' => 'bg-white',
        'dark' => 'dark:bg-gray-800'
    ];

    $contentClasses = implode(' ', $menuClasses);

    // Funzione per gestire il click sugli elementi del menu
    $handleMenuItemClick = function($item) {
        if (isset($item['action']) && $item['action'] === 'logout') {
            return "event.preventDefault(); document.getElementById('logout-form').submit();";
        }
        return '';
    };
<<<<<<< HEAD
<<<<<<< HEAD
$isDoctor  = $user && $user->type == UserTypeEnum::DOCTOR ? true:false;

    $profiloUrl = isset($user) ? $user->type === 'doctor'
<<<<<<< HEAD
        ? '/{{ $lang }}/pages/profilo-odontoiatra'
        : '/{{ $lang }}/pages/profilo-paziente':'';
=======
        ? '/it/pages/profilo-odontoiatra'
        : '/it/pages/profilo-paziente':'';
>>>>>>> aurmich/dev

        

=======
>>>>>>> 54f4fa16 (.)
=======
$isDoctor  = $user && $user->type == UserTypeEnum::DOCTOR ? true:false;

    $profiloUrl = isset($user) ? $user->type === 'doctor'
        ? '/it/pages/profilo-odontoiatra'
        : '/it/pages/profilo-paziente':'';

        

>>>>>>> f7d3ce4f (- update landing-page;)
@endphp

@if($isLoggedIn)
    {{-- Dropdown Menu per utenti autenticati --}}
    <x-filament::dropdown
        {{--
        :alignment="$alignment"
        :width="$width"
        :content-classes="$contentClasses"
        --}}
    >
        {{-- Trigger Button --}}
        <x-slot name="trigger">
            <x-filament::button
<<<<<<< HEAD
<<<<<<< HEAD
                color="white"
                style="border-radius: 70px; background-color: transparent !important; border: 1px solid white"
                icon="heroicon-o-user"
                :label="$user?->name"
                aria-label="{{ __('ui::navigation.user_menu') }}">
                <span class="hidden sm:inline">{{$user?->name}}</span>
        </x-filament::button>
=======
                color="gray"
                icon="heroicon-o-user"
                :label="$user?->name"
                aria-label="{{ __('ui::navigation.user_menu') }}"
            />
>>>>>>> 54f4fa16 (.)
=======
                color="white"
                style="border-radius: 70px; background-color: transparent !important; border: 1px solid white"
                icon="heroicon-o-user"
                :label="$user?->name"
                aria-label="{{ __('ui::navigation.user_menu') }}">
                <span class="hidden sm:inline">{{$user?->name}}</span>
        </x-filament::button>
>>>>>>> 58d017c2 (- aggiornato stile dettaglio paziente)
        </x-slot>
        <x-filament::dropdown.list>
        {{-- Menu Items --}}
        @foreach($menu_items as $item)
            @if(isset($item['type']) && $item['type'] === 'divider')
                <div class="border-t border-gray-200 dark:border-gray-700 my-1" role="separator"></div>
            @else
                <x-filament::dropdown.list.item :icon="$item['icon']" tag="a" :href="$item['url'] ?? '#'">
                    {{  $item['label'] ?? '' }}
                </x-filament::dropdown.list.item>
            @endif
        @endforeach
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> f7d3ce4f (- update landing-page;)
        <x-filament::dropdown.list.item     tag="a"
         :href="$isLoggedIn && $isDoctor ? '/it/pages/profilo-odontoiatra':'/it/pages/profilo-paziente'"
         >
            <div class="flex flex-row items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
                Profilo
            </div>
        </x-filament::dropdown.list.item>
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> f7d3ce4f (- update landing-page;)
=======
>>>>>>> 54e38a7d (- create privacy dottore)
        </x-filament::dropdown.list>
    </x-filament::dropdown>

    {{-- Form di Logout nascosto --}}
    <form
        id="logout-form"
        action="{{ route('logout', ['locale' => $locale]) }}"
        method="POST"
        class="hidden"
    >
        @csrf
    </form>
@else
    {{-- Vista per utenti non autenticati --}}
    @include($guest_view)
@endif
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 54f4fa16 (.)
=======

>>>>>>> ff138484 (- update dettaglio paziente)
