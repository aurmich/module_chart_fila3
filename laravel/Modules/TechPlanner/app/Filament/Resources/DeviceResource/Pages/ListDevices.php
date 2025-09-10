<?php

declare(strict_types=1);

namespace Modules\TechPlanner\Filament\Resources\DeviceResource\Pages;

use Filament\Actions;
use Filament\Tables\Columns\TextColumn;
use Modules\TechPlanner\Filament\Imports\DeviceImporter;
use Modules\TechPlanner\Filament\Resources\DeviceResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

class ListDevices extends XotBaseListRecords
{
    protected static string $resource = DeviceResource::class;

    /**
     * @return array<string, Actions\Action>
     */
    public function getHeaderActions(): array
    {
        $actions = parent::getHeaderActions();
        
        // Convert parent actions to ensure string keys
        $parentActions = [];
        foreach ($actions as $key => $action) {
            $parentActions[is_string($key) ? $key : 'action_'.$key] = $action;
        }
        
        return array_merge($parentActions, [
            'importDevice' => Actions\ImportAction::make('importDevice')
                ->importer(DeviceImporter::class),
        ]);
    }

    public function getTableColumns(): array
    {
        return [
            'id' => TextColumn::make('id')
                ->sortable()
                ->searchable()
                ->label('ID'),

            'client_id' => TextColumn::make('client_id')
                ->sortable()
                ->searchable()
                ->label('ID Cliente'),

            'type' => TextColumn::make('type')
                ->sortable()
                ->searchable()
                ->label('Tipo Apparecchio'),

            'brand' => TextColumn::make('brand')
                ->sortable()
                ->searchable()
                ->label('Marca'),

            'model' => TextColumn::make('model')
                ->sortable()
                ->searchable()
                ->label('Modello'),

            'headset_serial' => TextColumn::make('headset_serial')
                ->sortable()
                ->searchable()
                ->label('Matricola Cuffia'),

            'tube_serial' => TextColumn::make('tube_serial')
                ->sortable()
                ->searchable()
                ->label('Matricola Tubo'),

            'kv' => TextColumn::make('kv')
                ->sortable()
                ->searchable()
                ->label('KV'),

            'ma' => TextColumn::make('ma')
                ->sortable()
                ->searchable()
                ->label('mA'),

            'first_verification_date' => TextColumn::make('first_verification_date')
                ->sortable()
                ->searchable()
                ->label('Data Prima Verifica'),

            'notes' => TextColumn::make('notes')
                ->sortable()
                ->searchable()
                ->wrap()
                ->label('Note'),
        ];
    }
}
