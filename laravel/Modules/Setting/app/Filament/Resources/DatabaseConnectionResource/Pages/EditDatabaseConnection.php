<?php

declare(strict_types=1);

namespace Modules\Setting\Filament\Resources\DatabaseConnectionResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Modules\Setting\Filament\Resources\DatabaseConnectionResource;
use Modules\Setting\Models\DatabaseConnection;

class EditDatabaseConnection extends EditRecord
{
    protected static string $resource = DatabaseConnectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
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

    protected function afterSave(): void
    {
        /** @var \Illuminate\Database\Eloquent\Model|DatabaseConnection|null $record */
        $record = $this->getRecord();
        if ($record !== null && $record->status === 'active') {
            $record->testConnection();
        }
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
