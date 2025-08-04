@props([
    'title' => '',
    'subtitle' => '',
    'image' => '',
    'cta' => null,
    'secondaryCta' => null,
    'overlay' => 'gradient', // none, dark, light, gradient
<<<<<<< HEAD
<<<<<<< HEAD
    'minHeight' => 'min-h-20 md:min-h-20',
=======
    'minHeight' => 'min-h-[70vh] md:min-h-[80vh]',
>>>>>>> 12c6456b (✨ (blocks.md): add Aesthetic Block guidelines and example for elegant components)
=======
    'minHeight' => 'min-h-20 md:min-h-20',
>>>>>>> ff138484 (- update dettaglio paziente)
    'contentPosition' => 'center', // start, center, end
    'className' => ''
])

@php
    // Handle translations
    $title = is_array($title) ? $title[app()->getLocale()] ?? $title['en'] ?? '' : $title;
    $subtitle = is_array($subtitle) ? $subtitle[app()->getLocale()] ?? $subtitle['en'] ?? '' : $subtitle;
    $image = is_array($image) ? $image[app()->getLocale()] ?? $image['en'] ?? '' : $image;
    
    // Position classes
    $contentPositionClasses = [
        'start' => 'items-start text-left',
        'center' => 'items-center text-center',
        'end' => 'items-end text-right',
    ][$contentPosition] ?? 'items-center text-center';

    // Overlay classes
    $overlayClasses = [
        'gradient' => 'bg-gradient-to-b from-black/60 to-black/20',
        'dark' => 'bg-black/50',
        'light' => 'bg-white/20',
        'none' => '',
    ][$overlay] ?? 'bg-gradient-to-b from-black/60 to-black/20';

    // Process CTA buttons
    $primaryCta = [];
    if (is_array($cta) && count($cta) >= 2) {
        $primaryCta = [
            'text' => is_array($cta[0]) ? ($cta[0][app()->getLocale()] ?? $cta[0]['en'] ?? '') : $cta[0],
            'url' => $cta[1]
        ];
    }

    $secondaryCtaData = [];
    if (is_array($secondaryCta) && count($secondaryCta) >= 2) {
        $secondaryCtaData = [
            'text' => is_array($secondaryCta[0]) ? ($secondaryCta[0][app()->getLocale()] ?? $secondaryCta[0]['en'] ?? '') : $secondaryCta[0],
            'url' => $secondaryCta[1]
        ];
    }
@endphp

<<<<<<< HEAD
<<<<<<< HEAD
<section class="relative min-h-[700px] flex items-center justify-center overflow-hidden {{ $className }}" 
=======
<section class="relative {{ $minHeight }} flex items-center overflow-hidden {{ $className }}" 
>>>>>>> 12c6456b (✨ (blocks.md): add Aesthetic Block guidelines and example for elegant components)
=======
<section class="relative min-h-[700px] flex items-center overflow-hidden {{ $className }}" 
>>>>>>> ff138484 (- update dettaglio paziente)
         x-data="{ 
            scrolled: false,
            mounted: false,
            init() {
                this.mounted = true;
                window.addEventListener('scroll', () => {
                    this.scrolled = window.scrollY > 50;
                });
            }
<<<<<<< HEAD
<<<<<<< HEAD
         }">

    <!-- Overlay -->
    @if($overlay !== 'none')
        <div class="inset-0 -z-10 bg-[#E6EBF7]"></div>
    @endif

    <!-- Content -->
    <div class="container mx-auto px-4 sm:px-6 py-1 lg:py-8 lg:px-8 w-full">
        <div class="max-w-4xl mx-auto flex flex-col gap-6 items-center text-center {{ $contentPositionClasses }}">
            <div class="space-y-6 text-[#272C4D]"
=======
         }"
         :class="{ 'pt-16': scrolled }"
         style="transition: padding 0.3s ease-in-out;">
    
    <!-- Background Image -->
    @if($image)
        <div class="absolute inset-0 -z-10">
            <img 
                src="{{ $image }}" 
                alt="" 
                class="absolute inset-0 w-full h-full object-cover"
                :class="{ 'scale-105': !scrolled, 'scale-100': scrolled }"
                style="transition: transform 8s cubic-bezier(0.16, 1, 0.3, 1);"
                loading="lazy"
            >
        </div>
    @endif
=======
         }">

>>>>>>> ff138484 (- update dettaglio paziente)

    <!-- Overlay -->
    @if($overlay !== 'none')
        <div class="absolute inset-0 -z-10 bg-[#E6EBF7]"></div>
    @endif

    <!-- Content -->
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 w-full">
        <div class="max-w-4xl mx-auto {{ $contentPositionClasses }} flex flex-col gap-6">
<<<<<<< HEAD
<<<<<<< HEAD
            <div class="space-y-6 text-white"
>>>>>>> 12c6456b (✨ (blocks.md): add Aesthetic Block guidelines and example for elegant components)
=======
            <div class="space-y-6 text-[#1A467F]"
>>>>>>> ff138484 (- update dettaglio paziente)
=======
            <div class="space-y-6 text-[#272C4D]"
>>>>>>> 89a8313a (- update primary colors)
                 x-data="{ 
                    show: false,
                    mounted() { 
                        this.$nextTick(() => {
                            setTimeout(() => this.show = true, 100);
                        });
                    } 
                 }"
                 x-init="mounted()"
                 x-intersect="show = true">
<<<<<<< HEAD

                <h1 class="text-4xl md:text-5xl lg:text-3xl font-bold leading-tight">
                    {{ $title }}
                </h1>

                <div class="text-xl">
                    {{ $subtitle }}
                </div>

                @if(!empty($primaryCta) || !empty($secondaryCtaData))
                    <div class="flex flex-row justify-center gap-4 pt-4">
                        @if(!empty($primaryCta))
<<<<<<< HEAD
                            <a href="{{ route('home') }}" 
=======
                            <a href="/it" 
>>>>>>> aurmich/dev
                               class="inline-flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md !text-white bg-[#FF5F7E] md:py-4 md:text-lg md:px-10">
                                {{ $primaryCta['text'] }}
                            </a>
                        @endif
                    </div>
                @endif

                <!-- Immagine centrata sotto il bottone -->
                <div class="pt-6">
<<<<<<< HEAD
                    <img class="mx-auto h-64 w-auto" src="/img/sala-attesa-2.svg" alt="@lang('pub_theme::content.hero.modern.room_image_alt.label')" />
=======
                    <img class="mx-auto h-64 w-auto" src="/img/sala-attesa-2.svg" alt="Sala d'attesa" />
>>>>>>> aurmich/dev
                </div>

=======
                
        

                <h1 class="text-4xl md:text-5xl lg:text-3xl font-bold leading-tight">
                    {{ $title }}
                </h1>

                @if(!empty($primaryCta) || !empty($secondaryCtaData))
                    <div class="flex flex-row justify-center gap-4 pt-4">
                        
                        @if(!empty($primaryCta))
                            <a href="{{ $primaryCta['url'] }}" 
                               class="inline-flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md !text-white bg-[#FF5F7E] md:py-4 md:text-lg md:px-10">
                                {{ $primaryCta['text'] }}
                            </a>
                        @endif
                    </div>
                @endif
>>>>>>> 12c6456b (✨ (blocks.md): add Aesthetic Block guidelines and example for elegant components)
            </div>
        </div>
    </div>

<<<<<<< HEAD
</section>


=======
    <!-- Scroll indicator -->

</section>

<<<<<<< HEAD
@push('styles')
<style>
    .animate-fadeInDown {
        animation: fadeInDown 1s ease-out forwards;
    }
    .animate-fadeInUp {
        animation: fadeInUp 1s ease-out 0.2s forwards;
    }
    .animate-bounce {
        animation: bounce 2s infinite;
    }
    @keyframes fadeInDown {
        from { opacity: 0; transform: translateY(-20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
        40% { transform: translateY(-10px); }
        60% { transform: translateY(-5px); }
    }
</style>
@endpush
>>>>>>> 12c6456b (✨ (blocks.md): add Aesthetic Block guidelines and example for elegant components)
=======
>>>>>>> ff138484 (- update dettaglio paziente)
