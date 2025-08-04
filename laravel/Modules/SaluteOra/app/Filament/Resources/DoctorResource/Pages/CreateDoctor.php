<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Filament\Resources\DoctorResource\Pages;

use Modules\SaluteOra\Filament\Resources\DoctorResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord;
<<<<<<< HEAD
use Modules\SaluteOra\Filament\Resources\UserResource\Pages\CreateUser;

class CreateDoctor extends CreateUser
=======

class CreateDoctor extends XotBaseCreateRecord
>>>>>>> 54f4fa16 (.)
{
    protected static string $resource = DoctorResource::class;
}
