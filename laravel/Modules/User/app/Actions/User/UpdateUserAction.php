<?php

declare(strict_types=1);

namespace Modules\User\Actions\User;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\ValidationException;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
<<<<<<< HEAD
=======
=======
=======
>>>>>>> b58de900 (.)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
>>>>>>> b58de900 (.)
>>>>>>> aurmich/dev

/**
 * UpdateUserAction: Action generica per l'aggiornamento dei dati utente.
 * 
 * Questa action gestisce l'aggiornamento dei dati di base dell'utente.
 * Può essere estesa dai moduli specifici per aggiungere logica personalizzata.
 */
class UpdateUserAction
{
    /**
     * Esegue l'aggiornamento dell'utente.
     * 
     * @param Model $user L'utente da aggiornare
     * @param array<string, mixed> $data I dati da aggiornare
     * @return Model L'utente aggiornato
     * 
     * @throws \Exception Se l'aggiornamento fallisce
     */
    public function execute(Model $user, array $data): Model
    {
        try {
            DB::beginTransaction();
            
            // Prepara i dati per l'aggiornamento
            $updateData = $this->prepareUpdateData($data);
            
            // Valida i dati specifici per l'aggiornamento
            $this->validateUpdateData($user, $updateData);
            
            // Aggiorna l'utente
            $user->fill($updateData);
            $user->save();
            
            // Esegue operazioni post-aggiornamento se necessarie
            $this->afterUpdate($user, $updateData);
            
            DB::commit();
            
            Log::info("Utente aggiornato con successo", [
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
                'user_id' => $user->getKey(),
                'updated_fields' => array_keys($updateData)
            ]);
            
            $updatedUser = $user->fresh();
            if (!$updatedUser instanceof Model) {
                throw new \Exception('Failed to refresh user model after update');
            }
            
            return $updatedUser;
<<<<<<< HEAD
=======
=======
=======
>>>>>>> b58de900 (.)
                'user_id' => $user->id,
                'updated_fields' => array_keys($updateData)
            ]);
            
            return $user->fresh();
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
                'user_id' => $user->getKey(),
                'updated_fields' => array_keys($updateData)
            ]);
            
=======
                'user_id' => $user->getKey(),
                'updated_fields' => array_keys($updateData)
            ]);
            
>>>>>>> 345f8677 (phpstan)
            $updatedUser = $user->fresh();
            if (!$updatedUser instanceof Model) {
                throw new \Exception('Failed to refresh user model after update');
            }
            
            return $updatedUser;
<<<<<<< HEAD
>>>>>>> 345f8677 (phpstan)
=======
>>>>>>> b58de900 (.)
=======
>>>>>>> 345f8677 (phpstan)
>>>>>>> aurmich/dev
            
        } catch (\Exception $e) {
            DB::rollBack();
            
            Log::error("Errore nell'aggiornamento utente", [
<<<<<<< HEAD
                'user_id' => $user->getKey(),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                'user_id' => $user->getKey(),
=======
                'user_id' => $user->id ?? null,
>>>>>>> aurmich/dev
=======
                'user_id' => $user->getKey(),
>>>>>>> 345f8677 (phpstan)
=======
                'user_id' => $user->id ?? null,
>>>>>>> b58de900 (.)
=======
                'user_id' => $user->getKey(),
>>>>>>> 345f8677 (phpstan)
>>>>>>> aurmich/dev
                'error' => $e->getMessage(),
                'data' => $updateData ?? []
            ]);
            
            throw $e;
        }
    }
    
    /**
     * Prepara i dati per l'aggiornamento rimuovendo campi non aggiornabili.
     * 
     * @param array<string, mixed> $data
     * @return array<string, mixed>
     */
    protected function prepareUpdateData(array $data): array
    {
        // Rimuovi campi che non dovrebbero essere aggiornati direttamente
        $excludeFields = [
            'id',
            'email_verified_at',
            'remember_token',
            'created_at',
            'updated_at',
        ];
        
        $updateData = array_diff_key($data, array_flip($excludeFields));
        
        // Gestione speciale per la password
        if (isset($updateData['password'])) {
            if (empty($updateData['password'])) {
                // Se la password è vuota, rimuovila dai dati di aggiornamento
                unset($updateData['password']);
            } else {
                // Hash della password se presente
<<<<<<< HEAD
                $updateData['password'] = Hash::make(SafeStringCastAction::cast($updateData['password']));
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                $updateData['password'] = Hash::make(SafeStringCastAction::cast($updateData['password']));
=======
                $updateData['password'] = Hash::make($updateData['password']);
>>>>>>> aurmich/dev
=======
                $updateData['password'] = Hash::make((string) $updateData['password']);
>>>>>>> 345f8677 (phpstan)
=======
                $updateData['password'] = Hash::make($updateData['password']);
>>>>>>> b58de900 (.)
=======
                $updateData['password'] = Hash::make((string) $updateData['password']);
>>>>>>> 345f8677 (phpstan)
>>>>>>> aurmich/dev
            }
        }
        
        // Gestione dell'email per evitare duplicati
        if (isset($updateData['email'])) {
<<<<<<< HEAD
            $email = SafeStringCastAction::cast($updateData['email']);
            $updateData['email'] = strtolower($email);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $email = SafeStringCastAction::cast($updateData['email']);
            $updateData['email'] = strtolower($email);
=======
            $updateData['email'] = strtolower($updateData['email']);
>>>>>>> aurmich/dev
=======
            $updateData['email'] = strtolower((string) $updateData['email']);
>>>>>>> 345f8677 (phpstan)
=======
            $updateData['email'] = strtolower($updateData['email']);
>>>>>>> b58de900 (.)
=======
            $updateData['email'] = strtolower((string) $updateData['email']);
>>>>>>> 345f8677 (phpstan)
>>>>>>> aurmich/dev
        }
        
        return $updateData;
    }
    
    /**
     * Valida i dati di aggiornamento.
     * 
     * @param Model $user
     * @param array<string, mixed> $data
     * @return void
     * 
     * @throws ValidationException
     */
    protected function validateUpdateData(Model $user, array $data): void
    {
        // Validazione email univoca
        if (isset($data['email'])) {
            $existingUser = $user->newQuery()
                ->where('email', $data['email'])
<<<<<<< HEAD
                ->where('id', '!=', $user->getKey())
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                ->where('id', '!=', $user->getKey())
=======
                ->where('id', '!=', $user->id)
>>>>>>> aurmich/dev
=======
                ->where('id', '!=', $user->getKey())
>>>>>>> 345f8677 (phpstan)
=======
                ->where('id', '!=', $user->id)
>>>>>>> b58de900 (.)
=======
                ->where('id', '!=', $user->getKey())
>>>>>>> 345f8677 (phpstan)
>>>>>>> aurmich/dev
                ->first();
                
            if ($existingUser) {
                throw ValidationException::withMessages([
                    'email' => __('user::validation.email_already_taken')
                ]);
            }
        }
        
        // Validazioni aggiuntive possono essere aggiunte qui
        // o nelle classi che estendono questa action
    }
    
    /**
     * Operazioni da eseguire dopo l'aggiornamento.
     * Può essere sovrascritto dalle classi che estendono questa action.
     * 
     * @param Model $user
     * @param array<string, mixed> $data
     * @return void
     */
    protected function afterUpdate(Model $user, array $data): void
    {
        // Implementazione di default vuota
        // Le classi derivate possono sovrascrivere questo metodo per:
        // - Inviare notifiche
        // - Aggiornare cache
        // - Registrare log di audit
        // - Gestire relazioni
    }
} 