<?php

declare(strict_types=1);

namespace Modules\UI\Enums;

<<<<<<< HEAD
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;
use Modules\Xot\Filament\Traits\TransTrait;

/**
 * Enum for managing table layout types in Filament UI components.
 *
 * This enum provides standardized layout options for tables and data grids,
 * allowing users to toggle between list and grid views with appropriate
 * styling and column configurations.
 *
 * @see \Modules\UI\docs\table-layout-enum-usage.md
 */
enum TableLayoutEnum: string implements HasColor, HasIcon, HasLabel
{
    use TransTrait;
    
    case LIST = 'list';
    case GRID = 'grid';
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Arr;
use Webmozart\Assert\Assert;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;
use Filament\Resources\Pages\ListRecords;
<<<<<<< HEAD
=======
use Filament\Resources\Pages\ListRecords;
=======
>>>>>>> 345f8677 (phpstan)
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Webmozart\Assert\Assert;
>>>>>>> aurmich/dev
=======
use Filament\Resources\Pages\ListRecords;
=======
>>>>>>> 345f8677 (phpstan)
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Webmozart\Assert\Assert;
>>>>>>> 54f4fa16 (.)
=======
use Illuminate\Support\Arr;
use Webmozart\Assert\Assert;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;
>>>>>>> 598d3378 (test)
=======
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)

enum TableLayoutEnum: string implements HasColor, HasIcon, HasLabel
{
    case GRID = 'grid';
    case LIST = 'list';
>>>>>>> aurmich/dev

    public static function init(): self
    {
        return self::LIST;
    }

    public function getLabel(): string
    {
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value.'.label');
=======
        return $this->name;
        // return trans('ui::corner-position.'.$this->value.'.label');
>>>>>>> aurmich/dev
    }

    public function getColor(): string
    {
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value.'.color');
=======
        return match ($this) {
            self::GRID => 'gray',
            self::LIST => 'gray',
        };
>>>>>>> aurmich/dev
    }

    public function getIcon(): string
    {
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value.'.icon');
    }

    public function getDescription(): string
    {
        return $this->transClass(self::class, $this->value.'.description');
    }

    public function getTooltip(): string
    {
        return $this->transClass(self::class, $this->value.'.tooltip');
    }

    public function getHelperText(): string
    {
        return $this->transClass(self::class, $this->value.'.helper_text');
=======
        return match ($this) {
            self::LIST => 'heroicon-o-list-bullet',
            self::GRID => 'heroicon-o-squares-2x2',
        };
>>>>>>> aurmich/dev
    }

    public function toggle(): self
    {
<<<<<<< HEAD
        return match ($this) {
            self::LIST => self::GRID,
            self::GRID => self::LIST,
        };
=======
        // $res = self::LIST === $this ? self::GRID : self::LIST;
        $res = self::GRID === $this ? self::LIST : self::GRID;

        return $res;
>>>>>>> aurmich/dev
    }

    public function isGridLayout(): bool
    {
        return self::GRID === $this;
    }

<<<<<<< HEAD
    public function isListLayout(): bool
    {
        return self::LIST === $this;
    }

    /**
     * Get the responsive grid configuration for table content.
     *
     * Returns the number of columns for different screen sizes when using
     * grid layout, or null for list layout.
     *
     * @return array<string, int>|null Grid configuration or null for list layout
     */
    public function getTableContentGrid(): ?array
    {
        return $this->isGridLayout()
            ? [
                'sm' => 1,
                'md' => 2,
                'lg' => 3,
                'xl' => 4,
                '2xl' => 5,
            ]
            : null;
    }

    /**
     * Get the appropriate table columns for this layout type.
     *
     * This method replaces the old debug_backtrace approach with explicit
     * parameter passing for better type safety and testability.
     *
     * @param array<\Filament\Tables\Columns\Column|\Filament\Tables\Columns\ColumnGroup|\Filament\Tables\Columns\Layout\Component> $listColumns Columns for list layout
     * @param array<\Filament\Tables\Columns\Column|\Filament\Tables\Columns\ColumnGroup|\Filament\Tables\Columns\Layout\Component> $gridColumns Columns for grid layout
     *
=======
    /**
     * Undocumented function.
     *
     * @return array<string, int|null>|null
     */
    public function getTableContentGrid(): ?array
    {
        $res = $this->isGridLayout()
            ? [
                'md' => 2,
                'lg' => 3,
                'xl' => 4,
            ]
            : null;

        return $res;
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     /**
=======
    /**
>>>>>>> aurmich/dev
     * Undocumented function.
     *
     * @param array<\Filament\Tables\Columns\Column|\Filament\Tables\Columns\ColumnGroup|\Filament\Tables\Columns\Layout\Component> $listColumns
     * @param array<\Filament\Tables\Columns\Column|\Filament\Tables\Columns\ColumnGroup|\Filament\Tables\Columns\Layout\Component> $gridColumns
>>>>>>> aurmich/dev
     * @return array<\Filament\Tables\Columns\Column|\Filament\Tables\Columns\ColumnGroup|\Filament\Tables\Columns\Layout\Component>
     */
    public function getTableColumns(array $listColumns, array $gridColumns): array
    {
<<<<<<< HEAD
        return $this->isGridLayout() ? $gridColumns : $listColumns;
    }

    public static function getOptions(): array
    {
        return [
            self::LIST->value => self::LIST->getLabel(),
            self::GRID->value => self::GRID->getLabel(),
        ];
    }

    public function getContainerClasses(): string
    {
        return match ($this) {
            self::LIST => 'table-layout-list',
            self::GRID => 'table-layout-grid',
        };
=======
<<<<<<< HEAD
=======
    /**
=======
     /**
>>>>>>> 598d3378 (test)
     * Undocumented function.
     *
     * @return array<\Filament\Tables\Columns\Column|\Filament\Tables\Columns\ColumnGroup|\Filament\Tables\Columns\Layout\Component>
     */
    public function getTableColumns(): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 598d3378 (test)
        $trace = debug_backtrace();
        /** @var ListRecords $caller */
        $caller = Arr::get($trace, '1.object');

        if (! method_exists($caller, 'getGridTableColumns')) {
            throw new \Exception('method getGridTableColumns not found in ['.get_class($caller).']');
        }
        if (! method_exists($caller, 'getTableColumns')) {
            throw new \Exception('method getTableColumns not found in ['.get_class($caller).']');
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $columns = $this->isGridLayout()
            ? $caller->getGridTableColumns()
<<<<<<< HEAD
<<<<<<< HEAD
            /** @phpstan-ignore method.protected */
=======
>>>>>>> aurmich/dev
            : $caller->getTableColumns();
=======
        $columns = $this->isGridLayout() ? $gridColumns : $listColumns;
>>>>>>> 345f8677 (phpstan)
=======
            : $caller->getTableColumns();
>>>>>>> 54f4fa16 (.)
=======
        if ($this->isGridLayout()) {
            $columns = $caller->getGridTableColumns();
        } else {
            // Usa reflection per accedere al metodo protetto
            try {
                $reflection = new \ReflectionClass($caller);
                $method = $reflection->getMethod('getTableColumns');
                $method->setAccessible(true);
                $columns = $method->invoke($caller);
            } catch (\Exception $e) {
                throw new \Exception('Cannot access getTableColumns method: ' . $e->getMessage());
            }
        }
>>>>>>> bf0cd1be (phpstan)
=======
        $columns = $this->isGridLayout()
            ? $caller->getGridTableColumns()
            /** @phpstan-ignore-next-line */
            : $caller->getTableColumns();
>>>>>>> 6581c95e (♻️ (ListActivities.php, ListStoredEvents.php, LogoutListener.php): refactor code to improve readability and maintainability by removing unused imports and comments)
=======
        $columns = $this->isGridLayout() ? $gridColumns : $listColumns;
>>>>>>> 345f8677 (phpstan)
=======
        $columns = $this->isGridLayout()
            ? $caller->getGridTableColumns()
            : $caller->getTableColumns();
>>>>>>> 598d3378 (test)

        Assert::isArray($columns);

        return $columns;
>>>>>>> aurmich/dev
    }
}
