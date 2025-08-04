<?php

declare(strict_types=1);

namespace Modules\SaluteMo\Filament\Resources;

use Modules\SaluteOra\Models\Patient;
use Modules\Xot\Filament\Resources\XotBaseResource;
<<<<<<< HEAD
use Modules\SaluteOra\Filament\Resources\UserResource;
use Modules\SaluteOra\Filament\Resources\PatientResource as BasePatientResource;

class PatientResource extends BasePatientResource
=======
use Modules\SaluteOra\Filament\Resources\PatientResource as BasePatientResource;

class PatientResource extends XotBaseResource
>>>>>>> aurmich/dev
{
    protected static ?string $model = Patient::class;
    protected static bool $isScopedToTenant = false;

<<<<<<< HEAD
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
        //$schema = parent::getFormSchema();

        // Aggiungi qui eventuali campi specifici per SaluteMo
        //return $schema;
        return [];
    }
>>>>>>> aurmich/dev
}