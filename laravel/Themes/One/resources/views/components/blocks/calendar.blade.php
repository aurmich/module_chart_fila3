{{-- Componente Calendar Minimalista per SaluteOra --}}
@props([
    'type' => 'patient', // patient|doctor|admin
])

<<<<<<< HEAD
<div class="calendar-container">
    @livewire(\Modules\UI\Filament\Widgets\UserCalendarWidget::class, ['type' => $type])
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<div class="calendar-container">
    @livewire(\Modules\UI\Filament\Widgets\UserCalendarWidget::class, ['type' => $type])
=======
@php
    $widgetClass = match($type) {
        'patient' => \Modules\SaluteOra\Filament\Widgets\PatientCalendarWidget::class,
        'doctor' => \Modules\SaluteOra\Filament\Widgets\DoctorCalendarWidget::class,
        'admin' => \Modules\SaluteOra\Filament\Widgets\AdminCalendarWidget::class,
        default => \Modules\SaluteOra\Filament\Widgets\PatientCalendarWidget::class,
    };
@endphp

<div class="calendar-container">
    @livewire(\Modules\UI\Filament\Widgets\UserCalendarWidget::class)
>>>>>>> 2099645a (.)
=======
<div class="calendar-container">
    @livewire(\Modules\UI\Filament\Widgets\UserCalendarWidget::class, ['type' => $type])
>>>>>>> ca5e1eaf (.)
=======
<div class="calendar-container">
    @livewire(\Modules\UI\Filament\Widgets\UserCalendarWidget::class, ['type' => $type])
>>>>>>> 7bc70bf2 (🚀 (laravel/Themes/One): remove deprecated files and old theme structure to streamline the codebase and improve maintainability)
>>>>>>> aurmich/dev
</div>
