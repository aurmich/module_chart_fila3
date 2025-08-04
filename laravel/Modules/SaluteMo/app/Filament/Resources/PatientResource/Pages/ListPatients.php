<?php

declare(strict_types=1);

namespace Modules\SaluteMo\Filament\Resources\PatientResource\Pages;

use Modules\SaluteMo\Filament\Resources\PatientResource;
<<<<<<< HEAD
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
=======
>>>>>>> 1b052af9 (♻️ (HealthCardUpload.php): remove HealthCardUpload component as it is no longer needed)
=======
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
>>>>>>> 61a631a5 (✨ (lang_service.php, PreviewAttachment.php, IconMediaColumn.php, NotificationType.php, SpatieEmail.php, NotificationTemplateResource.php, ListMailTemplates.php, PreviewNotificationTemplate.php, NotificationTemplate.php, RecordNotification.php, notification-templates.md): add new features including language support for new document types, a preview attachment page, and notification templates with improved structure and functionality)
>>>>>>> aurmich/dev
use Modules\SaluteOra\Filament\Resources\PatientResource\Pages\ListPatients as BaseListPatients;

class ListPatients extends BaseListPatients
{
    protected static string $resource = PatientResource::class;
}
