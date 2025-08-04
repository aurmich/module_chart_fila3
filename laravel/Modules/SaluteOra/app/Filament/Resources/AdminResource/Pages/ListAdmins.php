<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Filament\Resources\AdminResource\Pages;

use Illuminate\Support\Arr;
<<<<<<< HEAD
use Modules\SaluteOra\Models\Admin;
use Modules\SaluteOra\Models\Patient;
use Modules\SaluteOra\States\User\UserState;
use Modules\Xot\Filament\Widgets\StateOverviewWidget;
=======
>>>>>>> aurmich/dev
use Modules\SaluteOra\Filament\Resources\AdminResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
use Modules\SaluteOra\Filament\Resources\UserResource\Pages\ListUsers;

class ListAdmins extends ListUsers
{
    protected static string $resource = AdminResource::class;

    public function getTableColumns(): array
    {
        $columns= parent::getTableColumns();   
        $columns=Arr::except($columns,['type']);
        return $columns;
    }
<<<<<<< HEAD

    public function getHeaderWidgets(): array
    {
        /**@phpstan-ignore-next-line */
        return [
            StateOverviewWidget::make(['stateClass'=>UserState::class,'model'=>Admin::class]),
        ];
    }
=======
>>>>>>> aurmich/dev
}
