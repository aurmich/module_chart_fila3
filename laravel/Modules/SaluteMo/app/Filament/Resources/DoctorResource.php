<?php

declare(strict_types=1);

namespace Modules\SaluteMo\Filament\Resources;

<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Forms;
use Modules\SaluteOra\Models\Doctor;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\SaluteOra\Filament\Resources\DoctorResource as BaseDoctorResource;
<<<<<<< HEAD

class DoctorResource extends BaseDoctorResource
=======
=======
use Filament\Forms;
>>>>>>> 23f43388 (feat: add openingHoursField to studiorelationmanager of doctorresource)
use Modules\SaluteOra\Models\Doctor;
use Modules\Xot\Filament\Resources\XotBaseResource;
//use Modules\SaluteOra\Filament\Resources\PatientResource as BasePatientResource;

class DoctorResource extends XotBaseResource
>>>>>>> f3e4ec66 (.)
=======

class DoctorResource extends BaseDoctorResource
>>>>>>> f158a85a (✨ (lang_service.php, doctor.php, xot_base.php): add Italian translations for doctor certificate fields to enhance localization support)
{
    protected static ?string $model = Doctor::class;
    protected static bool $isScopedToTenant = false;

<<<<<<< HEAD
<<<<<<< HEAD
   
=======
    public static function getFormSchema(): array
    {
        //$schema = parent::getFormSchema();

        // Aggiungi qui eventuali campi specifici per SaluteMo
        //return $schema;
        return [
        
            'first_name' => Forms\Components\TextInput::make('first_name')
                ->required()
                ->maxLength(255)
                ->autocomplete('given-name')
                ,
            'last_name' => Forms\Components\TextInput::make('last_name')
                ->required()
                ->maxLength(255)
                ->autocomplete('family-name')
                ,
            'email' => Forms\Components\TextInput::make('email')
                ->required()
                ,
        ];
    }
>>>>>>> f3e4ec66 (.)
=======
   
>>>>>>> f158a85a (✨ (lang_service.php, doctor.php, xot_base.php): add Italian translations for doctor certificate fields to enhance localization support)
}