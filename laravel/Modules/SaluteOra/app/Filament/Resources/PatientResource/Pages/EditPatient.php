<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Filament\Resources\PatientResource\Pages;

use Modules\SaluteOra\Filament\Resources\PatientResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
<<<<<<< HEAD
use Modules\SaluteOra\Filament\Resources\UserResource\Pages\EditUser;

class EditPatient extends EditUser
=======


class EditPatient extends XotBaseEditRecord
>>>>>>> 54f4fa16 (.)
{
    protected static string $resource = PatientResource::class;
}
