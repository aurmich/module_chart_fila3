<?php

declare(strict_types=1);

namespace Modules\SaluteMo\Filament\Resources;

<<<<<<< HEAD
use Filament\Forms;
use Modules\SaluteOra\Models\Doctor;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\SaluteOra\Filament\Resources\DoctorResource as BaseDoctorResource;

class DoctorResource extends BaseDoctorResource
=======
use Modules\SaluteOra\Models\Doctor;
use Modules\Xot\Filament\Resources\XotBaseResource;
//use Modules\SaluteOra\Filament\Resources\PatientResource as BasePatientResource;

class DoctorResource extends XotBaseResource
>>>>>>> f3e4ec66 (.)
{
    protected static ?string $model = Doctor::class;
    protected static bool $isScopedToTenant = false;

<<<<<<< HEAD
   
=======
    public static function getFormSchema(): array
    {
        //$schema = parent::getFormSchema();

        // Aggiungi qui eventuali campi specifici per SaluteMo
        //return $schema;
        return [];
    }
>>>>>>> f3e4ec66 (.)
}