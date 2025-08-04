<?php

declare(strict_types=1);

namespace Modules\UI\Actions\Panel;

use Filament\Panel;
use Modules\Xot\Datas\XotData;
use Modules\Xot\Datas\MetatagData;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
<<<<<<< HEAD
use Illuminate\Support\Facades\Config;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\Config;
=======
>>>>>>> aurmich/dev
=======
use Illuminate\Support\Facades\Config;
>>>>>>> 345f8677 (phpstan)
=======
>>>>>>> 3a74d92c (✨ (SaluteMo): introduce SaluteMo module with complete structure and functionality for managing mobile-specific features, including API endpoints, dashboard, and widgets for patient management.)
=======
use Illuminate\Support\Facades\Config;
>>>>>>> 345f8677 (phpstan)
>>>>>>> aurmich/dev
use Spatie\QueueableAction\QueueableAction;
use Modules\User\Filament\Pages\Tenancy\RegisterTenant;
use Modules\User\Filament\Pages\Tenancy\EditTenantProfile;
use Saade\FilamentFullCalendar\FilamentFullCalendarPlugin;

class ApplyCalendarToPanelAction
{
    use QueueableAction;

    public function execute(Panel &$panel): Panel
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 345f8677 (phpstan)
        $timezone = Config::string('fullcalendar.localization.timezone', 'Europe/Rome');
        $locale = Config::string('fullcalendar.localization.locale', 'it');
        $calendarPlugin = FilamentFullCalendarPlugin::make()
        ->selectable(true)
        ->editable(true)
<<<<<<< HEAD
<<<<<<< HEAD
        ->timezone($timezone)
        ->locale($locale)
=======
=======
>>>>>>> 3a74d92c (✨ (SaluteMo): introduce SaluteMo module with complete structure and functionality for managing mobile-specific features, including API endpoints, dashboard, and widgets for patient management.)
        $calendarPlugin = FilamentFullCalendarPlugin::make()
        ->selectable(true)
        ->editable(true)
<<<<<<< HEAD
        ->timezone(config('fullcalendar.localization.timezone', 'Europe/Rome'))
        ->locale(config('fullcalendar.localization.locale', 'it'))
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
>>>>>>> aurmich/dev
        $timezone = Config::string('fullcalendar.localization.timezone', 'Europe/Rome');
        $locale = Config::string('fullcalendar.localization.locale', 'it');
        $calendarPlugin = FilamentFullCalendarPlugin::make()
        ->selectable(true)
        ->editable(true)
        ->timezone($timezone)
        ->locale($locale)
<<<<<<< HEAD
=======
>>>>>>> 345f8677 (phpstan)
=======
>>>>>>> 3a74d92c (✨ (SaluteMo): introduce SaluteMo module with complete structure and functionality for managing mobile-specific features, including API endpoints, dashboard, and widgets for patient management.)
=======
        ->timezone((string) config('fullcalendar.localization.timezone', 'Europe/Rome'))
        ->locale((string) config('fullcalendar.localization.locale', 'it'))
>>>>>>> bf0cd1be (phpstan)
=======
        ->timezone(config('fullcalendar.localization.timezone', 'Europe/Rome'))
        ->locale(config('fullcalendar.localization.locale', 'it'))
>>>>>>> 6581c95e (♻️ (ListActivities.php, ListStoredEvents.php, LogoutListener.php): refactor code to improve readability and maintainability by removing unused imports and comments)
=======
        ->timezone($timezone)
        ->locale($locale)
>>>>>>> 345f8677 (phpstan)
>>>>>>> aurmich/dev
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

        return $panel;
    }
}
