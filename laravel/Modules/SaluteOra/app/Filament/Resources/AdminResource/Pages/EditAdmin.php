<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Filament\Resources\AdminResource\Pages;

use Modules\SaluteOra\Filament\Resources\AdminResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
<<<<<<< HEAD
use Modules\SaluteOra\Filament\Resources\UserResource\Pages\EditUser;

class EditAdmin extends EditUser
=======

class EditAdmin extends XotBaseEditRecord
>>>>>>> 7440f060 (delete duplicate folder + add .md)
{
    protected static string $resource = AdminResource::class;
}
