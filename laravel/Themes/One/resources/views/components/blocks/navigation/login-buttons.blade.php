@props([
    'alignment' => 'right',
])

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 58d017c2 (- aggiornato stile dettaglio paziente)
@php
    $userAgent = request()->header('User-Agent');
    $isMobile = preg_match('/Mobile|Android|iPhone|iPad|Opera Mini|IEMobile|WPDesktop/i', $userAgent);
@endphp

@if (!$isMobile)
<<<<<<< HEAD
<div class="flex items-center space-x-4 !m-1">
    <a href="{{ route('login') }}" class="text-sm font-medium text-[#E2E8F0] hover:text-[#E2E8F0]">
<<<<<<< HEAD
        {{ __('pub_theme::auth.login.title') }}
    </a>

    <a href="{{ route('register') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md !text-white bg-[#FF5F7E]">
        {{ __('pub_theme::auth.register.title') }}
=======
        {{ __('auth.login.title') }}
    </a>

    <a href="{{ route('register') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md !text-white bg-[#FF5F7E]">
        {{ __('auth.register.title') }}
>>>>>>> aurmich/dev
    </a>
</div>
@endif
=======
<div class="flex items-center space-x-4">
=======
=======
>>>>>>> 58d017c2 (- aggiornato stile dettaglio paziente)
<div class="flex items-center space-x-4 m-12">
>>>>>>> f2140a80 (- continuo style landing page;)
    <a href="{{ route('login') }}" class="text-sm font-medium text-[#E2E8F0] hover:text-[#E2E8F0]">
        {{ __('auth.login.title') }}
    </a>

    <a href="{{ route('register') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md !text-white bg-[#0D9488]">
        {{ __('auth.register.title') }}
    </a>
</div>
<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======
@endif
>>>>>>> 58d017c2 (- aggiornato stile dettaglio paziente)
