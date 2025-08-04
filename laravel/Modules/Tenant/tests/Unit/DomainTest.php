<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

use Modules\Tenant\Models\Domain;

uses(Tests\TestCase::class);

test('domain model can be instantiated', function (): void {
    $domain = new Domain();

    expect($domain)->toBeInstanceOf(Domain::class);
});

test('get rows method works correctly', function (): void {
    // Mock della Action GetDomainsArrayAction
    $this->mock(\Modules\Tenant\Actions\Domains\GetDomainsArrayAction::class, function ($mock) {
        $mock->shouldReceive('execute')
            ->once()
            ->andReturn([
                ['id' => 1, 'name' => 'test-domain.com'],
                ['id' => 2, 'name' => 'example.org'],
            ]);
    });

    $domain = new Domain();
    $rows = $domain->getRows();

    expect($rows)->toBeArray();
    expect($rows)->toHaveCount(2);
    expect($rows[0]['name'])->toBe('test-domain.com');
    expect($rows[1]['name'])->toBe('example.org');
});
=======
=======
>>>>>>> 54f4fa16 (.)
namespace Modules\Tenant\Tests\Unit;
=======
declare(strict_types=1);
>>>>>>> 3671307a (✨ (Cms): add comprehensive testing strategy for the RegistrationWidget and Login functionalities to ensure robust user authentication and registration processes. This includes separation of concerns between page and widget tests, dynamic type handling, and error management.)

use Modules\Tenant\Models\Domain;

uses(Tests\TestCase::class);

test('domain model can be instantiated', function (): void {
    $domain = new Domain();

    expect($domain)->toBeInstanceOf(Domain::class);
});

test('get rows method works correctly', function (): void {
    // Mock della Action GetDomainsArrayAction
    $this->mock(\Modules\Tenant\Actions\Domains\GetDomainsArrayAction::class, function ($mock) {
        $mock->shouldReceive('execute')
            ->once()
            ->andReturn([
                ['id' => 1, 'name' => 'test-domain.com'],
                ['id' => 2, 'name' => 'example.org'],
            ]);
    });

<<<<<<< HEAD
        $this->assertIsArray($rows);
        $this->assertCount(2, $rows);
        $this->assertEquals('test-domain.com', $rows[0]['name']);
        $this->assertEquals('example.org', $rows[1]['name']);
    }
}
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
>>>>>>> 54f4fa16 (.)
=======
    $domain = new Domain();
    $rows = $domain->getRows();

    expect($rows)->toBeArray();
    expect($rows)->toHaveCount(2);
    expect($rows[0]['name'])->toBe('test-domain.com');
    expect($rows[1]['name'])->toBe('example.org');
});
>>>>>>> 3671307a (✨ (Cms): add comprehensive testing strategy for the RegistrationWidget and Login functionalities to ensure robust user authentication and registration processes. This includes separation of concerns between page and widget tests, dynamic type handling, and error management.)
