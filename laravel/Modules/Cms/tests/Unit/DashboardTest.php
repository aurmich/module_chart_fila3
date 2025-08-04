<?php

declare(strict_types=1);

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

use Tests\TestCase;

class DashboardTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function testRouteHome(): void
    {
        $testResponse = $this->get('/');

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
