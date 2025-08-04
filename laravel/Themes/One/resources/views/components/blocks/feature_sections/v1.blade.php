@props([
    'title',
    'sections' => [],
])

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
<div class="bg-[#E6EBF7] py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:text-center">
            <h2 class="text-3xl font-bold leading-7 text-[#272C4D]">{{ $title }}</h2>
<<<<<<< HEAD
=======
=======
<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:text-center">
            <h2 class="text-base font-semibold leading-7 text-indigo-600">{{ $title }}</h2>
>>>>>>> 54f4fa16 (.)
=======
<div class="bg-[#E6EBF7] py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:text-center">
<<<<<<< HEAD
            <h2 class="text-3xl font-bold leading-7 text-[#1A467F]">{{ $title }}</h2>
>>>>>>> 3b3eb49d (- aggiornato stile della landing page;)
=======
<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:text-center">
            <h2 class="text-base font-semibold leading-7 text-indigo-600">{{ $title }}</h2>
>>>>>>> 15cb84fb (fix collisions)
=======
<div class="bg-[#E6EBF7] py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:text-center">
            <h2 class="text-3xl font-bold leading-7 text-[#1A467F]">{{ $title }}</h2>
>>>>>>> d23ba493 (add calendar)
=======
            <h2 class="text-3xl font-bold leading-7 text-[#272C4D]">{{ $title }}</h2>
>>>>>>> 89a8313a (- update primary colors)
>>>>>>> aurmich/dev
            @if(isset($subtitle))
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ $subtitle }}</p>
            @endif
            @if(isset($description))
                <p class="mt-6 text-lg leading-8 text-gray-600">{{ $description }}</p>
            @endif
        </div>
        <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
            <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
                @foreach($sections as $section)
                    <div class="flex flex-col">
<<<<<<< HEAD
                        <dt class="flex items-center gap-x-3 text-base font-semibold leading-7 text-lg text-[#FF5F7E]">
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                        <dt class="flex items-center gap-x-3 text-base font-semibold leading-7 text-lg text-[#FF5F7E]">
=======
                        <dt class="flex items-center gap-x-3 text-base font-semibold leading-7 text-gray-900">
>>>>>>> 54f4fa16 (.)
=======
                        <dt class="flex items-center gap-x-3 text-base font-semibold leading-7 text-lg text-[#0D9488]">
>>>>>>> 3b3eb49d (- aggiornato stile della landing page;)
=======
                        <dt class="flex items-center gap-x-3 text-base font-semibold leading-7 text-gray-900">
>>>>>>> 15cb84fb (fix collisions)
=======
                        <dt class="flex items-center gap-x-3 text-base font-semibold leading-7 text-lg text-[#0D9488]">
>>>>>>> d23ba493 (add calendar)
=======
                        <dt class="flex items-center gap-x-3 text-base font-semibold leading-7 text-lg text-[#FF5F7E]">
>>>>>>> 89a8313a (- update primary colors)
>>>>>>> aurmich/dev
                            @if(isset($section['icon']))
                                {{--
                                <x-dynamic-component
                                    :component="'heroicon-o-'.$section['icon']"
<<<<<<< HEAD
                                    class="h-5 w-5 flex-none text-[#FF5F7E]"
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                                    class="h-5 w-5 flex-none text-[#FF5F7E]"
=======
                                    class="h-5 w-5 flex-none text-indigo-600"
>>>>>>> 54f4fa16 (.)
=======
                                    class="h-5 w-5 flex-none text-[#0D9488]"
>>>>>>> 3b3eb49d (- aggiornato stile della landing page;)
=======
                                    class="h-5 w-5 flex-none text-indigo-600"
>>>>>>> 15cb84fb (fix collisions)
=======
                                    class="h-5 w-5 flex-none text-[#0D9488]"
>>>>>>> d23ba493 (add calendar)
=======
                                    class="h-5 w-5 flex-none text-[#FF5F7E]"
>>>>>>> 89a8313a (- update primary colors)
>>>>>>> aurmich/dev
                                />
                                --}}
                                <x-filament::icon
                                    :icon="$section['icon']"
<<<<<<< HEAD
                                    class="h-5 w-5 flex-none text-[#FF5F7E]"
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                                    class="h-5 w-5 flex-none text-[#FF5F7E]"
=======
                                    class="h-5 w-5 flex-none text-indigo-600"
>>>>>>> 54f4fa16 (.)
=======
                                    class="h-5 w-5 flex-none text-[#0D9488]"
>>>>>>> 3b3eb49d (- aggiornato stile della landing page;)
=======
                                    class="h-5 w-5 flex-none text-indigo-600"
>>>>>>> 15cb84fb (fix collisions)
=======
                                    class="h-5 w-5 flex-none text-[#0D9488]"
>>>>>>> d23ba493 (add calendar)
=======
                                    class="h-5 w-5 flex-none text-[#FF5F7E]"
>>>>>>> 89a8313a (- update primary colors)
>>>>>>> aurmich/dev
                                />
                            @endif
                            {{ $section['title'] }}
                        </dt>
                        <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-gray-600">
<<<<<<< HEAD
                            <p class="flex-auto text-lg text-[#FF5F7E]">{{ $section['description'] }}</p>
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                            <p class="flex-auto text-lg text-[#FF5F7E]">{{ $section['description'] }}</p>
=======
                            <p class="flex-auto">{{ $section['description'] }}</p>
>>>>>>> 54f4fa16 (.)
=======
                            <p class="flex-auto text-lg text-[#0D9488]">{{ $section['description'] }}</p>
>>>>>>> 3b3eb49d (- aggiornato stile della landing page;)
=======
                            <p class="flex-auto">{{ $section['description'] }}</p>
>>>>>>> 15cb84fb (fix collisions)
=======
                            <p class="flex-auto text-lg text-[#0D9488]">{{ $section['description'] }}</p>
>>>>>>> d23ba493 (add calendar)
=======
                            <p class="flex-auto text-lg text-[#FF5F7E]">{{ $section['description'] }}</p>
>>>>>>> 89a8313a (- update primary colors)
>>>>>>> aurmich/dev
                            @if(isset($section['link']))
                                <p class="mt-6">
                                    <a href="{{ $section['link'] }}" class="text-sm font-semibold leading-6 text-indigo-600">
                                        {{ $section['link_text'] ?? 'Scopri di più' }} <span aria-hidden="true">→</span>
                                    </a>
                                </p>
                            @endif
                        </dd>
                    </div>
                @endforeach
            </dl>
        </div>
    </div>
</div>
