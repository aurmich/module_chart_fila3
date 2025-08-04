<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Providers;

use Filament\Forms\Components\Component;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
use Filament\Support\Facades\FilamentIcon;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 2099645a (.)
use Livewire\Livewire;
use Modules\SaluteOra\Filament\Widgets\SaluteOraRegistrationWizard;
use Modules\SaluteOra\Models\SaluteOra;
use Modules\SaluteOra\Models\Document;
use Modules\SaluteOra\Models\Anamnesis;
use Modules\SaluteOra\Filament\Resources\SaluteOraResource;
use Modules\Xot\Providers\XotBaseServiceProvider;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
use Modules\SaluteOra\Providers\Filament\AdminPanelProvider;
use Modules\SaluteOra\Console\Commands\CheckDirectoryStructure;
use Modules\SaluteOra\Models\User;
use Spatie\ModelStates\State;
<<<<<<< HEAD
=======
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)

class SaluteOraServiceProvider extends XotBaseServiceProvider
{
    public string $name = 'SaluteOra';
<<<<<<< HEAD
<<<<<<< HEAD
    protected string $moduleName = 'SaluteOra';
    protected string $moduleNameLower = 'saluteora';
=======
    protected string $module_dir = __DIR__;
    protected string $module_ns = __NAMESPACE__;
>>>>>>> 54f4fa16 (.)
=======
    protected $moduleName = 'SaluteOra';
    protected $moduleNameLower = 'saluteora';
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)

    public function boot(): void
    {
        parent::boot();

        // Merge auth configuration
        $this->mergeConfigFrom(
            __DIR__.'/../../config/auth.php', 'auth'
        );
        
        // Registra gli observer dei modelli
        $this->bootObservers();
    }
    
    /**
     * Registra gli observer per i modelli del modulo.
     */
    protected function bootObservers(): void
    {
        \Modules\SaluteOra\Models\Studio::observe(\Modules\SaluteOra\Observers\StudioObserver::class);
    }

    /*
     * Registra gli stati per i modelli.
     */
    /*
    protected function registerStates(): void
    {
        State::resolveStateUsing(
            User::class,
            'state',
            'Modules\\SaluteOra\\States\\User'
        );
    }
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
       
=======
    public function register(): void
    {
        parent::register();
        $this->app->register(RouteServiceProvider::class);

        // Registra le icone SVG personalizzate
        FilamentIcon::register([
            'saluteora-doctor' => asset('modules/SaluteOra/resources/svg/doctor.svg'),
            'saluteora-patient' => asset('modules/SaluteOra/resources/svg/patient.svg'),
            'saluteora-users' => asset('modules/SaluteOra/resources/svg/users.svg'),
        ]);
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
    }
    
    /**
     * Registra gli observer per i modelli del modulo.
     */
    protected function bootObservers(): void
    {
       // \Modules\SaluteOra\Models\Studio::observe(\Modules\SaluteOra\Observers\StudioObserver::class);
    }

    /*
     * Registra gli stati per i modelli.
     */
    /*
    protected function registerStates(): void
    {
        State::resolveStateUsing(
            User::class,
            'state',
            'Modules\\SaluteOra\\States\\User'
        );
    }
    */
    
    public function register(): void
    {
        parent::register();
        
        
    }
    
   
=======
    }
>>>>>>> 54f4fa16 (.)
=======
    */
    
    public function register(): void
    {
        parent::register();
        
        
    }
    
   
>>>>>>> 2099645a (.)
}
