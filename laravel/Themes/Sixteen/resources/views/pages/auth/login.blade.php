<?php

declare(strict_types=1);

use function Laravel\Folio\{middleware, name};

middleware(['guest']);
name('login');

?>

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<x-layouts.guest>
=======
<x-layouts.guest-institutional>
>>>>>>> 366f6e8184 (.)
    <x-slot name="title">
        {{ __('auth.login.title') }} - {{ config('app.name') }}
    </x-slot>

    <!-- Skip Links for Accessibility (AGID Compliant) -->
    <div class="sr-only focus:not-sr-only">
        <a href="#main-content" 
           class="absolute top-0 left-0 bg-blue-600 text-white px-4 py-2 z-50 focus:relative">
            Salta al contenuto principale
        </a>
        <a href="#login-form" 
           class="absolute top-0 left-0 bg-blue-600 text-white px-4 py-2 z-50 focus:relative">
            Vai al modulo di accesso
        </a>
    </div>

    <!-- AGID Institutional Header -->
    <div class="bg-blue-600 text-white py-3">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-4">
                    <x-pub_theme::ui.logo class="h-8 w-auto text-white" />
                    <span class="font-semibold">{{ config('app.institution_name', 'Ente di appartenenza') }}</span>
                </div>
                @if(config('app.institution_url'))
                    <a href="{{ config('app.institution_url') }}" 
                       class="text-white hover:text-blue-200 transition-colors"
                       target="_blank" rel="noopener noreferrer">
                        Vai al sito dell'ente
                    </a>
                @endif
            </div>
        </div>
    </div>

    <!-- Breadcrumb Navigation (AGID Compliant) -->
    <nav class="bg-gray-50 py-3 border-b border-gray-200" aria-label="Percorso di navigazione">
        <div class="container mx-auto px-4">
            <ol class="flex items-center space-x-2 text-sm">
=======
=======
>>>>>>> fc88fa5ea1 (.)
<x-layouts.guest-agid>
=======
<x-layouts.guest>
>>>>>>> 2283c980af (✨ (sixteen-theme): add AGID naming rules documentation for the Sixteen theme to ensure compliance and consistency)
    <x-slot name="title">
        {{ __('auth.login.title') }}
    </x-slot>

    <!-- Login Card AGID-Compliant (Componente Corretto) -->
    <x-pub_theme::blocks.forms.login-card 
        title="{{ __('auth.login.title') }}"
        subtitle="{{ __('auth.login.description', ['service' => config('app.name')]) }}"
        livewire-component="\Modules\User\Http\Livewire\Auth\Login"
    />
<<<<<<< HEAD
</x-layouts.guest-agid>
<<<<<<< HEAD
>>>>>>> 65c680889c (.)
=======
>>>>>>> fc88fa5ea1 (.)
=======

    <!-- Registration Link (if enabled) -->
    @if (Route::has('register'))
        <div class="text-center mt-6">
            <p class="text-sm text-gray-600">
                {{ __('auth.login.no_account') }}
                <a href="{{ route('register') }}" 
                   class="text-blue-600 hover:text-blue-800 underline font-medium">
                    {{ __('auth.login.create_account') }}
                </a>
            </p>
        </div>
    @endif
</x-layouts.guest>
>>>>>>> 2283c980af (✨ (sixteen-theme): add AGID naming rules documentation for the Sixteen theme to ensure compliance and consistency)
