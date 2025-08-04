<?php

declare(strict_types=1);

namespace Modules\Geo\Filament\Forms;

use Filament\Forms\Components\Select;
use Filament\Forms\Get;
<<<<<<< HEAD
use Illuminate\Support\Collection;
use Modules\Geo\Models\ComuneJson;
=======
use Modules\Geo\App\Services\GeoDataService;
>>>>>>> aurmich/dev

/**
 * Form per la selezione della località.
 * 
 * Questo form fornisce una selezione a cascata per regione, provincia, città e CAP.
 * 
 * @see \Modules\Geo\docs\json-database.md
 * @see Modules\Geo\Filament\Forms\LocationForm
 */
class LocationForm
{
    /**
<<<<<<< HEAD
=======
     * Servizio per i dati geografici.
     */
    private GeoDataService $geoDataService;

    /**
>>>>>>> aurmich/dev
     * Costruttore.
     */
    public function __construct()
    {
<<<<<<< HEAD
        // No initialization needed as we're using static methods
=======
        $this->geoDataService = new GeoDataService();
>>>>>>> aurmich/dev
    }

    /**
     * Ottiene lo schema del form.
     * 
<<<<<<< HEAD
     * @return array<int, Select>
=======
     * @return array<string, Select>
>>>>>>> aurmich/dev
     */
    public function getSchema(): array
    {
        return [
            Select::make('region')
                ->label('geo::fields.region.label')
                ->placeholder('geo::fields.region.placeholder')
<<<<<<< HEAD
                ->options(fn (): array => ComuneJson::allRegions()->toArray())
                ->searchable()
                ->required()
                ->live()
                ->afterStateUpdated(fn () => ComuneJson::clearCache(false)),
=======
                ->options(fn () => $this->geoDataService->getRegions())
                ->searchable()
                ->required()
                ->live()
                ->afterStateUpdated(fn () => $this->geoDataService->clearCache()),
>>>>>>> aurmich/dev

            Select::make('province')
                ->label('geo::fields.province.label')
                ->placeholder('geo::fields.province.placeholder')
<<<<<<< HEAD
                ->options(fn (Get $get): array => 
                    filled($get('region')) 
                    /** @phpstan-ignore argument.type */
                        ? ComuneJson::getProvincesByRegion($get('region'))->toArray()
                        : []
                )
                ->searchable()
                ->required()
                ->live()
                ->afterStateUpdated(fn () => ComuneJson::clearCache(false))
=======
                ->options(fn (Get $get) => $this->geoDataService->getProvinces($get('region')))
                ->searchable()
                ->required()
                ->live()
                ->afterStateUpdated(fn () => $this->geoDataService->clearCache())
>>>>>>> aurmich/dev
                ->visible(fn (Get $get) => filled($get('region'))),

            Select::make('city')
                ->label('geo::fields.city.label')
                ->placeholder('geo::fields.city.placeholder')
<<<<<<< HEAD
                ->options(function (Get $get): array {
                    if (!filled($get('province'))) {
                        return [];
                    }
                    
                    /** @var Collection<int, array{cap: array<int, string>, nome: string}> $cities */
                    /** @phpstan-ignore argument.type */
                    $cities = ComuneJson::byProvince($get('province'));
                    
                    return $cities->pluck('nome', 'nome')->toArray();
                })
                ->searchable()
                ->required()
                ->live()
                ->afterStateUpdated(fn () => ComuneJson::clearCache(false))
=======
                ->options(fn (Get $get) => $this->geoDataService->getCities($get('province')))
                ->searchable()
                ->required()
                ->live()
                ->afterStateUpdated(fn () => $this->geoDataService->clearCache())
>>>>>>> aurmich/dev
                ->visible(fn (Get $get) => filled($get('province'))),

            Select::make('cap')
                ->label('geo::fields.cap.label')
                ->placeholder('geo::fields.cap.placeholder')
<<<<<<< HEAD
                ->options(function (Get $get): array {
                    if (!filled($get('province')) || !filled($get('city'))) {
                        return [];
                    }
                    
                    /** @var Collection<int, array{cap: array<int, string>, nome: string}> $cities */
                    /** @phpstan-ignore argument.type */
                    $cities = ComuneJson::byProvince($get('province'))
                        ->where('nome', $get('city'));
                        
                    if ($cities->isEmpty()) {
                        return [];
                    }
                    
                    $caps = $cities->first()['cap'] ;
                    return array_combine($caps, $caps);
                })
=======
                ->options(fn (Get $get) => [
                    $this->geoDataService->getCap($get('province'), $get('city')) => $this->geoDataService->getCap($get('province'), $get('city'))
                ])
>>>>>>> aurmich/dev
                ->required()
                ->visible(fn (Get $get) => filled($get('city'))),
        ];
    }
<<<<<<< HEAD
} 
=======
} 
>>>>>>> aurmich/dev
