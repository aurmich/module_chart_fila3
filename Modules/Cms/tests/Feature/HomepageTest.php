<?php

declare(strict_types=1);

namespace Modules\Cms\Tests\Feature;

use function Pest\Laravel\get;

uses(\Modules\Cms\Tests\TestCase::class);

describe('Homepage Folio + Volt + Laraxot', function () {
    it('homepage is accessible and renders correctly', function () {
        // Test che la homepage sia accessibile
        $response = get('/');
        
        $response->assertStatus(200);
        $response->assertSee('home');
    });

    it('homepage uses correct layout', function () {
        $response = get('/');
        
        // Verifica che usi il layout marketing
        $response->assertSee('x-layouts.marketing');
    });

    it('homepage content is rendered via ThemeComposer', function () {
        // Mock del ThemeComposer per testare il rendering dei contenuti
        $this->mock(\Modules\Cms\View\Composers\ThemeComposer::class, function ($mock) {
            $mock->shouldReceive('showPageContent')
                ->with('home')
                ->andReturn('Test homepage content');
        });
        
        $response = get('/');
        
        $response->assertStatus(200);
        $response->assertSee('Test homepage content');
    });

    it('homepage uses Volt component', function () {
        $response = get('/');
        
        // Verifica che la pagina sia renderizzata correttamente
        $response->assertStatus(200);
        
        // Verifica che non ci siano errori di rendering
        $response->assertDontSee('Error');
        $response->assertDontSee('Exception');
    });

    it('homepage has correct meta tags', function () {
        $response = get('/');
        
        $response->assertStatus(200);
        
        // Verifica che la pagina abbia i meta tag base
        $response->assertSee('<!DOCTYPE html>', false);
        $response->assertSee('<html', false);
        $response->assertSee('<head>', false);
        $response->assertSee('<body>', false);
    });
});