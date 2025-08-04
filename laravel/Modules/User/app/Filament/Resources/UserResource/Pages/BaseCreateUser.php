<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\UserResource\Pages;

use Modules\User\Filament\Resources\UserResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

abstract class BaseCreateUser extends XotBaseCreateRecord
=======
use Modules\Xot\Filament\Resources\XotBaseResource\RelationManagers\XotBaseRelationManager;

abstract class BaseCreateUser extends \Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord
>>>>>>> be808045 (✨ (states.mdc): add new states configuration file to define state rules and transitions)
=======

abstract class BaseCreateUser extends XotBaseCreateRecord
>>>>>>> 2099645a (.)
=======

abstract class BaseCreateUser extends XotBaseCreateRecord
>>>>>>> d23ba493 (add calendar)
{
    // //
    protected static string $resource = UserResource::class;
}
