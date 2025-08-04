<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Filament\Resources\DoctorResource\Pages;

use Modules\SaluteOra\Filament\Resources\DoctorResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\SaluteOra\Filament\Resources\UserResource\Pages\CreateUser;

class CreateDoctor extends CreateUser
=======

class CreateDoctor extends XotBaseCreateRecord
>>>>>>> 54f4fa16 (.)
=======
use Modules\SaluteOra\Filament\Resources\UserResource\Pages\CreateUser;

class CreateDoctor extends CreateUser
>>>>>>> 86036e79 (✨ (CreateAdmin, EditAdmin, ListAdmins, CreateDoctor, EditDoctor, ListDoctors, CreatePatient, EditPatient, ListPatients): refactor admin, doctor, and patient resources to extend user resource classes for better code reuse and maintainability)
{
    protected static string $resource = DoctorResource::class;
}
