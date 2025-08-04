{{-- Componente Calendar Minimalista per SaluteOra --}}
@props([
    'type' => 'patient', // patient|doctor|admin
])

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
</div>
