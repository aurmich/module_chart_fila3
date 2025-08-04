<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\UserResource\Pages;

use Filament\Tables;
use Filament\Tables\Actions\Action;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Tables\Filters\Filter;
use Illuminate\Database\Query\Builder;
use Filament\Tables\Columns\TextColumn;
use Modules\Xot\Contracts\UserContract;
use Filament\Tables\Actions\ExportBulkAction;
use Modules\User\Filament\Resources\UserResource;
use Modules\User\Filament\Actions\ChangePasswordAction;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
use Modules\User\Filament\Resources\UserResource\Pages\BaseListUsers;
use Modules\User\Filament\Resources\UserResource\Widgets\UserOverview;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;

class ListUsers extends BaseListUsers
{
    protected static string $resource = UserResource::class;

<<<<<<< HEAD
=======
    /**
     * @return array<string, TextColumn>
     */
>>>>>>> aurmich/dev
    public function getTableColumns(): array
    {
        return [
            //'id' => TextColumn::make('id'),
=======
use Filament\Tables\Actions\ExportBulkAction;
use Filament\Tables\Columns\TextColumn;
=======
>>>>>>> be808045 (✨ (states.mdc): add new states configuration file to define state rules and transitions)
=======
use Filament\Tables\Actions\ExportBulkAction;
use Filament\Tables\Columns\TextColumn;
>>>>>>> 15cb84fb (fix collisions)
use Filament\Tables\Filters\Filter;
use Illuminate\Database\Query\Builder;
use Modules\User\Filament\Actions\ChangePasswordAction;
use Modules\User\Filament\Resources\UserResource;
use Modules\User\Filament\Resources\UserResource\Widgets\UserOverview;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

class ListUsers extends XotBaseListRecords
{
    protected static string $resource = UserResource::class;

    /**
     * @return array<string, TextColumn>
     */
    public function getTableColumns(): array
    {
        return [
<<<<<<< HEAD
<<<<<<< HEAD
            'id' => TextColumn::make('id'),
>>>>>>> 54f4fa16 (.)
=======
            //'id' => TextColumn::make('id'),
>>>>>>> be808045 (✨ (states.mdc): add new states configuration file to define state rules and transitions)
=======
            'id' => TextColumn::make('id'),
>>>>>>> 15cb84fb (fix collisions)
            'name' => TextColumn::make('name')
                ->searchable(),
            'email' => TextColumn::make('email')
                ->searchable(),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> be808045 (✨ (states.mdc): add new states configuration file to define state rules and transitions)
            //'email_verified_at' => TextColumn::make('email_verified_at')
            //    ->dateTime(),
            //'created_at' => TextColumn::make('created_at')
            //    ->dateTime(),
<<<<<<< HEAD
=======
=======
>>>>>>> 15cb84fb (fix collisions)
            'email_verified_at' => TextColumn::make('email_verified_at')
                ->dateTime(),
            'created_at' => TextColumn::make('created_at')
                ->dateTime(),
<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> be808045 (✨ (states.mdc): add new states configuration file to define state rules and transitions)
=======
>>>>>>> 15cb84fb (fix collisions)
        ];
    }

    /**
     * @return array<Tables\Filters\BaseFilter>
     */
    public function getTableFilters(): array
    {
        return [
<<<<<<< HEAD
<<<<<<< HEAD
            /*
=======
>>>>>>> aurmich/dev
=======
>>>>>>> 54f4fa16 (.)
            Filter::make('verified')
                ->query(static fn (Builder $query): Builder => $query->whereNotNull('email_verified_at')),
            Filter::make('unverified')
                ->query(static fn (Builder $query): Builder => $query->whereNull('email_verified_at')),
<<<<<<< HEAD
<<<<<<< HEAD
            */
=======
>>>>>>> aurmich/dev
=======
>>>>>>> 54f4fa16 (.)
        ];
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * @phpstan-ignore-next-line
     */
    public function getTableActions(): array
    {
        /** @phpstan-ignore-next-line */
        return [
            'change_password' => ChangePasswordAction::make()
                ->tooltip('Cambio Password')
                ->iconButton(),
            ...parent::getTableActions(),
            'deactivate' => Action::make('deactivate')
=======
=======
>>>>>>> 54f4fa16 (.)
     * @return array<Action|Tables\Actions\ActionGroup>
     */
    public function getTableActions(): array
    {
        return [
            ChangePasswordAction::make()
                ->tooltip('Cambio Password')
                ->iconButton(),
            ...parent::getTableActions(),
            Action::make('deactivate')
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
>>>>>>> 54f4fa16 (.)
                ->tooltip(__('filament-actions::delete.single.label'))
                ->color('danger')
                ->icon('heroicon-o-trash')
                ->action(static fn (UserContract $user) => $user->delete()),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            UserOverview::class,
        ];
    }

    /**
     * @return array<string, Tables\Actions\BulkAction>
     */
    public function getTableBulkActions(): array
    {
        return [
            'delete' => Tables\Actions\DeleteBulkAction::make(),
            'export' => ExportBulkAction::make(),
        ];
    }
}
