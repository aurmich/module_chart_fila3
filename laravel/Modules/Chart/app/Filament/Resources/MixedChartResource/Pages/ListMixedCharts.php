<?php

declare(strict_types=1);

namespace Modules\Chart\Filament\Resources\MixedChartResource\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Table;
use Modules\Chart\Filament\Resources\MixedChartResource;
use Modules\UI\Enums\TableLayoutEnum;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
use Modules\Xot\Filament\Traits\TransTrait;

/**
 * Pagina di elenco per le risorse MixedChart.
 *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
 * @phpstan-import-type MixedChart from \Modules\Chart\Models\MixedChart
>>>>>>> 54f4fa16 (.)
=======
 * @phpstan-import-type MixedChartArray from \Modules\Chart\Models\MixedChart
>>>>>>> c99763dd (✨ (studio-filter-widget-lessons.mdc): add comprehensive guidelines and patterns for StudioFilterWidget to enhance code quality and maintainability)
=======
 * @phpstan-import-type MixedChart from \Modules\Chart\Models\MixedChart
>>>>>>> c283a5df (✨ (SaluteOra): introduce new features including user moderation, report generation, and patient registration wizard)
=======
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
 */
class ListMixedCharts extends XotBaseListRecords
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
    protected static string $resource = MixedChartResource::class;

    /**
     * Definisce le colonne della tabella.
     *
     * @return array<int, TextColumn>
     */
    public function getTableColumns(): array
    {
        return [
            TextColumn::make('id')
                ->sortable()
                ->searchable(),
            TextColumn::make('name')
                ->sortable()
                ->searchable(),
            TextColumn::make('description')
                ->limit(50)
                ->searchable(),
            TextColumn::make('created_at')
                ->dateTime()
                ->sortable(),
            TextColumn::make('updated_at')
                ->dateTime()
                ->sortable(),
        ];
    }
}
