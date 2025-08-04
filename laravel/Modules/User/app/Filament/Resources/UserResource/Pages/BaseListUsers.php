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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * Get table columns for user records.
     *
<<<<<<< HEAD
     * @return array<string, \Filament\Tables\Columns\Column>
=======
=======
     * Get table columns for user records.
     *
>>>>>>> a3174e5b (phpstan)
=======
=======
     * Get table columns for user records.
     *
>>>>>>> aurmich/dev
=======
     * Get table columns for user records.
     *
>>>>>>> a3f7230 (.)
>>>>>>> b58de900 (.)
=======
     * Get table columns for user records.
     *
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
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
<<<<<<< HEAD
=======
            //'id' => TextColumn::make('id'),
>>>>>>> be808045 (✨ (states.mdc): add new states configuration file to define state rules and transitions)
=======
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
            'name' => TextColumn::make('name')
                ->searchable(),
            'email' => TextColumn::make('email')
                ->searchable(),
<<<<<<< HEAD
<<<<<<< HEAD
=======
            //'email_verified_at' => TextColumn::make('email_verified_at')
            //    ->dateTime(),
            //'created_at' => TextColumn::make('created_at')
            //    ->dateTime(),
>>>>>>> be808045 (✨ (states.mdc): add new states configuration file to define state rules and transitions)
=======
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
        ];
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * Get table filters for user records.
     *
=======
>>>>>>> be808045 (✨ (states.mdc): add new states configuration file to define state rules and transitions)
=======
     * Get table filters for user records.
     *
>>>>>>> a3174e5b (phpstan)
=======
=======
     * Get table filters for user records.
     *
>>>>>>> aurmich/dev
=======
     * Get table filters for user records.
     *
>>>>>>> a3f7230 (.)
>>>>>>> b58de900 (.)
=======
     * Get table filters for user records.
     *
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
     * @return array<Tables\Filters\BaseFilter>
     */
    public function getTableFilters(): array
    {
        return [
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            // Filtri disabilitati per ora, abilitare se necessario
<<<<<<< HEAD
            /*
<<<<<<< HEAD
=======
>>>>>>> be808045 (✨ (states.mdc): add new states configuration file to define state rules and transitions)
=======
<<<<<<< HEAD
=======
            /*
>>>>>>> aurmich/dev
=======
>>>>>>> a3f7230 (.)
>>>>>>> b58de900 (.)
=======
            // Filters disabled by default, enable if needed
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
=======
>>>>>>> c6edea7c (.)
            Filter::make('verified')
                ->query(static fn (Builder $query): Builder => $query->whereNotNull('email_verified_at')),
            Filter::make('unverified')
                ->query(static fn (Builder $query): Builder => $query->whereNull('email_verified_at')),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            */
=======
<<<<<<< HEAD
>>>>>>> be808045 (✨ (states.mdc): add new states configuration file to define state rules and transitions)
=======
<<<<<<< HEAD
=======
            */
>>>>>>> aurmich/dev
=======
>>>>>>> a3f7230 (.)
>>>>>>> b58de900 (.)
=======
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
=======
            // Filtri disabilitati per ora, abilitare se necessario
>>>>>>> fb6fbaa2 (move resources/lang to lang)
=======
            */
>>>>>>> c6edea7c (.)
=======
>>>>>>> 4c632a28 (✨ (bashscripts): add new scripts for managing MCP MySQL server and PHPStan analysis)
>>>>>>> f3af6b23 (📝 (bugfix.txt): remove merge conflict markers and clean up documentation for clarity and readability)
        ];
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
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
                ->tooltip(__('filament-actions::delete.single.label'))
                ->color('danger')
                ->icon('heroicon-o-trash')
                ->action(static fn (UserContract $user) => $user->delete()),
        ];
    }

=======
=======
>>>>>>> a3f7230 (.)
>>>>>>> b58de900 (.)
=======
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
     * Get table actions for user records.
     *
     * @return array<\Filament\Tables\Actions\Action|\Filament\Tables\Actions\ActionGroup>
>>>>>>> a3174e5b (phpstan)
     */
    public function getTableActions(): array
    {
        $actions = [
            ChangePasswordAction::make()
                ->tooltip('Cambio Password')
                ->iconButton(),
        ];
        
        // Add parent actions - filter to ensure type compatibility
        $parentActions = parent::getTableActions();
        foreach ($parentActions as $action) {
            if ($action instanceof \Filament\Tables\Actions\Action || $action instanceof \Filament\Tables\Actions\ActionGroup) {
                $actions[] = $action;
            }
        }
        
        // Add deactivate action
        $actions[] = Action::make('deactivate')
            ->tooltip(__('filament-actions::delete.single.label'))
            ->color('danger')
            ->icon('heroicon-o-trash')
            ->action(static fn (UserContract $user) => $user->delete());
            
        return $actions;
    }

    /**
     * Get header widgets for the user list page.
     *
     * @return array<class-string>
     */
    protected function getHeaderWidgets(): array
    {
        return [UserOverview::class];
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<string, Tables\Actions\BulkAction>
>>>>>>> be808045 (✨ (states.mdc): add new states configuration file to define state rules and transitions)
=======
<<<<<<< HEAD
     * @return array<string, Tables\Actions\BulkAction>
>>>>>>> b58de900 (.)
=======
     * Get table bulk actions for user records.
     *
     * @return array<Tables\Actions\BulkAction>
<<<<<<< HEAD
>>>>>>> a3174e5b (phpstan)
=======
>>>>>>> aurmich/dev
=======
     * Get table bulk actions for user records.
     *
     * @return array<Tables\Actions\BulkAction>
>>>>>>> a3f7230 (.)
>>>>>>> b58de900 (.)
=======
     * Get table bulk actions for user records.
     *
     * @return array<\Filament\Tables\Actions\BulkAction>
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
     */
    public function getTableBulkActions(): array
    {
        return [
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
            Tables\Actions\DeleteBulkAction::make(),
            ExportBulkAction::make(),
>>>>>>> a3174e5b (phpstan)
=======
            'delete' => Tables\Actions\DeleteBulkAction::make(),
            'export' => ExportBulkAction::make(),
=======
            Tables\Actions\DeleteBulkAction::make(),
            ExportBulkAction::make(),
>>>>>>> aurmich/dev
=======
            Tables\Actions\DeleteBulkAction::make(),
            ExportBulkAction::make(),
>>>>>>> a3f7230 (.)
>>>>>>> b58de900 (.)
=======
            Tables\Actions\DeleteBulkAction::make(),
            ExportBulkAction::make(),
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
        ];
    }
}
