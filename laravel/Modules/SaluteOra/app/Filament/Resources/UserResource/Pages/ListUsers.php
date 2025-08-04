<?php

namespace Modules\SaluteOra\Filament\Resources\UserResource\Pages;

use Filament\Actions;
<<<<<<< HEAD
use Modules\SaluteOra\Models\User;
=======
use Modules\SaluteOra\Enums\UserTypeEnum;
>>>>>>> aurmich/dev
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\SelectColumn;
<<<<<<< HEAD
use Filament\Tables\Filters\SelectFilter;
use Modules\SaluteOra\Enums\UserTypeEnum;
=======
>>>>>>> aurmich/dev
use Modules\SaluteOra\Enums\UserStateEnum;
use Filament\Tables\Actions as TableActions;
use Modules\SaluteOra\States\User\UserState;
use Modules\SaluteOra\Filament\Resources\UserResource;
use Modules\UI\Filament\Tables\Columns\IconStateColumn;
use Modules\UI\Filament\Tables\Columns\SelectStateColumn;
<<<<<<< HEAD
use Modules\UI\Filament\Tables\Columns\IconStateGroupColumn;
=======
>>>>>>> aurmich/dev
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
use Modules\User\Filament\Resources\UserResource\Pages\BaseListUsers;
use Modules\User\Filament\Resources\UserResource\Pages\ListUsers as UserListUsers;

class ListUsers extends BaseListUsers
{
    protected static string $resource = UserResource::class;

<<<<<<< HEAD
   /**
    * @return array<string, \Filament\Tables\Columns\Column|\Modules\UI\Filament\Tables\Columns\IconStateGroupColumn>
    */
   public function getTableColumns(): array
   {
    $parentColumns=parent::getTableColumns();
    unset($parentColumns['name']);
    $res= [
=======
   public function getTableColumns(): array
   {

    $parentColumns=parent::getTableColumns();
    unset($parentColumns['name']);
    return [
>>>>>>> aurmich/dev
        ...$parentColumns,
        'first_name' => TextColumn::make('first_name')
                ->searchable(),
        'last_name' => TextColumn::make('last_name')
                ->searchable(),

        'type'=>SelectColumn::make('type')->options(UserTypeEnum::class),
        //'state'=>SelectStateColumn::make('state'),
        //'state'=>SelectColumn::make('state')->options(UserStateEnum::class)
        //'state'=>SelectColumn::make('state')->options(UserState::class)
<<<<<<< HEAD
        'state' => IconStateColumn::make('state'),
        'states'=>IconStateGroupColumn::make('states')->stateClass(UserState::class, User::class),

    ];
    return $res;
   }


   public function getTableFilters(): array
   {
    return [
        ...parent::getTableFilters(),
        'state'=>SelectFilter::make('state')->options(function(){
            $res=array_keys(UserState::getStateMapping()->toArray());
            $res=array_combine($res,$res);
            return $res;
        }),//->options(UserTypeEnum::class),
    ];
   }

    
=======
        IconStateColumn::make('state'),

    ];
   }

    public function getTableActions(): array
    {
        return [
            ...parent::getTableActions(),

          
        ];
    }
>>>>>>> aurmich/dev
}
