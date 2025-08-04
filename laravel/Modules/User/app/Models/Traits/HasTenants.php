<?php

declare(strict_types=1);

namespace Modules\User\Models\Traits;

use Filament\Panel;
<<<<<<< HEAD
use Modules\Xot\Datas\XotData;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Modules\User\Contracts\TeamContract;
use Modules\Xot\Actions\Panel\ApplyTenancyToPanelAction;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Trait HasTenants
 * 
 * Provides tenant functionality for User models implementing multi-tenancy.
 * 
=======
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Collection;
use Modules\User\Contracts\TeamContract;
use Modules\Xot\Datas\XotData;

// use Modules\User\Models\OwnerRole;

/**
>>>>>>> 54f4fa16 (.)
 * @property TeamContract $currentTeam
 */
trait HasTenants
{
    /**
<<<<<<< HEAD
     * Check if the user can access a specific tenant.
     *
     * @param \Illuminate\Database\Eloquent\Model $tenant
     * @return bool
     */
    public function canAccessTenant(Model $tenant): bool
    {
        return $this->tenants()->whereKey($tenant)->exists();
    }

    /**
     * Get tenants for the given panel.
     *
     * @param \Filament\Panel $panel
     * @return array<\Illuminate\Database\Eloquent\Model>|\Illuminate\Support\Collection<int, \Illuminate\Database\Eloquent\Model>
     */
    public function getTenants(Panel $panel): array|Collection
    {
        /** @var \Illuminate\Support\Collection<int, \Illuminate\Database\Eloquent\Model> $tenants */
        $tenants = $this->tenants;
        
        return $tenants;
=======
     * ..
     **/
    public function canAccessTenant(Model $tenant): bool
    {

        return $this->tenants()->whereKey($tenant)->exists();

    }

    public function getTenants(Panel $panel): array|Collection
    {
        return $this->tenants;
>>>>>>> 54f4fa16 (.)
    }

    /**
     * Get all of the tenants the user belongs to.
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany<\Illuminate\Database\Eloquent\Model, \Illuminate\Database\Eloquent\Relations\Pivot>
=======
     * 
=======
     *
>>>>>>> ba775c8f (📝 (address.php, lang_service.php, UserTypeEnum.php, PatientResource.php, UserResource.php, Admin.php, Patient.php, StudioUser.php, AdminStudio.php, PatientStudio.php, AdminPanelProvider.php, RegisterTenant.php, various lang files): update translation files to use short array syntax for consistency and readability; remove redundant code and comments to improve clarity and maintainability.)
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany<\Illuminate\Database\Eloquent\Model>
>>>>>>> 54f4fa16 (.)
     */
    public function tenants(): BelongsToMany
    {
        $xot = XotData::make();
<<<<<<< HEAD
        /** @var class-string<\Illuminate\Database\Eloquent\Model> */
        $tenant_class = $xot->getTenantClass();

        return $this->belongsToManyX($tenant_class);
=======
        /** @var class-string<Model> */
        $tenant_class = $xot->getTenantClass();

        // $this->setConnection('mysql');
        //return $this->belongsToManyX($tenant_class, null, null, 'tenant_id');
        return $this->belongsToManyX($tenant_class);
        // ->as('membership')
>>>>>>> 54f4fa16 (.)
    }
}
