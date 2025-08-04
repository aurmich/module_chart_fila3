<<<<<<< HEAD
<?php

declare(strict_types=1);
use Modules\User\Http\Middleware\EnsureUserHasType;
use function Laravel\Folio\{middleware, name};
use function Livewire\Volt\{state, rules};

middleware(['auth',EnsureUserHasType::class.':patient']);
name('patient.book');



?>
=======
>>>>>>> aurmich/dev
{{--
    Questa pagina include direttamente il widget Filament modularizzato per la prenotazione paziente.
    Policy: nessun form custom, solo widget Filament.
    Vedi docs/roadmap_frontoffice/30-patient-book.md e docs/rules/filament_best_practices.md
--}}

{{-- Template standard per l'integrazione dei widget --}}
<x-layouts.app>
<<<<<<< HEAD
<<<<<<< HEAD
<div>
    @volt('patient.book')
    <div class="w-full min-h-[600px] lg:min-h-[725px] flex flex-col items-center">
=======
<div>
    <div class="w-full min-h-[600px] lg:min-h-[725px] bg-[#E6EBF7] flex flex-col items-center">
>>>>>>> 3ad9917a (- fix styles registration)
        <h1 class="m-5">Prenota la tua visita</h1>
        <div class="w-full lg:w-2/4 p-5">
            @livewire(\Modules\SaluteOra\Filament\Widgets\Patient\FindDoctorAndAppointmentWidget::class)
        </div>
<<<<<<< HEAD
    </div>
    @endvolt
=======
<div class="w-full min-h-[600px] lg:min-h-[725px] bg-[#E6EBF7] flex flex-col items-center">
    <h1 class="m-5">Prenota la tua visita</h1>
    <div class="w-full lg:w-2/4 p-5">
        @livewire(\Modules\SaluteOra\Filament\Widgets\Patient\FindDoctorAndAppointmentWidget::class)
=======
>>>>>>> 3ad9917a (- fix styles registration)
    </div>
>>>>>>> aurmich/dev
</div>
</x-layouts.app>

