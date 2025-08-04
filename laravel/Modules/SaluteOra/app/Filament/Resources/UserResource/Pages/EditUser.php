<?php

namespace Modules\SaluteOra\Filament\Resources\UserResource\Pages;

use Modules\SaluteOra\Filament\Resources\UserResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
<<<<<<< HEAD
use Modules\User\Filament\Resources\UserResource\Pages\BaseEditUser;

class EditUser extends BaseEditUser
=======

class EditUser extends XotBaseEditRecord
>>>>>>> 54f4fa16 (.)
{
    protected static string $resource = UserResource::class;
}
