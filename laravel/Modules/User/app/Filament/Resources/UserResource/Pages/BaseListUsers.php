<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\UserResource\Pages;

use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\ExportBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Illuminate\Database\Query\Builder;
use Modules\User\Filament\Actions\ChangePasswordAction;
use Modules\User\Filament\Resources\UserResource;
use Modules\User\Filament\Resources\UserResource\Widgets\UserOverview;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
=======
use Modules\Xot\Filament\Resources\XotBaseResource\RelationManagers\XotBaseRelationManager;
>>>>>>> be808045 (✨ (states.mdc): add new states configuration file to define state rules and transitions)
=======
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
>>>>>>> 2bcfd382 (fix Address)

abstract class BaseListUsers extends XotBaseListRecords
{
    protected static string $resource = UserResource::class;

    /**
<<<<<<< HEAD
     * Get table columns for user records.
     *
<<<<<<< HEAD
     * @return array<string, \Filament\Tables\Columns\Column>
=======
     * @return array<string, TextColumn>
>>>>>>> aurmich/dev
=======
     * @return array<string, TextColumn>
>>>>>>> be808045 (✨ (states.mdc): add new states configuration file to define state rules and transitions)
     */
    public function getTableColumns(): array
    {
        return [
<<<<<<< HEAD
=======
            //'id' => TextColumn::make('id'),
>>>>>>> be808045 (✨ (states.mdc): add new states configuration file to define state rules and transitions)
            'name' => TextColumn::make('name')
                ->searchable(),
            'email' => TextColumn::make('email')
                ->searchable(),
<<<<<<< HEAD
=======
            //'email_verified_at' => TextColumn::make('email_verified_at')
            //    ->dateTime(),
            //'created_at' => TextColumn::make('created_at')
            //    ->dateTime(),
>>>>>>> be808045 (✨ (states.mdc): add new states configuration file to define state rules and transitions)
        ];
    }

    /**
<<<<<<< HEAD
     * Get table filters for user records.
     *
=======
>>>>>>> be808045 (✨ (states.mdc): add new states configuration file to define state rules and transitions)
     * @return array<Tables\Filters\BaseFilter>
     */
    public function getTableFilters(): array
    {
        return [
<<<<<<< HEAD
            // Filtri disabilitati per ora, abilitare se necessario
            /*
=======
>>>>>>> be808045 (✨ (states.mdc): add new states configuration file to define state rules and transitions)
            Filter::make('verified')
                ->query(static fn (Builder $query): Builder => $query->whereNotNull('email_verified_at')),
            Filter::make('unverified')
                ->query(static fn (Builder $query): Builder => $query->whereNull('email_verified_at')),
<<<<<<< HEAD
            */
=======
>>>>>>> be808045 (✨ (states.mdc): add new states configuration file to define state rules and transitions)
        ];
    }

    /**
<<<<<<< HEAD
     * Get table actions for user records.
     *
<<<<<<< HEAD
     * @return array<string, \Filament\Tables\Actions\Action|\Filament\Tables\Actions\ActionGroup>
     * @phpstan-ignore-next-line
     */
    /** @phpstan-ignore-next-line */
    public function getTableActions(): array
    {
        $actions = [
            'change_password' => ChangePasswordAction::make()
=======
     * @return array<\Filament\Tables\Actions\Action|\Filament\Tables\Actions\ActionGroup>
     */
    public function getTableActions(): array
    {
        $actions = [
            ChangePasswordAction::make()
>>>>>>> aurmich/dev
                ->tooltip('Cambio Password')
                ->iconButton(),
        ];
        
<<<<<<< HEAD
        // Add parent actions - merge arrays
        $parentActions = parent::getTableActions();
        $actions = array_merge($actions, $parentActions);
        
        /*
        // Add deactivate action
        $actions['deactivate'] = Action::make('deactivate')
=======
        // Add parent actions - filter to ensure type compatibility
        $parentActions = parent::getTableActions();
        foreach ($parentActions as $action) {
            if ($action instanceof \Filament\Tables\Actions\Action || $action instanceof \Filament\Tables\Actions\ActionGroup) {
                $actions[] = $action;
            }
        }
        
        // Add deactivate action
        $actions[] = Action::make('deactivate')
>>>>>>> aurmich/dev
            ->tooltip(__('filament-actions::delete.single.label'))
            ->color('danger')
            ->icon('heroicon-o-trash')
            ->action(static fn (UserContract $user) => $user->delete());
<<<<<<< HEAD
        */   
        /** @phpstan-ignore-next-line */
=======
            
>>>>>>> aurmich/dev
        return $actions;
    }

    /**
     * Get header widgets for the user list page.
     *
     * @return array<class-string>
     */
    protected function getHeaderWidgets(): array
    {
<<<<<<< HEAD
        return [
            //UserOverview::class
        ];
=======
        return [UserOverview::class];
>>>>>>> aurmich/dev
    }

    /**
     * Get table bulk actions for user records.
     *
     * @return array<\Filament\Tables\Actions\BulkAction>
=======
     * @return array<Action|Tables\Actions\ActionGroup>
     */
    public function getTableActions(): array
    {
        return [
            'change-password' => ChangePasswordAction::make()
                ->tooltip('Cambio Password')
                ->iconButton(),
            ...parent::getTableActions(),
            'deactivate' => Action::make('deactivate')
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
>>>>>>> be808045 (✨ (states.mdc): add new states configuration file to define state rules and transitions)
     */
    public function getTableBulkActions(): array
    {
        return [
<<<<<<< HEAD
            Tables\Actions\DeleteBulkAction::make(),
<<<<<<< HEAD
            //ExportBulkAction::make(),
=======
            ExportBulkAction::make(),
>>>>>>> aurmich/dev
=======
            'delete' => Tables\Actions\DeleteBulkAction::make(),
            'export' => ExportBulkAction::make(),
>>>>>>> be808045 (✨ (states.mdc): add new states configuration file to define state rules and transitions)
        ];
    }
}
