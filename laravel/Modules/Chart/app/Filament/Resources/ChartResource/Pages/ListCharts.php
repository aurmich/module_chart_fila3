<?php

declare(strict_types=1);

namespace Modules\Chart\Filament\Resources\ChartResource\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Table;
use Modules\Chart\Filament\Resources\ChartResource;
use Modules\UI\Enums\TableLayoutEnum;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
use Modules\Xot\Filament\Traits\TransTrait;

/**
 * Pagina di elenco per le risorse Chart.
 *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
 * @phpstan-import-type Chart from \Modules\Chart\Models\Chart
>>>>>>> 54f4fa16 (.)
=======
 * @phpstan-import-type ChartArray from \Modules\Chart\Models\Chart
>>>>>>> c99763dd (✨ (studio-filter-widget-lessons.mdc): add comprehensive guidelines and patterns for StudioFilterWidget to enhance code quality and maintainability)
=======
 * @phpstan-import-type Chart from \Modules\Chart\Models\Chart
>>>>>>> c283a5df (✨ (SaluteOra): introduce new features including user moderation, report generation, and patient registration wizard)
 */
class ListCharts extends XotBaseListRecords
{
    /**
     * Layout della tabella.
     *
     * @var TableLayoutEnum
     */
    public TableLayoutEnum $layoutView = TableLayoutEnum::LIST;

    /**
     * Risorsa associata a questa pagina.
     *
     * @var string
     */
    protected static string $resource = ChartResource::class;

    /**
     * Definisce le colonne della tabella.
     *
<<<<<<< HEAD
     * @return array<string, TextColumn>
=======
     * @return array<int, TextColumn>
>>>>>>> 54f4fa16 (.)
     */
    public function getTableColumns(): array
    {
        return [
<<<<<<< HEAD
            'id' => TextColumn::make('id')
                ->sortable()
                ->searchable(),
            'type' => TextColumn::make('type')
                ->sortable()
                ->searchable(),
            'group_by' => TextColumn::make('group_by')
                ->sortable()
                ->searchable(),
            'sort_by' => TextColumn::make('sort_by')
                ->sortable(),
            'width' => TextColumn::make('width')
                ->numeric()
                ->sortable(),
            'height' => TextColumn::make('height')
                ->numeric()
                ->sortable(),
            'font_family' => TextColumn::make('font_family')
                ->searchable(),
            'font_style' => TextColumn::make('font_style')
                ->searchable(),
            'font_size' => TextColumn::make('font_size')
=======
            TextColumn::make('id')
                ->sortable()
                ->searchable(),
            TextColumn::make('type')
                ->sortable()
                ->searchable(),
            TextColumn::make('group_by')
                ->sortable()
                ->searchable(),
            TextColumn::make('sort_by')
                ->sortable(),
            TextColumn::make('width')
                ->numeric()
                ->sortable(),
            TextColumn::make('height')
                ->numeric()
                ->sortable(),
            TextColumn::make('font_family')
                ->searchable(),
            TextColumn::make('font_style')
                ->searchable(),
            TextColumn::make('font_size')
>>>>>>> 54f4fa16 (.)
                ->numeric()
                ->sortable(),
        ];
    }
<<<<<<< HEAD
} 
=======
}
>>>>>>> 54f4fa16 (.)
