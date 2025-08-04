<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
<?php
    $backgroundImage = $isMobile
        ? "/img/landing-mobile-salute-orale.svg"
        : "/img/soluzione-unita-desktop-landing.svg";
    $flagCode = $lang === 'en' ? 'gb' : $lang;
?>

<div 
    style="background-repeat: no-repeat; background-position: top; background-size: cover;"
    class="bg-[url('/img/landing-mobile-salute-orale.svg')] ipad:bg-[url('/img/landing-mobile-salute-orale.svg')] lg:bg-[url('/img/soluzione-unita-per-desktop.svg')] min-h-screen m-0 p-0 bg-top ipad:bg-right-top">
      
    <!-- INIZIO HEADER -->
    <div x-data="{ mobileMenuOpen: false }" class="relative">
      <!-- Header Bar -->
      <div class="w-full h-18 p-2 lg:p-8 flex items-center justify-between">
        <!-- Logo -->
        <div class="flex-shrink-0">
          <img src="/img/logo.png" class="h-7 lg:h-14" alt="Logo" />
        </div>

        <!-- Desktop Navigation - Hidden on Mobile -->
        <div class="hidden lg:flex flex-row items-center space-x-6">
          <a href="/{{ $lang }}/" class="text-white hover:text-gray-200 text-xl transition-colors duration-200">
            @lang('pub_theme::navigation.main_menu.home.label')
          </a>
          <a href="/{{ $lang }}/pages/progetto" class="text-white hover:text-gray-200 text-xl transition-colors duration-200">
            @lang('pub_theme::navigation.main_menu.project.label')
          </a>
          <a href="/{{ $lang }}/pages/partners" class="text-white hover:text-gray-200 text-xl transition-colors duration-200">
            @lang('pub_theme::navigation.main_menu.partners.label')
          </a>
        </div>

        <!-- Desktop Actions - Hidden on Mobile -->
        <div class="hidden lg:flex items-center space-x-4">
          <!-- Language Switcher Desktop ONLY -->
          <div class="hidden lg:block">
            <x-blocks.navigation.language-switcher alignment="right" />
          </div>
          
          <!-- Login/Register Buttons -->
          <div class="flex items-center space-x-4">
            <a href="/{{ $lang }}/auth/login" class="text-white hover:text-gray-200 text-xl transition-colors duration-200">
              @lang('pub_theme::navigation.main_menu.login.label')
            </a>
            <a href="/{{ $lang }}/auth/register">
              <button class="text-white text-xl bg-transparent border-2 border-white py-3 px-6 rounded-lg hover:bg-white/10 transition-colors duration-200">
                @lang('pub_theme::navigation.main_menu.register.label')
              </button>
            </a>
          </div>
        </div>

        <!-- Mobile Hamburger Button - Only visible on Mobile -->
        <button 
          @click="mobileMenuOpen = !mobileMenuOpen"
          class="lg:hidden inline-flex items-center justify-center p-2 rounded-md text-white hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-white transition-colors duration-200"
          aria-label="@lang('pub_theme::navigation.language_switcher.choose_language.label')"
        >
          <!-- Hamburger Icon -->
          <svg x-show="!mobileMenuOpen" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
          <!-- Close Icon -->
          <svg x-show="mobileMenuOpen" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>

      <!-- Mobile Menu Dropdown - Only visible on Mobile when opened -->
      <div
        x-show="mobileMenuOpen"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform -translate-y-4"
        x-transition:enter-end="opacity-100 transform translate-y-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 transform translate-y-0"
        x-transition:leave-end="opacity-0 transform -translate-y-4"
        @click.away="mobileMenuOpen = false"
        class="lg:hidden absolute top-full left-0 right-0 bg-black backdrop-blur-md z-50 mx-2 mt-2 rounded-xl shadow-2xl border border-white/10"
        style="display: none;"
       >
        <div class="px-6 py-6 space-y-6">
          <!-- Navigation Links -->
          <div class="space-y-4">
            <a href="/{{ $lang }}/" 
               @click="mobileMenuOpen = false"
               class="block text-white text-lg font-medium py-3 px-4 hover:bg-white/10 rounded-lg transition-colors duration-200">
              @lang('pub_theme::navigation.main_menu.home.label')
            </a>
            <a href="/{{ $lang }}/pages/progetto" 
               @click="mobileMenuOpen = false"
               class="block text-white text-lg font-medium py-3 px-4 hover:bg-white/10 rounded-lg transition-colors duration-200">
              @lang('pub_theme::navigation.main_menu.project.label')
            </a>
            <a href="/{{ $lang }}/pages/partners" 
               @click="mobileMenuOpen = false"
               class="block text-white text-lg font-medium py-3 px-4 hover:bg-white/10 rounded-lg transition-colors duration-200">
              @lang('pub_theme::navigation.main_menu.partners.label')
            </a>
          </div>

          <!-- Divider -->
          <hr class="border-white/20">

          <!-- Language Switcher -->
          <div class="py-2">
            <div class="text-white text-sm font-medium mb-3 px-4">
              @lang('pub_theme::navigation.language_switcher.choose_language.label')
            </div>
            <x-blocks.navigation.language-switcher :mobileView="true" />
          </div>

          <!-- Divider -->
          <hr class="border-white/20">

          <!-- Login/Register Buttons -->
          <div class="space-y-4 pt-2">
            <a href="/{{ $lang }}/auth/login" 
               @click="mobileMenuOpen = false"
               class="block text-white text-lg font-medium py-3 px-4 hover:bg-white/10 rounded-lg transition-colors duration-200">
              @lang('pub_theme::navigation.main_menu.login.label')
            </a>
            <a href="/{{ $lang }}/auth/register" 
               @click="mobileMenuOpen = false"
               class="block">
              <button class="w-full text-white text-lg bg-transparent border-2 border-white py-3 px-6 rounded-lg hover:bg-white/10 transition-colors duration-200">
                @lang('pub_theme::navigation.main_menu.register.label')
              </button>
            </a>
          </div>
<<<<<<< HEAD
=======
=======
=======
>>>>>>> f7d3ce4f (- update landing-page;)
@props(['currentLocale' => LaravelLocalization::getCurrentLocale()])

@php
    $userAgent = request()->header('User-Agent');
    $isMobile = preg_match('/Mobile|Android|iPhone|iPad|Opera Mini|IEMobile|WPDesktop/i', $userAgent);
    $backgroundImage = $isMobile
        ? "/img/LANDING-MOBILE.svg"
        : "/img/landing-salute-ora-updated.svg";
        $flagCode = $currentLocale === 'en' ? 'gb' : $currentLocale;
@endphp

<x-layouts.main :isLanding="true">
<!DOCTYPE html>
  <head>
    <meta charset="UTF-8" />
    <title>Landing Page SaluteOra</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  </head>

  <body
    style="background-image: url('{{ $backgroundImage }}'); background-repeat: no-repeat; background-position: top; background-size: cover;"
    class="min-h-screen m-0 p-0"
  >
    <!-- INIZIO HEADER -->
    <div>
      <div class="w-full h-18 p-2 lg:p-8 flex flex-row items-center justify-between">
        <div>
          <img src="/img/logo.png" class="h-7 lg:h-14" />
        </div>
        @if (!$isMobile)
        <div class="flex flex-row items-center">
          <a href="/it/">
            <span class="text-white p-4 text-xl">Home</span>
          </a>
          <a href="/it/pages/progetto">
            <span class="text-white p-4 text-xl">Progetto</span>
          </a>
          <a href="/it/pages/partners">
            <span class="text-white p-4 text-xl">Partners</span>
          </a>
        </div>
        <div>
          <a href="/it/auth/login">
            <span class="text-white text-xl p-4">Accedi</span>
          </a>
          <a href="/it/auth/register">
            <button
              class="text-white text-xl bg-transparent border-2 border-white py-4 px-6 rounded-lg"
            >
              Registrati
            </button>
          </a>
        </div>
        @endif
        @if ($isMobile)
        <div>
        <div class="flex md:hidden">
                <button type="button"
                    class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary-500"
                    @click="mobileMenuOpen = !mobileMenuOpen"
                    aria-expanded="false">
                    <span class="sr-only">Apri menu principale</span>
                    {{-- Hamburger Icon --}}
                    <svg x-show="!mobileMenuOpen" class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    {{-- Close Icon --}}
                    <svg x-show="mobileMenuOpen" class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
        @endif
<<<<<<< HEAD
        <div class="w-8 lg:w-9 h-auto">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
          <img src="/img/bandiera-italiana.png" class="m-4" />
>>>>>>> aurmich/dev
=======
=======
>>>>>>> 08fef506 (- create dettaglio paziente (lasciato commentato in attesa di logiche);)
        <x-filament::dropdown>
    <x-slot name="trigger">
=======
          <x-filament::dropdown>
              <x-slot name="trigger">
>>>>>>> 8d28bdca (- updated style area dottore)
        <x-filament::icon-button
            :icon="'ui-flags.' . $flagCode"
            class="inline-flex items-center justify-center gap-2 px-2 py-2 rounded-lg bg-white shadow-sm border border-gray-200 text-gray-700 hover:bg-gray-50 hover:text-gray-900 transition-all duration-150 focus:outline-none focus:ring-2 focus:ring-primary-500"
            :label="$flagCode"
            aria-hidden="true"
        />
              </x-slot>

      <x-filament::dropdown.list>
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            @php
                $flagCode = $localeCode === 'en' ? 'gb' : $localeCode;
            @endphp
            <x-filament::dropdown.list.item
                :icon="'ui-flags.' . $flagCode"
                tag="a"
                :href="LaravelLocalization::getLocalizedURL($localeCode)"
                :color="$currentLocale === $localeCode ? 'primary' : null"
            >
                <span class="font-medium">{{ $properties['native'] }}</span>
            </x-filament::dropdown.list.item>
        @endforeach
<<<<<<< HEAD
    </x-filament::dropdown.list>
</x-filament::dropdown>
<<<<<<< HEAD
>>>>>>> 08fef506 (- create dettaglio paziente (lasciato commentato in attesa di logiche);)
=======
          <img src="/img/bandiera-italiana.png" class="m-4" />
>>>>>>> f7d3ce4f (- update landing-page;)
=======
>>>>>>> 08fef506 (- create dettaglio paziente (lasciato commentato in attesa di logiche);)
=======
         </x-filament::dropdown.list>
          </x-filament::dropdown>
>>>>>>> 8d28bdca (- updated style area dottore)
>>>>>>> aurmich/dev
        </div>
=======
     
>>>>>>> 44693e01 (- updated style confirm reset password)
      </div>
    </div>
    <!-- FINE HEADER -->
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
  
    <!-- INIZIO PRIMA SECTION -->
     <div class="w-full p-8 ipad:h-[50vh] lg:h-dvh flex items-center">
       <div class="w-[60%] ipad:w-[40%] lg:text-4xl ipad:ml-5 lg:ml-32 lg:w-2/5 flex flex-col justify-start">
         <h1 class="text-[#FF5F7E] text-[40px] ipad:text-4xl lg:text-8xl leading-tight font-bold mb-2.5">
           @lang('pub_theme::navigation.hero.welcome_title.label')
         </h1>
         <span class="w-4/5 lg:w-auto text-white text-lg lg:text-2xl leading-slug mt-5">
           @lang('pub_theme::navigation.hero.welcome_subtitle.label')
         </span>
         <a href="/{{ $lang }}/auth/register">
           <button
             class="w-40 lg:w-44 bg-[#FF5F7E] text-white py-3 px-7 rounded-lg text-xl lg:text-2xl mt-5 transform origin-center scale-100 hover:scale-110 transition-transform duration-100"
           >
             @lang('pub_theme::navigation.hero.start_now.label')
           </button>
         </a>
       </div>
     </div>
    <!-- FINE PRIMA SECTION -->
    <!-- INIZIO SECONDA SECTION -->
    <div class="w-full flex flex-col justify-start items-center">
      <div class="flex justify-center lg:w-full p-6 mt-12 ipad:mt-28 lg:mt-24">
        <h1 class="md:w-3/4  ipad:w-3/4 text-[#FF5F7E] text-center">
          @lang('pub_theme::navigation.hero.importance_title.label')
        </h1>
      </div>
      <div class="w-5/6 flex flex-col lg:flex-row justify-around items-center lg:items-start mt-0 lg:mt-10">
        <div class="w-full lg:w-2/4 p-4 flex flex-col items-center">
          <h2 class="text-[#FF5F7E] text-center mb-3">
          @lang('pub_theme::navigation.hero.importance_title_1.label')
          </h2>
          <p class="text-white text-center text-lg lg:text-2xl leading-8">
          @lang('pub_theme::navigation.hero.importance_text_1.label')
          </p>
        </div>
        <div class="w-full lg:w-2/4 p-4 flex flex-col items-center">
          <h2 class="text-[#FF5F7E] text-center mb-3">
          @lang('pub_theme::navigation.hero.importance_title_2.label')
          </h2>
          <p class="text-white text-center text-lg lg:text-2xl leading-8">
          @lang('pub_theme::navigation.hero.importance_text_2.label')
          </p>
        </div>
        <div class="w-full lg:w-2/4 p-4 flex flex-col items-center">
          <h2 class="text-[#FF5F7E] text-center mb-3">
          @lang('pub_theme::navigation.hero.importance_title_3.label')
          </h2>
          <p class="text-white text-center text-lg lg:text-2xl leading-8">
          @lang('pub_theme::navigation.hero.importance_text_3.label')
          </p>
        </div>
      </div>
      <div class="w-full flex justify-center my-5">
        <a href="/{{ $lang }}/pages/progetto">
          <button class="bg-[#FF5F7E] text-white rounded-md py-3 px-6 text-xl transform origin-center scale-100 hover:scale-110 transition-transform duration-100">@lang('pub_theme::navigation.hero.discover_project.label')</button>
        </a>
      </div>
    </div>
    <!-- FINE SECONDA SECTION -->
    <!-- INIZIO TERZA SECTION -->
    <div class="relative bg-[#FCD5D0] bg-cover m-4 ipad:m-14 lg:m-20 rounded-[35px] p-6 lg:p-0">
      <img src="/img/inmp-trasparenza-5.svg" class="absolute inset-0 w-full h-full object-contain p-5 pointer-events-none"/>
      <div
        class="flex flex-col ipad:flex-col lg:flex-row items-center justify-around lg:justify-center h-[750px] bg-cover bg-inmp-filigrana"
      >
        <div>
          <img class="h-72 lg:h-[500px]" src="/img/dentist.png"/>
        </div>
        <div class="flex flex-col items-center">
          <h1 class="text-[#272C4D] text-center text-4xl ipad:text-5xl lg:text-6xl">@lang('pub_theme::landing.participation.title.label')</h1>
          <span class="text-[#272C4D] text-center text-xl mt-10">@lang('pub_theme::landing.participation.subtitle.label')</span>
          <a href="{{ route('register') }}">
          <button
            class="w-44 text-[#272C4D] text-xl lg:text-2xl mt-10 border-[#272C4D] border-2 py-2 px-5 lg:py-3 lg:px-7 rounded-lg"
          >
            @lang('pub_theme::navigation.main_menu.register.label')
<<<<<<< HEAD
=======
=======
=======
>>>>>>> f7d3ce4f (- update landing-page;)
    <!-- INIZIO PRIMA SECTION -->
    <div class="w-4/5 p-6 lg:mt-60 lg:ml-32 lg:w-2/5 flex flex-col justify-start">
      <h1 class="text-[#FF5F7E] text-[40px] lg:text-8xl leading-tight font-bold mb-2.5">
        Benvenuta su <br />
        Salute Orale
      </h1>
      <span class="w-4/5 lg:w-auto text-[#FCD5D0] text-lg lg:text-2xl leading-slug">
        Il portale che vuole garantire alle pazienti vulnerabili in stato di
        gravidanza la possibilità di accedere a servizi odonoiatrici di
        prevenzione a titolo completamente gratuito
      </span>
      <a href="/it/auth/register">
        <button
          class="w-40 lg:w-44 bg-[#FF5F7E] text-white py-3 px-7 rounded-lg text-xl lg:text-2xl mt-4"
        >
          Inizia Ora
        </button>
      </a>
    </div>
    <!-- FINE PRIMA SECTION -->
    <!-- INIZIO SECONDA SECTION -->
    <div>
      <div class="md:w-2/4 lg:w-full p-6 mt-12 lg:mt-52 flex justify-center">
        <h2 class="text-[#FF5F7E] text-3xl lg:text-4xl text-center">
          Perché é importante la salute orale in gravidanza?
        </h2>
      </div>
      <div class="flex flex-col lg:flex-row justify-around items-center lg:items-start mt-0 lg:mt-10">
        <div class="w-96 flex flex-col justify-center m-5 text-center">
          <span class="text-[#FCD5D0] text-xl lg:text-2xl mb-5">Prevenzione</span>
          <p class="text-[#FCD5D0] text-lg">
            La prevenzione odontoiatrica in gravidanza é fondamentale per la
            salute della mamma e del bambino
          </p>
        </div>
        <div class="w-96 flex flex-col justify-center m-5 text-center">
          <span class="text-[#FCD5D0] text-xl lg:text-2xl mb-5">Assistenza</span>
          <p class="text-[#FCD5D0] text-lg">
            Offriamo assistenza odontoiatrica specialistica per le gestanti
          </p>
        </div>
        <div class="w-96 flex flex-col justify-center m-5 text-center">
          <span class="text-[#FCD5D0] text-xl lg:text-2xl mb-5">Supporto</span>
          <p class="text-[#FCD5D0] text-lg">
            Supporto completo per le gestanti in condizioni di vulnerabilità
          </p>
        </div>
      </div>
    </div>
    <!-- FINE SECONDA SECTION -->
    <!-- INIZIO TERZA SECTION -->
    <div class="relative bg-[#FCD5D0] bg-cover m-4 lg:m-20 rounded-[35px] p-5 lg:p-0">
      <img src="/img/inmp-trasparenza-5.svg" class="absolute inset-0 w-full h-full object-contain z-0 p-5"/>
      <div
        class="flex flex-col lg:flex-row items-center justify-around lg:justify-center h-[750px] bg-cover bg-inmp-filigrana"
      >
        <div>
          <img class="h-72 lg:h-[500px]" src="/img/dentist.png" />
        </div>
        <div class="flex flex-col items-center">
          <h1 class="text-[#272C4D] text-center text-4xl lg:text-6xl">Vuoi partecipare al progetto?</h1>
          <span class="text-[#272C4D] text-center text-xl mt-10">Unisciti alla rete di professionisti che si prendono cura della
            salute orale delle gestanti</span>
          <a href="/it/auth/register">
          <button
            class="w-44 text-[#272C4D] text-xl lg:text-2xl mt-10 border-[#272C4D] border-2 py-2 px-5 lg:py-3 lg:px-7 rounded-lg"
          >
            Registrati
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
>>>>>>> f7d3ce4f (- update landing-page;)
>>>>>>> aurmich/dev
          </button>
        </a>
        </div>
      </div>
    </div>
    <!-- FINE TERZA SECTION -->
    <!-- INIZIO QUARTA SECTION -->
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
     <div class="mt-5">
       <div class="w-full flex justify-center">
         <h1 class="text-[#FF5F7E] text-3xl">@lang('pub_theme::navigation.landing.additional_info.label')</h1>
       </div>
       <div class="h-auto pt-5 flex flex-col lg:flex-row justify-center items-center">
         <div class="w-3/5 lg:w-1/5 h-auto bg-cover bg-[#FCD5D0] rounded-[25px] m-5 transform origin-center scale-100 hover:scale-110 transition-transform duration-100">
<<<<<<< HEAD
=======
=======
     <div class="mt-5">
       <div class="w-full flex justify-center">
         <h1 class="text-[#FF5F7E] text-3xl">Per informazioni aggiuntive</h1>
       </div>
       <div class="h-auto pt-5 flex flex-col lg:flex-row justify-center items-center">
<<<<<<< HEAD
         <div class="w-64 h-auto bg-cover bg-[#FCD5D0] rounded-[25px] m-5">
>>>>>>> 8d28bdca (- updated style area dottore)
=======
         <div class="w-3/5 lg:w-1/5 h-auto bg-cover bg-[#FCD5D0] rounded-[25px] m-5">
>>>>>>> 0c7257a8 (- updated testi sale d'attesa)
>>>>>>> aurmich/dev
           <div class="grid grid-cols-2">
             <div class="flex justify-center">
               <img class="h-44 px-2 pt-2" src="/img/woman-characterrr.png" />
             </div>
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
             <div class="flex flex-col items-center justify-center m-5">
               <span class="text-[#FF5F7E] text-xl lg:text-2xl text-center"
                 >@lang('pub_theme::navigation.landing.consult_guide.label')</span
               >
             </div>
           </div>
         </div>
         <div class="w-3/5 lg:w-1/5 h-auto bg-[#FCD5D0] rounded-[25px] m-5 transform origin-center scale-100 hover:scale-110 transition-transform duration-100">
<<<<<<< HEAD
=======
=======
             <div class="flex flex-col items-center justify-center">
               <span class="text-[#FF5F7E] text-xl lg:text-2xl"
                 >Vai <br />
                 alla <br />
                 guida</span
               >
               <svg
                 xmlns="http://www.w3.org/2000/svg"
                 fill="none"
                 viewBox="0 0 24 24"
                 stroke-width="1.5"
                 stroke="#FF5F7E"
                 class="size-6"
               >
                 <path
                   stroke-linecap="round"
                   stroke-linejoin="round"
                   d="m16.49 12 3.75 3.75m0 0-3.75 3.75m3.75-3.75H3.74V4.499"
                 />
               </svg>
             </div>
           </div>
         </div>
<<<<<<< HEAD
         <div class="w-64 h-auto bg-[#FCD5D0] rounded-[25px] m-5">
>>>>>>> 8d28bdca (- updated style area dottore)
=======
         <div class="w-3/5 lg:w-1/5 h-auto bg-[#FCD5D0] rounded-[25px] m-5">
>>>>>>> 0c7257a8 (- updated testi sale d'attesa)
>>>>>>> aurmich/dev
           <div class="grid grid-cols-2 gap-2">
             <div class="flex justify-center">
               <img class="h-44 p-2" src="/img/dentist.png" />
             </div>
<<<<<<< HEAD
             <div class="flex flex-col items-center justify-center m-5">
               <span class="text-[#FF5F7E] text-xl lg:text-2xl text-center"
                 >@lang('pub_theme::navigation.landing.consult_guide.label')</span>
=======
<<<<<<< HEAD
             <div class="flex flex-col items-center justify-center m-5">
               <span class="text-[#FF5F7E] text-xl lg:text-2xl text-center"
                 >@lang('pub_theme::navigation.landing.consult_guide.label')</span>
=======
             <div class="flex flex-col items-center justify-center">
               <span class="text-[#FF5F7E] text-xl lg:text-2xl"
                 >Vai <br />
                 alla <br />
                 guida</span
               >
               <svg
                 xmlns="http://www.w3.org/2000/svg"
                 fill="none"
                 viewBox="0 0 24 24"
                 stroke-width="1.5"
                 stroke="#FF5F7E"
                 class="size-6"
               >
                 <path
                   stroke-linecap="round"
                   stroke-linejoin="round"
                   d="m16.49 12 3.75 3.75m0 0-3.75 3.75m3.75-3.75H3.74V4.499"
                 />
               </svg>
>>>>>>> 8d28bdca (- updated style area dottore)
>>>>>>> aurmich/dev
             </div>
           </div>
         </div>
       </div>
     </div>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
    <div class="w-full flex justify-center">
      <h1 class="text-[#FF5F7E] text-3xl">Per informazioni aggiuntive</h1>
    </div>
    <div class="h-64 pt-5 flex flex-col lg:flex-row justify-center items-center">
=======
    <div class="w-full flex justify-center">
      <h1 class="text-[#FF5F7E] text-3xl">Per informazioni aggiuntive</h1>
    </div>
<<<<<<< HEAD
    <div class="h-96 pt-5 flex flex-col lg:flex-row justify-center items-center">
>>>>>>> f7d3ce4f (- update landing-page;)
=======
    <div class="h-64 pt-5 flex flex-col lg:flex-row justify-center items-center">
>>>>>>> c0c82b7e (- updated template email)
      <div class="w-64 h-44 bg-cover bg-[#FCD5D0] rounded-[25px] m-5">
        <div class="grid grid-cols-2">
          <div class="flex justify-center">
            <img class="h-44 px-2 pt-2" src="/img/woman-characterrr.png" />
          </div>
          <div class="flex flex-col items-center justify-center">
            <span class="text-[#FF5F7E] text-xl lg:text-2xl"
              >Vai <br />
              alla <br />
              guida</span
            >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="#FF5F7E"
              class="size-6"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="m16.49 12 3.75 3.75m0 0-3.75 3.75m3.75-3.75H3.74V4.499"
              />
            </svg>
          </div>
        </div>
      </div>
      <div class="w-64 h-44 bg-[#FCD5D0] rounded-[25px] m-5">
        <div class="grid grid-cols-2 gap-2">
          <div class="flex justify-center">
            <img class="h-44 p-2" src="/img/dentist.png" />
          </div>
          <div class="flex flex-col items-center justify-center">
            <span class="text-[#FF5F7E] text-xl lg:text-2xl"
              >Vai <br />
              alla <br />
              guida</span
            >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="#FF5F7E"
              class="size-6"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="m16.49 12 3.75 3.75m0 0-3.75 3.75m3.75-3.75H3.74V4.499"
              />
            </svg>
          </div>
        </div>
      </div>
    </div>
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
>>>>>>> f7d3ce4f (- update landing-page;)
=======
>>>>>>> 8d28bdca (- updated style area dottore)
>>>>>>> aurmich/dev
    <!-- FINE QUARTA SECTION -->
    <!-- INIZIO QUINTA SECTION -->
    <div class="flex flex-col items-center  pt-7">
      <div>
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
        <h1 class="text-[#FF5F7E] text-3xl">@lang('pub_theme::navigation.landing.participation.label')</h1>
      </div>
      <div class="flex flex-col lg:flex-row items-center lg:items-baseline justify-center w-full">
        <div class="p-5">
          <a href="https://www.inmp.it/" target="_blank">
            <img class="h-48 lg:h-40 p-5" src="/img/logo-INMP-per-landing.svg" />
          </a>
        </div>
        <div class="p-5">
          <a href="https://fondazioneandi.org/" target="_blank">
            <img class="h-44 lg:h-[150px] p-5" src="/img/fondazione-andi-white.png" />
          </a>
        </div>
        <div class="p-5">
          <a href="https://www.cooperazioneodontoiatrica.eu/" target="_blank">
            <img class="h-28 lg:h-28 p-5" src="/img/coi-logo-updated.png" />
          </a>
<<<<<<< HEAD
=======
=======
=======
>>>>>>> f7d3ce4f (- update landing-page;)
        <h1 class="text-[#FF5F7E] text-3xl">Con la partecipazione di</h1>
      </div>
      <div class="flex flex-col lg:flex-row items-center">
        <div class="p-5">
<<<<<<< HEAD
<<<<<<< HEAD
          <img class="h-16 lg:h-[150px]" src="/img/coi-logo-updated.png" />
        </div>
        <div class="p-5">
          <img class="h-16 lg:h-[150px]" src="/img/fondazione-andi-white.png" />
<<<<<<< HEAD
        </div>
        <div class="p-5">
          <img class="h-16 lg:h-[150px]" src="/img/inmp-logo-piccolo-updated.png" />
>>>>>>> aurmich/dev
=======
          <img class="h-16 lg:h-[150px]" src="/img/logo-coi.png" />
=======
          <img class="h-16 lg:h-[150px]" src="/img/coi-logo-updated.png" />
>>>>>>> 267b8f14 (- pagine "privacy policy", "termini e condizioni", "cookie policy", "faqs")
        </div>
        <div class="p-5">
          <img class="h-16 lg:h-[150px]" src="/img/fondazione-andi-logo-updated.png" />
=======
>>>>>>> c0c82b7e (- updated template email)
        </div>
        <div class="p-5">
<<<<<<< HEAD
          <img class="h-16 lg:h-[150px]" src="/img/inmp-logo-piccolo.png" />
>>>>>>> f7d3ce4f (- update landing-page;)
=======
          <img class="h-16 lg:h-[150px]" src="/img/inmp-logo-piccolo-updated.png" />
>>>>>>> 267b8f14 (- pagine "privacy policy", "termini e condizioni", "cookie policy", "faqs")
>>>>>>> aurmich/dev
        </div>
      </div>
    </div>
    <!-- FINE QUINTA SECTION -->
    <!-- INIZIO FOOTER -->
    <!-- <div class="mt-20">
      <hr class="text-[#FCD5D0]" />
     </div>
     <div class="h-64 flex flex-row items-center justify-evenly">
      <div class="flex flex-row items-center">
        <span class="text-white text-xl m-3">Privacy Policy</span>
        <span class="text-white text-xl m-3">Termini e Condizioni</span>
        <span class="text-white text-xl m-3">Cookie Policy</span>
      </div>
      <div class="m-5">
        <img src="/img/logo.png" class="h-14" />
      </div>
      <div class="flex flex-row items-center">
        <span class="text-white text-xl m-3">Home</span>
        <span class="text-white text-xl m-3">Progetto</span>
        <span class="text-white text-xl m-3">Partners</span>
        <span class="text-white text-xl m-3">FAQ'S</span>
      </div>
    </div> -->
    <!-- FINE FOOTER -->
<<<<<<< HEAD
</div>

=======
<<<<<<< HEAD
<<<<<<< HEAD
</div>

=======
</body>
</x-layouts.main>
>>>>>>> aurmich/dev
=======
</body>
</x-layouts.main>
>>>>>>> f7d3ce4f (- update landing-page;)
>>>>>>> aurmich/dev
