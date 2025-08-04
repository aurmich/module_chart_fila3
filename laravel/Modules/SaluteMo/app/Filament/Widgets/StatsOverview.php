<?php

declare(strict_types=1);

namespace Modules\SaluteMo\Filament\Widgets;

<<<<<<< HEAD
use Modules\Xot\Filament\Widgets\XotBaseStatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends XotBaseStatsOverviewWidget
=======
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
>>>>>>> 3a74d92c (✨ (SaluteMo): introduce SaluteMo module with complete structure and functionality for managing mobile-specific features, including API endpoints, dashboard, and widgets for patient management.)
{
    protected static ?string $pollingInterval = '30s';
    protected static bool $isLazy = true;

    protected function getStats(): array
    {
        return [
            Stat::make(__('salutemo::widgets.stats.total_users'), '0')
                ->description(__('salutemo::widgets.stats.increase', ['percent' => '0%']))
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),
                
            Stat::make(__('salutemo::widgets.stats.active_sessions'), '0')
                ->description(__('salutemo::widgets.stats.decrease', ['percent' => '0%']))
                ->descriptionIcon('heroicon-m-arrow-trending-down')
                ->color('danger'),
                
            Stat::make(__('salutemo::widgets.stats.avg_time'), '0:00')
                ->description(__('salutemo::widgets.stats.increase', ['percent' => '0%']))
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),
        ];
    }

    public static function canView(): bool
    {
        return true; // TODO: Implement proper authorization
    }
}
