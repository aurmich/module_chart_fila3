<?php

declare(strict_types=1);

namespace Modules\SaluteMo\Filament\Resources\PatientResource\Pages;

use Modules\SaluteMo\Filament\Resources\PatientResource;
<<<<<<< HEAD
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
=======
>>>>>>> 1b052af9 (♻️ (HealthCardUpload.php): remove HealthCardUpload component as it is no longer needed)
use Modules\SaluteOra\Filament\Resources\PatientResource\Pages\ListPatients as BaseListPatients;

class ListPatients extends BaseListPatients
{
    protected static string $resource = PatientResource::class;
}
