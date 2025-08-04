<?php

namespace Modules\SaluteOra\Filament\Resources\UserResource\Pages;

use Modules\SaluteOra\Filament\Resources\UserResource;
<<<<<<< HEAD
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
=======
use Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord;

class CreateUser extends XotBaseCreateRecord
>>>>>>> 54f4fa16 (.)
{
    protected static string $resource = UserResource::class;
}
