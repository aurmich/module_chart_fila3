<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\ProfileResource\Pages;

use Modules\User\Filament\Resources\ProfileResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord;




<<<<<<< HEAD
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
=======
use Modules\Xot\Filament\Resources\XotBaseResource\RelationManagers\XotBaseRelationManager;
>>>>>>> 54f4fa16 (.)





class CreateProfile extends \Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord
{
    protected static string $resource = ProfileResource::class;
}
