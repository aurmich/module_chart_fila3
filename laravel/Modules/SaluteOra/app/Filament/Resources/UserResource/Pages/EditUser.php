<?php

namespace Modules\SaluteOra\Filament\Resources\UserResource\Pages;

use Modules\SaluteOra\Filament\Resources\UserResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\User\Filament\Resources\UserResource\Pages\BaseEditUser;

class EditUser extends BaseEditUser
=======

class EditUser extends XotBaseEditRecord
>>>>>>> 54f4fa16 (.)
=======
use Modules\User\Filament\Resources\UserResource\Pages\BaseEditUser;

class EditUser extends BaseEditUser
>>>>>>> be808045 (✨ (states.mdc): add new states configuration file to define state rules and transitions)
{
    protected static string $resource = UserResource::class;
}
