<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Filament\Resources\AdminResource\Pages;

use Modules\SaluteOra\Filament\Resources\AdminResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord;
<<<<<<< HEAD
use Modules\SaluteOra\Filament\Resources\UserResource\Pages\CreateUser;

class CreateAdmin extends CreateUser
=======

class CreateAdmin extends XotBaseCreateRecord
>>>>>>> 7440f060 (delete duplicate folder + add .md)
{
    protected static string $resource = AdminResource::class;
}
