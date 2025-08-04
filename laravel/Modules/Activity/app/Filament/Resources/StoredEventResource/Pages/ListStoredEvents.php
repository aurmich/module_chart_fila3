<?php

declare(strict_types=1);

namespace Modules\Activity\Filament\Resources\StoredEventResource\Pages;

use Filament\Tables;
use Modules\Activity\Filament\Resources\StoredEventResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

class ListStoredEvents extends XotBaseListRecords
{
    protected static string $resource = StoredEventResource::class;

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<Tables\Columns\Column>
=======
     * @return array<string, Tables\Columns\Column>
>>>>>>> 54f4fa16 (.)
=======
     * @return array<Tables\Columns\Column>
>>>>>>> 6581c95e (♻️ (ListActivities.php, ListStoredEvents.php, LogoutListener.php): refactor code to improve readability and maintainability by removing unused imports and comments)
     */
    public function getTableColumns(): array
    {
        return [
<<<<<<< HEAD
<<<<<<< HEAD
            Tables\Columns\TextColumn::make('id'),
            Tables\Columns\TextColumn::make('event_class'),
            Tables\Columns\ViewColumn::make('event_properties')
=======
            'id' => Tables\Columns\TextColumn::make('id'),
            'event_class' => Tables\Columns\TextColumn::make('event_class'),
            'event_properties' => Tables\Columns\ViewColumn::make('event_properties')
>>>>>>> 54f4fa16 (.)
=======
            Tables\Columns\TextColumn::make('id'),
            Tables\Columns\TextColumn::make('event_class'),
            Tables\Columns\ViewColumn::make('event_properties')
>>>>>>> 6581c95e (♻️ (ListActivities.php, ListStoredEvents.php, LogoutListener.php): refactor code to improve readability and maintainability by removing unused imports and comments)
                ->view('activity::filament.tables.columns.event-properties'),
        ];
    }
}
