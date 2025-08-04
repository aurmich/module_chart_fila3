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
     * @return array<Tables\Columns\Column>
=======
     * @return array<string, Tables\Columns\Column>
>>>>>>> 54f4fa16 (.)
     */
    public function getTableColumns(): array
    {
        return [
<<<<<<< HEAD
            Tables\Columns\TextColumn::make('id'),
            Tables\Columns\TextColumn::make('event_class'),
            Tables\Columns\ViewColumn::make('event_properties')
=======
            'id' => Tables\Columns\TextColumn::make('id'),
            'event_class' => Tables\Columns\TextColumn::make('event_class'),
            'event_properties' => Tables\Columns\ViewColumn::make('event_properties')
>>>>>>> 54f4fa16 (.)
                ->view('activity::filament.tables.columns.event-properties'),
        ];
    }
}
