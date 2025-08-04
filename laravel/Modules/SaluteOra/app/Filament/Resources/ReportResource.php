<?php

<<<<<<< HEAD
namespace Modules\SaluteOra\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Get;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Modules\SaluteOra\Models\Report;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Modules\SaluteOra\Enums\ToothFDIEnum;
use Modules\SaluteOra\Enums\DayFrequencyEnum;
use Modules\SaluteOra\Enums\MedicalConditionEnum;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\SaluteOra\Enums\OccurrenceFrequencyEnum;
use Modules\SaluteOra\Filament\Resources\ReportResource\Pages;
use Modules\SaluteOra\Filament\Resources\ReportResource\RelationManagers;
=======
declare(strict_types=1);

namespace Modules\SaluteOra\Filament\Resources;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Modules\SaluteOra\Filament\Resources\ReportResource\Pages;
use Modules\SaluteOra\Models\Report;
use Modules\Xot\Filament\Resources\XotBaseResource;
>>>>>>> aurmich/dev

class ReportResource extends XotBaseResource
{
    protected static ?string $model = Report::class;

<<<<<<< HEAD
    public static  function getFormSchema(): array
    {
        return [
            Toggle::make('has_mouth_or_teeth_pain')
                                       //       ->label('Dolore a bocca o denti (ultimi 12 mesi)')   
            ->reactive(),
            //mouth_teeth_pain_frequency  //quanto spesso
            Select::make('mouth_teeth_pain_frequency')
                ->options(OccurrenceFrequencyEnum::class)
                ->visible(fn(Get $get): bool => (bool)$get('has_mouth_or_teeth_pain')),
            TextInput::make('pregnancy_month')
                                       //       ->label('Mese Gravidanza')
                                       ->numeric()
                                       ->minValue(0)
                                       ->maxValue(9)
                                       ->nullable(),
            TextInput::make('pregnancy_week')
                                       //       ->label('Settimana Gravidanza')
                                       ->numeric()
                                       ->minValue(0)
                                       ->maxValue(4)
                                       ->nullable(),
            Select::make('teeth_brushing_frequency')
                                       ->options(DayFrequencyEnum::class), //label('N. volte lavaggio denti')
            Toggle::make('smokes')
                                       //       ->label('Fuma')
                                       ,
            Toggle::make('visits_dentist_yearly')
                                       //       ->label('Va dal dentista almeno 1 volta/anno')
                                       ,
            //--------------------------------------------------------------------------------------------
            Toggle::make('has_diseases')
                                       //       ->label('Affetta da malattia')
                                       ->reactive(),
            Select::make('specify_diseases')
                                       ->options(MedicalConditionEnum::class)
                                       ->multiple()
                                       ->visible(fn(Get $get): bool => (bool)$get('has_diseases')),
            //---------------------------------------------------------------------------------------------
            Toggle::make('follows_diet_rules')
                                       //       ->label('Segue regole alimentari')
                                       ,
            Toggle::make('uses_asl_clinic_for_dental_care')
                                       //       ->label('Si rivolge ad ambulatorio ASL')
                                       ,
            //-----------------------------------------------------------------------------------------
            Toggle::make('missing_teeth')
                                       //       ->label('Denti mancanti')
                                       ->reactive(),
            Select::make('specify_missing_teeth')
                                       ->options(ToothFDIEnum::class)
                                       ->multiple()
                                       ->visible(fn(Get $get): bool => (bool)$get('missing_teeth')),
            Textarea::make('more_info_missing_teeth')
                                       //       ->label('Ulteriori info (denti mancanti)')
                                       ->nullable()
                                       ->visible(fn(Get $get): bool => (bool)$get('missing_teeth')),
            //-------------------------------------------------------------------------------
            Toggle::make('decayed_teeth')
                                       //       ->label('Denti cariati')
                                       ->reactive(),
            Select::make('specify_decayed_teeth')
                                       ->options(ToothFDIEnum::class)
                                       ->multiple()
                                       ->nullable()
                                       ->visible(fn(Get $get): bool => (bool)$get('decayed_teeth')),
            Textarea::make('more_info_decayed_teeth')
                                       ->visible(fn(Get $get): bool => (bool)$get('decayed_teeth')),
            //---------------------------------------------------------------------------------------------------------
            Toggle::make('has_fixed_prosthesis_or_implants')
                                       //       ->label('Protesi fissa o impianti')
                                       ->reactive(),
            Select::make('specify_prosthesis_or_implants')
                                       ->options(ToothFDIEnum::class)
                                       ->nullable()
                                       ->visible(fn(Get $get): bool => (bool)$get('has_fixed_prosthesis_or_implants')),
            Textarea::make('more_info_prosthesis')
                                       //       ->label('Ulteriori info (protesi)')
                                       ->nullable()
                                       ->visible(fn(Get $get): bool => (bool)$get('has_fixed_prosthesis_or_implants')),
            //-----------------------------------------------------------------------
            Toggle::make('has_tartar')
                                       //       ->label('Tartaro')
                                       ->reactive(),
            Select::make('specify_tartar')
                                       ->options(ToothFDIEnum::class)
                                       ->multiple()
                                       ->nullable()
                                       ->visible(fn(Get $get): bool => (bool)$get('has_tartar')),
            Textarea::make('more_info_tartar')
                                       //       ->label('Ulteriori info (tartaro)')
                                       ->nullable()
                                       ->visible(fn(Get $get): bool => (bool)$get('has_tartar')),
            //-----------------------------------------------------------------------------
            Toggle::make('has_plaque')
                                       //       ->label('Placca')
                                       ->reactive(),
            Select::make('specify_plaque')
                                       ->options(ToothFDIEnum::class)
                                       ->multiple()
                                       ->nullable()
                                       ->visible(fn(Get $get): bool => (bool)$get('has_plaque')),
            Textarea::make('more_info_plaque')
                                       //       ->label('Ulteriori info (placca)')
                                       ->nullable()
                                       ->visible(fn(Get $get): bool => (bool)$get('has_plaque')),
            //-----------------------------------------------------------------------------
            Toggle::make('needs_more_dental_care')
                                       //       ->label('Necessita cure odontoiatriche')
                                       ->reactive(),
            Textarea::make('further_notes')
                                       //       ->label('Ulteriori specifiche')
                                       ->nullable()
                                       ->visible(fn(Get $get): bool => (bool)$get('needs_more_dental_care')),
            //----------------------------------------------------------------------------
        ];
    }

    
=======
    /**
     * Ottiene lo schema del form per la risorsa Report.
     *
     * @return array<string, Forms\Components\Component>
     */
    public static function getFormSchema(): array
    {
        return [
            'name' => Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255),
            'description' => Forms\Components\Textarea::make('description')
                ->maxLength(65535),
            'type' => Forms\Components\Select::make('type')
                ->required()
                ->options([
                    'pdf' => 'PDF',
                    'csv' => 'CSV',
                ]),
            'start_date' => Forms\Components\DateTimePicker::make('start_date')
                ->required(),
            'end_date' => Forms\Components\DateTimePicker::make('end_date')
                ->required(),
            'parameters' => Forms\Components\KeyValue::make('parameters')
                ->keyLabel('Parametro')
                ->valueLabel('Valore'),
            'status' => Forms\Components\Select::make('status')
                ->required()
                ->options([
                    'pending' => 'In attesa',
                    'processing' => 'In elaborazione',
                    'completed' => 'Completato',
                    'error' => 'Errore',
                ]),
            'created_at' => Forms\Components\DateTimePicker::make('created_at')
                ->required(),
            'created_by' => Forms\Components\TextInput::make('created_by')
                ->required()
                ->maxLength(255),
        ];
    }

    /**
     * Ottiene le colonne della tabella per la risorsa Report.
     *
     * @return array<string, Tables\Columns\Column>
     */
    public static function getTableColumns(): array
    {
        return [
            'id' => Tables\Columns\TextColumn::make('id')
                ->sortable(),
                
            'name' => Tables\Columns\TextColumn::make('name')
                ->searchable()
                ->sortable()
                ->label('Nome Report'),
                
            'type' => Tables\Columns\TextColumn::make('type')
                ->searchable()
                ->sortable()
                ->label('Tipo Report')
                ->formatStateUsing(fn (string $state): string => match($state) {
                    'paziente_demografico' => 'Analisi Demografica Pazienti',
                    'visite_per_periodo' => 'Statistiche Visite per Periodo',
                    'attivita_odontoiatri' => 'Analisi Attività Odontoiatri',
                    'isee_analisi' => 'Analisi ISEE Pazienti',
                    default => $state,
                }),
                
            'start_date' => Tables\Columns\TextColumn::make('start_date')
                ->dateTime()
                ->sortable()
                ->label('Data Inizio'),
                
            'end_date' => Tables\Columns\TextColumn::make('end_date')
                ->dateTime()
                ->sortable()
                ->label('Data Fine'),
                
            'status' => Tables\Columns\BadgeColumn::make('status')
                ->colors([
                    'danger' => 'error',
                    'warning' => 'processing',
                    'success' => 'completed',
                ])
                ->sortable()
                ->label('Stato')
                ->formatStateUsing(fn (string $state): string => match($state) {
                    'pending' => 'In attesa',
                    'processing' => 'In elaborazione',
                    'completed' => 'Completato',
                    'error' => 'Errore',
                    default => $state,
                }),
                
            'created_at' => Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->label('Data Creazione'),
                
            'creator.name' => Tables\Columns\TextColumn::make('creator.name')
                ->searchable()
                ->sortable()
                ->label('Creato da'),
        ];
    }

    /**
     * Definisce le azioni per la tabella delle risorse.
     *
     * @return array<Tables\Actions\Action>
     */
    public static function getTableActions(): array
    {
        return [
            Tables\Actions\ViewAction::make(),
            Tables\Actions\Action::make('regenerate')
                ->icon('heroicon-o-refresh'),
        ];
    }
    
    /**
     * Configura l'elenco dei filtri disponibili per la tabella.
     *
     * @return array<Tables\Filters\Filter>
     */
    public static function getTableFilters(): array
    {
        return [
            Tables\Filters\SelectFilter::make('type'),
            Tables\Filters\SelectFilter::make('status'),
            Tables\Filters\Filter::make('created_from'),
            Tables\Filters\Filter::make('created_to'),
        ];
    }
>>>>>>> aurmich/dev
}
