<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Filament\Resources\ReportResource\Pages;

use Filament\Actions;
<<<<<<< HEAD
use Filament\Infolists;
use Modules\SaluteOra\Models\Report;
use Illuminate\Notifications\Notifiable;
use Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord;
use Filament\Notifications\Notification;

class ViewReport extends XotBaseViewRecord
{
    use Notifiable;

    protected static string $resource = \Modules\SaluteOra\Filament\Resources\ReportResource::class;

    protected function getInfolistSchema(): array
    {
        return [
            // Informazioni Generali
            Infolists\Components\Section::make('Informazioni Generali')
                ->schema([
                    Infolists\Components\TextEntry::make('patient.full_name')
                        ->label('Paziente')
                        ->placeholder('Paziente non specificato'),
                    Infolists\Components\TextEntry::make('appointment.scheduled_at')
                        ->label('Data Appuntamento')
                        ->dateTime()
                        ->placeholder('Appuntamento non specificato'),
                    Infolists\Components\TextEntry::make('created_at')
                        ->label('Data Creazione')
                        ->dateTime(),
                ])
                ->columns(3),

            // Dati Anagrafici
            Infolists\Components\Section::make('Dati Anagrafici')
                ->schema([
                    Infolists\Components\TextEntry::make('age')
                        ->label('Età')
                        ->placeholder('Età non specificata'),
                    Infolists\Components\TextEntry::make('gender')
                        ->label('Sesso')
                        ->badge()
                        ->formatStateUsing(fn (?string $state): string => $state === 'M' ? 'Maschio' : 'Femmina')
                        ->color(fn (?string $state): string => $state === 'M' ? 'blue' : 'pink'),
                    Infolists\Components\TextEntry::make('occupation')
                        ->label('Occupazione')
                        ->placeholder('Occupazione non specificata'),
                    Infolists\Components\TextEntry::make('education_level')
                        ->label('Livello di Istruzione')
                        ->placeholder('Livello di istruzione non specificato'),
                ])
                ->columns(2),

            // Stile di Vita
            Infolists\Components\Section::make('Stile di Vita')
                ->schema([
                    Infolists\Components\TextEntry::make('smoking_status')
                        ->label('Stato Fumatore')
                        ->badge()
                        ->formatStateUsing(fn (?bool $state): string => $state ? 'Fumatore' : 'Non Fumatore')
                        ->color(fn (?bool $state): string => $state ? 'danger' : 'success'),
                    Infolists\Components\TextEntry::make('alcohol_consumption')
                        ->label('Consumo di Alcol')
                        ->badge()
                        ->formatStateUsing(fn (?bool $state): string => $state ? 'Consumatore' : 'Non Consumatore')
                        ->color(fn (?bool $state): string => $state ? 'warning' : 'success'),
                    Infolists\Components\TextEntry::make('diet_type')
                        ->label('Tipo di Dieta')
                        ->placeholder('Tipo di dieta non specificato'),
                    Infolists\Components\TextEntry::make('physical_activity')
                        ->label('Attività Fisica')
                        ->badge()
                        ->formatStateUsing(fn (?bool $state): string => $state ? 'Attivo' : 'Sedentario')
                        ->color(fn (?bool $state): string => $state ? 'success' : 'gray'),
                ])
                ->columns(2),

            // Condizioni Mediche
            Infolists\Components\Section::make('Condizioni Mediche')
                ->schema([
                    Infolists\Components\TextEntry::make('has_diseases')
                        ->label('Ha malattie')
                        ->badge()
                        ->formatStateUsing(fn (?bool $state): string => $state ? 'Sì' : 'No')
                        ->color(fn (?bool $state): string => $state ? 'warning' : 'success'),
                    Infolists\Components\TextEntry::make('specify_diseases')
                        ->label('Malattie specificate')
                        ->formatStateUsing(function (?array $state): string {
                            if ($state === null || count($state) === 0) {
                                return 'Nessuna malattia specificata';
                            }
                            return collect($state)
                                ->map(fn ($disease) => is_string($disease) ? $disease : $disease->getLabel())
                                ->join(', ');
                        })
                        ->visible(fn (Report $record): bool => (bool) $record->has_diseases),
                ])
                ->columns(1)
                ->visible(fn (Report $record): bool => (bool) $record->has_diseases),

            // Denti Mancanti
            Infolists\Components\Section::make('Denti Mancanti')
                ->schema([
                    Infolists\Components\TextEntry::make('missing_teeth')
                        ->label('Ha denti mancanti')
                        ->badge()
                        ->formatStateUsing(fn (?bool $state): string => $state ? 'Sì' : 'No')
                        ->color(fn (?bool $state): string => $state ? 'warning' : 'success'),
                    Infolists\Components\TextEntry::make('specify_missing_teeth')
                        ->label('Denti mancanti specificati')
                        ->formatStateUsing(function (?array $state): string {
                            if ($state === null || count($state) === 0) {
                                return 'Nessun dente specificato';
                            }
                            return collect($state)
                                ->map(fn ($tooth) => is_string($tooth) ? $tooth : $tooth->getLabel())
                                ->join(', ');
                        }),
                    Infolists\Components\TextEntry::make('more_info_missing_teeth')
                        ->label('Informazioni aggiuntive')
                        ->placeholder('Nessuna informazione aggiuntiva')
                        ->columnSpanFull(),
                ])
                ->columns(2)
                ->visible(fn (Report $record): bool => (bool) $record->missing_teeth),

            // Denti Cariati
            Infolists\Components\Section::make('Denti Cariati')
                ->schema([
                    Infolists\Components\TextEntry::make('decayed_teeth')
                        ->label('Ha denti cariati')
                        ->badge()
                        ->formatStateUsing(fn (?bool $state): string => $state ? 'Sì' : 'No')
                        ->color(fn (?bool $state): string => $state ? 'danger' : 'success'),
                    Infolists\Components\TextEntry::make('specify_decayed_teeth')
                        ->label('Denti cariati specificati')
                        ->formatStateUsing(function (?array $state): string {
                            if ($state === null || count($state) === 0) {
                                return 'Nessun dente specificato';
                            }
                            return collect($state)
                                ->map(fn ($tooth) => is_string($tooth) ? $tooth : $tooth->getLabel())
                                ->join(', ');
                        }),
                    Infolists\Components\TextEntry::make('more_info_decayed_teeth')
                        ->label('Informazioni aggiuntive')
                        ->placeholder('Nessuna informazione aggiuntiva')
                        ->columnSpanFull(),
                ])
                ->columns(2)
                ->visible(fn (Report $record): bool => (bool) $record->decayed_teeth),

            // Protesi e Impianti
            Infolists\Components\Section::make('Protesi e Impianti')
                ->schema([
                    Infolists\Components\TextEntry::make('has_fixed_prosthesis_or_implants')
                        ->label('Ha protesi fissa o impianti')
                        ->badge()
                        ->formatStateUsing(fn (?bool $state): string => $state ? 'Sì' : 'No')
                        ->color(fn (?bool $state): string => $state ? 'info' : 'gray'),
                    Infolists\Components\TextEntry::make('specify_prosthesis_or_implants')
                        ->label('Protesi/impianti specificati')
                        ->formatStateUsing(function (?array $state): string {
                            if ($state === null || count($state) === 0) {
                                return 'Nessuna protesi/impianto specificato';
                            }
                            return collect($state)
                                ->map(fn ($item) => is_string($item) ? $item : $item->getLabel())
                                ->join(', ');
                        }),
                    Infolists\Components\TextEntry::make('more_info_prosthesis')
                        ->label('Informazioni aggiuntive')
                        ->placeholder('Nessuna informazione aggiuntiva')
                        ->columnSpanFull(),
                ])
                ->columns(2)
                ->visible(fn (Report $record): bool => (bool) $record->has_fixed_prosthesis_or_implants),

            // Tartaro
            Infolists\Components\Section::make('Tartaro')
                ->schema([
                    Infolists\Components\TextEntry::make('has_tartar')
                        ->label('Ha tartaro')
                        ->badge()
                        ->formatStateUsing(fn (?bool $state): string => $state ? 'Sì' : 'No')
                        ->color(fn (?bool $state): string => $state ? 'warning' : 'success'),
                    Infolists\Components\TextEntry::make('specify_tartar')
                        ->label('Tartaro specificato')
                        ->formatStateUsing(function (?array $state): string {
                            if ($state === null || count($state) === 0) {
                                return 'Nessun tartaro specificato';
                            }
                            return collect($state)
                                ->map(fn ($tooth) => is_string($tooth) ? $tooth : $tooth->getLabel())
                                ->join(', ');
                        }),
                    Infolists\Components\TextEntry::make('more_info_tartar')
                        ->label('Informazioni aggiuntive')
                        ->placeholder('Nessuna informazione aggiuntiva')
                        ->columnSpanFull(),
                ])
                ->columns(2)
                ->visible(fn (Report $record): bool => (bool) $record->has_tartar),

            // Placca
            Infolists\Components\Section::make('Placca')
                ->schema([
                    Infolists\Components\TextEntry::make('has_plaque')
                        ->label('Ha placca')
                        ->badge()
                        ->formatStateUsing(fn (?bool $state): string => $state ? 'Sì' : 'No')
                        ->color(fn (?bool $state): string => $state ? 'warning' : 'success'),
                    Infolists\Components\TextEntry::make('specify_plaque')
                        ->label('Placca specificata')
                        ->formatStateUsing(function (?array $state): string {
                            if ($state === null || count($state) === 0) {
                                return 'Nessuna placca specificata';
                            }
                            return collect($state)
                                ->map(fn ($tooth) => is_string($tooth) ? $tooth : $tooth->getLabel())
                                ->join(', ');
                        }),
                    Infolists\Components\TextEntry::make('more_info_plaque')
                        ->label('Informazioni aggiuntive')
                        ->placeholder('Nessuna informazione aggiuntiva')
                        ->columnSpanFull(),
                ])
                ->columns(2)
                ->visible(fn (Report $record): bool => (bool) $record->has_plaque),

            // Necessità di Cure
            Infolists\Components\Section::make('Necessità di Cure Aggiuntive')
                ->schema([
                    Infolists\Components\TextEntry::make('needs_more_dental_care')
                        ->label('Necessita di ulteriori cure odontoiatriche')
                        ->badge()
                        ->formatStateUsing(fn (?bool $state): string => $state ? 'Sì' : 'No')
                        ->color(fn (?bool $state): string => $state ? 'warning' : 'success'),
                    Infolists\Components\TextEntry::make('further_notes')
                        ->label('Note aggiuntive')
                        ->placeholder('Nessuna nota aggiuntiva')
                        ->columnSpanFull(),
                ])
                ->columns(1)
                ->visible(fn (Report $record): bool => (bool) $record->needs_more_dental_care),

            // Informazioni Amministrative
            Infolists\Components\Section::make('Informazioni Amministrative')
                ->schema([
                    Infolists\Components\TextEntry::make('invoice')
                        ->label('Fattura')
                        ->placeholder('Nessuna fattura allegata'),
                    Infolists\Components\TextEntry::make('updated_at')
                        ->label('Ultimo Aggiornamento')
                        ->dateTime(),
                ])
                ->columns(2),
        ];
=======
use Filament\Resources\Pages\ViewRecord;
use Modules\SaluteOra\Filament\Resources\ReportResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord;
use Filament\Infolists;
use Filament\Infolists\Infolist;
use Modules\SaluteOra\Models\Report;
use Modules\SaluteOra\Models\ReportData;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Collection;

class ViewReport extends XotBaseViewRecord
{
    protected static string $resource = ReportResource::class;

    /**
     * Restituisce lo schema dell'infolist per visualizzare i dettagli del report.
     *
     * @return array<string, \Filament\Infolists\Components\Component>
     */
    protected function getInfolistSchema(): array
    {
        return [
                Infolists\Components\Section::make('Informazioni Report')
                    ->schema([
                        Infolists\Components\TextEntry::make('name')
                            ->label('Nome Report'),
                        Infolists\Components\TextEntry::make('description')
                            ->label('Descrizione')
                            ->columnSpanFull(),
                        Infolists\Components\TextEntry::make('type')
                            ->label('Tipo Report')
                            ->formatStateUsing(fn (string $state): string => match($state) {
                                'paziente_demografico' => 'Analisi Demografica Pazienti',
                                'visite_per_periodo' => 'Statistiche Visite per Periodo',
                                'attivita_odontoiatri' => 'Analisi Attività Odontoiatri',
                                'isee_analisi' => 'Analisi ISEE Pazienti',
                                default => $state,
                            }),
                        Infolists\Components\TextEntry::make('period_start')
                            ->label('Periodo Dal')
                            ->dateTime(),
                        Infolists\Components\TextEntry::make('period_end')
                            ->label('Periodo Al')
                            ->dateTime(),
                        Infolists\Components\TextEntry::make('status')
                            ->label('Stato')
                            ->badge()
                            ->formatStateUsing(fn (string $state): string => match($state) {
                                'pending' => 'In attesa',
                                'processing' => 'In elaborazione',
                                'completed' => 'Completato',
                                'error' => 'Errore',
                                default => $state,
                            })
                            ->color(fn (string $state): string => match ($state) {
                                'completed' => 'success',
                                'processing' => 'warning',
                                'pending' => 'info',
                                'error' => 'danger',
                                default => 'secondary',
                            }),
                        Infolists\Components\TextEntry::make('creator.name')
                            ->label('Creato da'),
                        Infolists\Components\TextEntry::make('created_at')
                            ->label('Data Creazione')
                            ->dateTime(),
                        Infolists\Components\TextEntry::make('last_generated_at')
                            ->label('Ultima Generazione')
                            ->dateTime(),
                    ])
                    ->columns(2),

                Infolists\Components\Section::make('Parametri Report')
                    ->schema([
                        Infolists\Components\RepeatableEntry::make('parameters')
                            ->label('Parametri')
                            ->columnSpanFull()
                            ->schema([
                                Infolists\Components\TextEntry::make('key')
                                    ->label('Parametro'),
                                Infolists\Components\TextEntry::make('value')
                                    ->label('Valore'),
                            ]),
                    ])
                    ->collapsible(),

                // Sezione dinamica per i dati del report
                Infolists\Components\Section::make('Dati Report')
                    ->schema([
                        Infolists\Components\TextEntry::make('report_data')
                            ->label('')
                            ->columnSpanFull()
                            ->html()
                            ->state(function (Report $record): HtmlString {
                                // Raggruppa i dati del report per gruppo
                                $groupedData = $record->reportData()
                                    ->orderBy('group')
                                    ->orderBy('order')
                                    ->get()
                                    ->groupBy('group');

                                $html = '';

                                // Genera l'HTML per ogni gruppo di dati
                                foreach ($groupedData as $group => $data) {
                                    $groupTitle = ucfirst(str_replace('_', ' ', $group));
                                    $html .= "<h3 class='text-lg font-medium text-gray-900 mt-4'>{$groupTitle}</h3>";
                                    $html .= "<div class='grid grid-cols-1 md:grid-cols-2 gap-4 mt-2'>";

                                    foreach ($data as $item) {
                                        $html .= $this->renderReportDataItem($item);
                                    }

                                    $html .= "</div>";
                                }

                                return new HtmlString($html);
                            }),
                    ]),
            ];
    }

    /**
     * Genera l'HTML per un elemento di dati del report.
     *
     * @param ReportData $item
     * @return string
     */
    protected function renderReportDataItem(ReportData $item): string
    {
        $title = $item->description;
        $value = $item->value;
        $dataType = $item->data_type;

        // Formatta l'output in base al tipo di dato
        $html = "<div class='bg-white p-4 rounded shadow-sm'>";
        $html .= "<h4 class='text-sm font-medium text-gray-600'>{$title}</h4>";

        if ($dataType === 'json' || $dataType === 'array') {
            // Converte i dati JSON in array
            $jsonData = json_decode($value, true);

            if (count($jsonData) <= 5) {
                // Per insiemi di dati piccoli, mostra una semplice lista
                $html .= "<ul class='mt-2 space-y-1'>";
                foreach ($jsonData as $key => $val) {
                    $html .= "<li class='text-sm'><span class='font-medium'>{$key}:</span> {$val}</li>";
                }
                $html .= "</ul>";
            } else {
                // Per set di dati più grandi, mostra un grafico semplice
                $html .= "<div class='mt-2 h-40' id='chart-{$item->id}'></div>";
                $html .= "<script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const data = " . json_encode($jsonData) . ";
                        const labels = Object.keys(data);
                        const values = Object.values(data);
                        
                        new Chart(document.getElementById('chart-{$item->id}'), {
                            type: 'bar',
                            data: {
                                labels: labels,
                                datasets: [{
                                    label: '{$title}',
                                    data: values,
                                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                    borderColor: 'rgba(75, 192, 192, 1)',
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                responsive: true,
                                maintainAspectRatio: false,
                                scales: {
                                    y: {
                                        beginAtZero: true
                                    }
                                }
                            }
                        });
                    });
                </script>";
            }
        } elseif ($dataType === 'integer' || $dataType === 'float') {
            $html .= "<div class='mt-1 text-xl font-bold text-gray-900'>{$value}</div>";
        } else {
            $html .= "<div class='mt-1 text-gray-900'>{$value}</div>";
        }

        $html .= "</div>";

        return $html;
>>>>>>> aurmich/dev
    }

    /**
     * Definisce le azioni disponibili nell'intestazione della pagina.
     *
<<<<<<< HEAD
     * @return array<\Filament\Actions\Action>
=======
     * @return array
>>>>>>> aurmich/dev
     */
    protected function getHeaderActions(): array
    {
        return [
<<<<<<< HEAD
            Actions\EditAction::make()
                ->label('Modifica Questionario')
                ->icon('heroicon-o-pencil'),
                
            Actions\Action::make('view_patient')
                ->label('Visualizza Paziente')
                ->icon('heroicon-o-user')
                ->color('info')
                ->url(fn (Report $record): string => 
                    $record->patient ? 
                        route('filament.admin.resources.patients.view', ['record' => $record->patient]) : 
                        '#'
                )
                ->visible(fn (Report $record): bool => $record->patient !== null),
                
            Actions\Action::make('view_appointment')
                ->label('Visualizza Appuntamento')
                ->icon('heroicon-o-calendar')
                ->color('info')
                ->url(fn (Report $record): string => 
                    $record->appointment ? 
                        route('filament.admin.resources.appointments.view', ['record' => $record->appointment]) : 
                        '#'
                )
                ->visible(fn (Report $record): bool => $record->appointment !== null),
              /*  
            Actions\Action::make('print_report')
                ->label('Stampa Questionario')
                ->icon('heroicon-o-printer')
                ->color('gray')
                ->action(function (Report $record) {
                    // Implementazione stampa/PDF del questionario
                    Notification::make()
                        ->title('Funzionalità di stampa in sviluppo')
                        ->info()
                        ->send();
                }),
            */
=======
            Actions\EditAction::make(),
            Actions\Action::make('regenerate')
                ->label('Rigenera Report')
                ->icon('heroicon-o-arrow-path')
                ->color('warning')
                ->requiresConfirmation()
                ->action(function () {
                    $record = $this->getRecord();
                    $record->update(['status' => 'pending']);
                    
                    // Prepara i parametri per la rigenerazione
                    $parameters = $record->parameters ?? [];
                    $parameters['name'] = $record->name;
                    $parameters['description'] = $record->description;
                    $parameters['period_start'] = $record->period_start;
                    $parameters['period_end'] = $record->period_end;
                    
                    // Esecuzione asincrona dell'azione con Spatie QueueableAction
                    app(\Modules\SaluteOra\Actions\GenerateReportAction::class)
                        ->onQueue('reports')
                        ->execute($record, $parameters);
                    
                    $this->notify('success', 'Rigenerazione del report avviata in background');
                    $this->redirect(static::getResource()::getUrl('view', ['record' => $record]));
                }),
            Actions\Action::make('download_pdf')
                ->label('Scarica PDF')
                ->icon('heroicon-o-document-arrow-down')
                ->action(function (Report $record) {
                    $exporter = app(\Modules\SaluteOra\Services\ReportExporter::class);
                    $pdfPath = $exporter->exportToPdf($record);
                    
                    return response()->download(
                        $pdfPath,
                        "report_{$record->id}_{$record->type}.pdf",
                        ['Content-Type' => 'application/pdf']
                    )->deleteFileAfterSend(true);
                }),
            Actions\Action::make('export_csv')
                ->label('Esporta CSV')
                ->icon('heroicon-o-table-cells')
                ->action(function (Report $record) {
                    $exporter = app(\Modules\SaluteOra\Services\ReportExporter::class);
                    $csvPath = $exporter->exportToCsv($record);
                    
                    return response()->download(
                        $csvPath,
                        "report_{$record->id}_{$record->type}.csv",
                        ['Content-Type' => 'text/csv']
                    )->deleteFileAfterSend(true);
                }),
>>>>>>> aurmich/dev
        ];
    }
}
