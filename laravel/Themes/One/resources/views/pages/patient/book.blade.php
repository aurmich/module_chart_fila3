<<<<<<< HEAD
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

<x-layouts.app>
    @volt('patient.book')
    <div class="min-h-screen bg-gradient-to-b from-blue-50 to-white py-12">

        <!-- Card contenente il form di registrazione -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            @livewire(\Modules\SaluteOra\Filament\Widgets\Patient\FindDoctorAndAppointmentWidget::class, [])
        </div>

    </div>
    @endvolt
</x-layouts.app>
>>>>>>> 520b5152 (📝 (mcp.json, filament-best-practices.mdc, find-dentist-implementation.md): update documentation for improved clarity and consistency in coding practices, including namespace rules, widget implementation, and translation handling to ensure adherence to project standards and enhance maintainability.)
