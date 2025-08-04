<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\NotificationTemplateResource\Pages;

use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
use Modules\Notify\Filament\Resources\NotificationTemplateResource;


class EditNotificationTemplate extends XotBaseEditRecord
{
    protected static string $resource = NotificationTemplateResource::class;
<<<<<<< HEAD
    /*
=======
<<<<<<< HEAD
<<<<<<< HEAD
    /*
=======

>>>>>>> 54f4fa16 (.)
=======
    /*
>>>>>>> 345f8677 (phpstan)
>>>>>>> aurmich/dev
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        // Crea una nuova versione del template
        $this->record->createNewVersion(
            auth()->user()->name,
            'Modificato tramite interfaccia amministrativa'
        );

        return $data;
    }
<<<<<<< HEAD
    */
} 
=======
<<<<<<< HEAD
<<<<<<< HEAD
    */
} 
=======
} 
>>>>>>> 54f4fa16 (.)
=======
    */
} 
>>>>>>> 345f8677 (phpstan)
>>>>>>> aurmich/dev
