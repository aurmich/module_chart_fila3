<?php

declare(strict_types=1);

namespace Modules\Chart\Filament\Resources\ChartResource\Pages;

<<<<<<< HEAD
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
 * @phpstan-import-type Chart from \Modules\Chart\Models\Chart
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
     * @return array<int, TextColumn>
     */
    public function getTableColumns(): array
    {
        return [
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
                ->numeric()
                ->sortable(),
        ];
    }
=======
use Filament\Tables\Table;
use Filament\Actions\CreateAction;
use Modules\UI\Enums\TableLayoutEnum;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Enums\ActionsPosition;
use Modules\Xot\Filament\Traits\TransTrait;
use Filament\Tables\Actions\DeleteBulkAction;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
use Modules\Chart\Filament\Resources\ChartResource;

class ListCharts extends XotBaseListRecords
{

    public TableLayoutEnum $layoutView = TableLayoutEnum::LIST;

    protected static string $resource = ChartResource::class;


    public function getListTableColumns(): array
    {
        return [
            TextColumn::make('id'),
            TextColumn::make('type'),
            TextColumn::make('group_by'),
            TextColumn::make('sort_by'),
            TextColumn::make('width'),
            TextColumn::make('height'),
            TextColumn::make('font_family'),
            TextColumn::make('font_style'),
            TextColumn::make('font_size'),
        ];
    }


>>>>>>> 99e5306 (.)
}
