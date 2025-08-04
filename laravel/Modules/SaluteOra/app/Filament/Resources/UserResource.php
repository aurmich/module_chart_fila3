<?php

namespace Modules\SaluteOra\Filament\Resources;

<<<<<<< HEAD
<<<<<<< HEAD
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
use Modules\SaluteOra\Filament\Resources\UserResource\Pages;

class UserResource extends BaseUserResource
{
    protected static ?string $model = User::class;
    //protected static ?string $tenantOwnershipRelationshipName = 'owner';
    //protected static ?string $tenantRelationshipName = 'blogPosts';
    protected static bool $isScopedToTenant = false;
=======
use Modules\Xot\Filament\Resources\XotBaseResource;
=======
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
use Filament\Forms;
use Filament\Tables;
use Filament\Tables\Table;
use Modules\SaluteOra\Models\User;
use Filament\Forms\Components\Select;
use Modules\SaluteOra\Enums\UserType;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Modules\SaluteOra\Enums\UserStateEnum;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\UI\Filament\Forms\Components\SelectState;
use Modules\SaluteOra\Filament\Resources\UserResource\Pages;

class UserResource extends XotBaseResource
{
    protected static ?string $model = User::class;
>>>>>>> 54f4fa16 (.)

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
            Forms\Components\TextInput::make('email')
                ->email()
                ->required()
                ->maxLength(255)
                ->unique(ignoreRecord: true),

            Forms\Components\TextInput::make('phone'),
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

=======
            Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('email')
                ->email()
                ->required()
                ->maxLength(255)
                ->unique(ignoreRecord: true),
            Forms\Components\Select::make('type')
                ->options(UserType::class)
                ->required(),
            SelectState::make('state'),
            /*
            Forms\Components\Select::make('state')
                ->options(UserState::class)
                ->required(),
            */
        ];
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('email')
                    ->searchable(),
                TextColumn::make('type')
                    ->badge(),
                TextColumn::make('state')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        UserState::ACTIVE->value => 'success',
                        UserState::PENDING->value => 'warning',
                        UserState::SUSPENDED->value => 'danger',
                        default => 'gray',
                    }),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('type')
                    ->options(UserType::class),
                SelectFilter::make('state')
                    ->options(UserState::class),
            ])
            ->actions([
                EditAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
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
>>>>>>> 54f4fa16 (.)
