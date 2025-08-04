<?php

// declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
 namespace App\Providers\Filament;

 use Modules\Xot\Providers\Filament\XotBaseMainPanelProvider;
 use Filament\Panel;

 class AdminPanelProvider extends XotBaseMainPanelProvider
 {
     public function panel(Panel $panel): Panel


     {

         return parent::panel($panel)
           //->default()
           //->login()
             ;
     }
=======
namespace App\Providers\Filament;
=======
// namespace App\Providers\Filament;
>>>>>>> 03b27bf2 (✨ (laravel): update .env.example to remove DEBUGBAR_ENABLED and improve clarity)

// use Modules\Xot\Providers\Filament\XotBaseMainPanelProvider;
// use Filament\Panel;

// class AdminPanelProvider extends XotBaseMainPanelProvider
// {
//     public function panel(Panel $panel): Panel


//     {

<<<<<<< HEAD
        return parent::panel($panel)
          ->default()
          ->login()
            ;
    }
>>>>>>> aurmich/dev
}
=======
//         return parent::panel($panel)
//           ->default()
//           ->login()
//             ;
//     }
// }
>>>>>>> 03b27bf2 (✨ (laravel): update .env.example to remove DEBUGBAR_ENABLED and improve clarity)
