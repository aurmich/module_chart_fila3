@props([
    'title' => 'Titolo Hero',
    'subtitle' => 'Sottotitolo della hero section',
    'image' => null,
    'cta_text' => null,
    'cta_link' => '#',
    'background_color' => 'bg-white',
    'text_color' => 'text-slate-900',
    'cta_color' => 'bg-primary-600 hover:bg-primary-700'
])

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
@php
    $appointments=$user->appointments;
@endphp
      
<section class="flex items-start relative overflow-hidden">
  <div class="w-full px-4 sm:px-6 lg:px-8 pt-12">
    <div class="flex flex-col items-center justify-center gap-8 lg:flex-row lg:justify-evenly">
      <div class="flex flex-col text-center lg:items-start lg:text-left">
        <h1 class="text-[#272C4D] text-4xl tracking-tight font-extrabold sm:text-5xl lg:text-5xl">
          @lang('pub_theme::common.welcome.label'), {{ $user?->full_name }}
        </h1>
        <!-- <span class="text-lg mt-4">Qui puoi trovare i dettagli del tuo appuntamento</span> -->
      </div>
      <div class="relative w-60 h-60 rounded-full bg-[#E6EBF7] shadow-lg overflow-hidden">
        <img
          src="/img/donna-area-paziente.svg"
          alt="Paziente"
          class="w-full h-full object-contain"
        />
      </div>

    </div>
  </div>
</section>
@each('pub_theme::appointment.item', $appointments, 'appointment','pub_theme::appointment.empty')
@if($user->canBook())
@include('pub_theme::appointment.book')
@endif
{{-- AREA PERSONALE PAZIENTE --}}
<!-- <section 
    class="flex items-start bg-[#E6EBF7] relative overflow-hidden">
    <div class="w-full px-4 sm:px-6 lg:px-8 pt-12">
        <div>
            <div class="w-full flex flex-col-reverse lg:flex-row justify-evenly gap-8">
                <div class="flex justify-center">
                    <div class="h-full flex flex-col items-start justify-center">
                    <h1
                        class="text-[#272C4D] text-4xl tracking-tight font-extrabold sm:text-5xl lg:text-5xl text-center">
                        {{ $title }}
                    </h1>
                    <span class="text-lg mt-4 text-center lg:text-left">Qui puoi trovare i dettagli del tuo appuntamento</span>
                    </div>

                </div>
             
                <div class="flex justify-center">
                    <img class="w-32 lg:w-44" src="/img/donna-area-paziente.svg"/>
                </div>
            </div>
        </div>
    </div>
</section> -->



 
</div>


=======
=======
@php
    use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
    use Modules\SaluteOra\Enums\UserTypeEnum;

    // Inizializzazione delle variabili con valori di default
    $user = $user ?? auth()->user();
    $locale = LaravelLocalization::getCurrentLocale();
    $isLoggedIn = auth()->check();
    $appointments=$user->appointments;
    //0197d5d2-7077-7030-83b9-28f2d209fa63
    //dddx($user->appointments()->ddRawSql());
    
    //$appointments=collect();  // per testare zero appuntamenti
@endphp
<<<<<<< HEAD
>>>>>>> 3a1259c1 (- updated dettaglio-paziente;)


=======
{{--  
NUMERO APPUNTAMENTI: {{  $appointments?->count() ?? 0}}
--}}
>>>>>>> 0cff2983 (📝 (docs): remove unused Blade file for appointments to clean up the codebase)
{{-- STEP PRENOTA VISITA --}}


      {{-- TITOLO E BOTTONI --}}
<<<<<<< HEAD
      <div class="flex flex-col justify-center">
          <section 
              class="flex flex-col justify-center min-h-[700px] relative overflow-hidden"
              aria-labelledby="hero-heading">
              <div class="m-5">
                  <div>
                      <div class="text-center md:max-w-2xl md:mx-auto lg:col-span-6">
                          <h1 
                              id="hero-heading"
                              class="text-[#272C4D] text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl lg:text-5xl xl:text-6xl">
                              Bentornata, </br> nome
                          </h1>
                          
                          <p class="mt-3 text-gray-600 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                              {{ $subtitle }}
                          </p>
          
                          @if($cta_text)
                              <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                                  <div class="rounded-md shadow">
                                      <a 
                                          href="{{ Blade::render($cta_link) }}"
                                          class="flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md bg-[#272C4D] !text-white md:py-4 md:text-lg md:px-10 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-colors duration-200"
                                          role="button"
                                          aria-label="{{ $cta_text }}"
                                      >
                                          {{ $cta_text }}
                                      </a>
                                  </div>
                              </div>
                          @endif
                      </div>
          
                      @if($image)
                          <div class="mt-12 relative sm:max-w-lg sm:mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-span-6 lg:flex lg:items-center">
                              <div class="relative mx-auto w-full rounded-lg shadow-lg lg:max-w-md">
                                  <img
                                      class="w-full h-auto rounded-lg"
                                      src="{{ $image }}"
                                      alt=""
                                      aria-hidden="true"
                                      loading="lazy"
                                  >
                              </div>
                          </div>
                      @endif
                  </div>
              </div>
              {{-- BOTTONI --}}
               <div class="w-full flex justify-center !py-8 sm:py-32 mx-auto">
                <div class="w-full mx-auto max-w-7xl lg:px-6 sm:px-3">
                    <div class="flex flex-col items-center mx-auto w-full max-w-2xl px-4 sm:px-6 lg:px-0 gap-4">
                        <a href="/it/patient/book">
                      <div class="w-[350px] bg-gradient-to-r from-cyan-500 to-[#1A467F] p-6 text-white rounded-lg text-lg items-center flex justify-center cursor-pointer">Prenota una visita
                      <span class="cursor-pointer ml-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                            </svg>
                        </span>
                      </div>
                       </a>
                    </div>
                </div>
               </div>  
          </section>
  </div>      
</div>

<<<<<<< HEAD
      {{-- CALENDARIO --}}
      </div>
>>>>>>> aurmich/dev
=======
=======
      
<section class="flex items-start relative overflow-hidden">
  <div class="w-full px-4 sm:px-6 lg:px-8 pt-12">
    <div class="flex flex-col items-center justify-center gap-8 lg:flex-row lg:justify-evenly">
      <div class="flex flex-col text-center lg:items-start lg:text-left">
        <h1 class="text-[#272C4D] text-4xl tracking-tight font-extrabold sm:text-5xl lg:text-5xl">
          Bentornata, {{ $user?->full_name }}
        </h1>
        <!-- <span class="text-lg mt-4">Qui puoi trovare i dettagli del tuo appuntamento</span> -->
      </div>
      <div class="relative w-60 h-60 rounded-full bg-[#E6EBF7] shadow-lg overflow-hidden">
        <img
          src="/img/donna-area-paziente.svg"
          alt="Paziente"
          class="w-full h-full object-contain"
        />
      </div>
>>>>>>> 3a1259c1 (- updated dettaglio-paziente;)

    </div>
  </div>
</section>
@each('pub_theme::appointment.item', $appointments, 'appointment','pub_theme::appointment.empty')
{{-- AREA PERSONALE PAZIENTE --}}
<!-- <section 
    class="flex items-start bg-[#E6EBF7] relative overflow-hidden">
    <div class="w-full px-4 sm:px-6 lg:px-8 pt-12">
        <div>
            <div class="w-full flex flex-col-reverse lg:flex-row justify-evenly gap-8">
                <div class="flex justify-center">
                    <div class="h-full flex flex-col items-start justify-center">
                    <h1
                        class="text-[#272C4D] text-4xl tracking-tight font-extrabold sm:text-5xl lg:text-5xl text-center">
                        {{ $title }}
                    </h1>
                    <span class="text-lg mt-4 text-center lg:text-left">Qui puoi trovare i dettagli del tuo appuntamento</span>
                    </div>

                </div>
             
                <div class="flex justify-center">
                    <img class="w-32 lg:w-44" src="/img/donna-area-paziente.svg"/>
                </div>
            </div>
        </div>
    </div>
</section> -->



 
</div>


>>>>>>> 08fef506 (- create dettaglio paziente (lasciato commentato in attesa di logiche);)
=======


{{-- STEP PRENOTA VISITA --}}

<div class="bg-[#E6EBF7] lg:grid grid-cols-1 sm:grid grid-cols-1">
      {{-- TITOLO E BOTTONI --}}
      <div class="flex flex-col justify-center">
          <section 
              class="flex flex-col justify-center min-h-[700px] bg-[#E6EBF7] relative overflow-hidden"
              aria-labelledby="hero-heading">
              <div class="m-5">
                  <div>
                      <div class="text-center md:max-w-2xl md:mx-auto lg:col-span-6">
                          <h1 
                              id="hero-heading"
                              class="text-[#272C4D] text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl lg:text-5xl xl:text-6xl">
                              Bentornata, </br> nome
                          </h1>
                          
                          <p class="mt-3 text-gray-600 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                              {{ $subtitle }}
                          </p>
          
                          @if($cta_text)
                              <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                                  <div class="rounded-md shadow">
                                      <a 
                                          href="{{ Blade::render($cta_link) }}"
                                          class="flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md bg-[#272C4D] !text-white md:py-4 md:text-lg md:px-10 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-colors duration-200"
                                          role="button"
                                          aria-label="{{ $cta_text }}"
                                      >
                                          {{ $cta_text }}
                                      </a>
                                  </div>
                              </div>
                          @endif
                      </div>
          
                      @if($image)
                          <div class="mt-12 relative sm:max-w-lg sm:mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-span-6 lg:flex lg:items-center">
                              <div class="relative mx-auto w-full rounded-lg shadow-lg lg:max-w-md">
                                  <img
                                      class="w-full h-auto rounded-lg"
                                      src="{{ $image }}"
                                      alt=""
                                      aria-hidden="true"
                                      loading="lazy"
                                  >
                              </div>
                          </div>
                      @endif
                  </div>
              </div>
              {{-- BOTTONI --}}
               <div class="w-full flex justify-center bg-[#E6EBF7] !py-8 sm:py-32 mx-auto">
                <div class="w-full mx-auto max-w-7xl lg:px-6 sm:px-3">
                    <div class="flex flex-col items-center mx-auto w-full max-w-2xl px-4 sm:px-6 lg:px-0 gap-4">
                        <a href="/it/patient/book">
                      <div class="w-[350px] bg-gradient-to-r from-cyan-500 to-[#1A467F] p-6 text-white rounded-lg text-lg items-center flex justify-center cursor-pointer">Prenota una visita
                      <span class="cursor-pointer ml-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                            </svg>
                        </span>
                      </div>
                       </a>
                    </div>
                </div>
               </div>  
          </section>
  </div>      
</div>

<<<<<<< HEAD
      {{-- CALENDARIO --}}
<<<<<<< HEAD
      <div class="w-full flex justify-center">
      <div class="w-[450px] p-10 flex flex-col justify-center">
        <div>
            <section class="text-center">
              <h2 class="text-sm font-semibold text-gray-900">January</h2>
              <div class="mt-6 grid grid-cols-7 text-xs/6 text-gray-500">
                <div>M</div>
                <div>T</div>
                <div>W</div>
                <div>T</div>
                <div>F</div>
                <div>S</div>
                <div>S</div>
              </div>
              <div class="isolate mt-2 grid grid-cols-7 gap-px rounded-lg bg-gray-200 text-sm shadow ring-1 ring-gray-200">
                <!--
                  Always include: "py-1.5 hover:bg-gray-100 focus:z-10"
                  Is current month, include: "bg-white text-gray-900"
                  Is not current month, include: "bg-gray-50 text-gray-400"
        
                  Top left day, include: "rounded-tl-lg"
                  Top right day, include: "rounded-tr-lg"
                  Bottom left day, include: "rounded-bl-lg"
                  Bottom right day, include: "rounded-br-lg"
                -->
                <button type="button" class="relative rounded-tl-lg bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                  <!--
                    Always include: "mx-auto flex size-7 items-center justify-center rounded-full"
                    Is today, include: "bg-indigo-600 font-semibold text-white"
                  -->
                  <time datetime="2021-12-27" class="mx-auto flex size-7 items-center justify-center rounded-full">27</time>
                </button>
                <button type="button" class="relative bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                  <time datetime="2021-12-28" class="mx-auto flex size-7 items-center justify-center rounded-full">28</time>
                </button>
                <button type="button" class="relative bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                  <time datetime="2021-12-29" class="mx-auto flex size-7 items-center justify-center rounded-full">29</time>
                </button>
                <button type="button" class="relative bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                  <time datetime="2021-12-30" class="mx-auto flex size-7 items-center justify-center rounded-full">30</time>
                </button>
                <button type="button" class="relative bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                  <time datetime="2021-12-31" class="mx-auto flex size-7 items-center justify-center rounded-full">31</time>
                </button>
                <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                  <time datetime="2022-01-01" class="mx-auto flex size-7 items-center justify-center rounded-full">1</time>
                </button>
                <button type="button" class="relative rounded-tr-lg bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                  <time datetime="2022-01-02" class="mx-auto flex size-7 items-center justify-center rounded-full">2</time>
                </button>
                <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                  <time datetime="2022-01-03" class="mx-auto flex size-7 items-center justify-center rounded-full">3</time>
                </button>
                <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                  <time datetime="2022-01-04" class="mx-auto flex size-7 items-center justify-center rounded-full">4</time>
                </button>
                <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                  <time datetime="2022-01-05" class="mx-auto flex size-7 items-center justify-center rounded-full">5</time>
                </button>
                <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                  <time datetime="2022-01-06" class="mx-auto flex size-7 items-center justify-center rounded-full">6</time>
                </button>
                <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                  <time datetime="2022-01-07" class="mx-auto flex size-7 items-center justify-center rounded-full">7</time>
                </button>
                <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                  <time datetime="2022-01-08" class="mx-auto flex size-7 items-center justify-center rounded-full">8</time>
                </button>
                <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                  <time datetime="2022-01-09" class="mx-auto flex size-7 items-center justify-center rounded-full">9</time>
                </button>
                <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                  <time datetime="2022-01-10" class="mx-auto flex size-7 items-center justify-center rounded-full">10</time>
                </button>
                <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                  <time datetime="2022-01-11" class="mx-auto flex size-7 items-center justify-center rounded-full">11</time>
                </button>
                <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                  <time datetime="2022-01-12" class="mx-auto flex size-7 items-center justify-center rounded-full bg-indigo-600 font-semibold text-white">12</time>
                </button>
                <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                  <time datetime="2022-01-13" class="mx-auto flex size-7 items-center justify-center rounded-full">13</time>
                </button>
                <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                  <time datetime="2022-01-14" class="mx-auto flex size-7 items-center justify-center rounded-full">14</time>
                </button>
                <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                  <time datetime="2022-01-15" class="mx-auto flex size-7 items-center justify-center rounded-full">15</time>
                </button>
                <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                  <time datetime="2022-01-16" class="mx-auto flex size-7 items-center justify-center rounded-full">16</time>
                </button>
                <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                  <time datetime="2022-01-17" class="mx-auto flex size-7 items-center justify-center rounded-full">17</time>
                </button>
                <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                  <time datetime="2022-01-18" class="mx-auto flex size-7 items-center justify-center rounded-full">18</time>
                </button>
                <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                  <time datetime="2022-01-19" class="mx-auto flex size-7 items-center justify-center rounded-full">19</time>
                </button>
                <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                  <time datetime="2022-01-20" class="mx-auto flex size-7 items-center justify-center rounded-full">20</time>
                </button>
                <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                  <time datetime="2022-01-21" class="mx-auto flex size-7 items-center justify-center rounded-full">21</time>
                </button>
                <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                  <time datetime="2022-01-22" class="mx-auto flex size-7 items-center justify-center rounded-full">22</time>
                </button>
                <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                  <time datetime="2022-01-23" class="mx-auto flex size-7 items-center justify-center rounded-full">23</time>
                </button>
                <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                  <time datetime="2022-01-24" class="mx-auto flex size-7 items-center justify-center rounded-full">24</time>
                </button>
                <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                  <time datetime="2022-01-25" class="mx-auto flex size-7 items-center justify-center rounded-full">25</time>
                </button>
                <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                  <time datetime="2022-01-26" class="mx-auto flex size-7 items-center justify-center rounded-full">26</time>
                </button>
                <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                  <time datetime="2022-01-27" class="mx-auto flex size-7 items-center justify-center rounded-full">27</time>
                </button>
                <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                  <time datetime="2022-01-28" class="mx-auto flex size-7 items-center justify-center rounded-full">28</time>
                </button>
                <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                  <time datetime="2022-01-29" class="mx-auto flex size-7 items-center justify-center rounded-full">29</time>
                </button>
                <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                  <time datetime="2022-01-30" class="mx-auto flex size-7 items-center justify-center rounded-full">30</time>
                </button>
                <button type="button" class="relative rounded-bl-lg bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                  <time datetime="2022-01-31" class="mx-auto flex size-7 items-center justify-center rounded-full">31</time>
                </button>
                <button type="button" class="relative bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                  <time datetime="2022-02-01" class="mx-auto flex size-7 items-center justify-center rounded-full">1</time>
                </button>
                <button type="button" class="relative bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                  <time datetime="2022-02-02" class="mx-auto flex size-7 items-center justify-center rounded-full">2</time>
                </button>
                <button type="button" class="relative bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                  <time datetime="2022-02-03" class="mx-auto flex size-7 items-center justify-center rounded-full">3</time>
                </button>
                <button type="button" class="relative bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                  <time datetime="2022-02-04" class="mx-auto flex size-7 items-center justify-center rounded-full">4</time>
                </button>
                <button type="button" class="relative bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                  <time datetime="2022-02-05" class="mx-auto flex size-7 items-center justify-center rounded-full">5</time>
                </button>
                <button type="button" class="relative rounded-br-lg bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                  <time datetime="2022-02-06" class="mx-auto flex size-7 items-center justify-center rounded-full">6</time>
                </button>
              </div>
            </section>
          </div>
          <section class="mt-12">
            <h2 class="text-base font-semibold text-gray-900">Upcoming events</h2>
            <ol class="mt-2 divide-y divide-gray-200 text-sm/6 text-gray-500">
              <li class="py-4 sm:flex">
                <time datetime="2022-01-17" class="w-28 flex-none">Wed, Jan 12</time>
                <p class="mt-2 flex-auto sm:mt-0">Nothing on today’s schedule</p>
              </li>
            </ol>
          </section>
        </div>
<<<<<<< HEAD
    </div>
</div>
</div>


{{-- CALENDARIO --}}
<<<<<<< HEAD
<div class="h-96">
{{-- Componente Calendar Minimalista per SaluteOra --}}
@props([
    'type' => 'patient', // patient|doctor|admin
])

<div class="calendar-container w-96 h-auto">
    @livewire(\Modules\UI\Filament\Widgets\UserCalendarWidget::class, ['type' => $type])
</div>

{{-- Stili CSS --}}
<style>
    .calendar-container {
        min-height: 300px;
        padding: 1rem;
        background: transparent;
    }
</style>
</div>
</div>
>>>>>>> cecdd8e5 (- rename file dettaglio-paziente;)
=======
<div class="p-8">
    <div>
      <button type="button" class="absolute -left-1.5 -top-1 flex items-center justify-center p-1.5 text-gray-400 hover:text-gray-500">
        <span class="sr-only">Previous month</span>
        <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
          <path fill-rule="evenodd" d="M11.78 5.22a.75.75 0 0 1 0 1.06L8.06 10l3.72 3.72a.75.75 0 1 1-1.06 1.06l-4.25-4.25a.75.75 0 0 1 0-1.06l4.25-4.25a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
        </svg>
      </button>
      <button type="button" class="absolute -right-1.5 -top-1 flex items-center justify-center p-1.5 text-gray-400 hover:text-gray-500">
        <span class="sr-only">Next month</span>
        <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
          <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
        </svg>
      </button>
      <section class="text-center">
        <h2 class="text-sm font-semibold text-gray-900">January</h2>
        <div class="mt-6 grid grid-cols-7 text-xs/6 text-gray-500">
          <div>M</div>
          <div>T</div>
          <div>W</div>
          <div>T</div>
          <div>F</div>
          <div>S</div>
          <div>S</div>
        </div>
        <div class="isolate mt-2 grid grid-cols-7 gap-px rounded-lg bg-gray-200 text-sm shadow ring-1 ring-gray-200">
          <!--
            Always include: "py-1.5 hover:bg-gray-100 focus:z-10"
            Is current month, include: "bg-white text-gray-900"
            Is not current month, include: "bg-gray-50 text-gray-400"
  
            Top left day, include: "rounded-tl-lg"
            Top right day, include: "rounded-tr-lg"
            Bottom left day, include: "rounded-bl-lg"
            Bottom right day, include: "rounded-br-lg"
          -->
          <button type="button" class="relative rounded-tl-lg bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
            <!--
              Always include: "mx-auto flex size-7 items-center justify-center rounded-full"
              Is today, include: "bg-indigo-600 font-semibold text-white"
            -->
            <time datetime="2021-12-27" class="mx-auto flex size-7 items-center justify-center rounded-full">27</time>
          </button>
          <button type="button" class="relative bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
            <time datetime="2021-12-28" class="mx-auto flex size-7 items-center justify-center rounded-full">28</time>
          </button>
          <button type="button" class="relative bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
            <time datetime="2021-12-29" class="mx-auto flex size-7 items-center justify-center rounded-full">29</time>
          </button>
          <button type="button" class="relative bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
            <time datetime="2021-12-30" class="mx-auto flex size-7 items-center justify-center rounded-full">30</time>
          </button>
          <button type="button" class="relative bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
            <time datetime="2021-12-31" class="mx-auto flex size-7 items-center justify-center rounded-full">31</time>
          </button>
          <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-01" class="mx-auto flex size-7 items-center justify-center rounded-full">1</time>
          </button>
          <button type="button" class="relative rounded-tr-lg bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-02" class="mx-auto flex size-7 items-center justify-center rounded-full">2</time>
          </button>
          <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-03" class="mx-auto flex size-7 items-center justify-center rounded-full">3</time>
          </button>
          <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-04" class="mx-auto flex size-7 items-center justify-center rounded-full">4</time>
          </button>
          <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-05" class="mx-auto flex size-7 items-center justify-center rounded-full">5</time>
          </button>
          <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-06" class="mx-auto flex size-7 items-center justify-center rounded-full">6</time>
          </button>
          <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-07" class="mx-auto flex size-7 items-center justify-center rounded-full">7</time>
          </button>
          <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-08" class="mx-auto flex size-7 items-center justify-center rounded-full">8</time>
          </button>
          <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-09" class="mx-auto flex size-7 items-center justify-center rounded-full">9</time>
          </button>
          <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-10" class="mx-auto flex size-7 items-center justify-center rounded-full">10</time>
          </button>
          <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-11" class="mx-auto flex size-7 items-center justify-center rounded-full">11</time>
          </button>
          <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-12" class="mx-auto flex size-7 items-center justify-center rounded-full bg-indigo-600 font-semibold text-white">12</time>
          </button>
          <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-13" class="mx-auto flex size-7 items-center justify-center rounded-full">13</time>
          </button>
          <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-14" class="mx-auto flex size-7 items-center justify-center rounded-full">14</time>
          </button>
          <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-15" class="mx-auto flex size-7 items-center justify-center rounded-full">15</time>
          </button>
          <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-16" class="mx-auto flex size-7 items-center justify-center rounded-full">16</time>
          </button>
          <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-17" class="mx-auto flex size-7 items-center justify-center rounded-full">17</time>
          </button>
          <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-18" class="mx-auto flex size-7 items-center justify-center rounded-full">18</time>
          </button>
          <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-19" class="mx-auto flex size-7 items-center justify-center rounded-full">19</time>
          </button>
          <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-20" class="mx-auto flex size-7 items-center justify-center rounded-full">20</time>
          </button>
          <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-21" class="mx-auto flex size-7 items-center justify-center rounded-full">21</time>
          </button>
          <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-22" class="mx-auto flex size-7 items-center justify-center rounded-full">22</time>
          </button>
          <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-23" class="mx-auto flex size-7 items-center justify-center rounded-full">23</time>
          </button>
          <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-24" class="mx-auto flex size-7 items-center justify-center rounded-full">24</time>
          </button>
          <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-25" class="mx-auto flex size-7 items-center justify-center rounded-full">25</time>
          </button>
          <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-26" class="mx-auto flex size-7 items-center justify-center rounded-full">26</time>
          </button>
          <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-27" class="mx-auto flex size-7 items-center justify-center rounded-full">27</time>
          </button>
          <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-28" class="mx-auto flex size-7 items-center justify-center rounded-full">28</time>
          </button>
          <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-29" class="mx-auto flex size-7 items-center justify-center rounded-full">29</time>
          </button>
          <button type="button" class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-30" class="mx-auto flex size-7 items-center justify-center rounded-full">30</time>
          </button>
          <button type="button" class="relative rounded-bl-lg bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-31" class="mx-auto flex size-7 items-center justify-center rounded-full">31</time>
          </button>
          <button type="button" class="relative bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-02-01" class="mx-auto flex size-7 items-center justify-center rounded-full">1</time>
          </button>
          <button type="button" class="relative bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-02-02" class="mx-auto flex size-7 items-center justify-center rounded-full">2</time>
          </button>
          <button type="button" class="relative bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-02-03" class="mx-auto flex size-7 items-center justify-center rounded-full">3</time>
          </button>
          <button type="button" class="relative bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-02-04" class="mx-auto flex size-7 items-center justify-center rounded-full">4</time>
          </button>
          <button type="button" class="relative bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-02-05" class="mx-auto flex size-7 items-center justify-center rounded-full">5</time>
          </button>
          <button type="button" class="relative rounded-br-lg bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-02-06" class="mx-auto flex size-7 items-center justify-center rounded-full">6</time>
          </button>
        </div>
      </section>
    </div>
    <section class="mt-12">
      <h2 class="text-base font-semibold text-gray-900">Upcoming events</h2>
      <ol class="mt-2 divide-y divide-gray-200 text-sm/6 text-gray-500">
        <li class="py-4 sm:flex">
          <time datetime="2022-01-17" class="w-28 flex-none">Wed, Jan 12</time>
          <p class="mt-2 flex-auto sm:mt-0">Nothing on today’s schedule</p>
        </li>
      </ol>
    </section>
  </div>
  
</div>
>>>>>>> 285a522b (- change calendar per paziente;)
=======
        
      </div>
      </div>
</div>
>>>>>>> 58d017c2 (- aggiornato stile dettaglio paziente)
=======
      </div>
>>>>>>> ff138484 (- update dettaglio paziente)
=======


{{-- AREA PERSONALE PAZIENTE --}}
<!-- <section 
    class="flex items-start bg-[#E6EBF7] relative overflow-hidden">
    <div class="w-full px-4 sm:px-6 lg:px-8 pt-12">
        <div>
            <div class="w-full flex flex-col-reverse lg:flex-row justify-evenly gap-8">
                <div class="flex justify-center">
                    <div class="h-full flex flex-col items-start justify-center">
                    <h1
                        class="text-[#272C4D] text-4xl tracking-tight font-extrabold sm:text-5xl lg:text-5xl text-center">
                        {{ $title }}
                    </h1>
                    <span class="text-lg mt-4 text-center lg:text-left">Qui puoi trovare i dettagli del tuo appuntamento</span>
                    </div>

                </div>
             
                <div class="flex justify-center">
                    <img class="w-32 lg:w-44" src="/img/donna-area-paziente.svg"/>
                </div>
            </div>
        </div>
    </div>
</section> -->

{{-- APPUNTAMENTO --}}

{{-- @if(3-2 == 5) --}}

<!-- <div class="w-full flex flex-col lg:flex-row items-center justify-center p-5">
 <div class="w-full lg:w-2/4 flex items-center p-9">
                <div class="w-full lg:w-2/4 bg-white rounded-lg shadow-2xl">
                    <div class="p-5">
                        <h4 class="mb-5 font-semibold">Appuntamento in programma</h4>

                        <div class="flex flex-row items-center mb-2">
                            <span class="mr-2 font-medium">Data:</span>
                            <p>19/06/2025</p>
                        </div>
                        <div class="flex flex-row items-center mb-2">
                            <span class="mr-2 font-medium">Orario:</span>
                            <p>10:00 - 11:00</p>
                        </div>
                        <div class="flex flex-row items-center mb-2">
                            <span class="mr-2 font-medium">Studio:</span>
                            <p>OralB</p>
                        </div>
                        <div class="flex flex-row items-center mb-2">
                            <span class="mr-2 font-medium">Indirizzo studio:</span>
                            <p>Via dei test 79</p>
                        </div>
                        <div class="flex flex-row items-center mb-2">
                            <span class="mr-2 font-medium">Telefono:</span>
                            <p>0425 57899</p>
                        </div>
                        <div class="flex flex-row items-center">
                            <span class="mr-2 font-medium">Email:</span>
                            <p>studioralb@email.com</p>
                        </div>
                    </div>
                </div>
</div> -->



       <!-- <div class="ml-5">
           <div class="flex flex-col justify-center">
               <h3 class="text-[#FF5F7E]">
                   Il tuo referto è pronto!
               </h3>
       
               <div class="relative w-64 h-48 mt-5 rounded-[25px] bg-[#E6EBF7] shadow-2xl overflow-hidden">
                   <img src="/img/referto.svg" class="w-full h-full" />
       
                   <button class="flex items-center justify-between absolute bottom-0 left-0 w-full bg-[#E6EBF7B3] text-[#272C4D] px-3 text-center text-xl font-extrabold py-5 transition-all duration-300 ease-in-out hover:py-9">
                       Scarica referto!
                       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                           <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                       </svg>
                   </button>
               </div>
           </div>
       </div> -->
</div>


>>>>>>> 08fef506 (- create dettaglio paziente (lasciato commentato in attesa di logiche);)
