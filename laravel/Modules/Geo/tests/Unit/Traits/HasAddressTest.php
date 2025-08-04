<?php

declare(strict_types=1);

<<<<<<< HEAD
use Modules\Geo\Models\Address;
use Tests\TestCase;

uses(TestCase::class);
=======
namespace Modules\Geo\Tests\Unit\Traits;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Geo\Models\Address;
use Modules\Geo\Tests\TestCase;
use Tests\CreatesApplication;

class HasAddressTest extends TestCase
{
    use RefreshDatabase;
    use CreatesApplication;

    /**
     * @var TestModel
     */
    protected $model;

    protected function setUp(): void
    {
        parent::setUp();
        
        // Crea un modello di test
        $this->model = TestModel::create([
            'name' => 'Test Model',
        ]);
    }

    /** @test */
    public function it_can_have_multiple_addresses()
    {
        // Aggiungi due indirizzi al modello
        $this->model->addresses()->create([
            'route' => 'Via Roma',
            'street_number' => '123',
            'locality' => 'Milano',
            'postal_code' => '20100',
            'is_primary' => true,
        ]);
        
        $this->model->addresses()->create([
            'route' => 'Via Garibaldi',
            'street_number' => '456',
            'locality' => 'Roma',
            'postal_code' => '00100',
            'is_primary' => false,
        ]);

        // Verifica che il modello abbia due indirizzi
        $this->assertCount(2, $this->model->addresses);
    }

    /** @test */
    public function it_can_get_primary_address()
    {
        // Aggiungi un indirizzo principale
        $this->model->addresses()->create([
            'route' => 'Via Roma',
            'street_number' => '123',
            'locality' => 'Milano',
            'postal_code' => '20100',
            'is_primary' => true,
        ]);
        
        // Aggiungi un indirizzo secondario
        $this->model->addresses()->create([
            'route' => 'Via Garibaldi',
            'street_number' => '456',
            'locality' => 'Roma',
            'postal_code' => '00100',
            'is_primary' => false,
        ]);

        // Verifica che il metodo primaryAddress restituisca l'indirizzo principale
        $primaryAddress = $this->model->primaryAddress();
        $this->assertNotNull($primaryAddress);
        $this->assertEquals('Via Roma', $primaryAddress->route);
    }

    /** @test */
    public function it_can_set_primary_address()
    {
        // Aggiungi due indirizzi
        $address1 = $this->model->addresses()->create([
            'route' => 'Via Roma',
            'street_number' => '123',
            'locality' => 'Milano',
            'postal_code' => '20100',
            'is_primary' => true,
        ]);
        
        $address2 = $this->model->addresses()->create([
            'route' => 'Via Garibaldi',
            'street_number' => '456',
            'locality' => 'Roma',
            'postal_code' => '00100',
            'is_primary' => false,
        ]);

        // Imposta il secondo indirizzo come principale
        $this->model->setAsPrimaryAddress($address2);

        // Ricarica gli indirizzi dal database
        $address1->refresh();
        $address2->refresh();

        // Verifica che il primo indirizzo non sia più principale
        $this->assertFalse($address1->is_primary);
        
        // Verifica che il secondo indirizzo sia ora principale
        $this->assertTrue($address2->is_primary);
    }

    /** @test */
    public function it_can_get_formatted_address()
    {
        // Aggiungi un indirizzo principale
        $this->model->addresses()->create([
            'route' => 'Via Roma',
            'street_number' => '123',
            'locality' => 'Milano',
            'postal_code' => '20100',
            'is_primary' => true,
        ]);

        // Verifica che il metodo getFullAddress restituisca l'indirizzo formattato
        $this->assertNotNull($this->model->getFullAddress());
        $this->assertStringContainsString('Via Roma', $this->model->getFullAddress());
        $this->assertStringContainsString('Milano', $this->model->getFullAddress());
    }

    /** @test */
    public function it_can_filter_models_by_city()
    {
        // Crea due modelli con indirizzi in città diverse
        $model1 = TestModel::create(['name' => 'Model 1']);
        $model1->addresses()->create([
            'route' => 'Via Roma',
            'street_number' => '123',
            'locality' => 'Milano',
            'postal_code' => '20100',
        ]);
        
        $model2 = TestModel::create(['name' => 'Model 2']);
        $model2->addresses()->create([
            'route' => 'Via Garibaldi',
            'street_number' => '456',
            'locality' => 'Roma',
            'postal_code' => '00100',
        ]);

        // Filtra i modelli per città
        $modelsInMilano = TestModel::inCity('Milano')->get();
        $modelsInRoma = TestModel::inCity('Roma')->get();

        // Verifica che il filtro funzioni correttamente
        $this->assertCount(1, $modelsInMilano);
        $this->assertEquals('Model 1', $modelsInMilano->first()->name);
        
        $this->assertCount(1, $modelsInRoma);
        $this->assertEquals('Model 2', $modelsInRoma->first()->name);
    }
}
>>>>>>> aurmich/dev

/**
 * Modello di test per il trait HasAddress.
 */
class TestModel extends \Illuminate\Database\Eloquent\Model
{
    use \Modules\Geo\Models\Traits\HasAddress;

    protected $fillable = ['name'];
    
    public $timestamps = false;
    
    protected $table = 'test_models';
    
    /**
     * Bootstrap this model.
     */
    public static function boot()
    {
        parent::boot();
        
        static::creating(function () {
            if (!app()->environment('testing')) {
                throw new \Exception('TestModel should only be used in tests.');
            }
        });
    }
<<<<<<< HEAD
}

beforeEach(function () {
    // Crea un modello di test
    $this->model = TestModel::create([
        'name' => 'Test Model',
    ]);
});

it('can have multiple addresses', function () {
    // Aggiungi due indirizzi al modello
    $this->model->addresses()->create([
        'route' => 'Via Roma',
        'street_number' => '123',
        'locality' => 'Milano',
        'postal_code' => '20100',
        'is_primary' => true,
    ]);
    
    $this->model->addresses()->create([
        'route' => 'Via Garibaldi',
        'street_number' => '456',
        'locality' => 'Roma',
        'postal_code' => '00100',
        'is_primary' => false,
    ]);

    // Verifica che il modello abbia due indirizzi
    expect($this->model->addresses)->toHaveCount(2);
});

it('can get primary address', function () {
    // Aggiungi un indirizzo principale
    $this->model->addresses()->create([
        'route' => 'Via Roma',
        'street_number' => '123',
        'locality' => 'Milano',
        'postal_code' => '20100',
        'is_primary' => true,
    ]);
    
    // Aggiungi un indirizzo secondario
    $this->model->addresses()->create([
        'route' => 'Via Garibaldi',
        'street_number' => '456',
        'locality' => 'Roma',
        'postal_code' => '00100',
        'is_primary' => false,
    ]);

    // Verifica che il metodo primaryAddress restituisca l'indirizzo principale
    $primaryAddress = $this->model->primaryAddress();
    
    expect($primaryAddress)->not->toBeNull();
    expect($primaryAddress->route)->toBe('Via Roma');
});

it('can set primary address', function () {
    // Aggiungi due indirizzi
    $address1 = $this->model->addresses()->create([
        'route' => 'Via Roma',
        'street_number' => '123',
        'locality' => 'Milano',
        'postal_code' => '20100',
        'is_primary' => true,
    ]);
    
    $address2 = $this->model->addresses()->create([
        'route' => 'Via Garibaldi',
        'street_number' => '456',
        'locality' => 'Roma',
        'postal_code' => '00100',
        'is_primary' => false,
    ]);

    // Imposta il secondo indirizzo come principale
    $this->model->setAsPrimaryAddress($address2);

    // Ricarica gli indirizzi dal database
    $address1->refresh();
    $address2->refresh();

    // Verifica che il primo indirizzo non sia più principale
    expect($address1->is_primary)->toBeFalse();
    
    // Verifica che il secondo indirizzo sia ora principale
    expect($address2->is_primary)->toBeTrue();
});

it('can get formatted address', function () {
    // Aggiungi un indirizzo principale
    $this->model->addresses()->create([
        'route' => 'Via Roma',
        'street_number' => '123',
        'locality' => 'Milano',
        'postal_code' => '20100',
        'is_primary' => true,
    ]);

    // Verifica che il metodo getFullAddress restituisca l'indirizzo formattato
    $fullAddress = $this->model->getFullAddress();
    
    expect($fullAddress)->not->toBeNull();
    expect($fullAddress)->toContain('Via Roma');
    expect($fullAddress)->toContain('Milano');
});

it('can filter models by city', function () {
    // Crea due modelli con indirizzi in città diverse
    $model1 = TestModel::create(['name' => 'Model 1']);
    $model1->addresses()->create([
        'route' => 'Via Roma',
        'street_number' => '123',
        'locality' => 'Milano',
        'postal_code' => '20100',
    ]);
    
    $model2 = TestModel::create(['name' => 'Model 2']);
    $model2->addresses()->create([
        'route' => 'Via Garibaldi',
        'street_number' => '456',
        'locality' => 'Roma',
        'postal_code' => '00100',
    ]);

    // Filtra i modelli per città
    $modelsInMilano = TestModel::inCity('Milano')->get();
    $modelsInRoma = TestModel::inCity('Roma')->get();

    // Verifica che il filtro funzioni correttamente
    expect($modelsInMilano)->toHaveCount(1);
    expect($modelsInMilano->first()->name)->toBe('Model 1');
    
    expect($modelsInRoma)->toHaveCount(1);
    expect($modelsInRoma->first()->name)->toBe('Model 2');
}); 
=======
}
>>>>>>> aurmich/dev
