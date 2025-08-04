<?php

declare(strict_types=1);

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
namespace Modules\Geo\Filament\Widgets;

use Modules\Xot\Filament\Widgets\XotBaseWidget;
use Modules\Geo\Filament\Forms\LocationForm;
<<<<<<< HEAD
=======
=======
namespace Modules\Geo\App\Filament\Widgets;

use Modules\Xot\Filament\Widgets\XotBaseWidget;
use Modules\Geo\App\Filament\Forms\LocationForm;
>>>>>>> bdbf5ed5 (feat(geo-module): introduce Geo module for managing geographical data using JSON files instead of database tables)
=======
namespace Modules\Geo\Filament\Widgets;

use Modules\Xot\Filament\Widgets\XotBaseWidget;
use Modules\Geo\Filament\Forms\LocationForm;
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
>>>>>>> aurmich/dev

/**
 * Widget per la selezione della località.
 * 
 * Questo widget fornisce un form per la selezione della località utilizzando
 * il form LocationForm.
 * 
 * @see \Modules\Geo\docs\json-database.md
 */
class LocationWidget extends XotBaseWidget
{
    /**
     * Ordine di visualizzazione del widget.
     */
    protected static ?int $sort = 1;

    /**
     * Numero di colonne occupate dal widget.
     */
    protected int|string|array $columnSpan = 'full';

    /**
     * Dati del widget.
     */
    public ?array $data = [];

    /**
     * Titolo del widget.
     */
    public string $title = 'geo::widgets.location.title';

    /**
     * Vista del widget.
     */
    protected static string $view = 'geo::filament.widgets.location';

    /**
     * Icona del widget.
     */
    public string $icon = 'heroicon-o-map-pin';

    /**
     * Form per la selezione della località.
     */
<<<<<<< HEAD
    private \Modules\Geo\Filament\Forms\LocationForm $locationForm;
=======
<<<<<<< HEAD
<<<<<<< HEAD
    private \Modules\Geo\Filament\Forms\LocationForm $locationForm;
=======
    private LocationForm $locationForm;
>>>>>>> bdbf5ed5 (feat(geo-module): introduce Geo module for managing geographical data using JSON files instead of database tables)
=======
    private \Modules\Geo\Filament\Forms\LocationForm $locationForm;
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
>>>>>>> aurmich/dev

    /**
     * Costruttore.
     */
    public function __construct()
    {
<<<<<<< HEAD
        $this->locationForm = new \Modules\Geo\Filament\Forms\LocationForm();
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
        $this->locationForm = new \Modules\Geo\Filament\Forms\LocationForm();
=======
        parent::__construct();
<<<<<<< HEAD
        $this->locationForm = new LocationForm();
>>>>>>> bdbf5ed5 (feat(geo-module): introduce Geo module for managing geographical data using JSON files instead of database tables)
=======
        $this->locationForm = new \Modules\Geo\Filament\Forms\LocationForm();
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
>>>>>>> aurmich/dev
    }

    /**
     * Inizializza il widget.
     * 
     * @return void
     */
    public function mount(): void
    {
        $this->form->fill();
    }

    /**
     * Ottiene lo schema del form.
     * 
<<<<<<< HEAD
     * @return array<int, \Filament\Forms\Components\Component>
=======
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<int, \Filament\Forms\Components\Component>
=======
     * @return array<string, mixed>
>>>>>>> bdbf5ed5 (feat(geo-module): introduce Geo module for managing geographical data using JSON files instead of database tables)
=======
     * @return array<int, \Filament\Forms\Components\Component>
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
     */
    public function getFormSchema(): array
    {
        return $this->locationForm->getSchema();
    }

    /**
     * Gestisce l'invio del form.
     * 
     * @return void
     */
    public function submit(): void
    {
        $data = $this->form->getState();

        $this->dispatch('location-selected', $data);

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
        // Utilizzo metodo Livewire per notifiche
        $this->dispatch('notify', [
            'type' => 'success',
            'message' => __('geo::widgets.location.messages.success')
        ]);
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        $this->notify('success', __('geo::widgets.location.messages.success'));
>>>>>>> bdbf5ed5 (feat(geo-module): introduce Geo module for managing geographical data using JSON files instead of database tables)
=======
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
    }

    /**
     * Verifica se il widget può essere visualizzato.
     * 
     * @return bool
     */
    public static function canView(): bool
    {
        return true;
    }
} 