<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
namespace Modules\Geo\Filament\Forms;

use Filament\Forms\Components\Select;
use Filament\Forms\Get;
use Illuminate\Support\Collection;
use Modules\Geo\Models\ComuneJson;
<<<<<<< HEAD
=======
namespace Modules\Geo\App\Filament\Forms;
=======
namespace Modules\Geo\Filament\Forms;
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)

use Filament\Forms\Components\Select;
use Filament\Forms\Get;
use Modules\Geo\App\Services\GeoDataService;
>>>>>>> bdbf5ed5 (feat(geo-module): introduce Geo module for managing geographical data using JSON files instead of database tables)
=======
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)

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
<<<<<<< HEAD
=======
     * Servizio per i dati geografici.
     */
    private GeoDataService $geoDataService;

    /**
>>>>>>> bdbf5ed5 (feat(geo-module): introduce Geo module for managing geographical data using JSON files instead of database tables)
=======
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
     * Costruttore.
     */
    public function __construct()
    {
<<<<<<< HEAD
<<<<<<< HEAD
        // No initialization needed as we're using static methods
=======
        $this->geoDataService = new GeoDataService();
>>>>>>> bdbf5ed5 (feat(geo-module): introduce Geo module for managing geographical data using JSON files instead of database tables)
=======
        // No initialization needed as we're using static methods
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
    }

    /**
     * Ottiene lo schema del form.
     * 
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<int, Select>
=======
     * @return array<string, Select>
>>>>>>> bdbf5ed5 (feat(geo-module): introduce Geo module for managing geographical data using JSON files instead of database tables)
=======
     * @return array<int, Select>
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
     */
    public function getSchema(): array
    {
        return [
            Select::make('region')
                ->label('geo::fields.region.label')
                ->placeholder('geo::fields.region.placeholder')
<<<<<<< HEAD
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
=======
                ->options(fn (): array => ComuneJson::allRegions()->toArray())
                ->searchable()
                ->required()
                ->live()
                ->afterStateUpdated(fn () => ComuneJson::clearCache(false)),
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)

            Select::make('province')
                ->label('geo::fields.province.label')
                ->placeholder('geo::fields.province.placeholder')
<<<<<<< HEAD
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
=======
                ->options(fn (Get $get): array => 
                    filled($get('region')) 
                    /** @phpstan-ignore-next-line */
                        ? ComuneJson::getProvincesByRegion($get('region'))->toArray()
                        : []
                )
                ->searchable()
                ->required()
                ->live()
                ->afterStateUpdated(fn () => ComuneJson::clearCache(false))
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
                ->visible(fn (Get $get) => filled($get('region'))),

            Select::make('city')
                ->label('geo::fields.city.label')
                ->placeholder('geo::fields.city.placeholder')
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
                ->options(function (Get $get): array {
                    if (!filled($get('province'))) {
                        return [];
                    }
                    
                    /** @var Collection<int, array{cap: array<int, string>, nome: string}> $cities */
<<<<<<< HEAD
                    /** @phpstan-ignore argument.type */
=======
                    /** @phpstan-ignore-next-line */
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
                    $cities = ComuneJson::byProvince($get('province'));
                    
                    return $cities->pluck('nome', 'nome')->toArray();
                })
<<<<<<< HEAD
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
=======
                ->searchable()
                ->required()
                ->live()
                ->afterStateUpdated(fn () => ComuneJson::clearCache(false))
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
                ->visible(fn (Get $get) => filled($get('province'))),

            Select::make('cap')
                ->label('geo::fields.cap.label')
                ->placeholder('geo::fields.cap.placeholder')
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
                ->options(function (Get $get): array {
                    if (!filled($get('province')) || !filled($get('city'))) {
                        return [];
                    }
                    
                    /** @var Collection<int, array{cap: array<int, string>, nome: string}> $cities */
<<<<<<< HEAD
                    /** @phpstan-ignore argument.type */
=======
                    /** @phpstan-ignore-next-line */
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
                    $cities = ComuneJson::byProvince($get('province'))
                        ->where('nome', $get('city'));
                        
                    if ($cities->isEmpty()) {
                        return [];
                    }
                    
                    $caps = $cities->first()['cap'] ;
                    return array_combine($caps, $caps);
                })
<<<<<<< HEAD
=======
                ->options(fn (Get $get) => [
                    $this->geoDataService->getCap($get('province'), $get('city')) => $this->geoDataService->getCap($get('province'), $get('city'))
                ])
>>>>>>> bdbf5ed5 (feat(geo-module): introduce Geo module for managing geographical data using JSON files instead of database tables)
=======
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
                ->required()
                ->visible(fn (Get $get) => filled($get('city'))),
        ];
    }
<<<<<<< HEAD
} 
=======
} 
>>>>>>> bdbf5ed5 (feat(geo-module): introduce Geo module for managing geographical data using JSON files instead of database tables)
