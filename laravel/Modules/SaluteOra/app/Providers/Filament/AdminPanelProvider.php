<?php

<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

namespace Modules\SaluteOra\Providers\Filament;

use Filament\Panel;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Http\Request;
use LaraZeus\Bolt\BoltPlugin;
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
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Saade\FilamentFullCalendar\FilamentFullCalendarPlugin;
use Modules\SaluteOra\Filament\Widgets\AdminCalendarWidget;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Modules\SaluteOra\Filament\Widgets\DoctorCalendarWidget;
use Modules\SaluteOra\Filament\Widgets\PatientCalendarWidget;
<<<<<<< HEAD
>>>>>>> 2099645a (.)
use Modules\Xot\Providers\Filament\XotBasePanelProvider;
use Saade\FilamentFullCalendar\FilamentFullCalendarPlugin;
=======
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
        $user = Filament::auth()->user();
        $type= $user?->type;
        if($type!=null){
            dddx($type);
        }

        $panel = app(ApplyTenancyToPanelAction::class)->execute($panel);
        $this->configurePanel($panel);

        return $panel;
    }
<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======

    /**
     * Configura le specifiche del pannello SaluteOra.
     */
    protected function configurePanel(Panel $panel): void
    {
        // Configura plugin FullCalendar
        $this->configureFullCalendar($panel);


        // Registra i widget specifici per ruolo utente
        //$this->registerRoleBasedWidgets($panel);
    }

    /**
     * Configura il plugin FullCalendar con le impostazioni specifiche.
     */
    protected function configureFullCalendar(Panel $panel): void
    {
        $calendarPlugin = FilamentFullCalendarPlugin::make()
            ->selectable(true)
            ->editable(true)
            ->timezone(config('fullcalendar.localization.timezone', 'Europe/Rome'))
            ->locale(config('fullcalendar.localization.locale', 'it'))
            ->plugins([
                'dayGrid',
                'timeGrid',
                'list',
                'interaction',
                'multiMonth',
                //'scrollGrid',//premium
            ]);

        // Aggiungi licenza scheduler solo se presente e valida
        $licenseKey = config('fullcalendar.scheduler_license_key');
        if ($licenseKey && is_string($licenseKey) && !empty(trim($licenseKey))) {
            $calendarPlugin->schedulerLicenseKey($licenseKey);
        }

        $panel->plugin($calendarPlugin);
    }


    /**
     * Registra i widget in base al ruolo dell'utente.
     */
    protected function registerRoleBasedWidgets(Panel $panel): void
    {
        $widgets = [
            // Widget di base per tutti gli utenti autenticati
            PatientCalendarWidget::class,
        ];

        // Aggiungi widget in base al tipo di utente
        if ($this->isUserAuthenticated()) {
            $userType = $this->getAuthenticatedUserType();

            // Widget aggiuntivi per dottori
            if ($userType === UserType::DOCTOR) {
                $widgets[] = DoctorCalendarWidget::class;
            }

            // Widget aggiuntivi per amministratori
            if ($userType === UserType::ADMIN) {
                $widgets[] = AdminCalendarWidget::class;
            }
        }

        $panel->widgets($widgets);
    }

    /**
     * Verifica se l'utente è autenticato.
     */
    protected function isUserAuthenticated(): bool
    {
        return Auth::check();
    }

    /**
     * Ottiene il tipo di utente autenticato.
     *
     * @return UserType::*|null
     */
    protected function getAuthenticatedUserType(): ?string
    {
        $user = Auth::user();
        return $user && property_exists($user, 'type') ? $user->type : null;
    }


>>>>>>> 2099645a (.)
}
