<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
namespace Modules\Geo\Filament\Forms;

use Filament\Forms\Components\Select;
use Filament\Forms\Get;
use Illuminate\Support\Collection;
use Modules\Geo\Models\ComuneJson;
=======
namespace Modules\Geo\App\Filament\Forms;
=======
namespace Modules\Geo\Filament\Forms;
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)

use Filament\Forms\Components\Select;
use Filament\Forms\Get;
use Modules\Geo\App\Services\GeoDataService;
>>>>>>> bdbf5ed5 (feat(geo-module): introduce Geo module for managing geographical data using JSON files instead of database tables)

/**
 * Form per la selezione della località.
 * 
 * Questo form fornisce una selezione a cascata per regione, provincia, città e CAP.
 * 
 * @see \Modules\Geo\docs\json-database.md
<<<<<<< HEAD
<<<<<<< HEAD
 * @see Modules\Geo\Filament\Forms\LocationForm
=======
>>>>>>> bdbf5ed5 (feat(geo-module): introduce Geo module for managing geographical data using JSON files instead of database tables)
=======
 * @see Modules\Geo\Filament\Forms\LocationForm
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
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
>>>>>>> bdbf5ed5 (feat(geo-module): introduce Geo module for managing geographical data using JSON files instead of database tables)
     * Costruttore.
     */
    public function __construct()
    {
<<<<<<< HEAD
        // No initialization needed as we're using static methods
=======
        $this->geoDataService = new GeoDataService();
>>>>>>> bdbf5ed5 (feat(geo-module): introduce Geo module for managing geographical data using JSON files instead of database tables)
    }

    /**
     * Ottiene lo schema del form.
     * 
<<<<<<< HEAD
     * @return array<int, Select>
=======
     * @return array<string, Select>
>>>>>>> bdbf5ed5 (feat(geo-module): introduce Geo module for managing geographical data using JSON files instead of database tables)
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
>>>>>>> bdbf5ed5 (feat(geo-module): introduce Geo module for managing geographical data using JSON files instead of database tables)

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
>>>>>>> bdbf5ed5 (feat(geo-module): introduce Geo module for managing geographical data using JSON files instead of database tables)
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
>>>>>>> bdbf5ed5 (feat(geo-module): introduce Geo module for managing geographical data using JSON files instead of database tables)
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
>>>>>>> bdbf5ed5 (feat(geo-module): introduce Geo module for managing geographical data using JSON files instead of database tables)
                ->required()
                ->visible(fn (Get $get) => filled($get('city'))),
        ];
    }
<<<<<<< HEAD
} 
=======
} 
>>>>>>> bdbf5ed5 (feat(geo-module): introduce Geo module for managing geographical data using JSON files instead of database tables)
