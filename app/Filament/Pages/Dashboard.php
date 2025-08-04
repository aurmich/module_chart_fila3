<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
namespace Modules\Chart\Filament\Pages;

use Filament\Pages\Page;
use Modules\Chart\Filament\Widgets\Samples as WidgetsSamples;

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static string $view = 'chart::filament.pages.dashboard';

    /*
    public function mount(): void {
        $user = auth()->user();
        if(!$user->hasRole('super-admin')){
            redirect('/admin');
        }
    }
    */

    public function getHeaderWidgets(): array
    {
        return [
            WidgetsSamples\Bar02Chart::make(),
            // WidgetsSamples\OverlookWidget::make(),
            // WidgetsSamples\OverlookV2Widget::make(),
            WidgetsSamples\Doughnut01Chart::make(),
            WidgetsSamples\Sample01Chart::make(),
        ];
    }
=======
=======
>>>>>>> 8f11126c (Squashed 'laravel/Modules/Geo/' content from commit 9f987ec)
namespace Modules\Geo\Filament\Pages;

use Modules\Xot\Filament\Pages\XotBasePage;

class Dashboard extends XotBasePage
{
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static string $view = 'geo::filament.pages.dashboard';

    // public function mount(): void {
    //     $user = auth()->user();
    //     if(!$user->hasRole('super-admin')){
    //         redirect('/admin');
    //     }
    // }
<<<<<<< HEAD
>>>>>>> 8f11126c (Squashed 'laravel/Modules/Geo/' content from commit 9f987ec)
=======
>>>>>>> 8f11126c (Squashed 'laravel/Modules/Geo/' content from commit 9f987ec)
}
