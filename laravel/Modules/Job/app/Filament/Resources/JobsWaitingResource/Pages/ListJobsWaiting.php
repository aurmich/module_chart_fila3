<?php

declare(strict_types=1);

/**
 * ---.
 */

namespace Modules\Job\Filament\Resources\JobsWaitingResource\Pages;

use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Table;
use Modules\Job\Filament\Resources\JobsWaitingResource;
use Modules\Job\Filament\Resources\JobsWaitingResource\Widgets\JobsWaitingOverview;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

class ListJobsWaiting extends XotBaseListRecords
{
    public static string $resource = JobsWaitingResource::class;

<<<<<<< HEAD
<<<<<<< HEAD
    
=======
    public function getHeaderActions(): array
    {
        return [];
    }
>>>>>>> 54f4fa16 (.)
=======
    
>>>>>>> 8e4d163b (phpstan)

    public function getHeaderWidgets(): array
    {
        return [
            JobsWaitingOverview::class,
        ];
    }

<<<<<<< HEAD
<<<<<<< HEAD
   
=======
    public function getTitle(): string
    {
        return __('jobs::translations.title');
    }

    public function getTableActions(): array
    {
        return [];
    }

    public function getTableBulkActions(): array
    {
        return [
            DeleteBulkAction::make(),
        ];
    }

    public function getGridTableColumns(): array
    {
        return [];
    }
>>>>>>> 54f4fa16 (.)
=======
   
>>>>>>> 8e4d163b (phpstan)

    public function getTableColumns(): array
    {
        return [
<<<<<<< HEAD
<<<<<<< HEAD
            'id' => TextColumn::make('id')
                ->searchable()
                ->sortable(),
            'queue' => TextColumn::make('queue')
                ->searchable()
                ->sortable(),
            'display_name' => TextColumn::make('display_name')
                ->searchable()
                ->sortable()
                ->wrap(),
            'status' => TextColumn::make('status')
=======
            TextColumn::make('id')
=======
            'id' => TextColumn::make('id')
>>>>>>> 8e4d163b (phpstan)
                ->searchable()
                ->sortable(),
            'queue' => TextColumn::make('queue')
                ->searchable()
                ->sortable(),
            'display_name' => TextColumn::make('display_name')
                ->searchable()
                ->sortable()
                ->wrap(),
<<<<<<< HEAD
            TextColumn::make('status')
>>>>>>> 54f4fa16 (.)
=======
            'status' => TextColumn::make('status')
>>>>>>> 8e4d163b (phpstan)
                ->badge()
                ->sortable()
                ->color(
                    static fn (string $state): string => match ($state) {
                        'running' => 'primary',
                        'waiting' => 'success',
                        'failed' => 'danger',
                        default => 'secondary',
                    }
                ),
<<<<<<< HEAD
<<<<<<< HEAD
            'attempts' => TextColumn::make('attempts')
                ->numeric()
                ->sortable(),
            'available_at' => TextColumn::make('available_at')
                ->dateTime()
                ->sortable(),
            'reserved_at' => TextColumn::make('reserved_at')
                ->dateTime()
                ->sortable(),
            'created_at' => TextColumn::make('created_at')
                ->dateTime()
                ->sortable(),
            'updated_at' => TextColumn::make('updated_at')
=======
            TextColumn::make('attempts')
=======
            'attempts' => TextColumn::make('attempts')
>>>>>>> 8e4d163b (phpstan)
                ->numeric()
                ->sortable(),
            'available_at' => TextColumn::make('available_at')
                ->dateTime()
                ->sortable(),
            'reserved_at' => TextColumn::make('reserved_at')
                ->dateTime()
                ->sortable(),
            'created_at' => TextColumn::make('created_at')
                ->dateTime()
                ->sortable(),
<<<<<<< HEAD
            TextColumn::make('updated_at')
>>>>>>> 54f4fa16 (.)
=======
            'updated_at' => TextColumn::make('updated_at')
>>>>>>> 8e4d163b (phpstan)
                ->dateTime()
                ->sortable(),
        ];
    }
}
