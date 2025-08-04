@props([
    'title',
    'description',
    'button_text',
    'button_link'
])

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<div class="bg-[#E6EBF7]">
    <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-3xl font-bold tracking-tight text-[#272C4D] sm:text-4xl">{{ $title }}</h2>
=======
<div class="bg-white">
    <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ $title }}</h2>
>>>>>>> 54f4fa16 (.)
=======
<div class="bg-[#E6EBF7]">
    <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
<<<<<<< HEAD
            <h2 class="text-3xl font-bold tracking-tight text-[#1A467F] sm:text-4xl">{{ $title }}</h2>
>>>>>>> 3b3eb49d (- aggiornato stile della landing page;)
=======
<div class="bg-white">
    <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ $title }}</h2>
>>>>>>> 15cb84fb (fix collisions)
=======
<div class="bg-[#E6EBF7]">
    <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-3xl font-bold tracking-tight text-[#1A467F] sm:text-4xl">{{ $title }}</h2>
>>>>>>> d23ba493 (add calendar)
=======
            <h2 class="text-3xl font-bold tracking-tight text-[#272C4D] sm:text-4xl">{{ $title }}</h2>
>>>>>>> 89a8313a (- update primary colors)
            <p class="mx-auto mt-6 max-w-xl text-lg leading-8 text-gray-600">
                {{ $description }}
            </p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                <a href="{{ $button_link }}" class="rounded-md bg-[#FF5F7E] px-3.5 py-2.5 text-xl font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
=======
                <a href="{{ $button_link }}" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
>>>>>>> 54f4fa16 (.)
=======
                <a href="{{ $button_link }}" class="rounded-md bg-[#0D9488] px-3.5 py-2.5 text-xl font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
>>>>>>> 3b3eb49d (- aggiornato stile della landing page;)
=======
                <a href="{{ $button_link }}" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
>>>>>>> 15cb84fb (fix collisions)
=======
                <a href="{{ $button_link }}" class="rounded-md bg-[#0D9488] px-3.5 py-2.5 text-xl font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
>>>>>>> d23ba493 (add calendar)
=======
                <a href="{{ $button_link }}" class="rounded-md bg-[#FF5F7E] px-3.5 py-2.5 text-xl font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
>>>>>>> 89a8313a (- update primary colors)
                    {{ $button_text }}
                </a>
                @if(isset($secondary_button_text) && isset($secondary_button_link))
                    <a href="{{ $secondary_button_link }}" class="text-sm font-semibold leading-6 text-gray-900">
                        {{ $secondary_button_text }} <span aria-hidden="true">→</span>
                    </a>
                @endif
            </div>
        </div>
    </div>
</div>
