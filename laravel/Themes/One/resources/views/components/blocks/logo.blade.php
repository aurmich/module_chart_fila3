@props([
    'src' => null,
    'alt' => '',
    'width' => null,
    'height' => null,
    'icon' => null,
    'size' => 'h-12 w-auto',
    'url' => null,
    'title' => null,
    'description' => null,
])
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<a href="{{ route('home') }}">
=======
<a href="/it">
>>>>>>> aurmich/dev
=======
<a href="/it">
>>>>>>> 267b8f14 (- pagine "privacy policy", "termini e condizioni", "cookie policy", "faqs")
=======
<a href="{{ route('home') }}">
>>>>>>> 198c0c0a (✨ (DoctorAppointmentsWidget.php, DoctorCalendarWidget.php): refactor appointment loading logic to use doctor_id instead of auth user id for better clarity and functionality)
    <div class="my-12" {{ $attributes->merge(['class' => 'p-4 flex items-center space-x-3']) }}>
        <!-- @if($icon)
            <x-filament::icon :name="$icon" :class="$size" class="text-primary-600 dark:text-primary-400" />
        @elseif($src) -->
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            <img class="h-7 lg:h-12" src="/img/logo.png"/>
=======
            <img class="h-8 lg:h-12" src="/img/logo.png"/>
>>>>>>> aurmich/dev
=======
            <img class="h-8 lg:h-12" src="/img/logo.png"/>
>>>>>>> 267b8f14 (- pagine "privacy policy", "termini e condizioni", "cookie policy", "faqs")
=======
            <img class="h-7 lg:h-12" src="/img/logo.png"/>
>>>>>>> 8da6447c (- updated style dettaglio-dottore (new calendar))
        @endif
    
        <!-- @if($title || $description)
            <div class="flex flex-col">
                @if($title)
                    <span class="text-lg font-semibold text-gray-900 dark:text-gray-100">{{ $title }}</span>
                @endif
                @if($description)
                    <span class="text-sm text-gray-600 dark:text-gray-400">{{ $description }}</span>
                @endif
            </div>
        @endif -->
    </div>
</a>
<<<<<<< HEAD
=======

<div class="my-12" {{ $attributes->merge(['class' => 'p-4 flex items-center space-x-3']) }}>
    <!-- @if($icon)
        <x-filament::icon :name="$icon" :class="$size" class="text-primary-600 dark:text-primary-400" />
    @elseif($src) -->
        <img class="h-8 lg:h-12" src="/img/logo.png"/>
    @endif

    <!-- @if($title || $description)
        <div class="flex flex-col">
            @if($title)
                <span class="text-lg font-semibold text-gray-900 dark:text-gray-100">{{ $title }}</span>
            @endif
            @if($description)
                <span class="text-sm text-gray-600 dark:text-gray-400">{{ $description }}</span>
            @endif
        </div>
    @endif -->
</div>
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 267b8f14 (- pagine "privacy policy", "termini e condizioni", "cookie policy", "faqs")
