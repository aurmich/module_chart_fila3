<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\Pages;

use Filament\Resources\Pages\ListRecords as FilamentListRecords;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;
use Modules\UI\Enums\TableLayoutEnum;
use Modules\Xot\Filament\Actions\Header\ExportXlsAction;
use Modules\Xot\Filament\Traits\HasXotTable;
use Webmozart\Assert\Assert;

/**
 * Base class for list records pages.
 *
 * @property ?string $model
 * @property ?string $resource
 * @property ?string $slug
 * @property TableLayoutEnum $layoutView
 */
abstract class XotBaseListRecords extends FilamentListRecords
{
    use HasXotTable;

<<<<<<< HEAD
    /*
     * Get the table columns.
     *
     * @return array<string, Tables\Columns\Column>
     
    abstract public function getTableColumns(): array;
    */
=======
    /**
     * Get the table columns.
     *
     * @return array<string, Tables\Columns\Column>
     */
    public function getTableColumns(): array
    {
        return [];
    }
>>>>>>> 54f4fa16 (.)

    
    /**
     * Get the default sort column and direction.
     *
     * @return array{id: 'desc'|'asc'}
     */
    protected function getDefaultSort(): array
    {
        return ['id' => 'desc'];
    }

    /**
     * Get the header actions.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<string, \Filament\Actions\Action>
=======
     * @return array<int, \Filament\Actions\Action>
>>>>>>> aurmich/dev
=======
     * @return array<int, \Filament\Actions\Action>
>>>>>>> 54f4fa16 (.)
     */
    protected function getHeaderActions(): array
    {
        return [
            // \Filament\Actions\CreateAction::make(),
<<<<<<< HEAD
<<<<<<< HEAD
           // ExportXlsAction::make('export_xls'),
=======
            ExportXlsAction::make('export_xls'),
>>>>>>> aurmich/dev
=======
            ExportXlsAction::make('export_xls'),
>>>>>>> 54f4fa16 (.)
        ];
    }

    /**
     * Get the resource class name.
     *
     * @return class-string
     */
    public static function getResource(): string
    {
        $resource = Str::of(static::class)->before('\\Pages\\')->toString();
        Assert::classExists($resource);

        return $resource;
    }

<<<<<<< HEAD
    /** 
     * Paginate the table query.
    */
    protected function paginateTableQueryTMP(Builder $query): Paginator
=======
    /**
     * Paginate the table query.
     */
    protected function paginateTableQuery(Builder $query): Paginator
>>>>>>> 54f4fa16 (.)
    {
        return $query->fastPaginate(
            ('all' === $this->getTableRecordsPerPage()) 
            ? $query->count() 
            : $this->getTableRecordsPerPage()
        );
    }
}

