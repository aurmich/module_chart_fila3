@props([
    'title' => '',
    'description' => '',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'cta_text' => __('pub_theme::components.cta.simple.text'),
=======
    'cta_text' => 'Scopri di più',
>>>>>>> aurmich/dev
=======
    'cta_text' => 'Scopri di più',
>>>>>>> 7274ba81 (✨ (vscode): add new recommended extensions for Laravel development to improve developer experience)
=======
    'cta_text' => 'Scopri di più',
>>>>>>> 7bc70bf2 (🚀 (laravel/Themes/One): remove deprecated files and old theme structure to streamline the codebase and improve maintainability)
    'cta_link' => '#',
    'background_color' => 'bg-white',
    'text_color' => 'text-gray-900',
    'cta_color' => 'bg-indigo-600 hover:bg-indigo-700',
])

<div class="{{ $background_color }} py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:text-center">
            @if($title)
                <h2 class="text-3xl font-extrabold tracking-tight {{ $text_color }} sm:text-4xl">
                    {{ $title }}
                </h2>
            @endif
<<<<<<< HEAD
<<<<<<< HEAD
            
=======

>>>>>>> 7bc70bf2 (🚀 (laravel/Themes/One): remove deprecated files and old theme structure to streamline the codebase and improve maintainability)
=======
            
>>>>>>> d23ba493 (add calendar)
            @if($description)
                <p class="mt-4 max-w-2xl text-xl {{ $text_color }} lg:mx-auto">
                    {{ $description }}
                </p>
            @endif
<<<<<<< HEAD
<<<<<<< HEAD
            
=======

>>>>>>> 7bc70bf2 (🚀 (laravel/Themes/One): remove deprecated files and old theme structure to streamline the codebase and improve maintainability)
=======
            
>>>>>>> d23ba493 (add calendar)
            <div class="mt-8 flex justify-center">
                <div class="inline-flex rounded-md shadow">
                    <a href="{{ $cta_link }}" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white {{ $cta_color }}">
                        {{ $cta_text }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
