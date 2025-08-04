<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Tables\Columns;

use Exception;
use Illuminate\Support\Arr;
use Spatie\ModelStates\State;
use Modules\SaluteOra\Models\User;
use Filament\Tables\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\IconColumn;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\SelectColumn;

class IconMediaColumn extends IconColumn
{

    protected function setUp(): void
    {
        parent::setUp();
        $attachment=$this->getName();

<<<<<<< HEAD
        $this->default(
            fn($record)=>$record->getFirstMedia($attachment))
                ->icon('heroicon-o-document-text')
                ->color(fn ($record) => $record->getFirstMedia($attachment) ? 'success' : 'danger')
                ->tooltip(fn ($record) => $record->getFirstMedia($attachment)->file_name ?? 'Documento non caricato')

                ->action(function ($record,\Illuminate\Http\Request $request) use ($attachment) {
                    // @phpstan-ignore method.nonObject
=======
        $this->default(fn($record)=>$record->getFirstMedia($attachment))
                ->icon('heroicon-o-document-text')
                ->color(fn ($record) => $record->getFirstMedia($attachment) ? 'success' : 'danger')
                ->tooltip(fn ($record) => $record->getFirstMedia($attachment)?->file_name ?? 'Documento non caricato')

                ->action(function ($record) use ($attachment) {
>>>>>>> 61a631a5 (✨ (lang_service.php, PreviewAttachment.php, IconMediaColumn.php, NotificationType.php, SpatieEmail.php, NotificationTemplateResource.php, ListMailTemplates.php, PreviewNotificationTemplate.php, NotificationTemplate.php, RecordNotification.php, notification-templates.md): add new features including language support for new document types, a preview attachment page, and notification templates with improved structure and functionality)
                    $media = $record->getFirstMedia($attachment);
                    if (!$media) {
                        return;
                    }

<<<<<<< HEAD
                    return $media->toInlineResponse($request);
                    //return $media->toResponse($request);

                    //return Storage::disk($media->disk)->download($media->getPathRelativeToRoot());
                    //return Storage::disk($media->disk)
                    //    ->temporaryUploadUrl($media->getPathRelativeToRoot(),now()->addMinutes(5));
=======
                    return Storage::disk($media->disk)->download($media->getPathRelativeToRoot());
>>>>>>> 61a631a5 (✨ (lang_service.php, PreviewAttachment.php, IconMediaColumn.php, NotificationType.php, SpatieEmail.php, NotificationTemplateResource.php, ListMailTemplates.php, PreviewNotificationTemplate.php, NotificationTemplate.php, RecordNotification.php, notification-templates.md): add new features including language support for new document types, a preview attachment page, and notification templates with improved structure and functionality)

                    //return response()->streamDownload(function () use ($media) {
                    //    echo $media->get();
                    //}, $media->file_name);
<<<<<<< HEAD
                    /*
                    $headers=[
                        'Content-Type' => $media->mime_type,
                        'Content-Disposition' => 'inline; filename="' . basename($media->getPathRelativeToRoot()) . '"'
                    ];
                    $path = Storage::disk($media->disk)->path($media->getPathRelativeToRoot());
                    return response()->file($path, $headers);
                    */
                    /*
                    return Storage::disk($media->disk)->response($media->getPathRelativeToRoot(), null, $headers);
                    */
=======

>>>>>>> 61a631a5 (✨ (lang_service.php, PreviewAttachment.php, IconMediaColumn.php, NotificationType.php, SpatieEmail.php, NotificationTemplateResource.php, ListMailTemplates.php, PreviewNotificationTemplate.php, NotificationTemplate.php, RecordNotification.php, notification-templates.md): add new features including language support for new document types, a preview attachment page, and notification templates with improved structure and functionality)
                })
                ;


    }




}