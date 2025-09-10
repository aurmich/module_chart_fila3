<?php

declare(strict_types=1);

namespace Modules\Setting\Filament\Resources\DatabaseConnectionResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;
use Modules\Setting\Filament\Resources\DatabaseConnectionResource;
use Modules\Setting\Models\DatabaseConnection;

class ViewDatabaseConnection extends ViewRecord
{
    protected static string $resource = DatabaseConnectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
            Actions\DeleteAction::make(),
            Actions\Action::make('test')
                ->action(function () {
                    /** @var \Illuminate\Database\Eloquent\Model|DatabaseConnection|null $record */
                    $record = $this->getRecord();
                    if ($record !== null) {
                        $record->testConnection();
                    }
                })
                ->icon('heroicon-o-check-circle')
                ->color('success'),
        ];
    }
} 