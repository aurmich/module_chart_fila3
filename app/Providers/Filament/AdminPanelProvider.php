<?php

declare(strict_types=1);

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        //    Js::make('chart-js-plugins', Vite::asset('Resources/js/filament-chart-js-plugins.js', 'assets/chart'))->module(),
=======
        //    Js::make('chart-js-plugins', Vite::asset('resources/js/filament-chart-js-plugins.js', 'assets/chart'))->module(),
>>>>>>> 7d3b0bb (.)
=======
        //    Js::make('chart-js-plugins', Vite::asset('Resources/js/filament-chart-js-plugins.js', 'assets/chart'))->module(),
>>>>>>> 6440866 (.)
=======
        //    Js::make('chart-js-plugins', Vite::asset('resources/js/filament-chart-js-plugins.js', 'assets/chart'))->module(),
>>>>>>> d2e74a3 (.)
=======
        //    Js::make('chart-js-plugins', Vite::asset('resources/js/filament-chart-js-plugins.js', 'assets/chart'))->module(),
>>>>>>> dacab4a (.)
        // ]);
        FilamentAsset::register([
    // Js::make('chart-js-plugins', Vite::asset('resources/js/filament-chart-js-plugins.js', 'assets/chart'))->module(),
    Css::make('chart-js-plugins', Vite::asset('resources/css/app.css', 'assets/chart')),
]);


        return $panel;
    }
}
