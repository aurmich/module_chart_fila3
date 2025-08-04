<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Filament\Resources\AdminResource\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Arr;
use Modules\SaluteOra\Models\Admin;
use Modules\SaluteOra\Models\Patient;
use Modules\SaluteOra\States\User\UserState;
use Modules\Xot\Filament\Widgets\StateOverviewWidget;
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

    public function getHeaderWidgets(): array
    {
        /**@phpstan-ignore-next-line */
        return [
            StateOverviewWidget::make(['stateClass'=>UserState::class,'model'=>Admin::class]),
        ];
    }
=======
=======
use Illuminate\Support\Arr;
>>>>>>> 86036e79 (✨ (CreateAdmin, EditAdmin, ListAdmins, CreateDoctor, EditDoctor, ListDoctors, CreatePatient, EditPatient, ListPatients): refactor admin, doctor, and patient resources to extend user resource classes for better code reuse and maintainability)
use Modules\SaluteOra\Filament\Resources\AdminResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
use Modules\SaluteOra\Filament\Resources\UserResource\Pages\ListUsers;

class ListAdmins extends ListUsers
{
    protected static string $resource = AdminResource::class;
<<<<<<< HEAD
>>>>>>> 7440f060 (delete duplicate folder + add .md)
=======

    public function getTableColumns(): array
    {
        $columns= parent::getTableColumns();   
        $columns=Arr::except($columns,['type']);
        return $columns;
    }
>>>>>>> 86036e79 (✨ (CreateAdmin, EditAdmin, ListAdmins, CreateDoctor, EditDoctor, ListDoctors, CreatePatient, EditPatient, ListPatients): refactor admin, doctor, and patient resources to extend user resource classes for better code reuse and maintainability)
}
