<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 namespace App\Providers\Filament;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 namespace App\Providers\Filament;
=======
namespace App\Providers\Filament;
>>>>>>> 3671307a (✨ (Cms): add comprehensive testing strategy for the RegistrationWidget and Login functionalities to ensure robust user authentication and registration processes. This includes separation of concerns between page and widget tests, dynamic type handling, and error management.)
=======
 namespace App\Providers\Filament;
>>>>>>> e9942509 (fix: session)
>>>>>>> aurmich/dev
=======
namespace App\Providers\Filament;
>>>>>>> 93990a83 (rebase 1/1)
=======
 namespace App\Providers\Filament;
>>>>>>> ad93170c (rebase 10)

 use Modules\Xot\Providers\Filament\XotBaseMainPanelProvider;
 use Filament\Panel;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e9942509 (fix: session)
>>>>>>> aurmich/dev
=======
>>>>>>> ad93170c (rebase 10)
 class AdminPanelProvider extends XotBaseMainPanelProvider
 {
     public function panel(Panel $panel): Panel


     {

         return parent::panel($panel)
           //->default()
           //->login()
             ;
     }
<<<<<<< HEAD
<<<<<<< HEAD
=======
class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->id('admin')
            ->path('admin')
            ->login()
            ->colors([
                'primary' => \Filament\Support\Colors\Color::Amber,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets');
    }
>>>>>>> 93990a83 (rebase 1/1)
=======
>>>>>>> ad93170c (rebase 10)
}
=======
<<<<<<< HEAD
=======
namespace App\Providers\Filament;
=======
// namespace App\Providers\Filament;
>>>>>>> 03b27bf2 (✨ (laravel): update .env.example to remove DEBUGBAR_ENABLED and improve clarity)
=======
 namespace App\Providers\Filament;
>>>>>>> 18569998 (✨ (StudioFilterWidget): introduce a new widget for selecting and displaying the current studio for doctors, enhancing user experience by allowing easy studio management)

 use Modules\Xot\Providers\Filament\XotBaseMainPanelProvider;
 use Filament\Panel;

 class AdminPanelProvider extends XotBaseMainPanelProvider
 {
     public function panel(Panel $panel): Panel


     {

<<<<<<< HEAD
<<<<<<< HEAD
=======
namespace App\Providers\Filament;
=======
// namespace App\Providers\Filament;
>>>>>>> 03b27bf2 (✨ (laravel): update .env.example to remove DEBUGBAR_ENABLED and improve clarity)
=======
 namespace App\Providers\Filament;
>>>>>>> 18569998 (✨ (StudioFilterWidget): introduce a new widget for selecting and displaying the current studio for doctors, enhancing user experience by allowing easy studio management)

 use Modules\Xot\Providers\Filament\XotBaseMainPanelProvider;
 use Filament\Panel;

 class AdminPanelProvider extends XotBaseMainPanelProvider
 {
     public function panel(Panel $panel): Panel


     {

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
        return parent::panel($panel)
          ->default()
          ->login()
            ;
    }
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->id('admin')
            ->path('admin')
            ->login()
            ->colors([
                'primary' => \Filament\Support\Colors\Color::Amber,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets');
    }
>>>>>>> 3671307a (✨ (Cms): add comprehensive testing strategy for the RegistrationWidget and Login functionalities to ensure robust user authentication and registration processes. This includes separation of concerns between page and widget tests, dynamic type handling, and error management.)
=======
>>>>>>> e9942509 (fix: session)
}
=======
=======
>>>>>>> 03b27bf2 (✨ (laravel): update .env.example to remove DEBUGBAR_ENABLED and improve clarity)
//         return parent::panel($panel)
//           ->default()
//           ->login()
//             ;
//     }
// }
<<<<<<< HEAD
>>>>>>> 03b27bf2 (✨ (laravel): update .env.example to remove DEBUGBAR_ENABLED and improve clarity)
=======
=======
>>>>>>> 18569998 (✨ (StudioFilterWidget): introduce a new widget for selecting and displaying the current studio for doctors, enhancing user experience by allowing easy studio management)
         return parent::panel($panel)
           //->default()
           //->login()
             ;
     }
}
<<<<<<< HEAD
>>>>>>> 18569998 (✨ (StudioFilterWidget): introduce a new widget for selecting and displaying the current studio for doctors, enhancing user experience by allowing easy studio management)
=======
}
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 03b27bf2 (✨ (laravel): update .env.example to remove DEBUGBAR_ENABLED and improve clarity)
=======
>>>>>>> 18569998 (✨ (StudioFilterWidget): introduce a new widget for selecting and displaying the current studio for doctors, enhancing user experience by allowing easy studio management)
>>>>>>> aurmich/dev
