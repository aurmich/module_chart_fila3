<?php

/**
 * @see https://github.com/ryangjchandler/filament-user-resource/blob/main/src/resources/UserResource/Pages/EditUser.php
 * Pagina di modifica utente per Filament.
 */

declare(strict_types=1);

namespace Modules\User\Filament\Resources\UserResource\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Webmozart\Assert\Assert;
use Modules\User\Models\User;
use Filament\Actions\DeleteAction;
use Illuminate\Support\Facades\Hash;
use Filament\Resources\Pages\EditRecord;
use Modules\User\Filament\Resources\UserResource;

use Modules\User\Filament\Actions\ChangePasswordAction;
use Modules\User\Filament\Actions\Header\ChangePasswordHeaderAction;
=======
=======
>>>>>>> be808045 (✨ (states.mdc): add new states configuration file to define state rules and transitions)
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Hash;
use Modules\User\Filament\Resources\UserResource;
use Modules\User\Models\User;
=======
>>>>>>> ce78fe45 (translations + middleware + field on patientresource + openinghoursfield su relationsmanager)
use Webmozart\Assert\Assert;
use Modules\User\Models\User;
use Filament\Actions\DeleteAction;
use Illuminate\Support\Facades\Hash;
use Filament\Resources\Pages\EditRecord;
use Modules\User\Filament\Resources\UserResource;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
use Modules\User\Filament\Actions\ChangePasswordAction;
use Modules\User\Filament\Actions\Header\ChangePasswordHeaderAction;
>>>>>>> ce78fe45 (translations + middleware + field on patientresource + openinghoursfield su relationsmanager)
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
=======
use Modules\Xot\Filament\Resources\XotBaseResource\RelationManagers\XotBaseRelationManager;
>>>>>>> be808045 (✨ (states.mdc): add new states configuration file to define state rules and transitions)
=======
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
>>>>>>> 2bcfd382 (fix Address)

/**
 * Pagina per la modifica degli utenti con particolare gestione della password.
 */
abstract class BaseEditUser extends EditRecord
{
    // //
    protected static string $resource = UserResource::class;

    protected function mutateFormDataBeforeSave(array $data): array
    {
        Assert::isArray($data);
        if (! array_key_exists('new_password', $data) || ! filled($data['new_password'])) {
            return $data;
        }

        // Verifichiamo che record sia un'istanza valida di User
        Assert::notNull($this->record);
        Assert::isInstanceOf($this->record, User::class);

        // Gestione sicura del tipo di password per evitare errori di cast
        $newPassword = $data['new_password'];

        // Verifichiamo il tipo e convertiamo in modo sicuro
        if (!is_string($newPassword)) {
            if (!is_scalar($newPassword)) {
                throw new \InvalidArgumentException('La password deve essere una stringa');
            }
            $newPassword = (string) $newPassword;
        }

        $this->record->update(['password' => Hash::make($newPassword)]);
        return $data;
    }

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            ChangePasswordHeaderAction::make('change-password'),
=======
>>>>>>> aurmich/dev
=======
>>>>>>> be808045 (✨ (states.mdc): add new states configuration file to define state rules and transitions)
=======
            ChangePasswordHeaderAction::make('change-password'),
>>>>>>> ce78fe45 (translations + middleware + field on patientresource + openinghoursfield su relationsmanager)
        ];
    }
}
