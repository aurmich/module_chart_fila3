@extends('pub_theme::layouts.base')

<x-filament-panels::layout.base :livewire="$livewire">
    <div class="fi-layout flex min-h-screen w-full overflow-x-clip">
        <div
            x-cloak
            x-data="{}"
            x-on:click="$store.sidebar.close()"
            x-show="$store.sidebar.isOpen"
            x-transition.opacity.300ms
            class="fi-sidebar-close-overlay fixed inset-0 z-30 bg-gray-950/50 transition duration-500 dark:bg-gray-950/75 lg:hidden"
        ></div>

        <x-filament-panels::sidebar :navigation="$navigation" />

        <div
            @if (filament()->isSidebarCollapsibleOnDesktop())
                x-data="{}"
                x-bind:class="{
                    'fi-main-ctn-sidebar-open': $store.sidebar.isOpen,
                }"
                x-bind:style="'display: flex; opacity:1;'" {{-- Mimics `x-cloak`, as using `x-cloak` causes visual issues with chart widgets --}}
            @elseif (filament()->isSidebarFullyCollapsibleOnDesktop())
                x-data="{}"
                x-bind:class="{
                    'fi-main-ctn-sidebar-open': $store.sidebar.isOpen,
                }"
                x-bind:style="'display: flex; opacity:1;'" {{-- Mimics `x-cloak`, as using `x-cloak` causes visual issues with chart widgets --}}
            @elseif (! (filament()->isSidebarCollapsibleOnDesktop() || filament()->isSidebarFullyCollapsibleOnDesktop() || filament()->hasTopNavigation()))
                x-data="{}"
                x-bind:style="'display: flex; opacity:1;'" {{-- Mimics `x-cloak`, as using `x-cloak` causes visual issues with chart widgets --}}
            @endif
            @class([
                'fi-main-ctn w-screen flex-1 flex-col',
                'h-full opacity-0 transition-all' => filament()->isSidebarCollapsibleOnDesktop() || filament()->isSidebarFullyCollapsibleOnDesktop(),
                'opacity-0' => ! (filament()->isSidebarCollapsibleOnDesktop() || filament()->isSidebarFullyCollapsibleOnDesktop() || filament()->hasTopNavigation()),
                'flex' => filament()->hasTopNavigation(),
            ])
        >
            <x-filament-panels::topbar :navigation="$navigation" />

            <main
                @class([
                    'fi-main mx-auto h-full w-full px-4 md:px-6 lg:px-8',
                    match ($maxContentWidth ??= (filament()->getMaxContentWidth() ?? '7xl')) {
                        'xl' => 'max-w-xl',
                        '2xl' => 'max-w-2xl',
                        '3xl' => 'max-w-3xl',
                        '4xl' => 'max-w-4xl',
                        '5xl' => 'max-w-5xl',
                        '6xl' => 'max-w-6xl',
                        '7xl' => 'max-w-7xl',
                        'prose' => 'max-w-prose',
                        'screen-sm' => 'max-w-screen-sm',
                        'screen-md' => 'max-w-screen-md',
                        'screen-lg' => 'max-w-screen-lg',
                        'screen-xl' => 'max-w-screen-xl',
                        'screen-2xl' => 'max-w-screen-2xl',
                        'full' => 'max-w-full',
                        default => $maxContentWidth,
                    },
                ])
            >
                {{ \Filament\Support\Facades\FilamentView::renderHook('panels::content.start') }}

                {{ $slot }}

                {{ \Filament\Support\Facades\FilamentView::renderHook('panels::content.end') }}
            </main>

            {{ \Filament\Support\Facades\FilamentView::renderHook('panels::footer') }}
        </div>
<<<<<<< HEAD

        <header class="sticky top-0 z-50 bg-base-100 shadow-sm">
            <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16 items-center">
                    <div class="flex items-center">
                        <a href="{{ url('/') }}" class="flex-shrink-0">
                            <img src="{{ asset('images/logo.svg') }}" alt="{{ config('app.name') }}" class="h-10 w-auto">
                        </a>
                        <div class="hidden lg:ml-10 lg:flex lg:items-center lg:space-x-8">
                            <a href="{{ url('/') }}" class="text-base font-medium hover:text-primary transition-colors">Home</a>
                            <a href="{{ url('about') }}" class="text-base font-medium hover:text-primary transition-colors">Chi Siamo</a>
                            <a href="{{ url('power-ups') }}" class="text-base font-medium hover:text-primary transition-colors">Servizi</a>
                            <a href="#" class="text-base font-medium hover:text-primary transition-colors">Contatti</a>
                        </div>
                    </div>

                    <div class="hidden lg:flex lg:items-center lg:space-x-6">
<<<<<<< HEAD
<<<<<<< HEAD
                        <a href="{{ url('login') }}" class="text-base font-medium hover:text-primary transition-colors">@lang('pub_theme::common.buttons.login')</a>
                        <a href="{{ url('register') }}" class="btn btn-primary">@lang('pub_theme::common.buttons.register')</a>
=======
                        <a href="{{ url('login') }}" class="text-base font-medium hover:text-primary transition-colors">Accedi</a>
                        <a href="{{ url('register') }}" class="btn btn-primary">Registrati</a>
>>>>>>> aurmich/dev
=======
                        <a href="{{ url('login') }}" class="text-base font-medium hover:text-primary transition-colors">Accedi</a>
                        <a href="{{ url('register') }}" class="btn btn-primary">Registrati</a>
>>>>>>> 54f4fa16 (.)
                    </div>

                    <div class="lg:hidden">
                        <button type="button" class="btn btn-ghost btn-circle" aria-label="Menu">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>
            </nav>

            <!-- Mobile menu -->
            <div class="lg:hidden hidden" id="mobile-menu">
                <div class="pt-2 pb-3 space-y-1 px-4">
                    <a href="{{ url('/') }}" class="block px-3 py-2 text-base font-medium hover:text-primary transition-colors">Home</a>
                    <a href="{{ url('about') }}" class="block px-3 py-2 text-base font-medium hover:text-primary transition-colors">Chi Siamo</a>
                    <a href="{{ url('power-ups') }}" class="block px-3 py-2 text-base font-medium hover:text-primary transition-colors">Servizi</a>
                    <a href="#" class="block px-3 py-2 text-base font-medium hover:text-primary transition-colors">Contatti</a>
                </div>
                <div class="pt-4 pb-3 border-t border-base-200">
                    <div class="space-y-1 px-4">
                        <a href="{{ url('login') }}" class="block px-3 py-2 text-base font-medium hover:text-primary transition-colors">Accedi</a>
                        <a href="{{ url('register') }}" class="block px-3 py-2 text-base font-medium text-primary">Registrati</a>
                    </div>
                </div>
            </div>
        </header>

        <main class="flex-grow">
            {{ $slot }}
        </main>

        <footer class="bg-neutral text-neutral-content">
            <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
                    <div>
                        <img src="{{ asset('images/logo-white.svg') }}" alt="{{ config('app.name') }}" class="h-8 w-auto mb-6">
                        <p class="text-sm opacity-90">
                            Promuoviamo la salute orale delle gestanti attraverso prevenzione e assistenza specialistica.
                        </p>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-6">Link Utili</h3>
                        <ul class="space-y-4">
                            <li><a href="#" class="text-sm hover:text-primary-content transition-colors">Chi Siamo</a></li>
                            <li><a href="#" class="text-sm hover:text-primary-content transition-colors">Servizi</a></li>
                            <li><a href="#" class="text-sm hover:text-primary-content transition-colors">Contatti</a></li>
                            <li><a href="#" class="text-sm hover:text-primary-content transition-colors">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-6">Contatti</h3>
                        <ul class="space-y-4">
                            <li class="text-sm">
<<<<<<< HEAD
<<<<<<< HEAD
                                <span class="opacity-90">@lang('pub_theme::common.contact.email'):</span><br>
                                info@saluteora.it
                            </li>
                            <li class="text-sm">
                                <span class="opacity-90">@lang('pub_theme::common.contact.phone'):</span><br>
=======
=======
>>>>>>> 54f4fa16 (.)
                                <span class="opacity-90">Email:</span><br>
                                info@saluteora.it
                            </li>
                            <li class="text-sm">
                                <span class="opacity-90">Telefono:</span><br>
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
>>>>>>> 54f4fa16 (.)
                                +39 XXX XXX XXXX
                            </li>
                        </ul>
                    </div>
                    <div>
<<<<<<< HEAD
<<<<<<< HEAD
                        <h3 class="text-lg font-semibold mb-6">@lang('pub_theme::common.newsletter.title')</h3>
                        <p class="text-sm opacity-90 mb-4">
                            @lang('pub_theme::common.newsletter.description')
                        </p>
                        <form class="space-y-4">
                            <input type="email" placeholder="@lang('pub_theme::common.newsletter.email_placeholder')" class="input input-bordered w-full bg-neutral-focus text-neutral-content" />
                            <button type="submit" class="btn btn-primary w-full">@lang('pub_theme::common.newsletter.subscribe')</button>
=======
=======
>>>>>>> 54f4fa16 (.)
                        <h3 class="text-lg font-semibold mb-6">Newsletter</h3>
                        <p class="text-sm opacity-90 mb-4">
                            Iscriviti per ricevere aggiornamenti e consigli sulla salute orale.
                        </p>
                        <form class="space-y-4">
                            <input type="email" placeholder="La tua email" class="input input-bordered w-full bg-neutral-focus text-neutral-content" />
                            <button type="submit" class="btn btn-primary w-full">Iscriviti</button>
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
>>>>>>> 54f4fa16 (.)
                        </form>
                    </div>
                </div>
                <div class="mt-12 pt-8 border-t border-neutral-focus text-center text-sm opacity-90">
<<<<<<< HEAD
<<<<<<< HEAD
                    <p>@lang('pub_theme::common.copyright', ['year' => date('Y'), 'name' => config('app.name')])</p>
=======
                    <p>&copy; {{ date('Y') }} {{ config('app.name') }}. Tutti i diritti riservati.</p>
>>>>>>> aurmich/dev
=======
                    <p>&copy; {{ date('Y') }} {{ config('app.name') }}. Tutti i diritti riservati.</p>
>>>>>>> 54f4fa16 (.)
                </div>
            </div>
        </footer>
=======
>>>>>>> 15cb84fb (fix collisions)
    </div>
</x-filament-panels::layout.base>
