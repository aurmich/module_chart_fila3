<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
=======
=======
>>>>>>> 54f4fa16 (.)
namespace Modules\User\Tests\Feature;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\RefreshDatabase;
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
>>>>>>> 54f4fa16 (.)
=======
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
>>>>>>> 3671307a (✨ (Cms): add comprehensive testing strategy for the RegistrationWidget and Login functionalities to ensure robust user authentication and registration processes. This includes separation of concerns between page and widget tests, dynamic type handling, and error management.)
use Modules\User\Models\User;
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Datas\XotData;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\Hash;
use function Pest\Laravel\{actingAs, post};

uses(Tests\TestCase::class);

test('can change profile password', function (): void {
    // Crea un utente e un profilo
    /** @var UserContract&Authenticatable&Model $user */
    $user = User::factory()->create([
        'password' => bcrypt('old_password'),
    ]);

    $profileClass = XotData::make()->getProfileClass();
    /** @var ProfileContract $profile */
    $profile = $profileClass::factory()->create([
        'user_id' => $user->id,
    ]);

    // Simula l'autenticazione
    actingAs($user);

    // Esegui il cambio password
    $response = post(route('filament.resources.profiles.change-password', [
        'record' => $profile->id,
    ]), [
        'current_password' => 'old_password',
        'new_password' => 'new_password',
        'new_password_confirmation' => 'new_password',
    ]);

    // Verifica che la risposta sia di successo
    $response->assertSuccessful();

    // Verifica che la password sia stata aggiornata
    expect(Hash::check('new_password', $user->fresh()->password))->toBeTrue();
});

test('cannot change password with wrong current password', function (): void {
    // Crea un utente e un profilo
    /** @var UserContract&Authenticatable&Model $user */
    $user = User::factory()->create([
        'password' => bcrypt('old_password'),
    ]);

    $profileClass = XotData::make()->getProfileClass();
    /** @var ProfileContract $profile */
    $profile = $profileClass::factory()->create([
        'user_id' => $user->id,
    ]);

    // Simula l'autenticazione
    actingAs($user);

    // Prova a cambiare la password con la password corrente errata
    $response = post(route('filament.resources.profiles.change-password', [
        'record' => $profile->id,
    ]), [
        'current_password' => 'wrong_password',
        'new_password' => 'new_password',
        'new_password_confirmation' => 'new_password',
    ]);

    // Verifica che la risposta contenga un errore
    $response->assertSessionHasErrors('current_password');

    // Verifica che la password non sia stata cambiata
    expect(Hash::check('old_password', $user->fresh()->password))->toBeTrue();
}); 
=======
=======
>>>>>>> 54f4fa16 (.)
use Tests\TestCase;
=======
>>>>>>> 3671307a (✨ (Cms): add comprehensive testing strategy for the RegistrationWidget and Login functionalities to ensure robust user authentication and registration processes. This includes separation of concerns between page and widget tests, dynamic type handling, and error management.)
use Illuminate\Support\Facades\Hash;
use function Pest\Laravel\{actingAs, post};

uses(Tests\TestCase::class);

test('can change profile password', function (): void {
    // Crea un utente e un profilo
    /** @var UserContract&Authenticatable&Model $user */
    $user = User::factory()->create([
        'password' => bcrypt('old_password'),
    ]);

    $profileClass = XotData::make()->getProfileClass();
    /** @var ProfileContract $profile */
    $profile = $profileClass::factory()->create([
        'user_id' => $user->id,
    ]);

    // Simula l'autenticazione
    actingAs($user);

    // Esegui il cambio password
    $response = post(route('filament.resources.profiles.change-password', [
        'record' => $profile->id,
    ]), [
        'current_password' => 'old_password',
        'new_password' => 'new_password',
        'new_password_confirmation' => 'new_password',
    ]);

    // Verifica che la risposta sia di successo
    $response->assertSuccessful();

    // Verifica che la password sia stata aggiornata
    expect(Hash::check('new_password', $user->fresh()->password))->toBeTrue();
});

test('cannot change password with wrong current password', function (): void {
    // Crea un utente e un profilo
    /** @var UserContract&Authenticatable&Model $user */
    $user = User::factory()->create([
        'password' => bcrypt('old_password'),
    ]);

    $profileClass = XotData::make()->getProfileClass();
    /** @var ProfileContract $profile */
    $profile = $profileClass::factory()->create([
        'user_id' => $user->id,
    ]);

    // Simula l'autenticazione
    actingAs($user);

    // Prova a cambiare la password con la password corrente errata
    $response = post(route('filament.resources.profiles.change-password', [
        'record' => $profile->id,
    ]), [
        'current_password' => 'wrong_password',
        'new_password' => 'new_password',
        'new_password_confirmation' => 'new_password',
    ]);

    // Verifica che la risposta contenga un errore
    $response->assertSessionHasErrors('current_password');

<<<<<<< HEAD
        // Verifica che la password non sia stata cambiata
        $this->assertTrue(Hash::check('old_password', $user->fresh()->password));
    }
<<<<<<< HEAD
} 
>>>>>>> aurmich/dev
=======
} 
>>>>>>> 54f4fa16 (.)
=======
    // Verifica che la password non sia stata cambiata
    expect(Hash::check('old_password', $user->fresh()->password))->toBeTrue();
}); 
>>>>>>> 3671307a (✨ (Cms): add comprehensive testing strategy for the RegistrationWidget and Login functionalities to ensure robust user authentication and registration processes. This includes separation of concerns between page and widget tests, dynamic type handling, and error management.)
