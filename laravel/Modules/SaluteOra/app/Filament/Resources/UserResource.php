<?php

namespace Modules\SaluteOra\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Tables\Table;
use Modules\User\Filament\Resources\BaseUserResource;
use Modules\SaluteOra\Models\User;
use Filament\Forms\Components\Select;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Modules\SaluteOra\Enums\UserTypeEnum;
use Modules\SaluteOra\Enums\UserStateEnum;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\UI\Filament\Forms\Components\SelectState;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\SaluteOra\Filament\Resources\UserResource\Pages;
=======
use Modules\SaluteMo\Filament\Resources\UserResource\Pages;
>>>>>>> aurmich/dev
=======
use Modules\SaluteOra\Filament\Resources\UserResource\Pages;
>>>>>>> 03b27bf2 (✨ (laravel): update .env.example to remove DEBUGBAR_ENABLED and improve clarity)

class UserResource extends BaseUserResource
{
    protected static ?string $model = User::class;
    //protected static ?string $tenantOwnershipRelationshipName = 'owner';
    //protected static ?string $tenantRelationshipName = 'blogPosts';
    protected static bool $isScopedToTenant = false;

    public static function getFormSchema(): array
    {
        return [
<<<<<<< HEAD
            Forms\Components\TextInput::make('first_name')
                ->required()
                ->maxLength(255)
                ,
            Forms\Components\TextInput::make('last_name')
                ->required()
                ->maxLength(255)
                ,
=======
            Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255),
>>>>>>> aurmich/dev
            Forms\Components\TextInput::make('email')
                ->email()
                ->required()
                ->maxLength(255)
                ->unique(ignoreRecord: true),
<<<<<<< HEAD

            Forms\Components\TextInput::make('phone'),
=======
>>>>>>> aurmich/dev
            Forms\Components\Select::make('type')
                ->options(UserTypeEnum::class)
                ->enum(UserTypeEnum::class)
                ->required(),
            SelectState::make('state'),
            /*
            Forms\Components\Select::make('state')
                ->options(UserState::class)
                ->required(),
            */
        ];
    }


    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
    
}

