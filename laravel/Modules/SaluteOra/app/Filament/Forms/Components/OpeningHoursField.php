<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Filament\Forms\Components;

use Modules\Xot\Filament\Forms\Components\XotBaseField;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev

use Illuminate\Contracts\View\View;
use Spatie\OpeningHours\OpeningHours;
use function Safe\json_decode;
use function Safe\json_encode;

class OpeningHoursField extends XotBaseField
{
    /** @phpstan-ignore property.defaultValue */
<<<<<<< HEAD
=======
=======
=======

>>>>>>> 13ea6524 (phpstan)
use Illuminate\Contracts\View\View;
use Spatie\OpeningHours\OpeningHours;
use function Safe\json_decode;
use function Safe\json_encode;

class OpeningHoursField extends XotBaseField
{
<<<<<<< HEAD
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
=======
    /** @phpstan-ignore-next-line */
>>>>>>> 13ea6524 (phpstan)
>>>>>>> aurmich/dev
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 71e6efbe (✨ feat: add InlineDatePicker component for enhanced date selection in forms)
>>>>>>> aurmich/dev
            // ⚠️ RIMOZIONE CHIAMATA RICORSIVA - causa loop infinito
            // $component->state($state); // QUESTO CAUSAVA IL LOOP!
            
            // ✅ Lo state è già gestito dal framework, non serve forzarlo
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
            $component->state($state);
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
=======
>>>>>>> 71e6efbe (✨ feat: add InlineDatePicker component for enhanced date selection in forms)
>>>>>>> aurmich/dev
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
<<<<<<< HEAD
<<<<<<< HEAD
    public function getDefaultState(): array
=======
    protected function getDefaultState(): array
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
=======
    public function getDefaultState(): array
>>>>>>> 13ea6524 (phpstan)
>>>>>>> aurmich/dev
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
        /** @phpstan-ignore argument.type */
=======
        /** @phpstan-ignore-next-line */
>>>>>>> 13ea6524 (phpstan)
>>>>>>> aurmich/dev
        $openingHours = OpeningHours::create($this->getState());
        return $openingHours->isOpen();
    }
}
<<<<<<< HEAD
=======
=======
        $openingHours = OpeningHours::create($this->getState());
        return $openingHours->isOpen();
    }
}
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
>>>>>>> aurmich/dev
