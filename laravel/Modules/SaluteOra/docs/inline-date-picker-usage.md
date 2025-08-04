<<<<<<< HEAD
# InlineDatePicker Usage - SaluteOra Module ✅

## Configurazione KISS nel Widget

```php
class FindDoctorAndAppointmentWidget extends XotBaseWidget
{
    // ✅ Proprietà semplice con default
    public string $currentCalendarMonth = '';

    public function mount(): void {
        if (empty($this->currentCalendarMonth)) {
            $this->currentCalendarMonth = now()->format('Y-m');
        }
        $this->form->fill();
    }

    // ✅ Navigazione minimal
    public function previousMonth(): void {
        $currentDate = Carbon::createFromFormat('Y-m', $this->currentCalendarMonth);
        $this->currentCalendarMonth = $currentDate->subMonthNoOverflow()->format('Y-m');
    }

    public function nextMonth(): void {
        $currentDate = Carbon::createFromFormat('Y-m', $this->currentCalendarMonth);
        $this->currentCalendarMonth = $currentDate->addMonthNoOverflow()->format('Y-m');
=======
# Utilizzo InlineDatePicker nel Modulo SaluteOra

## Introduzione

Questo documento descrive l'implementazione del componente `InlineDatePicker` nel contesto degli appuntamenti medici del modulo SaluteOra.

## Implementazione nel Wizard di Prenotazione

### Integrazione nel FindDoctorAndAppointmentWidget

```php
<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Filament\Widgets\Patient;

use Modules\UI\Filament\Forms\Components\InlineDatePicker;
use Modules\Xot\Filament\Widgets\XotBaseWidget;
use Filament\Forms\Components\Wizard;
use Carbon\Carbon;

class FindDoctorAndAppointmentWidget extends XotBaseWidget
{
    protected function getDateTimeStep(): Wizard\Step
    {
        return Wizard\Step::make('date_time')
            ->label('Data e Ora')
            ->icon('heroicon-o-calendar')
            ->schema([
                Forms\Components\Section::make('Seleziona Data Appuntamento')
                    ->description('Scegli una data disponibile tra quelle evidenziate')
                    ->schema([
                        InlineDatePicker::make('appointment_date')
                            ->enabledDates(fn () => $this->getAvailableDates())
                            ->highlightColor('bg-green-600 text-white')
                            ->compactMode()
                            ->required()
                            ->live()
                            ->afterStateUpdated(function ($state) {
                                $this->selectedDate = $state;
                                $this->loadAvailableTimeSlots();
                            }),
                    ]),
                    
                Forms\Components\Section::make('Orari Disponibili')
                    ->schema([
                        Forms\Components\Select::make('appointment_time')
                            ->options(fn () => $this->availableTimeSlots)
                            ->placeholder('Seleziona un orario')
                            ->required()
                            ->disabled(fn () => empty($this->selectedDate))
                            ->visible(fn () => !empty($this->availableTimeSlots)),
                            
                        Forms\Components\Placeholder::make('no_slots')
                            ->content('Nessun orario disponibile per la data selezionata')
                            ->visible(fn () => !empty($this->selectedDate) && empty($this->availableTimeSlots)),
                    ])
                    ->visible(fn () => !empty($this->selectedDate))
            ]);
    }
    
    protected function getAvailableDates(): array
    {
        // Business logic per ottenere date disponibili
        if (!$this->selectedDoctor || !$this->selectedStudio) {
            return [];
        }
        
        return AvailabilityService::getDoctorAvailableDates(
            doctorId: $this->selectedDoctor,
            studioId: $this->selectedStudio,
            serviceType: $this->selectedService,
            daysAhead: 90 // 3 mesi
        );
    }
    
    protected function loadAvailableTimeSlots(): void
    {
        if (!$this->selectedDate) {
            $this->availableTimeSlots = [];
            return;
        }
        
        $this->availableTimeSlots = AppointmentSlotService::getAvailableSlots(
            date: $this->selectedDate,
            doctorId: $this->selectedDoctor,
            studioId: $this->selectedStudio,
            duration: $this->getAppointmentDuration()
        );
>>>>>>> 71e6efbe (✨ feat: add InlineDatePicker component for enhanced date selection in forms)
    }
}
```

<<<<<<< HEAD
## Configurazione nel Form Schema

```php
protected function getDateStepSchema(): array
{
    return [
        'appointment_date' => InlineDatePicker::make('appointment_date')
            ->enabledDates(['2025-06-05','2025-06-21'])
            ->currentViewMonth($this->getCurrentCalendarMonth()), // ✅ Sincronizzato
    ];
}
```

## ✅ PROBLEMI RISOLTI

### 1. Errore "Property must not be accessed before initialization"
- **Causa**: Proprietà senza valore default
- **Soluzione**: `public string $currentCalendarMonth = '';`

### 2. Navigazione Non Funzionante
- **Causa**: Metodi nel posto sbagliato
- **Soluzione**: Metodi semplici nel widget con `wire:click`

### 3. UX Date Non Evidenti  
- **Soluzione**: Date abilitate in BLU, disabilitate in GRIGIO
- **Legenda**: Chiara indicazione delle date disponibili

### 4. Undefined Array Key 'currentMonth' ✅ NUOVO
- **Problema**: Mismatch chiavi array tra PHP e Blade
- **Causa**: PHP genera `'isCurrentMonth'`, Blade cercava `$day['currentMonth']`
## 🎯 Architettura Finale

**Widget** → Solo mese corrente + navigazione  
**Componente** → Tutta la logica calendario  
**Vista** → Solo rendering con `wire:click`

## 📐 Principi Rispettati

- **DRY**: Zero duplicazione tra PHP e JavaScript
- **KISS**: Minimal Vista Blade (10 righe JavaScript)  
- **SRP**: Separazione responsabilità chiara
- **Filament**: Uso nativo di componenti Form

## 🔄 Flusso di Navigazione

1. User clicca `previousMonth` / `nextMonth`
2. Widget aggiorna `$currentCalendarMonth`  
3. Livewire ricarica il componente
4. Componente genera nuovo calendario
5. Vista renderizza il nuovo mese

**Performance**: ✅ Una sola chiamata HTTP per navigazione  
**UX**: ✅ Transizione fluida mantenendo stato  
**Manutenibilità**: ✅ Codice lineare e debuggabile  

## ✅ ERRORI RISOLTI

### 1. Navigazione Funzionante
- **Problema**: previousMonth/nextMonth non funzionavano
- **Soluzione**: Proprietà pubblica + metodi Livewire + refresh form

### 2. UX Date Evidenti  
- **Problema**: Date cliccabili non evidenti
- **Soluzione**: Stili distintivi verde/blu/grigio + legenda

### 3. Carbon InvalidFormatException ✅ NUOVO
- **Problema**: `Carbon::createFromFormat('Y-m', '')` falliva
- **Causa**: `currentCalendarMonth` vuoto quando chiamato `getDateStepSchema()` prima di `mount()`
- **Soluzione**: Tripla protezione implementata

#### Protezioni Implementate:
```php
// ✅ 1. Nel Widget - Getter sicuro
protected function getCurrentCalendarMonth(): string {
    if (empty($this->currentCalendarMonth)) {
        $this->currentCalendarMonth = now()->format('Y-m');
    }
    return $this->currentCalendarMonth;
}

// Uso nel getDateStepSchema:
->currentViewMonth($this->getCurrentCalendarMonth()) // ✅ Sempre sicuro

// ✅ 2. Nel Componente - Validazione setter
public function currentViewMonth(string $month): static {
    if (empty($month) || !preg_match('/^\d{4}-\d{2}$/', $month)) {
        $this->currentViewMonth = now()->format('Y-m');
    }
    return $this;
}

// ✅ 3. Nel Componente - Validazione finale
public function generateCalendarData(): array {
    if (empty($this->currentViewMonth)) {
        $this->currentViewMonth = now()->format('Y-m');
    }
    $targetMonth = Carbon::createFromFormat('Y-m', $this->currentViewMonth); // ✅ Safe
}
```

---

*Documentazione aggiornata: Gennaio 2025 - Soluzione KISS definitiva* 
=======
## Service per Gestione Disponibilità

### AvailabilityService

```php
<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Services;

use Carbon\Carbon;
use Modules\SaluteOra\Models\Doctor;
use Modules\SaluteOra\Models\Studio;
use Modules\SaluteOra\Models\Appointment;

class AvailabilityService
{
    /**
     * Ottiene le date disponibili per un dottore in uno studio specifico.
     *
     * @param int $doctorId
     * @param int $studioId
     * @param string|null $serviceType
     * @param int $daysAhead
     * @return array<string> Array di date in formato Y-m-d
     */
    public static function getDoctorAvailableDates(
        int $doctorId,
        int $studioId,
        ?string $serviceType = null,
        int $daysAhead = 90
    ): array {
        $doctor = Doctor::find($doctorId);
        $studio = Studio::find($studioId);
        
        if (!$doctor || !$studio) {
            return [];
        }
        
        $availableDates = [];
        $startDate = Carbon::today();
        $endDate = Carbon::today()->addDays($daysAhead);
        
        for ($date = $startDate->copy(); $date <= $endDate; $date->addDay()) {
            if (self::isDoctorAvailableOnDate($doctor, $studio, $date, $serviceType)) {
                $availableDates[] = $date->format('Y-m-d');
            }
        }
        
        return $availableDates;
    }
    
    /**
     * Verifica se un dottore è disponibile in una data specifica.
     */
    protected static function isDoctorAvailableOnDate(
        Doctor $doctor,
        Studio $studio,
        Carbon $date,
        ?string $serviceType = null
    ): bool {
        // 1. Verifica che non sia un giorno di chiusura
        if (self::isStudioClosedOnDate($studio, $date)) {
            return false;
        }
        
        // 2. Verifica orari di lavoro del dottore
        if (!self::isDoctorWorkingOnDate($doctor, $date)) {
            return false;
        }
        
        // 3. Verifica disponibilità slot
        if (!self::hasAvailableSlots($doctor, $studio, $date, $serviceType)) {
            return false;
        }
        
        // 4. Verifica ferie/assenze
        if (self::isDoctorOnLeave($doctor, $date)) {
            return false;
        }
        
        return true;
    }
    
    protected static function isStudioClosedOnDate(Studio $studio, Carbon $date): bool
    {
        // Verifica chiusure studio (festività, manutenzioni, etc.)
        return $studio->closures()
            ->whereDate('date', $date)
            ->exists();
    }
    
    protected static function isDoctorWorkingOnDate(Doctor $doctor, Carbon $date): bool
    {
        $dayOfWeek = strtolower($date->format('l'));
        
        return $doctor->availability
            ->where('day_of_week', $dayOfWeek)
            ->where('is_available', true)
            ->isNotEmpty();
    }
    
    protected static function hasAvailableSlots(
        Doctor $doctor,
        Studio $studio,
        Carbon $date,
        ?string $serviceType = null
    ): bool {
        $slots = AppointmentSlotService::getAvailableSlots(
            date: $date->format('Y-m-d'),
            doctorId: $doctor->id,
            studioId: $studio->id,
            duration: self::getServiceDuration($serviceType)
        );
        
        return count($slots) > 0;
    }
    
    protected static function isDoctorOnLeave(Doctor $doctor, Carbon $date): bool
    {
        return $doctor->leaves()
            ->where('start_date', '<=', $date)
            ->where('end_date', '>=', $date)
            ->exists();
    }
    
    protected static function getServiceDuration(?string $serviceType): int
    {
        return match($serviceType) {
            'consultation' => 30,
            'treatment' => 60,
            'surgery' => 120,
            default => 30
        };
    }
}
```

## AppointmentSlotService

### Gestione Slot Orari

```php
<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Services;

use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Modules\SaluteOra\Models\Doctor;
use Modules\SaluteOra\Models\Studio;
use Modules\SaluteOra\Models\Appointment;

class AppointmentSlotService
{
    /**
     * Ottiene gli slot orari disponibili per una data specifica.
     *
     * @param string $date Data in formato Y-m-d
     * @param int $doctorId
     * @param int $studioId  
     * @param int $duration Durata in minuti
     * @return array<string, string> Array [time => display_time]
     */
    public static function getAvailableSlots(
        string $date,
        int $doctorId,
        int $studioId,
        int $duration = 30
    ): array {
        $carbon = Carbon::createFromFormat('Y-m-d', $date);
        $doctor = Doctor::find($doctorId);
        $studio = Studio::find($studioId);
        
        if (!$doctor || !$studio || $carbon->isPast()) {
            return [];
        }
        
        $workingHours = self::getDoctorWorkingHours($doctor, $carbon);
        if (empty($workingHours)) {
            return [];
        }
        
        $availableSlots = [];
        
        foreach ($workingHours as $period) {
            $slots = self::generateSlots($period, $duration);
            $availableSlots = array_merge($availableSlots, $slots);
        }
        
        // Rimuovi slot già occupati
        $bookedSlots = self::getBookedSlots($date, $doctorId, $studioId);
        $availableSlots = array_diff_key($availableSlots, $bookedSlots);
        
        // Rimuovi slot nel passato se la data è oggi
        if ($carbon->isToday()) {
            $now = Carbon::now();
            $availableSlots = array_filter($availableSlots, function ($display, $time) use ($now) {
                return Carbon::createFromFormat('H:i', $time)->gt($now);
            }, ARRAY_FILTER_USE_BOTH);
        }
        
        return $availableSlots;
    }
    
    protected static function getDoctorWorkingHours(Doctor $doctor, Carbon $date): array
    {
        $dayOfWeek = strtolower($date->format('l'));
        
        $availability = $doctor->availability()
            ->where('day_of_week', $dayOfWeek)
            ->where('is_available', true)
            ->first();
            
        if (!$availability) {
            return [];
        }
        
        $periods = [];
        
        // Mattina
        if ($availability->morning_start && $availability->morning_end) {
            $periods[] = [
                'start' => Carbon::createFromFormat('H:i', $availability->morning_start),
                'end' => Carbon::createFromFormat('H:i', $availability->morning_end),
            ];
        }
        
        // Pomeriggio
        if ($availability->afternoon_start && $availability->afternoon_end) {
            $periods[] = [
                'start' => Carbon::createFromFormat('H:i', $availability->afternoon_start),
                'end' => Carbon::createFromFormat('H:i', $availability->afternoon_end),
            ];
        }
        
        return $periods;
    }
    
    protected static function generateSlots(array $period, int $duration): array
    {
        $slots = [];
        $current = $period['start']->copy();
        
        while ($current->addMinutes($duration) <= $period['end']) {
            $timeKey = $current->format('H:i');
            $displayTime = $current->format('H:i');
            $slots[$timeKey] = $displayTime;
            
            $current->addMinutes($duration);
        }
        
        return $slots;
    }
    
    protected static function getBookedSlots(string $date, int $doctorId, int $studioId): array
    {
        return Appointment::where('appointment_date', $date)
            ->where('doctor_id', $doctorId)
            ->where('studio_id', $studioId)
            ->whereIn('status', ['confirmed', 'in_progress'])
            ->pluck('appointment_time', 'appointment_time')
            ->toArray();
    }
}
```

## Integrazione con Traduzioni

### File di Traduzione

```php
// Modules/SaluteOra/lang/it/appointment_booking.php
return [
    'date_selection' => [
        'title' => 'Seleziona Data Appuntamento',
        'description' => 'Scegli una data disponibile tra quelle evidenziate in verde',
        'no_dates_available' => 'Nessuna data disponibile per i criteri selezionati',
        'loading_dates' => 'Caricamento date disponibili...',
    ],
    
    'time_selection' => [
        'title' => 'Orari Disponibili',
        'placeholder' => 'Seleziona un orario',
        'no_slots_available' => 'Nessun orario disponibile per la data selezionata',
        'loading_slots' => 'Caricamento orari...',
    ],
    
    'messages' => [
        'date_selected' => 'Data selezionata: :date',
        'time_selected' => 'Orario selezionato: :time',
    ],
];
```

## Testing

### Test del Componente

```php
<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Tests\Feature\Components;

use Tests\TestCase;
use Livewire\Livewire;
use Modules\SaluteOra\Filament\Widgets\Patient\FindDoctorAndAppointmentWidget;
use Modules\SaluteOra\Models\Doctor;
use Modules\SaluteOra\Models\Studio;

class InlineDatePickerTest extends TestCase
{
    /** @test */
    public function it_displays_available_dates_only(): void
    {
        $doctor = Doctor::factory()->create();
        $studio = Studio::factory()->create();
        
        // Mock del service per restituire date specifiche
        $this->mock(AvailabilityService::class)
            ->shouldReceive('getDoctorAvailableDates')
            ->andReturn(['2025-06-05', '2025-06-21']);
        
        Livewire::test(FindDoctorAndAppointmentWidget::class)
            ->set('selectedDoctor', $doctor->id)
            ->set('selectedStudio', $studio->id)
            ->assertSee('2025-06-05')
            ->assertSee('2025-06-21');
    }
    
    /** @test */
    public function it_loads_time_slots_when_date_selected(): void
    {
        $doctor = Doctor::factory()->create();
        $studio = Studio::factory()->create();
        
        Livewire::test(FindDoctorAndAppointmentWidget::class)
            ->set('selectedDoctor', $doctor->id)
            ->set('selectedStudio', $studio->id)
            ->set('appointment_date', '2025-06-05')
            ->assertSet('selectedDate', '2025-06-05')
            ->assertMethodWasCalled('loadAvailableTimeSlots');
    }
}
```

## Best Practices

### Performance
1. **Caching**: Cache delle date disponibili con TTL appropriato
2. **Lazy Loading**: Caricamento slot solo quando necessario
3. **Debouncing**: Prevenzione chiamate eccessive

### UX/UI  
1. **Feedback**: Indicatori di caricamento per operazioni asincrone
2. **Empty States**: Messaggi chiari quando non ci sono date/orari
3. **Validation**: Validazione client e server per date selezionate

### Accessibilità
1. **Keyboard Navigation**: Navigazione completa via tastiera
2. **Screen Readers**: Aria-labels descrittivi per ogni data
3. **High Contrast**: Supporto modalità alto contrasto

---

*Documentazione aggiornata: Gennaio 2025* 
>>>>>>> 71e6efbe (✨ feat: add InlineDatePicker component for enhanced date selection in forms)
