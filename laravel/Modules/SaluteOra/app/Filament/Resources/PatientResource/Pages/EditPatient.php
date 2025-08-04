<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Filament\Resources\PatientResource\Pages;

use Modules\SaluteOra\Filament\Resources\PatientResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\SaluteOra\Filament\Resources\UserResource\Pages\EditUser;

class EditPatient extends EditUser
=======


class EditPatient extends XotBaseEditRecord
>>>>>>> 54f4fa16 (.)
=======
use Modules\SaluteOra\Filament\Resources\UserResource\Pages\EditUser;

class EditPatient extends EditUser
>>>>>>> 86036e79 (✨ (CreateAdmin, EditAdmin, ListAdmins, CreateDoctor, EditDoctor, ListDoctors, CreatePatient, EditPatient, ListPatients): refactor admin, doctor, and patient resources to extend user resource classes for better code reuse and maintainability)
{
    protected static string $resource = PatientResource::class;
}
