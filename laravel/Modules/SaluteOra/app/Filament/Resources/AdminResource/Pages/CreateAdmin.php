<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Filament\Resources\AdminResource\Pages;

use Modules\SaluteOra\Filament\Resources\AdminResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\SaluteOra\Filament\Resources\UserResource\Pages\CreateUser;

class CreateAdmin extends CreateUser
=======

class CreateAdmin extends XotBaseCreateRecord
>>>>>>> 7440f060 (delete duplicate folder + add .md)
=======
use Modules\SaluteOra\Filament\Resources\UserResource\Pages\CreateUser;

class CreateAdmin extends CreateUser
>>>>>>> 86036e79 (✨ (CreateAdmin, EditAdmin, ListAdmins, CreateDoctor, EditDoctor, ListDoctors, CreatePatient, EditPatient, ListPatients): refactor admin, doctor, and patient resources to extend user resource classes for better code reuse and maintainability)
{
    protected static string $resource = AdminResource::class;
}
