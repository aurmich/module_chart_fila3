<?php

<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

namespace Modules\SaluteOra\Providers\Filament;

use Filament\Panel;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Http\Request;
use LaraZeus\Bolt\BoltPlugin;
=======
use Illuminate\Http\Request;
>>>>>>> 3a74d92c (✨ (SaluteMo): introduce SaluteMo module with complete structure and functionality for managing mobile-specific features, including API endpoints, dashboard, and widgets for patient management.)
use Filament\Facades\Filament;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Config;
use Modules\SaluteOra\Enums\UserTypeEnum;

use Filament\Http\Middleware\Authenticate;
use Filament\SpatieLaravelTranslatablePlugin;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Modules\UI\Actions\Panel\ApplyCalendarToPanelAction;
use Modules\Xot\Actions\Panel\ApplyTenancyToPanelAction;
use Modules\Xot\Providers\Filament\XotBasePanelProvider;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Saade\FilamentFullCalendar\FilamentFullCalendarPlugin;
use Modules\SaluteOra\Filament\Widgets\AdminCalendarWidget;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Modules\SaluteOra\Filament\Widgets\DoctorCalendarWidget;
use Modules\SaluteOra\Filament\Widgets\PatientCalendarWidget;
use Modules\SaluteOra\Actions\Panel\ApplyDoctorTenancyToPanelAction;
use Illuminate\Auth\Middleware\Authenticate as MiddlewareAuthenticate;

/**
 * Provider per il pannello admin di SaluteOra.
 * Configura il pannello Filament con plugin FullCalendar ottimizzato
 * per applicazioni sanitarie multi-tenant con supporto STI.
 */
class AdminPanelProvider extends XotBasePanelProvider
{
    /**
     * Nome del modulo.
     */
    protected string $module = 'SaluteOra';
   
    /**
     * Configura il pannello Filament.
     */
    public function panel(Panel $panel): Panel
    {
        $panel = parent::panel($panel);
       
        // Applica tenancy e calendar
        $panel = app(ApplyTenancyToPanelAction::class)->execute($panel);
        $panel = app(ApplyCalendarToPanelAction::class)->execute($panel);
        $defaultLocale=Config::string('app.locale');

        $spatieLaravelTranslatablePlugin = SpatieLaravelTranslatablePlugin::make();//->defaultLocales([config('app.locale')]);
        $boltPlugin = BoltPlugin::make();

        $plugins = [
            $spatieLaravelTranslatablePlugin,
            $boltPlugin
        ];
        
        $panel->plugins($plugins);

        return $panel;
    }



=======
=======
declare(strict_types=1);

>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
namespace Modules\SaluteOra\Providers\Filament;

use Filament\Panel;
=======
use Illuminate\Auth\Middleware\Authenticate as MiddlewareAuthenticate;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
=======
=======
use Filament\Facades\Filament;
>>>>>>> ba775c8f (📝 (address.php, lang_service.php, UserTypeEnum.php, PatientResource.php, UserResource.php, Admin.php, Patient.php, StudioUser.php, AdminStudio.php, PatientStudio.php, AdminPanelProvider.php, RegisterTenant.php, various lang files): update translation files to use short array syntax for consistency and readability; remove redundant code and comments to improve clarity and maintainability.)
use Illuminate\Support\Facades\Auth;
use Modules\SaluteOra\Enums\UserTypeEnum;
use Filament\Http\Middleware\Authenticate;
use Illuminate\Session\Middleware\StartSession;
>>>>>>> 2bcfd382 (fix Address)
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Modules\Xot\Actions\Panel\ApplyTenancyToPanelAction;
use Modules\Xot\Providers\Filament\XotBasePanelProvider;
use Modules\UI\Actions\Panel\ApplyCalendarToPanelAction;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Saade\FilamentFullCalendar\FilamentFullCalendarPlugin;
use Modules\SaluteOra\Filament\Widgets\AdminCalendarWidget;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Modules\SaluteOra\Filament\Widgets\DoctorCalendarWidget;
use Modules\SaluteOra\Filament\Widgets\PatientCalendarWidget;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2099645a (.)
use Modules\Xot\Providers\Filament\XotBasePanelProvider;
use Saade\FilamentFullCalendar\FilamentFullCalendarPlugin;
=======
=======
use Modules\SaluteOra\Actions\Panel\ApplyDoctorTenancyToPanelAction;
>>>>>>> 3a74d92c (✨ (SaluteMo): introduce SaluteMo module with complete structure and functionality for managing mobile-specific features, including API endpoints, dashboard, and widgets for patient management.)
use Illuminate\Auth\Middleware\Authenticate as MiddlewareAuthenticate;
>>>>>>> 2bcfd382 (fix Address)

/**
 * Provider per il pannello admin di SaluteOra.
 * Configura il pannello Filament con plugin FullCalendar ottimizzato
 * per applicazioni sanitarie multi-tenant con supporto STI.
 */
class AdminPanelProvider extends XotBasePanelProvider
{
    /**
     * Nome del modulo.
     */
    protected string $module = 'SaluteOra';
   
    /**
     * Configura il pannello Filament.
     */
    public function panel(Panel $panel): Panel
    {
        $panel = parent::panel($panel);
       
        
        $panel = app(ApplyTenancyToPanelAction::class)->execute($panel);
        $panel = app(ApplyCalendarToPanelAction::class)->execute($panel);

        return $panel;
    }
<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======



>>>>>>> 2099645a (.)
}
