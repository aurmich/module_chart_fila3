<?php

declare(strict_types=1);

namespace Modules\SaluteMo\Filament\Resources;

<<<<<<< HEAD
<<<<<<< HEAD
use Modules\SaluteOra\Models\Patient;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\SaluteOra\Filament\Resources\UserResource;
use Modules\SaluteOra\Filament\Resources\PatientResource as BasePatientResource;
=======
use Modules\SaluteOra\Filament\Resources\PatientResource as BasePatientResource;
use Modules\SaluteMo\Models\Patient;
>>>>>>> 1b052af9 (♻️ (HealthCardUpload.php): remove HealthCardUpload component as it is no longer needed)
=======
use Modules\SaluteOra\Models\Patient;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\SaluteOra\Filament\Resources\UserResource;
use Modules\SaluteOra\Filament\Resources\PatientResource as BasePatientResource;
>>>>>>> 61a631a5 (✨ (lang_service.php, PreviewAttachment.php, IconMediaColumn.php, NotificationType.php, SpatieEmail.php, NotificationTemplateResource.php, ListMailTemplates.php, PreviewNotificationTemplate.php, NotificationTemplate.php, RecordNotification.php, notification-templates.md): add new features including language support for new document types, a preview attachment page, and notification templates with improved structure and functionality)

class PatientResource extends BasePatientResource
{
    protected static ?string $model = Patient::class;
<<<<<<< HEAD
<<<<<<< HEAD
    protected static bool $isScopedToTenant = false;

    /*
<<<<<<< HEAD
    public static function getFormSchema(): array
    {
        $schema = BasePatientResource::getFormSchema();
        
        return $schema;
    }
        */
        
=======
=======
    protected static bool $isScopedToTenant = false;
>>>>>>> 61a631a5 (✨ (lang_service.php, PreviewAttachment.php, IconMediaColumn.php, NotificationType.php, SpatieEmail.php, NotificationTemplateResource.php, ListMailTemplates.php, PreviewNotificationTemplate.php, NotificationTemplate.php, RecordNotification.php, notification-templates.md): add new features including language support for new document types, a preview attachment page, and notification templates with improved structure and functionality)

=======
>>>>>>> 12a79d3a (.)
    public static function getFormSchema(): array
    {
        $schema = BasePatientResource::getFormSchema();
        
        return $schema;
    }
<<<<<<< HEAD
>>>>>>> 1b052af9 (♻️ (HealthCardUpload.php): remove HealthCardUpload component as it is no longer needed)
=======
        */
        
>>>>>>> 12a79d3a (.)
}