{{-- 
    Studio Item per DoctorAvailabilitiesWidget
    
    Mostra informazioni dello studio e visualizzazione statica delle disponibilità
    
    Props disponibili:
    - $studio: Modello Studio con dati pivot
    - $doctor: Modello User (dottore)
    - $schedule: Array schedule dal pivot
    - $isPrimary: Boolean se studio principale
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

--}}

@props(['studio'])

@php
    $isPrimary = $studio->pivot->is_primary ?? false;
    $schedule = $studio->pivot->schedule ?? [];
=======
=======
    
>>>>>>> b705fb0e (📝 (DoctorAvailabilitiesWidget.php): update documentation comment to improve clarity)
=======

>>>>>>> 98275f8c (✨ (DoctorAvailabilitiesWidget): update view path to use pub_theme for better theming support)
--}}

@props(['studio'])

@php
    $isPrimary = $studio->pivot->is_primary ?? false;
<<<<<<< HEAD
>>>>>>> 69133b6d (.)
=======
    $schedule = $studio->pivot->schedule ?? [];
>>>>>>> 98275f8c (✨ (DoctorAvailabilitiesWidget): update view path to use pub_theme for better theming support)
    $hasSchedule = !empty($schedule) && is_array($schedule);
    $studioId = $studio->id;
    $studioUserId = $studio->pivot->id ?? null;
    
@endphp
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<div class="w-full flex justify-center">
<div class="w-full lg:w-7/12 bg-white rounded-xl shadow-sm border border-gray-200 p-6 dark:bg-gray-900">
=======

<div class="studio-availability-card bg-white rounded-xl shadow-sm border border-gray-200 p-6 dark:bg-gray-900">
>>>>>>> aurmich/dev
=======

<<<<<<< HEAD
<div class="studio-availability-card border rounded-lg transition-all duration-200 hover:shadow-md {{ $isPrimary ? 'border-blue-500 bg-blue-50 dark:bg-blue-900/20' : 'border-gray-200 dark:border-gray-700' }}">
>>>>>>> 69133b6d (.)
=======
<div class="studio-availability-card bg-white rounded-xl shadow-sm border border-gray-200 p-6 dark:bg-gray-900">
>>>>>>> 317caeb9 (- updated style calendar doctor availabilities)
=======
<div class="w-full flex justify-center">
<div class="w-full lg:w-7/12 bg-white rounded-xl shadow-sm border border-gray-200 p-6 dark:bg-gray-900">
>>>>>>> 8da6447c (- updated style dettaglio-dottore (new calendar))
    {{-- Header Studio --}}
    <div class="studio-header flex items-center justify-between p-4 border-b {{ $isPrimary ? 'border-blue-200 dark:border-blue-700' : 'border-gray-200 dark:border-gray-700' }}">
        <div class="flex items-center space-x-3">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">
                {{ $studio->name }}
            </h3>
            
            {{-- Badge Studio Principale --}}
            @if($isPrimary)
                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-500 text-white">
                    <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    {{ __('saluteora::widgets.doctor_availabilities.studio.primary_badge') }}
                </span>
            @endif
        </div>
        
        
    </div>
    
    {{-- Visualizzazione Statica Schedule --}}
    <div class="studio-schedule-display p-4">
        <div class="flex items-center justify-between mb-4">
            <div>
                <h4 class="text-sm font-medium text-gray-900 dark:text-gray-100 mb-1">
<<<<<<< HEAD
<<<<<<< HEAD
                    {{ __('saluteora::opening_hours.title') }}
                </h4>
                <p class="text-xs text-gray-600 dark:text-gray-400">
                    {{ __('saluteora::opening_hours.description') }}
=======
                    {{ __('saluteora::widgets.doctor_availabilities.schedule.title') }}
                </h4>
                <p class="text-xs text-gray-600 dark:text-gray-400">
                    {{ __('saluteora::widgets.doctor_availabilities.schedule.description') }}
>>>>>>> 69133b6d (.)
=======
                    {{ __('saluteora::opening_hours.title') }}
                </h4>
                <p class="text-xs text-gray-600 dark:text-gray-400">
                    {{ __('saluteora::opening_hours.description') }}
>>>>>>> 98275f8c (✨ (DoctorAvailabilitiesWidget): update view path to use pub_theme for better theming support)
                </p>
            </div>
            
            
            {{ ($this->editScheduleAction)(['studioUserId'=>$studioUserId]) }}
        </div>
<<<<<<< HEAD
<<<<<<< HEAD
        @include('pub_theme::components.blocks.schedule.simple', ['schedule' => $schedule])
        
    </div>
<<<<<<< HEAD
<<<<<<< HEAD
</div> 
</div>
=======
</div> 
>>>>>>> aurmich/dev
=======
=======
        @include('pub_theme::components.blocks.schedule.simple', ['schedule' => $schedule])
>>>>>>> 98275f8c (✨ (DoctorAvailabilitiesWidget): update view path to use pub_theme for better theming support)
        
    </div>
</div> 
>>>>>>> 69133b6d (.)
=======
</div> 
</div>
>>>>>>> 8da6447c (- updated style dettaglio-dottore (new calendar))
