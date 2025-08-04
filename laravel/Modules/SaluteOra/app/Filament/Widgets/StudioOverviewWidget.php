<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Filament\Widgets;

use Filament\Widgets\Widget;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
use Illuminate\Support\Facades\Auth;
use Modules\SaluteOra\Models\Studio;
use Illuminate\Support\Facades\DB;

/**
 * Widget per la panoramica degli studi.
 * 
 * Mostra statistiche generali e informazioni sugli studi presenti nel sistema.
 */
class StudioOverviewWidget extends Widget
{
    /**
     * Vista del widget.
     */
    protected static string $view = 'saluteora::filament.widgets.studio-overview';

    /**
     * Prepara i dati per la vista.
     *
     * @return array<string, mixed>
     */
<<<<<<< HEAD
=======
=======
=======
use Illuminate\Support\Facades\Auth;
>>>>>>> 13ea6524 (phpstan)
use Modules\SaluteOra\Models\Studio;
use Illuminate\Support\Facades\DB;

/**
 * Widget per la panoramica degli studi.
 * 
 * Mostra statistiche generali e informazioni sugli studi presenti nel sistema.
 */
class StudioOverviewWidget extends Widget
{
    /**
     * Vista del widget.
     */
    protected static string $view = 'saluteora::filament.widgets.studio-overview';

<<<<<<< HEAD
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
=======
    /**
     * Prepara i dati per la vista.
     *
     * @return array<string, mixed>
     */
>>>>>>> 13ea6524 (phpstan)
>>>>>>> aurmich/dev
    protected function getViewData(): array
    {
        $stats = [
            'total' => Studio::count(),
            'active' => Studio::where('active', true)->count(),
            'inactive' => Studio::where('active', false)->count(),
            'cities' => Studio::distinct('city')->count('city'),
            'doctors' => Studio::withCount('doctors')->sum('doctors_count'),
            'appointments' => Studio::withCount(['appointments' => function ($query) {
<<<<<<< HEAD
                $query->whereMonth('starts_at', now()->month)
                    ->whereYear('starts_at', now()->year);
=======
<<<<<<< HEAD
                $query->whereMonth('starts_at', now()->month)
                    ->whereYear('starts_at', now()->year);
=======
                $query->whereMonth('start_time', now()->month)
                    ->whereYear('start_time', now()->year);
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
>>>>>>> aurmich/dev
            }])->sum('appointments_count'),
        ];

        $citiesData = Studio::select('city', DB::raw('count(*) as total'))
            ->groupBy('city')
            ->whereNotNull('city')
            ->where('city', '!=', '')
            ->orderByDesc('total')
            ->limit(8)
            ->pluck('total', 'city')
            ->toArray();

        return [
            'stats' => $stats,
            'citiesData' => $citiesData,
        ];
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 13ea6524 (phpstan)
>>>>>>> aurmich/dev
    /**
     * Verifica se l'utente può visualizzare il widget.
     *
     * @return bool
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
    public static function canView(): bool
    {
        $user = Auth::user();
        
        return $user !== null && method_exists($user, 'can') && $user->can('view_any_studio');
    }
}
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 13ea6524 (phpstan)
    public static function canView(): bool
    {
        $user = Auth::user();
        
        return $user !== null && method_exists($user, 'can') && $user->can('view_any_studio');
    }
}
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
>>>>>>> aurmich/dev
