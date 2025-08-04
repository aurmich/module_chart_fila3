@props(['doctor'])
@php
    $studio=\Modules\SaluteOra\Models\Studio::inRandomOrder()->first();
    $studios=$doctor->studios()->withPivot(['schedule', 'is_primary'])->orderBy('studio_user.is_primary', 'desc')->get();
    if($studios->isEmpty()){
        $doctor->studios()->attach($studio);
        $studios=$doctor->studios()->withPivot(['schedule', 'is_primary'])->get();
    }
@endphp
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<div>
    <x-filament::widget>
<<<<<<< HEAD
            <div class="w-full space-y-6 my-5">
=======
            <div class="space-y-6 mx-60 mb-5">
>>>>>>> aurmich/dev
                @each('pub_theme::filament.widgets.doctor-availabilities.studio.item', $doctor->studios, 'studio', 'pub_theme::filament.widgets.doctor-availabilities.studio.empty')
            </div>
     
        <x-filament-actions::modals />
    </x-filament::widget> 
</div>
=======
<x-filament::widget>
    
    <x-filament::section>
        <div class="space-y-6">
            <div class="mb-6">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-gray-100">
                    {{ __('saluteora::widgets.doctor_availabilities.title') }}
                </h2>
                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                    {{ __('saluteora::widgets.doctor_availabilities.description') }}
                </p>
            </div>
            @each('pub_theme::filament.widgets.doctor-availabilities.studio.item', $doctor->studios, 'studio', 'pub_theme::filament.widgets.doctor-availabilities.studio.empty')
        </div>
    </x-filament::section>
    <x-filament-actions::modals />
</x-filament::widget> 
>>>>>>> 98275f8c (✨ (DoctorAvailabilitiesWidget): update view path to use pub_theme for better theming support)
=======
>>>>>>> aurmich/dev
<div>
    <x-filament::widget>
            <div class="w-full space-y-6 my-5">
                @each('pub_theme::filament.widgets.doctor-availabilities.studio.item', $doctor->studios, 'studio', 'pub_theme::filament.widgets.doctor-availabilities.studio.empty')
            </div>
     
        <x-filament-actions::modals />
    </x-filament::widget> 
<<<<<<< HEAD
</div>
=======
</div>
>>>>>>> 317caeb9 (- updated style calendar doctor availabilities)
>>>>>>> aurmich/dev
