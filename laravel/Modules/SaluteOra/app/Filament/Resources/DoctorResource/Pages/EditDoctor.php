<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Filament\Resources\DoctorResource\Pages;

use Filament\Actions;
use Modules\SaluteOra\Filament\Resources\DoctorResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
use Modules\SaluteOra\Filament\Resources\UserResource\Pages\EditUser;

class EditDoctor extends EditUser
{
    protected static string $resource = DoctorResource::class;

   
<<<<<<< HEAD
=======
=======
=======
use Modules\SaluteOra\Filament\Resources\UserResource\Pages\EditUser;
>>>>>>> 86036e79 (✨ (CreateAdmin, EditAdmin, ListAdmins, CreateDoctor, EditDoctor, ListDoctors, CreatePatient, EditPatient, ListPatients): refactor admin, doctor, and patient resources to extend user resource classes for better code reuse and maintainability)

class EditDoctor extends EditUser
{
    protected static string $resource = DoctorResource::class;

<<<<<<< HEAD
    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
>>>>>>> 54f4fa16 (.)
=======
   
>>>>>>> 2bcfd382 (fix Address)
>>>>>>> aurmich/dev
}
