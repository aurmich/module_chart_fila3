<?php

declare(strict_types=1);

namespace Modules\SaluteMo\Filament\Resources\StudioResource\Pages;

use Filament\Tables;
use Modules\SaluteMo\Filament\Resources\StudioResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

class ListStudios extends XotBaseListRecords
{
    protected static string $resource = StudioResource::class;

    /**
     * Get the table columns.
     *
     * @return array<string, Tables\Columns\Column>
     */
    public function getTableColumns(): array
    {
        return [
            'id' => Tables\Columns\TextColumn::make('id')
                ->sortable(),
            'active' => Tables\Columns\IconColumn::make('active')
                ->boolean(),
<<<<<<< HEAD
            'full_address' => Tables\Columns\TextColumn::make('full_address')
                ->searchable()
                    ,
=======
<<<<<<< HEAD
<<<<<<< HEAD
            'full_address' => Tables\Columns\TextColumn::make('full_address')
                ->searchable()
                    ,
=======
            'full_address' => Tables\Columns\TextColumn::make('address')
                ->searchable()
                ->default(function($record){
                    $address = $record?->address()->first();
                    if($address==null){
                        return null;
                    }
                    $locality=$address->getLocality();
                    if($locality==null){
                        return null;
                    }
                    return $address->street_address.' '.$address->street_number.' '.implode('',$locality['cap']).' '.$locality['nome'].' ('.$locality['provincia']['nome'].') - '.$locality['regione']['nome'];
                }),
>>>>>>> 304589c8 (✨ (bashscripts): add ORGANIZATION.md to document the structure and organization of bash scripts for better maintainability and navigation)
=======
            'full_address' => Tables\Columns\TextColumn::make('full_address')
                ->searchable()
                    ,
>>>>>>> 23f43388 (feat: add openingHoursField to studiorelationmanager of doctorresource)
>>>>>>> aurmich/dev
                
            'name' => Tables\Columns\TextColumn::make('name')
                ->searchable()
                ->sortable(),
                
            'phone' => Tables\Columns\TextColumn::make('phone')
                ->searchable(),
                
            'email' => Tables\Columns\TextColumn::make('email')
                ->searchable(),
                
            'website' => Tables\Columns\TextColumn::make('website'),
                
            'registration_number' => Tables\Columns\TextColumn::make('registration_number'),
                
            'vat_number' => Tables\Columns\TextColumn::make('vat_number'),
                
            
            
            
        ];
    }
}
