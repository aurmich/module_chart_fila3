<?php

declare(strict_types=1);

namespace Modules\SaluteMo\Filament\Resources;

<<<<<<< HEAD
use Modules\SaluteOra\Models\Patient;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\SaluteOra\Filament\Resources\UserResource;
use Modules\SaluteOra\Filament\Resources\PatientResource as BasePatientResource;
=======
use Modules\SaluteOra\Filament\Resources\PatientResource as BasePatientResource;
use Modules\SaluteMo\Models\Patient;
>>>>>>> 1b052af9 (♻️ (HealthCardUpload.php): remove HealthCardUpload component as it is no longer needed)

class PatientResource extends BasePatientResource
{
    protected static ?string $model = Patient::class;
<<<<<<< HEAD
    protected static bool $isScopedToTenant = false;

    /*
    public static function getFormSchema(): array
    {
        $schema = BasePatientResource::getFormSchema();
        
        return $schema;
    }
        */
        
=======

    public static function getFormSchema(): array
    {
        $schema = parent::getFormSchema();

        // Aggiungi qui eventuali campi specifici per SaluteMo
        return $schema;
    }
>>>>>>> 1b052af9 (♻️ (HealthCardUpload.php): remove HealthCardUpload component as it is no longer needed)
}