<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Panel;

use Filament\Panel;
use Modules\Xot\Datas\XotData;
use Modules\Xot\Datas\MetatagData;
use Spatie\QueueableAction\QueueableAction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Modules\User\Filament\Pages\Tenancy\RegisterTenant;
use Modules\User\Filament\Pages\Tenancy\EditTenantProfile;

class ApplyTenancyToPanelAction
{
    use QueueableAction;

    public function execute(Panel &$panel): Panel
    {
        $tenant_class = XotData::make()->getTenantClass();

        // $panel
        //     ->tenant($tenant_class, slugAttribute: 'slug')
        //     ->tenantRegistration(RegisterTenant::class)
        //     ->tenantProfile(EditTenantProfile::class);

        // Controlla se l'utente è superadmin
<<<<<<< HEAD
<<<<<<< HEAD
        //$user = Auth::user();

        //if (Gate::allows('superadmin', $user)) {
            // Configurazione completa per superadmin
            $panel
                ->tenant($tenant_class, 'slug', 'tenants')
                ->tenantRegistration(RegisterTenant::class)
                ->tenantProfile(EditTenantProfile::class);
        //} else {
            // Configurazione limitata per non-superadmin
            //$panel->tenant($tenant_class, slugAttribute: 'slug');
        //}
=======
        $user = Auth::user();
=======
        //$user = Auth::user();
>>>>>>> ba775c8f (📝 (address.php, lang_service.php, UserTypeEnum.php, PatientResource.php, UserResource.php, Admin.php, Patient.php, StudioUser.php, AdminStudio.php, PatientStudio.php, AdminPanelProvider.php, RegisterTenant.php, various lang files): update translation files to use short array syntax for consistency and readability; remove redundant code and comments to improve clarity and maintainability.)

        //if (Gate::allows('superadmin', $user)) {
            // Configurazione completa per superadmin
            $panel
                ->tenant($tenant_class, 'slug', 'tenants')
                ->tenantRegistration(RegisterTenant::class)
                ->tenantProfile(EditTenantProfile::class);
        //} else {
            // Configurazione limitata per non-superadmin
<<<<<<< HEAD
            $panel->tenant($tenant_class, slugAttribute: 'slug');
        }
>>>>>>> 2bcfd382 (fix Address)
=======
            //$panel->tenant($tenant_class, slugAttribute: 'slug');
        //}
>>>>>>> ba775c8f (📝 (address.php, lang_service.php, UserTypeEnum.php, PatientResource.php, UserResource.php, Admin.php, Patient.php, StudioUser.php, AdminStudio.php, PatientStudio.php, AdminPanelProvider.php, RegisterTenant.php, various lang files): update translation files to use short array syntax for consistency and readability; remove redundant code and comments to improve clarity and maintainability.)

        return $panel;
    }
}
