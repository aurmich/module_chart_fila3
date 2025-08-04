<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\MailTemplateResource\Pages;

use Modules\Notify\Filament\Resources\MailTemplateResource;
use Modules\Notify\Models\MailTemplate;
use Modules\Lang\Filament\Resources\Pages\LangBaseListRecords;
use Filament\Tables;
use Filament\Tables\Table;

class ListMailTemplates extends LangBaseListRecords
{
    protected static string $resource = MailTemplateResource::class;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
    
    public function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('slug')
                ->searchable()
                ->sortable()
                ,
<<<<<<< HEAD
=======
=======
    public function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('slug')
                ->searchable()
                ->sortable()
<<<<<<< HEAD
                ->label(__('notify::mail.template.fields.name.label')),
>>>>>>> 54f4fa16 (.)
=======
                ,
>>>>>>> 61a631a5 (✨ (lang_service.php, PreviewAttachment.php, IconMediaColumn.php, NotificationType.php, SpatieEmail.php, NotificationTemplateResource.php, ListMailTemplates.php, PreviewNotificationTemplate.php, NotificationTemplate.php, RecordNotification.php, notification-templates.md): add new features including language support for new document types, a preview attachment page, and notification templates with improved structure and functionality)
>>>>>>> aurmich/dev

            Tables\Columns\TextColumn::make('mailable')
                ->searchable()
                ->sortable()
<<<<<<< HEAD
                ,
=======
<<<<<<< HEAD
<<<<<<< HEAD
                ,
=======
                ->label(__('notify::mail.template.fields.mailable.label')),
>>>>>>> 54f4fa16 (.)
=======
                ,
>>>>>>> 61a631a5 (✨ (lang_service.php, PreviewAttachment.php, IconMediaColumn.php, NotificationType.php, SpatieEmail.php, NotificationTemplateResource.php, ListMailTemplates.php, PreviewNotificationTemplate.php, NotificationTemplate.php, RecordNotification.php, notification-templates.md): add new features including language support for new document types, a preview attachment page, and notification templates with improved structure and functionality)
>>>>>>> aurmich/dev

            Tables\Columns\TextColumn::make('subject')
                ->searchable()
                ->sortable()
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
                ,

            Tables\Columns\TextColumn::make('counter')
                ->searchable()
                ->sortable()
                ,
            
        ];
    }


<<<<<<< HEAD
=======
=======
                ->label(__('notify::mail.template.fields.subject.label')),
=======
                ,
>>>>>>> 61a631a5 (✨ (lang_service.php, PreviewAttachment.php, IconMediaColumn.php, NotificationType.php, SpatieEmail.php, NotificationTemplateResource.php, ListMailTemplates.php, PreviewNotificationTemplate.php, NotificationTemplate.php, RecordNotification.php, notification-templates.md): add new features including language support for new document types, a preview attachment page, and notification templates with improved structure and functionality)

            Tables\Columns\TextColumn::make('layout')
                ->searchable()
                ->sortable()
                ,

        ];
    }

<<<<<<< HEAD
    
>>>>>>> 54f4fa16 (.)
=======

>>>>>>> 61a631a5 (✨ (lang_service.php, PreviewAttachment.php, IconMediaColumn.php, NotificationType.php, SpatieEmail.php, NotificationTemplateResource.php, ListMailTemplates.php, PreviewNotificationTemplate.php, NotificationTemplate.php, RecordNotification.php, notification-templates.md): add new features including language support for new document types, a preview attachment page, and notification templates with improved structure and functionality)
>>>>>>> aurmich/dev
}
