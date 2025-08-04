<?php

declare(strict_types=1);

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

use Modules\Xot\Providers\Filament\XotBaseMainPanelProvider;
use Filament\Panel;

class AdminPanelProvider extends XotBaseMainPanelProvider
{
    public function panel(Panel $panel): Panel


    {

        return parent::panel($panel)
          ->default()
          ->login()
            ;
    }
>>>>>>> aurmich/dev
}
