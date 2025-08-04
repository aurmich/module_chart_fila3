<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ce78fe45 (translations + middleware + field on patientresource + openinghoursfield su relationsmanager)
>>>>>>> aurmich/dev
<?php

declare(strict_types=1);
use Modules\User\Http\Middleware\EnsureUserHasType;
use function Laravel\Folio\{middleware, name};
use function Livewire\Volt\{state, rules};

middleware(['auth',EnsureUserHasType::class.':patient']);
name('patient.book');



?>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> aurmich/dev
=======
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======
>>>>>>> 7bc70bf2 (🚀 (laravel/Themes/One): remove deprecated files and old theme structure to streamline the codebase and improve maintainability)
=======
>>>>>>> ce78fe45 (translations + middleware + field on patientresource + openinghoursfield su relationsmanager)
>>>>>>> aurmich/dev
{{--
    Questa pagina include direttamente il widget Filament modularizzato per la prenotazione paziente.
    Policy: nessun form custom, solo widget Filament.
    Vedi docs/roadmap_frontoffice/30-patient-book.md e docs/rules/filament_best_practices.md
--}}
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD

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

=======
<?php
declare(strict_types=1);
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Livewire\Volt\Component;
use function Laravel\Folio\{middleware, name};
use Livewire\Attributes\Validate;


//middleware(['guest']);
name('patient.book');

new class extends Component
{
    #[Validate('required')]
    public $type;

    //public function mount(string $type)
    //{
    //    $this->type = $type;
    //}

    // Logica del componente se necessaria
};

?>
=======
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)

{{-- Template standard per l'integrazione dei widget --}}
<x-layouts.app>
<div class="page-container">
    <div class="content-wrapper">
        @livewire(\Modules\SaluteOra\Filament\Widgets\Patient\FindDoctorAndAppointmentWidget::class)
    </div>
</div>
</x-layouts.app>
<<<<<<< HEAD
>>>>>>> 520b5152 (📝 (mcp.json, filament-best-practices.mdc, find-dentist-implementation.md): update documentation for improved clarity and consistency in coding practices, including namespace rules, widget implementation, and translation handling to ensure adherence to project standards and enhance maintainability.)
=======

>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======
>>>>>>> aurmich/dev

{{-- Template standard per l'integrazione dei widget --}}
<x-layouts.app>
<div>
<<<<<<< HEAD
    @volt('patient.book')
    <div class="w-full min-h-[600px] lg:min-h-[725px] flex flex-col items-center">
=======
<<<<<<< HEAD
<<<<<<< HEAD
    @volt('patient.book')
    <div class="w-full min-h-[600px] lg:min-h-[725px] bg-[#E6EBF7] flex flex-col items-center">
=======
=======
    @volt('patient.book')
>>>>>>> edc37a42 (✨ (DoctorAvailabilitiesWidget): introduce DoctorAvailabilitiesWidget to display)
    <div class="w-full min-h-[600px] lg:min-h-[725px] flex flex-col items-center">
>>>>>>> 8da6447c (- updated style dettaglio-dottore (new calendar))
>>>>>>> aurmich/dev
        <h1 class="m-5">Prenota la tua visita</h1>
        <div class="w-full lg:w-2/4 p-5">
            @livewire(\Modules\SaluteOra\Filament\Widgets\Patient\FindDoctorAndAppointmentWidget::class)
        </div>
    </div>
    @endvolt
</div>
</x-layouts.app>

<<<<<<< HEAD
=======
>>>>>>> 7bc70bf2 (🚀 (laravel/Themes/One): remove deprecated files and old theme structure to streamline the codebase and improve maintainability)
>>>>>>> aurmich/dev
