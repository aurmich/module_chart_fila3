<?php

declare(strict_types=1);

namespace Modules\Activity\Filament\Resources\SnapshotResource\Pages;

use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ViewColumn;
use Modules\Activity\Filament\Resources\SnapshotResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

/**
 * @see SnapshotResource
 */
class ListSnapshots extends XotBaseListRecords
{
    protected static string $resource = SnapshotResource::class;

    /**
     * Get the list table columns.
     *
<<<<<<< HEAD
     * @return array<Tables\Columns\Column>
=======
     * @return array<string, Tables\Columns\Column>
>>>>>>> 54f4fa16 (.)
     */
    public function getTableColumns(): array
    {
        return [
            TextColumn::make('id')
                ->sortable()
                ->searchable(),
            TextColumn::make('aggregate_uuid')
                ->searchable(),
            TextColumn::make('aggregate_version')
                ->sortable(),
            TextColumn::make('state')
                ->searchable(),
            TextColumn::make('created_at')
                ->dateTime()
                ->sortable(),
            TextColumn::make('updated_at')
                ->dateTime()
                ->sortable(),
        ];
    }

    /**
<<<<<<< HEAD
     * @return array<Tables\Filters\BaseFilter>
=======
     * @return array<string, Tables\Filters\BaseFilter>
>>>>>>> 54f4fa16 (.)
     */
    public function getTableFilters(): array
    {
        return [
<<<<<<< HEAD
            Tables\Filters\SelectFilter::make('aggregate_type')
=======
            'aggregate_type' => Tables\Filters\SelectFilter::make('aggregate_type')
>>>>>>> 54f4fa16 (.)
                ->options([
                    'user' => 'User',
                    'profile' => 'Profile',
                    'role' => 'Role',
                ])
                ->multiple(),
        ];
    }

    /**
     * @return array<string, Tables\Actions\Action|Tables\Actions\ActionGroup>
     */
    public function getTableActions(): array
    {
        return [
            'view' => Tables\Actions\ViewAction::make(),
            'edit' => Tables\Actions\EditAction::make(),
            'delete' => Tables\Actions\DeleteAction::make(),
        ];
    }

    /**
<<<<<<< HEAD
     * @return array<Tables\Actions\BulkAction>
=======
     * @return array<string, Tables\Actions\BulkAction>
>>>>>>> 54f4fa16 (.)
     */
    public function getTableBulkActions(): array
    {
        return [
<<<<<<< HEAD
            Tables\Actions\DeleteBulkAction::make(),
=======
            'delete' => Tables\Actions\DeleteBulkAction::make(),
>>>>>>> 54f4fa16 (.)
        ];
    }
}
