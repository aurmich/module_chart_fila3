<?php

declare(strict_types=1);

<<<<<<< HEAD
=======
namespace Modules\Geo\Tests\Unit\Models;

use Tests\TestCase;
>>>>>>> aurmich/dev
use Modules\Geo\Models\Comune;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Cache;

<<<<<<< HEAD
uses(Tests\TestCase::class);

beforeEach(function (): void {
    // Crea un file JSON di test
    $this->testData = [
        [
            'id' => 1,
            'regione' => 'Lombardia',
            'provincia' => 'Milano',
            'comune' => 'Milano',
            'cap' => '20100',
            'lat' => 45.4642,
            'lng' => 9.1900,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'id' => 2,
            'regione' => 'Lombardia',
            'provincia' => 'Milano',
            'comune' => 'Sesto San Giovanni',
            'cap' => '20099',
            'lat' => 45.5347,
            'lng' => 9.2345,
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ];
    
    File::put(
        base_path('database/content/comuni.json'),
        json_encode($this->testData, JSON_PRETTY_PRINT)
    );
});

afterEach(function (): void {
    // Pulisci la cache
    Cache::forget('sushi_Comune_data');
    
    // Rimuovi il file di test
    File::delete(base_path('database/content/comuni.json'));
});

test('it can load comuni from json', function (): void {
    $comuni = Comune::all();
    
    expect($comuni)->toHaveCount(2);
    expect($comuni[0]->comune)->toBe('Milano');
    expect($comuni[1]->comune)->toBe('Sesto San Giovanni');
});

test('it can filter comuni by region', function (): void {
    $comuni = Comune::byRegion('Lombardia')->get();
    
    expect($comuni)->toHaveCount(2);
    expect($comuni[0]->regione)->toBe('Lombardia');
    expect($comuni[1]->regione)->toBe('Lombardia');
});

test('it can filter comuni by province', function (): void {
    $comuni = Comune::byProvince('Milano')->get();
    
    expect($comuni)->toHaveCount(2);
    expect($comuni[0]->provincia)->toBe('Milano');
    expect($comuni[1]->provincia)->toBe('Milano');
});

test('it can filter comuni by cap', function (): void {
    $comuni = Comune::byCap('20100')->get();
    
    expect($comuni)->toHaveCount(1);
    expect($comuni[0]->cap)->toBe('20100');
});

test('it can filter comuni by name', function (): void {
    $comuni = Comune::byName('Milano')->get();
    
    expect($comuni)->toHaveCount(1);
    expect($comuni[0]->comune)->toBe('Milano');
});

test('it can filter comuni by exact name', function (): void {
    $comuni = Comune::byExactName('Milano')->get();
    
    expect($comuni)->toHaveCount(1);
    expect($comuni[0]->comune)->toBe('Milano');
});

test('it can filter comuni by name and province', function (): void {
    $comuni = Comune::byNameAndProvince('Milano', 'Milano')->get();
    
    expect($comuni)->toHaveCount(1);
    expect($comuni[0]->comune)->toBe('Milano');
    expect($comuni[0]->provincia)->toBe('Milano');
});

test('it can filter comuni by name and region', function (): void {
    $comuni = Comune::byNameAndRegion('Milano', 'Lombardia')->get();
    
    expect($comuni)->toHaveCount(1);
    expect($comuni[0]->comune)->toBe('Milano');
    expect($comuni[0]->regione)->toBe('Lombardia');
});

test('it can filter comuni by name province and region', function (): void {
    $comuni = Comune::byNameProvinceAndRegion('Milano', 'Milano', 'Lombardia')->get();
    
    expect($comuni)->toHaveCount(1);
    expect($comuni[0]->comune)->toBe('Milano');
    expect($comuni[0]->provincia)->toBe('Milano');
    expect($comuni[0]->regione)->toBe('Lombardia');
});

test('it can filter comuni by name and cap', function (): void {
    $comuni = Comune::byNameAndCap('Milano', '20100')->get();
    
    expect($comuni)->toHaveCount(1);
    expect($comuni[0]->comune)->toBe('Milano');
    expect($comuni[0]->cap)->toBe('20100');
});

test('it can filter comuni by name province and cap', function (): void {
    $comuni = Comune::byNameProvinceAndCap('Milano', 'Milano', '20100')->get();
    
    expect($comuni)->toHaveCount(1);
    expect($comuni[0]->comune)->toBe('Milano');
    expect($comuni[0]->provincia)->toBe('Milano');
    expect($comuni[0]->cap)->toBe('20100');
});

test('it can filter comuni by name region and cap', function (): void {
    $comuni = Comune::byNameRegionAndCap('Milano', 'Lombardia', '20100')->get();
    
    expect($comuni)->toHaveCount(1);
    expect($comuni[0]->comune)->toBe('Milano');
    expect($comuni[0]->regione)->toBe('Lombardia');
    expect($comuni[0]->cap)->toBe('20100');
});

test('it can filter comuni by name province region and cap', function (): void {
    $comuni = Comune::byNameProvinceRegionAndCap('Milano', 'Milano', 'Lombardia', '20100')->get();
    
    expect($comuni)->toHaveCount(1);
    expect($comuni[0]->comune)->toBe('Milano');
    expect($comuni[0]->provincia)->toBe('Milano');
    expect($comuni[0]->regione)->toBe('Lombardia');
    expect($comuni[0]->cap)->toBe('20100');
});

test('it can create a new comune', function (): void {
    $comune = Comune::create([
        'regione' => 'Lombardia',
        'provincia' => 'Milano',
        'comune' => 'Bresso',
        'cap' => '20091',
        'lat' => 45.5389,
        'lng' => 9.1900,
    ]);
    
    expect($comune->id)->not->toBeNull();
    expect($comune->comune)->toBe('Bresso');
    expect($comune->provincia)->toBe('Milano');
    expect($comune->regione)->toBe('Lombardia');
    expect($comune->cap)->toBe('20091');
    expect($comune->lat)->toBe(45.5389);
    expect($comune->lng)->toBe(9.1900);
});

test('it can update an existing comune', function (): void {
    $comune = Comune::first();
    $comune->update([
        'comune' => 'Milano Centro',
        'cap' => '20121',
    ]);
    
    expect($comune->comune)->toBe('Milano Centro');
    expect($comune->cap)->toBe('20121');
});

test('it can delete an existing comune', function (): void {
    $comune = Comune::first();
    $id = $comune->id;
    
    $comune->delete();
    
    expect(Comune::find($id))->toBeNull();
}); 
=======
class ComuneTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        
        // Crea un file JSON di test
        $this->testData = [
            [
                'id' => 1,
                'regione' => 'Lombardia',
                'provincia' => 'Milano',
                'comune' => 'Milano',
                'cap' => '20100',
                'lat' => 45.4642,
                'lng' => 9.1900,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'regione' => 'Lombardia',
                'provincia' => 'Milano',
                'comune' => 'Sesto San Giovanni',
                'cap' => '20099',
                'lat' => 45.5347,
                'lng' => 9.2345,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        
        File::put(
            base_path('database/content/comuni.json'),
            json_encode($this->testData, JSON_PRETTY_PRINT)
        );
    }

    protected function tearDown(): void
    {
        // Pulisci la cache
        Cache::forget('sushi_Comune_data');
        
        // Rimuovi il file di test
        File::delete(base_path('database/content/comuni.json'));
        
        parent::tearDown();
    }

    /** @test */
    public function it_can_load_comuni_from_json()
    {
        $comuni = Comune::all();
        
        $this->assertCount(2, $comuni);
        $this->assertEquals('Milano', $comuni[0]->comune);
        $this->assertEquals('Sesto San Giovanni', $comuni[1]->comune);
    }

    /** @test */
    public function it_can_filter_comuni_by_region()
    {
        $comuni = Comune::byRegion('Lombardia')->get();
        
        $this->assertCount(2, $comuni);
        $this->assertEquals('Lombardia', $comuni[0]->regione);
        $this->assertEquals('Lombardia', $comuni[1]->regione);
    }

    /** @test */
    public function it_can_filter_comuni_by_province()
    {
        $comuni = Comune::byProvince('Milano')->get();
        
        $this->assertCount(2, $comuni);
        $this->assertEquals('Milano', $comuni[0]->provincia);
        $this->assertEquals('Milano', $comuni[1]->provincia);
    }

    /** @test */
    public function it_can_filter_comuni_by_cap()
    {
        $comuni = Comune::byCap('20100')->get();
        
        $this->assertCount(1, $comuni);
        $this->assertEquals('20100', $comuni[0]->cap);
    }

    /** @test */
    public function it_can_filter_comuni_by_name()
    {
        $comuni = Comune::byName('Milano')->get();
        
        $this->assertCount(1, $comuni);
        $this->assertEquals('Milano', $comuni[0]->comune);
    }

    /** @test */
    public function it_can_filter_comuni_by_exact_name()
    {
        $comuni = Comune::byExactName('Milano')->get();
        
        $this->assertCount(1, $comuni);
        $this->assertEquals('Milano', $comuni[0]->comune);
    }

    /** @test */
    public function it_can_filter_comuni_by_name_and_province()
    {
        $comuni = Comune::byNameAndProvince('Milano', 'Milano')->get();
        
        $this->assertCount(1, $comuni);
        $this->assertEquals('Milano', $comuni[0]->comune);
        $this->assertEquals('Milano', $comuni[0]->provincia);
    }

    /** @test */
    public function it_can_filter_comuni_by_name_and_region()
    {
        $comuni = Comune::byNameAndRegion('Milano', 'Lombardia')->get();
        
        $this->assertCount(1, $comuni);
        $this->assertEquals('Milano', $comuni[0]->comune);
        $this->assertEquals('Lombardia', $comuni[0]->regione);
    }

    /** @test */
    public function it_can_filter_comuni_by_name_province_and_region()
    {
        $comuni = Comune::byNameProvinceAndRegion('Milano', 'Milano', 'Lombardia')->get();
        
        $this->assertCount(1, $comuni);
        $this->assertEquals('Milano', $comuni[0]->comune);
        $this->assertEquals('Milano', $comuni[0]->provincia);
        $this->assertEquals('Lombardia', $comuni[0]->regione);
    }

    /** @test */
    public function it_can_filter_comuni_by_name_and_cap()
    {
        $comuni = Comune::byNameAndCap('Milano', '20100')->get();
        
        $this->assertCount(1, $comuni);
        $this->assertEquals('Milano', $comuni[0]->comune);
        $this->assertEquals('20100', $comuni[0]->cap);
    }

    /** @test */
    public function it_can_filter_comuni_by_name_province_and_cap()
    {
        $comuni = Comune::byNameProvinceAndCap('Milano', 'Milano', '20100')->get();
        
        $this->assertCount(1, $comuni);
        $this->assertEquals('Milano', $comuni[0]->comune);
        $this->assertEquals('Milano', $comuni[0]->provincia);
        $this->assertEquals('20100', $comuni[0]->cap);
    }

    /** @test */
    public function it_can_filter_comuni_by_name_region_and_cap()
    {
        $comuni = Comune::byNameRegionAndCap('Milano', 'Lombardia', '20100')->get();
        
        $this->assertCount(1, $comuni);
        $this->assertEquals('Milano', $comuni[0]->comune);
        $this->assertEquals('Lombardia', $comuni[0]->regione);
        $this->assertEquals('20100', $comuni[0]->cap);
    }

    /** @test */
    public function it_can_filter_comuni_by_name_province_region_and_cap()
    {
        $comuni = Comune::byNameProvinceRegionAndCap('Milano', 'Milano', 'Lombardia', '20100')->get();
        
        $this->assertCount(1, $comuni);
        $this->assertEquals('Milano', $comuni[0]->comune);
        $this->assertEquals('Milano', $comuni[0]->provincia);
        $this->assertEquals('Lombardia', $comuni[0]->regione);
        $this->assertEquals('20100', $comuni[0]->cap);
    }

    /** @test */
    public function it_can_create_a_new_comune()
    {
        $comune = Comune::create([
            'regione' => 'Lombardia',
            'provincia' => 'Milano',
            'comune' => 'Bresso',
            'cap' => '20091',
            'lat' => 45.5389,
            'lng' => 9.1900,
        ]);
        
        $this->assertNotNull($comune->id);
        $this->assertEquals('Bresso', $comune->comune);
        $this->assertEquals('Milano', $comune->provincia);
        $this->assertEquals('Lombardia', $comune->regione);
        $this->assertEquals('20091', $comune->cap);
        $this->assertEquals(45.5389, $comune->lat);
        $this->assertEquals(9.1900, $comune->lng);
    }

    /** @test */
    public function it_can_update_an_existing_comune()
    {
        $comune = Comune::first();
        $comune->update([
            'comune' => 'Milano Centro',
            'cap' => '20121',
        ]);
        
        $this->assertEquals('Milano Centro', $comune->comune);
        $this->assertEquals('20121', $comune->cap);
    }

    /** @test */
    public function it_can_delete_an_existing_comune()
    {
        $comune = Comune::first();
        $id = $comune->id;
        
        $comune->delete();
        
        $this->assertNull(Comune::find($id));
    }
} 
>>>>>>> aurmich/dev
