<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\SaluteOra\Models\Treatment;
use Modules\SaluteOra\Filament\Resources\TreatmentResource\Pages;

class TreatmentResource extends XotBaseResource
{
    protected static ?string $model = Treatment::class;
<<<<<<< HEAD
<<<<<<< HEAD
    protected static bool $shouldRegisterNavigation = false;

=======
    
>>>>>>> 54f4fa16 (.)
=======
    protected static bool $shouldRegisterNavigation = false;

>>>>>>> 2bcfd382 (fix Address)
    public static function getFormSchema(): array
    {
        return [
            'name' => Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255),
<<<<<<< HEAD
<<<<<<< HEAD

=======
                
>>>>>>> 54f4fa16 (.)
=======

>>>>>>> 2bcfd382 (fix Address)
            'code' => Forms\Components\TextInput::make('code')
                ->required()
                ->maxLength(50)
                ->unique(ignoreRecord: true),
<<<<<<< HEAD
<<<<<<< HEAD

            'description' => Forms\Components\Textarea::make('description')
                ->maxLength(1000)
                ->columnSpanFull(),

=======
                
            'description' => Forms\Components\Textarea::make('description')
                ->maxLength(1000)
                ->columnSpanFull(),
                
>>>>>>> 54f4fa16 (.)
=======

            'description' => Forms\Components\Textarea::make('description')
                ->maxLength(1000)
                ->columnSpanFull(),

>>>>>>> 2bcfd382 (fix Address)
            'duration_minutes' => Forms\Components\TextInput::make('duration_minutes')
                ->numeric()
                ->required()
                ->default(60),
<<<<<<< HEAD
<<<<<<< HEAD

            'is_active' => Forms\Components\Toggle::make('is_active')
                ->default(true),

            'is_eligible_for_subsidy' => Forms\Components\Toggle::make('is_eligible_for_subsidy')
                ->default(true),

            'isee_max_threshold' => Forms\Components\TextInput::make('isee_max_threshold')
                ->numeric()
                ->default(20000),

=======
                
=======

>>>>>>> 2bcfd382 (fix Address)
            'is_active' => Forms\Components\Toggle::make('is_active')
                ->default(true),

            'is_eligible_for_subsidy' => Forms\Components\Toggle::make('is_eligible_for_subsidy')
                ->default(true),

            'isee_max_threshold' => Forms\Components\TextInput::make('isee_max_threshold')
                ->numeric()
                ->default(20000),
<<<<<<< HEAD
                
>>>>>>> 54f4fa16 (.)
=======

>>>>>>> 2bcfd382 (fix Address)
            'category' => Forms\Components\Select::make('category')
                ->options([
                    'preventive' => 'Prevenzione',
                    'diagnostic' => 'Diagnostica',
                    'restorative' => 'Conservativa',
                    'periodontal' => 'Parodontologia',
                    'endodontic' => 'Endodonzia',
                    'surgical' => 'Chirurgia',
                    'prosthetic' => 'Protesi',
                    'orthodontic' => 'Ortodonzia',
                    'other' => 'Altro',
                ])
                ->required(),
<<<<<<< HEAD
<<<<<<< HEAD

=======
                
>>>>>>> 54f4fa16 (.)
=======

>>>>>>> 2bcfd382 (fix Address)
            'notes' => Forms\Components\Textarea::make('notes')
                ->maxLength(1000)
                ->columnSpanFull(),
        ];
    }
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> 54f4fa16 (.)
=======

>>>>>>> 2bcfd382 (fix Address)
    public static function getTableColumns(): array
    {
        return [
            'id' => Tables\Columns\TextColumn::make('id')
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
<<<<<<< HEAD
<<<<<<< HEAD

            'name' => Tables\Columns\TextColumn::make('name')
                ->searchable()
                ->sortable(),

            'code' => Tables\Columns\TextColumn::make('code')
                ->searchable()
                ->sortable(),

=======
                
=======

>>>>>>> 2bcfd382 (fix Address)
            'name' => Tables\Columns\TextColumn::make('name')
                ->searchable()
                ->sortable(),

            'code' => Tables\Columns\TextColumn::make('code')
                ->searchable()
                ->sortable(),
<<<<<<< HEAD
                
>>>>>>> 54f4fa16 (.)
=======

>>>>>>> 2bcfd382 (fix Address)
            'category' => Tables\Columns\SelectColumn::make('category')
                ->options([
                    'preventive' => 'Prevenzione',
                    'diagnostic' => 'Diagnostica',
                    'restorative' => 'Conservativa',
                    'periodontal' => 'Parodontologia',
                    'endodontic' => 'Endodonzia',
                    'surgical' => 'Chirurgia',
                    'prosthetic' => 'Protesi',
                    'orthodontic' => 'Ortodonzia',
                    'other' => 'Altro',
                ])
                ->sortable(),
<<<<<<< HEAD
<<<<<<< HEAD

            'duration_minutes' => Tables\Columns\TextColumn::make('duration_minutes')
                ->numeric()
                ->sortable(),

            'is_eligible_for_subsidy' => Tables\Columns\IconColumn::make('is_eligible_for_subsidy')
                ->boolean()
                ->sortable(),

            'isee_max_threshold' => Tables\Columns\TextColumn::make('isee_max_threshold')
                ->numeric()
                ->sortable(),

            'is_active' => Tables\Columns\IconColumn::make('is_active')
                ->boolean()
                ->sortable(),

=======
                
=======

>>>>>>> 2bcfd382 (fix Address)
            'duration_minutes' => Tables\Columns\TextColumn::make('duration_minutes')
                ->numeric()
                ->sortable(),

            'is_eligible_for_subsidy' => Tables\Columns\IconColumn::make('is_eligible_for_subsidy')
                ->boolean()
                ->sortable(),

            'isee_max_threshold' => Tables\Columns\TextColumn::make('isee_max_threshold')
                ->numeric()
                ->sortable(),

            'is_active' => Tables\Columns\IconColumn::make('is_active')
                ->boolean()
                ->sortable(),
<<<<<<< HEAD
                
>>>>>>> 54f4fa16 (.)
=======

>>>>>>> 2bcfd382 (fix Address)
            'created_at' => Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
        ];
    }
}
