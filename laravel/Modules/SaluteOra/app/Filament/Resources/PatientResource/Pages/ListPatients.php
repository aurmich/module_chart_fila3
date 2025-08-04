<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Filament\Resources\PatientResource\Pages;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Carbon\Carbon;
use Filament\Tables;
use Illuminate\Support\Arr;
=======
use Filament\Tables;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Builder;
>>>>>>> 86036e79 (✨ (CreateAdmin, EditAdmin, ListAdmins, CreateDoctor, EditDoctor, ListDoctors, CreatePatient, EditPatient, ListPatients): refactor admin, doctor, and patient resources to extend user resource classes for better code reuse and maintainability)
use Modules\SaluteOra\Models\Patient;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;
use Modules\SaluteOra\States\User\UserState;
use Modules\Xot\Filament\Widgets\StateOverviewWidget;
=======
>>>>>>> aurmich/dev
use Carbon\Carbon;
use Filament\Tables;
use Illuminate\Support\Arr;
use Modules\SaluteOra\Models\Patient;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;
<<<<<<< HEAD
use Modules\SaluteOra\States\User\UserState;
use Modules\Xot\Filament\Widgets\StateOverviewWidget;
=======
>>>>>>> 61a631a5 (✨ (lang_service.php, PreviewAttachment.php, IconMediaColumn.php, NotificationType.php, SpatieEmail.php, NotificationTemplateResource.php, ListMailTemplates.php, PreviewNotificationTemplate.php, NotificationTemplate.php, RecordNotification.php, notification-templates.md): add new features including language support for new document types, a preview attachment page, and notification templates with improved structure and functionality)
>>>>>>> aurmich/dev
use Modules\SaluteOra\Filament\Resources\PatientResource;
use Modules\Media\Filament\Tables\Columns\IconMediaColumn;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
use Modules\SaluteOra\Filament\Resources\UserResource\Pages\ListUsers;

class ListPatients extends ListUsers
<<<<<<< HEAD
=======
=======
=======
use Modules\SaluteOra\Models\Patient;
>>>>>>> adac82bd (rebase)
use Modules\SaluteOra\Filament\Resources\PatientResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
use Modules\SaluteOra\Filament\Resources\UserResource\Pages\ListUsers;

<<<<<<< HEAD
class ListPatients extends XotBaseListRecords
>>>>>>> 54f4fa16 (.)
=======
class ListPatients extends ListUsers
>>>>>>> 86036e79 (✨ (CreateAdmin, EditAdmin, ListAdmins, CreateDoctor, EditDoctor, ListDoctors, CreatePatient, EditPatient, ListPatients): refactor admin, doctor, and patient resources to extend user resource classes for better code reuse and maintainability)
>>>>>>> aurmich/dev
{
    protected static string $resource = PatientResource::class;

    public function getTableColumns(): array
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
        $columns = parent::getTableColumns();
        $columns = Arr::except($columns, ['type']);
        $columns['nationality'] = Tables\Columns\TextColumn::make('nationality');
        $columns['country_code'] = Tables\Columns\TextColumn::make('country_code');
        $columns['years_in_italy'] = Tables\Columns\TextColumn::make('years_in_italy');
        $columns['family_members'] = Tables\Columns\TextColumn::make('family_members');
        $columns['children_count'] = Tables\Columns\TextColumn::make('children_count');
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
        $attachments = Patient::getAttachments();

        foreach ($attachments as $attachment) {
            $columns[$attachment] = IconMediaColumn::make($attachment);
        }
        
        return $columns;
    }

    /**
     * @return array<class-string>
     */
    public function getHeaderWidgets(): array
    {
        return [
            StateOverviewWidget::class,
        ];
    }

<<<<<<< HEAD
=======
=======
=======
        dddx(app(Patient::class)->getFillable());
>>>>>>> adac82bd (rebase)
        return [
            //'id' => \Filament\Tables\Columns\TextColumn::make('id')
                //->sortable(),
            'type' => \Filament\Tables\Columns\TextColumn::make('type'),
            'name' => \Filament\Tables\Columns\TextColumn::make('name')
                ->searchable()
                ->sortable(),
            'first_name' => \Filament\Tables\Columns\TextColumn::make('first_name')
                ->searchable()
                ->sortable(),
            'last_name' => \Filament\Tables\Columns\TextColumn::make('last_name')
                ->searchable()
                ->sortable(),
            'fiscal_code' => \Filament\Tables\Columns\TextColumn::make('fiscal_code')
                ->searchable(),
            'birth_date' => \Filament\Tables\Columns\TextColumn::make('birth_date')
                ->date()
                ->sortable(),
            'email' => \Filament\Tables\Columns\TextColumn::make('email')
                ->searchable(),
            'phone' => \Filament\Tables\Columns\TextColumn::make('phone'),
            /*
            'created_at' => \Filament\Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            'updated_at' => \Filament\Tables\Columns\TextColumn::make('updated_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            */
        ];
    }
>>>>>>> 54f4fa16 (.)
=======
        $columns = parent::getTableColumns();   
=======
        $columns = parent::getTableColumns();
>>>>>>> 61a631a5 (✨ (lang_service.php, PreviewAttachment.php, IconMediaColumn.php, NotificationType.php, SpatieEmail.php, NotificationTemplateResource.php, ListMailTemplates.php, PreviewNotificationTemplate.php, NotificationTemplate.php, RecordNotification.php, notification-templates.md): add new features including language support for new document types, a preview attachment page, and notification templates with improved structure and functionality)
        $columns = Arr::except($columns, ['type']);

=======
>>>>>>> 8d591468 (fields translations)
        $attachments = Patient::$attachments;
=======
        $attachments = Patient::getAttachments();
>>>>>>> 12a79d3a (.)

        foreach ($attachments as $attachment) {
            $columns[$attachment] = IconMediaColumn::make($attachment);
        }
        
        return $columns;
    }

<<<<<<< HEAD
  
        
>>>>>>> 86036e79 (✨ (CreateAdmin, EditAdmin, ListAdmins, CreateDoctor, EditDoctor, ListDoctors, CreatePatient, EditPatient, ListPatients): refactor admin, doctor, and patient resources to extend user resource classes for better code reuse and maintainability)
=======


>>>>>>> 61a631a5 (✨ (lang_service.php, PreviewAttachment.php, IconMediaColumn.php, NotificationType.php, SpatieEmail.php, NotificationTemplateResource.php, ListMailTemplates.php, PreviewNotificationTemplate.php, NotificationTemplate.php, RecordNotification.php, notification-templates.md): add new features including language support for new document types, a preview attachment page, and notification templates with improved structure and functionality)
>>>>>>> aurmich/dev
}
