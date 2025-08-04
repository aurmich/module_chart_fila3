<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
namespace Modules\Chart\Providers\Filament;

use Filament\Panel;
use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Illuminate\Support\Facades\Vite;
use Modules\Xot\Providers\Filament\XotBasePanelProvider;

class AdminPanelProvider extends XotBasePanelProvider
{
    protected string $module = 'Chart';

    public function panel(Panel $panel): Panel
    {
        $panel = parent::panel($panel);
        // $panel->assets([
        //    Js::make('chart-js-plugins', Vite::asset('resources/js/filament-chart-js-plugins.js', 'assets/chart'))->module(),
        // ]);
        FilamentAsset::register([
            Css::make('chart-js-plugins', Vite::asset('resources/css/app.css', 'assets/chart')),
            Js::make('chart-js-plugins', Vite::asset('resources/js/filament-chart-js-plugins.js', 'assets/chart'))->module(),
        ]);

        return $panel;
    }
=======
=======
>>>>>>> 8f11126c (Squashed 'laravel/Modules/Geo/' content from commit 9f987ec)
namespace Modules\Geo\Providers\Filament;

use Modules\Xot\Providers\Filament\XotBasePanelProvider;

/**
 * Undocumented class.
 */
class AdminPanelProvider extends XotBasePanelProvider
{
    protected string $module = 'Geo';
<<<<<<< HEAD
>>>>>>> 8f11126c (Squashed 'laravel/Modules/Geo/' content from commit 9f987ec)
=======
>>>>>>> 8f11126c (Squashed 'laravel/Modules/Geo/' content from commit 9f987ec)
}
