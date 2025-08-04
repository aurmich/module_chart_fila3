<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Filament\Forms\Components;

use Modules\Xot\Filament\Forms\Components\XotBaseField;
<<<<<<< HEAD

use Illuminate\Contracts\View\View;
use Spatie\OpeningHours\OpeningHours;
use function Safe\json_decode;
use function Safe\json_encode;

class OpeningHoursField extends XotBaseField
{
    /** @phpstan-ignore property.defaultValue */
=======
use Illuminate\Contracts\View\View;
use Spatie\OpeningHours\OpeningHours;

class OpeningHoursField extends XotBaseField
{
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
    protected string $view = 'saluteora::filament.forms.components.opening-hours-field';
    
    protected function setUp(): void
    {
        parent::setUp();
        
        $this->afterStateHydrated(function (self $component, $state): void {
            if (is_string($state)) {
                $state = json_decode($state, true);
            }
            
            if (!is_array($state)) {
                $state = $this->getDefaultState();
            }
            
<<<<<<< HEAD
            // ⚠️ RIMOZIONE CHIAMATA RICORSIVA - causa loop infinito
            // $component->state($state); // QUESTO CAUSAVA IL LOOP!
            
            // ✅ Lo state è già gestito dal framework, non serve forzarlo
=======
            $component->state($state);
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
        });
        
        $this->dehydrateStateUsing(function ($state) {
            return is_array($state) ? json_encode($state) : $state;
        });
        
        $this->default([
            'monday' => [],
            'tuesday' => [],
            'wednesday' => [],
            'thursday' => [],
            'friday' => [],
            'saturday' => [],
            'sunday' => [],
            'exceptions' => [],
        ]);
    }
    
<<<<<<< HEAD
    public function getDefaultState(): array
=======
    protected function getDefaultState(): array
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
    {
        return [
            'monday' => [],
            'tuesday' => [],
            'wednesday' => [],
            'thursday' => [],
            'friday' => [],
            'saturday' => [],
            'sunday' => [],
            'exceptions' => [],
        ];
    }
    
    public function isOpenNow(): bool
    {
<<<<<<< HEAD
        /** @phpstan-ignore argument.type */
        $openingHours = OpeningHours::create($this->getState());
        return $openingHours->isOpen();
    }
}
=======
        $openingHours = OpeningHours::create($this->getState());
        return $openingHours->isOpen();
    }
}
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
