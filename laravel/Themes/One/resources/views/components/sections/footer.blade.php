@props([
    'section' => null,
    'blocks' => [],
    'class' => ''
])

@php
    $locale = app()->getLocale();
    $componentsBlocks = is_array($blocks) && isset($blocks[$locale]) ? $blocks[$locale] : $blocks;
@endphp

<footer {{ $attributes->merge([
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'class' => 'bg-[#272C4D] h-32 lg:min-h-36 text-white flex justify-center items-center' . ($section['attributes']['class'] ?? '') . ' ' . $class,
    'id' => ($section['attributes']['id'] ?? '')
]) }}>
    <div class="flex flex-row justify-center md:flex-col">
        <div class="flex flex-col md:flex-row justify-center items-center">
            <!-- Colonna Logo e Descrizione -->
            <div class="flex justify-center">
                <div class="text-center m-1 lg:m-6 md:text-right space-x-4">
<<<<<<< HEAD
                <a href="{{ route('home') }}" class="text-white text-md m-1">@lang('pub_theme::navigation.main_menu.home.label')</a>
                <a href="/{{ $lang }}/pages/progetto" class="text-white text-md m-1">@lang('pub_theme::navigation.main_menu.project.label')</a>
                </div>
            </div>
            <a href="{{ route('home') }}">
=======
                    <a href="/it/pages/privacy-policy" class="text-white text-sm transition-colors">Privacy Policy</a>
                    <a href="/it/pages/termini-condizioni" class="text-white text-sm transition-colors">Termini e Condizioni</a>
                    <a href="/it/pages/cookie-policy-salute-ora" class="text-white text-sm transition-colors">Cookie Policy</a>
                </div>
            </div>
            <a href="/it">
>>>>>>> aurmich/dev
                <div class="flex justify-center">
                    <img src="/img/saluteOra-new-logo.png" alt="{{ config('app.name') }}" class="h-16 lg:h-24 w-auto">
                </div>
            </a>
            <div class="flex justify-center">
<<<<<<< HEAD
                <div class="text-center m-1 lg:m-6 md:text-right space-x-4">
                    <a href="/{{ $lang }}/pages/partners" class="text-white text-md m-1">@lang('pub_theme::navigation.main_menu.partners.label')</a>
                    <a href="/{{ $lang }}/pages/faqs" class="text-white text-md">@lang('pub_theme::navigation.main_menu.faqs.label')</a>
                    <a href="/img/trattamento-dati-odonoiatra.pdf" target="_blank" class="text-white text-md">Trattamento Dati</a>
=======
                <div class="text-center m-1 lg:m-6 md:text-right">
                    <a href="/it" class="text-white text-sm m-1">Home</a>
                    <a href="/it/pages/progetto" class="text-white text-sm m-1">Progetto</a>
                    <a href="/it/pages/partners" class="text-white text-sm m-1">Partners</a>
                    <a href="/it/pages/faqs" class="text-white text-sm">FAQ'S</a>
>>>>>>> aurmich/dev
                </div>
            </div>          
=======
    'class' => 'bg-neutral text-neutral-content ' . ($section['attributes']['class'] ?? '') . ' ' . $class,
=======
    'class' => 'bg-[#1A467F] text-white' . ($section['attributes']['class'] ?? '') . ' ' . $class,
>>>>>>> 3b3eb49d (- aggiornato stile della landing page;)
=======
    'class' => 'bg-neutral text-neutral-content ' . ($section['attributes']['class'] ?? '') . ' ' . $class,
>>>>>>> 15cb84fb (fix collisions)
=======
    'class' => 'bg-[#1A467F] text-white' . ($section['attributes']['class'] ?? '') . ' ' . $class,
>>>>>>> d23ba493 (add calendar)
=======
    'class' => 'bg-[#1A467F] h-36 text-white flex items-center' . ($section['attributes']['class'] ?? '') . ' ' . $class,
>>>>>>> ff138484 (- update dettaglio paziente)
    'id' => ($section['attributes']['id'] ?? '')
]) }}>
    <div class="w-full flex justify-center">
        <div class="w-full flex flex-row justify-center items-center">
            <!-- Colonna Logo e Descrizione -->
<<<<<<< HEAD
<<<<<<< HEAD
            <div class="space-y-6 flex-col justify-center">
                <img src="/img/saluteOra-new-logo.png" alt="{{ config('app.name') }}" class="h-24 w-auto">
                <p class="text-medium text-white">
                    Promuoviamo la salute orale delle gestanti attraverso prevenzione e assistenza specialistica Test.
                </p>
            </div>

            <!-- Colonne Dinamiche dai Blocchi -->
            @if($section && isset($section->blocks[app()->getLocale()]))
                @foreach($section->blocks[app()->getLocale()] as $block)
                    @if($block->type === 'navigation')
                        <div>
                            <h3 class="text-lg font-semibold mb-6">{{ $block->data['title'] }}</h3>
                            <ul class="space-y-4">
                                @foreach($block->data['items'] as $item)
                                    <li>
                                        <a href="{{ url($item['url']) }}" class="text-sm hover:text-primary-400 transition-colors">
                                            {{ $item['label'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                @endforeach
            @endif

            <!-- Colonna Newsletter -->
            <div>
                <h3 class="text-lg font-semibold mb-6">Newsletter</h3>
                <p class="text-sm text-white mb-4">
                    Iscriviti per ricevere aggiornamenti e consigli sulla salute orale.
                </p>
                <form class="space-y-4 flex flex-col justify-center">
                    <input type="email" placeholder="La tua email" class="input input-bordered w-full bg-neutral-focus text-black" />
                    <div class="flex justify-center">
                        <button type="submit" class="rounded-md bg-[#0D9488] w-auto px-3.5 py-2.5 text-xl font-semibold text-white">Iscriviti</button>
                    </div>
                </form>
>>>>>>> 54f4fa16 (.)
=======
           
                <div class="w-full flex justify-center">
                    <img src="/img/saluteOra-new-logo.png" alt="{{ config('app.name') }}" class="h-24 w-auto">
                </div>
                <div class="w-full flex justify-center">
                    <p class="text-medium text-white">
                        Promuoviamo la salute orale delle gestanti attraverso prevenzione e assistenza specialistica.
                    </p>
                </div>          
>>>>>>> 7e1c3ad6 (- sistemato footer;)
=======
            <div class="w-[700px] flex justify-center">
                <div class="text-center m-6 md:text-right space-x-4">
                    <a href="{{ url('privacy') }}" class="text-white text-sm transition-colors">Privacy Policy</a>
                    <a href="{{ url('terms') }}" class="text-white text-sm transition-colors">Termini e Condizioni</a>
                    <a href="{{ url('cookies') }}" class="text-white text-sm transition-colors">Cookie Policy</a>
                </div>
            </div>
            <div class="w-full flex justify-center">
                <img src="/img/saluteOra-new-logo.png" alt="{{ config('app.name') }}" class="h-24 w-auto">
            </div>
            <div class="w-[700px] flex justify-center">
                <div class="text-center m-6 md:text-right">
                    <a href="{{ url('privacy') }}" class="text-white text-sm m-1">Home</a>
                    <a href="{{ url('terms') }}" class="text-white text-sm m-1">Progetto</a>
                    <a href="{{ url('cookies') }}" class="text-white text-sm m-1">Partners</a>
                    <a href="{{ url('cookies') }}" class="text-white text-sm">FAQ'S</a>
                </div>
            </div>          
>>>>>>> ff138484 (- update dettaglio paziente)
            </div>
        </div>

        <!-- Copyright e Link Legali -->
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

    </div>
<<<<<<< HEAD
</footer>
=======
</footer>
>>>>>>> aurmich/dev
=======
        <div class="mt-12 pt-8 border-t border-neutral-focus">
=======
        <div class="border-neutral-focus">
>>>>>>> f2140a80 (- continuo style landing page;)
            <div class="flex justify-center">
                <div class="text-center m-6 md:text-right space-x-4">
                    <a href="{{ url('privacy') }}" class="text-[#0D9488] text-sm hover:text-primary-400 transition-colors">Privacy Policy</a>
                    <a href="{{ url('terms') }}" class="text-[#0D9488] text-sm hover:text-primary-400 transition-colors">Termini e Condizioni</a>
                    <a href="{{ url('cookies') }}" class="text-[#0D9488] text-sm hover:text-primary-400 transition-colors">Cookie Policy</a>
                </div>
            </div>
        </div>
=======

>>>>>>> ff138484 (- update dettaglio paziente)
    </div>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
</footer>
>>>>>>> 54f4fa16 (.)
=======
</footer>
>>>>>>> 3b3eb49d (- aggiornato stile della landing page;)
=======
</footer>
>>>>>>> 15cb84fb (fix collisions)
=======
</footer>
>>>>>>> d23ba493 (add calendar)
