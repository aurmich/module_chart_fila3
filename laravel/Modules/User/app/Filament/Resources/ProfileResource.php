<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources;

use Modules\User\Models\Profile;




<<<<<<< HEAD
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
=======
use Modules\Xot\Filament\Resources\XotBaseResource\RelationManagers\XotBaseRelationManager;
>>>>>>> 54f4fa16 (.)





class ProfileResource extends BaseProfileResource
{
    protected static ?string $model = Profile::class;
}
