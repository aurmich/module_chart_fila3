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
    protected static bool $shouldRegisterNavigation = false;

=======
    
>>>>>>> 54f4fa16 (.)
    public static function getFormSchema(): array
    {
        return [
            'name' => Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255),
<<<<<<< HEAD

=======
                
>>>>>>> 54f4fa16 (.)
            'code' => Forms\Components\TextInput::make('code')
                ->required()
                ->maxLength(50)
                ->unique(ignoreRecord: true),
<<<<<<< HEAD

            'description' => Forms\Components\Textarea::make('description')
                ->maxLength(1000)
                ->columnSpanFull(),

=======
                
            'description' => Forms\Components\Textarea::make('description')
                ->maxLength(1000)
                ->columnSpanFull(),
                
>>>>>>> 54f4fa16 (.)
            'duration_minutes' => Forms\Components\TextInput::make('duration_minutes')
                ->numeric()
                ->required()
                ->default(60),
<<<<<<< HEAD

            'is_active' => Forms\Components\Toggle::make('is_active')
                ->default(true),

            'is_eligible_for_subsidy' => Forms\Components\Toggle::make('is_eligible_for_subsidy')
                ->default(true),

            'isee_max_threshold' => Forms\Components\TextInput::make('isee_max_threshold')
                ->numeric()
                ->default(20000),

=======
                
            'is_active' => Forms\Components\Toggle::make('is_active')
                ->default(true),
                
            'is_eligible_for_subsidy' => Forms\Components\Toggle::make('is_eligible_for_subsidy')
                ->default(true),
                
            'isee_max_threshold' => Forms\Components\TextInput::make('isee_max_threshold')
                ->numeric()
                ->default(20000),
                
>>>>>>> 54f4fa16 (.)
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

=======
                
>>>>>>> 54f4fa16 (.)
            'notes' => Forms\Components\Textarea::make('notes')
                ->maxLength(1000)
                ->columnSpanFull(),
        ];
    }
<<<<<<< HEAD

=======
    
>>>>>>> 54f4fa16 (.)
    public static function getTableColumns(): array
    {
        return [
            'id' => Tables\Columns\TextColumn::make('id')
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
<<<<<<< HEAD

            'name' => Tables\Columns\TextColumn::make('name')
                ->searchable()
                ->sortable(),

            'code' => Tables\Columns\TextColumn::make('code')
                ->searchable()
                ->sortable(),

=======
                
            'name' => Tables\Columns\TextColumn::make('name')
                ->searchable()
                ->sortable(),
                
            'code' => Tables\Columns\TextColumn::make('code')
                ->searchable()
                ->sortable(),
                
>>>>>>> 54f4fa16 (.)
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
                
>>>>>>> 54f4fa16 (.)
            'created_at' => Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
        ];
    }
}
