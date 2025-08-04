@props([
    'title',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'stats' => [],
    'description' => null
])

<<<<<<< HEAD

=======
<<<<<<< HEAD
<div class="bg-[#E6EBF7] py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
        <div class="mx-auto max-w-2xl lg:text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ $title }}</h2>
            @if($description)
                <p class="mt-6 text-lg leading-8 text-gray-600">{{ $description }}</p>
<<<<<<< HEAD
=======
=======
=======
>>>>>>> d23ba493 (add calendar)
>>>>>>> aurmich/dev
        <div class="mx-auto max-w-2xl sm:text-center md:text-center lg:text-center">
            <div class="flex justify-center">
                <h2 class="text-3xl font-bold tracking-tight text-[#1A467F] sm:text-4xl">{{ $title }}</h2>
            </div>
<<<<<<< HEAD
            @if(isset($description))
                <p class="mt-6 text-lg leading-8 text-[#1A467F]">{{ $description }}</p>
=======
<<<<<<< HEAD
            @if(isset($description))
                <p class="mt-6 text-lg leading-8 text-[#1A467F]">{{ $description }}</p>
>>>>>>> 3b3eb49d (- aggiornato stile della landing page;)
=======
>>>>>>> aurmich/dev
=======
    'stats' => []
=======
    'stats' => [],
    'description' => null
>>>>>>> 7274ba81 (✨ (vscode): add new recommended extensions for Laravel development to improve developer experience)
])

<div class="bg-[#E6EBF7] py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
        <div class="mx-auto max-w-2xl lg:text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ $title }}</h2>
            @if($description)
                <p class="mt-6 text-lg leading-8 text-gray-600">{{ $description }}</p>
<<<<<<< HEAD
<<<<<<< HEAD
            @if(isset($description))
                <p class="mt-6 text-lg leading-8 text-[#1A467F]">{{ $description }}</p>
=======
>>>>>>> 15cb84fb (fix collisions)
=======
            @if(isset($description))
                <p class="mt-6 text-lg leading-8 text-[#1A467F]">{{ $description }}</p>
>>>>>>> d23ba493 (add calendar)
>>>>>>> aurmich/dev
=======
>>>>>>> 54f4fa16 (.)
=======
        <div class="mx-auto max-w-2xl sm:text-center md:text-center lg:text-center">
            <div class="flex justify-center">
                <h2 class="text-3xl font-bold tracking-tight text-[#1A467F] sm:text-4xl">{{ $title }}</h2>
            </div>
            @if(isset($description))
                <p class="mt-6 text-lg leading-8 text-[#1A467F]">{{ $description }}</p>
>>>>>>> 3b3eb49d (- aggiornato stile della landing page;)
=======
    'stats' => []
=======
    'stats' => [],
    'description' => null
>>>>>>> d23ba493 (add calendar)
])

<div class="bg-[#E6EBF7] py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl sm:text-center md:text-center lg:text-center">
            <div class="flex justify-center">
                <h2 class="text-3xl font-bold tracking-tight text-[#1A467F] sm:text-4xl">{{ $title }}</h2>
            </div>
            @if(isset($description))
<<<<<<< HEAD
                <p class="mt-6 text-lg leading-8 text-gray-600">{{ $description }}</p>
>>>>>>> 15cb84fb (fix collisions)
=======
                <p class="mt-6 text-lg leading-8 text-[#1A467F]">{{ $description }}</p>
>>>>>>> d23ba493 (add calendar)
            @endif
        </div>
        <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
            <dl class="grid grid-cols-1 gap-x-8 gap-y-16 text-center lg:grid-cols-3">
                @foreach($stats as $stat)
                    <div class="mx-auto flex max-w-xs flex-col gap-y-4">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                        <dt class="text-base leading-7 text-gray-600">{{ $stat['label'] ?? '' }}</dt>
                        <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
                            {{ $stat['value'] ?? '0' }}
                        <dt class="text-base leading-7 text-[#0D9488] text-center sm:text-center">{{ $stat['label'] }}</dt>
                        <dd class="order-first text-3xl font-semibold tracking-tight text-[#0D9488] sm:text-5xl">
=======
                        <dt class="text-base leading-7 text-gray-600">{{ $stat['label'] }}</dt>
                        <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
>>>>>>> 15cb84fb (fix collisions)
=======
                        <dt class="text-base leading-7 text-[#0D9488] text-center sm:text-center">{{ $stat['label'] }}</dt>
                        <dd class="order-first text-3xl font-semibold tracking-tight text-[#0D9488] sm:text-5xl">
>>>>>>> d23ba493 (add calendar)
                            {{ $stat['number'] }}
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                        <dt class="text-base leading-7 text-gray-600">{{ $stat['label'] ?? '' }}</dt>
                        <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
                            {{ $stat['value'] ?? '0' }}
=======
                        <dt class="text-base leading-7 text-[#0D9488] text-center sm:text-center">{{ $stat['label'] }}</dt>
                        <dd class="order-first text-3xl font-semibold tracking-tight text-[#0D9488] sm:text-5xl">
=======
                        <dt class="text-base leading-7 text-gray-600">{{ $stat['label'] }}</dt>
                        <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
>>>>>>> 15cb84fb (fix collisions)
=======
                        <dt class="text-base leading-7 text-[#0D9488] text-center sm:text-center">{{ $stat['label'] }}</dt>
                        <dd class="order-first text-3xl font-semibold tracking-tight text-[#0D9488] sm:text-5xl">
>>>>>>> d23ba493 (add calendar)
                            {{ $stat['number'] }}
>>>>>>> 3b3eb49d (- aggiornato stile della landing page;)
>>>>>>> aurmich/dev
=======
                        <dt class="text-base leading-7 text-gray-600">{{ $stat['label'] }}</dt>
                        <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
=======
                        <dt class="text-base leading-7 text-[#0D9488] text-center sm:text-center">{{ $stat['label'] }}</dt>
                        <dd class="order-first text-3xl font-semibold tracking-tight text-[#0D9488] sm:text-5xl">
>>>>>>> 3b3eb49d (- aggiornato stile della landing page;)
                            {{ $stat['number'] }}
>>>>>>> 54f4fa16 (.)
=======
                        <dt class="text-base leading-7 text-gray-600">{{ $stat['label'] ?? '' }}</dt>
                        <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
                            {{ $stat['value'] ?? '0' }}
>>>>>>> 7274ba81 (✨ (vscode): add new recommended extensions for Laravel development to improve developer experience)
                        </dd>
                    </div>
                @endforeach
            </dl>
        </div>
    </div>
</div>
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======

>>>>>>> ff138484 (- update dettaglio paziente)
>>>>>>> aurmich/dev
=======
>>>>>>> 54f4fa16 (.)
