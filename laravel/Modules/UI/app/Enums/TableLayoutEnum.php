<?php

declare(strict_types=1);

namespace Modules\UI\Enums;

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

    public static function init(): self
    {
        return self::LIST;
    }

    public function getLabel(): string
    {
        return $this->name;
        // return trans('ui::corner-position.'.$this->value.'.label');
    }

    public function getColor(): string
    {
        return match ($this) {
            self::GRID => 'gray',
            self::LIST => 'gray',
        };
    }

    public function getIcon(): string
    {
        return match ($this) {
            self::LIST => 'heroicon-o-list-bullet',
            self::GRID => 'heroicon-o-squares-2x2',
        };
    }

    public function toggle(): self
    {
        // $res = self::LIST === $this ? self::GRID : self::LIST;
        $res = self::GRID === $this ? self::LIST : self::GRID;

        return $res;
    }

    public function isGridLayout(): bool
    {
        return self::GRID === $this;
    }

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
     * @return array<\Filament\Tables\Columns\Column|\Filament\Tables\Columns\ColumnGroup|\Filament\Tables\Columns\Layout\Component>
     */
    public function getTableColumns(array $listColumns, array $gridColumns): array
    {
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
    }
}
