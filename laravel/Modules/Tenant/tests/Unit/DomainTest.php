<?php

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
namespace Modules\Tenant\Tests\Unit;

use Modules\Tenant\Models\Domain;
use Tests\TestCase;

class DomainTest extends TestCase
{
    /**
     * Verifica che il modello Domain possa essere istanziato.
     *
     * @return void
     */
    public function testDomainModelCanBeInstantiated()
    {
        $domain = new Domain();

        $this->assertInstanceOf(Domain::class, $domain);
    }

    /**
     * Verifica il metodo getRows.
     *
     * @return void
     */
    public function testGetRowsMethod()
    {
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

        $this->assertIsArray($rows);
        $this->assertCount(2, $rows);
        $this->assertEquals('test-domain.com', $rows[0]['name']);
        $this->assertEquals('example.org', $rows[1]['name']);
    }
}
>>>>>>> aurmich/dev
