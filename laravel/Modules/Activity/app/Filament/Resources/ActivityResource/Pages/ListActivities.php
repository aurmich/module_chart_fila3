<?php

declare(strict_types=1);

namespace Modules\Activity\Filament\Resources\ActivityResource\Pages;

use Filament\Tables\Columns\TextColumn;
use Modules\Activity\Filament\Resources\ActivityResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Filament\Tables\Columns\Tables;
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 6581c95e (♻️ (ListActivities.php, ListStoredEvents.php, LogoutListener.php): refactor code to improve readability and maintainability by removing unused imports and comments)
>>>>>>> aurmich/dev

/**
 * @see ActivityResource
 */
class ListActivities extends XotBaseListRecords
{
    protected static string $resource = ActivityResource::class;

    public function getTableColumns(): array
    {
        return [
            TextColumn::make('id')
                ->sortable()
                ->searchable(),
            TextColumn::make('description')
                ->searchable()
                ->limit(50),
            TextColumn::make('subject_type')
                ->searchable(),
            TextColumn::make('subject_id')
                ->searchable(),
            TextColumn::make('causer_type')
                ->searchable(),
            TextColumn::make('causer_id')
                ->searchable(),
            TextColumn::make('created_at')
                ->dateTime()
                ->sortable(),
        ];
    }
}
