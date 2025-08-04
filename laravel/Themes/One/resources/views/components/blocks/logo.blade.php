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
<a href="{{ route('home') }}">
=======
<a href="/it">
>>>>>>> aurmich/dev
    <div class="my-12" {{ $attributes->merge(['class' => 'p-4 flex items-center space-x-3']) }}>
        <!-- @if($icon)
            <x-filament::icon :name="$icon" :class="$size" class="text-primary-600 dark:text-primary-400" />
        @elseif($src) -->
<<<<<<< HEAD
            <img class="h-7 lg:h-12" src="/img/logo.png"/>
=======
            <img class="h-8 lg:h-12" src="/img/logo.png"/>
>>>>>>> aurmich/dev
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
=======

<div {{ $attributes->merge(['class' => 'p-4 flex items-center space-x-3']) }}>
    <!-- @if($icon)
        <x-filament::icon :name="$icon" :class="$size" class="text-primary-600 dark:text-primary-400" />
    @elseif($src) -->
        <img class="lg:h-20 sm:h-12" src="/img/saluteOra-new-logo.png"/>
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
    <!-- <img src="saluteOra-new-logo.png"> -->
</div>
>>>>>>> 54f4fa16 (.)
