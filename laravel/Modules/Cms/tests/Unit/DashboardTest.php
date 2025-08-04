<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
use function Pest\Laravel\get;

uses(Tests\TestCase::class);

test('route home returns successful response with correct view', function (): void {
    get('/')
        ->assertSuccessful()
        ->assertViewIs('pub_theme::home');
});

test('route login returns successful response with correct view', function (): void {
    get('/it/login')
        ->assertSuccessful()
        ->assertViewIs('pub_theme::auth.login');
});
=======
namespace Modules\Cms\Tests\Unit;
=======
use function Pest\Laravel\get;
>>>>>>> 3671307a (✨ (Cms): add comprehensive testing strategy for the RegistrationWidget and Login functionalities to ensure robust user authentication and registration processes. This includes separation of concerns between page and widget tests, dynamic type handling, and error management.)

uses(Tests\TestCase::class);

test('route home returns successful response with correct view', function (): void {
    get('/')
        ->assertSuccessful()
        ->assertViewIs('pub_theme::home');
});

<<<<<<< HEAD
        $testResponse->assertSuccessful();
        $testResponse->assertViewIs('pub_theme::home');
    }

    /**
     * A basic test example.
     */
    public function testRouteLogin(): void
    {
        $testResponse = $this->get('/it/login');

        $testResponse->assertSuccessful();
        $testResponse->assertViewIs('pub_theme::auth.login');
    }
}
>>>>>>> 54f4fa16 (.)
=======
test('route login returns successful response with correct view', function (): void {
    get('/it/login')
        ->assertSuccessful()
        ->assertViewIs('pub_theme::auth.login');
});
>>>>>>> 3671307a (✨ (Cms): add comprehensive testing strategy for the RegistrationWidget and Login functionalities to ensure robust user authentication and registration processes. This includes separation of concerns between page and widget tests, dynamic type handling, and error management.)
