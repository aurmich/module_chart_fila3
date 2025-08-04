<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\NotificationResource\Pages;

use Filament\Actions\DeleteAction;
use Modules\Notify\Filament\Resources\NotificationResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
<<<<<<< HEAD
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
=======
use Modules\Xot\Filament\Resources\XotBaseResource\RelationManagers\XotBaseRelationManager;
>>>>>>> 54f4fa16 (.)

class EditNotification extends \Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord
{
    protected static string $resource = NotificationResource::class;

}
