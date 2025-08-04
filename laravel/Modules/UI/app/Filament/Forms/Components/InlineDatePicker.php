<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Forms\Components;

<<<<<<< HEAD
use Closure;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\App;
use Filament\Forms\Components\DatePicker;
use Filament\Actions\Contracts\HasActions;
use Filament\Actions\Concerns\InteractsWithActions;
use function Safe\preg_match;

/**
 * InlineDatePicker - Calendario inline minimalista e multilingua
 * 
 * Principi:
 * - DRY: Don't Repeat Yourself - Codice senza duplicazioni
 * - KISS: Keep It Simple, Stupid - Semplicità sopra tutto
 * - Carbon First: Localizzazione automatica tramite Carbon
 * - Design One Theme: UI/UX conforme al tema standard
 */
class InlineDatePicker extends DatePicker
{
    
    /**
     * Date abilitate per la selezione.
=======
use Filament\Forms\Components\DatePicker;
use Closure;
use Carbon\Carbon;
use Carbon\CarbonInterface;
use Illuminate\Support\Collection;
use Illuminate\View\ComponentAttributeBag;

/**
 * InlineDatePicker - Calendario inline con selezione date personalizzabile
 * 
 * Principi Filosofici:
 * - Fenomenologia: Esperienza utente immediata e intuitiva
 * - Zen: Design minimalista che elimina friction cognitivo  
 * - Gestalt: Percezione unificata del calendario come entità coesa
 * - Fisica Quantistica: Date esistono in stato di potenzialità fino alla selezione
 * - Termodinamica: Minimizzazione dell'entropia informativa
 * - Epistemologia: Conoscenza delle date disponibili trasmessa visivamente
 * - Estetica: Bellezza funzionale del design One theme
 * - Governance: Democratizzazione dell'accesso alle informazioni temporali
 * 
 * @method static static enabledDates(array|Closure $dates)
 * @method static static highlightColor(string $color)
 * @method static static compactMode(bool $compact)
 * @method static static showNavigation(bool $show)
 */
class InlineDatePicker extends DatePicker
{
    /**
     * Date abilitate per la selezione.
     * Implementa il principio di scarsità controllata nell'economia dell'attenzione.
>>>>>>> 71e6efbe (✨ feat: add InlineDatePicker component for enhanced date selection in forms)
     * 
     * @var array<string>|Closure|null
     */
    protected array|Closure|null $enabledDates = null;

    /**
<<<<<<< HEAD
     * Mese attualmente visualizzato (formato Y-m).
     * 
     * @var string
     */
    public string $currentViewMonth;

    /**
     * Vista Blade per il rendering.
=======
     * Colore di evidenziazione per le date abilitate.
     * Segue la teoria del colore per l'accessibilità cognitiva.
     * 
     * @var string
     */
    protected string $highlightColor = 'bg-indigo-600 text-white';

    /**
     * Modalità compatta per ridurre l'impatto spaziale.
     * Filosofia del minimalismo applicata al design.
     * 
     * @var bool
     */
    protected bool $compactMode = false;

    /**
     * Mostra/nasconde i controlli di navigazione.
     * Controllo democratico dell'esperienza temporale.
     * 
     * @var bool
     */
    protected bool $showNavigation = true;

    /**
     * Mese attualmente visualizzato nel calendario.
     * Rappresenta il "presente fenomenologico" dell'esperienza utente.
     * 
     * @var Carbon
     */
    protected Carbon $displayDate;

    /**
     * Vista Blade personalizzata per il rendering inline.
     * Separazione tra logica (PHP) e presentazione (Blade).
>>>>>>> 71e6efbe (✨ feat: add InlineDatePicker component for enhanced date selection in forms)
     */
    protected string $view = 'ui::filament.forms.components.inline-date-picker';

    /**
<<<<<<< HEAD
     * Setup iniziale del componente.
=======
     * Configurazione iniziale del componente.
     * Segue il principio di inizializzazione esplicita.
>>>>>>> 71e6efbe (✨ feat: add InlineDatePicker component for enhanced date selection in forms)
     */
    protected function setUp(): void
    {
        parent::setUp();

<<<<<<< HEAD
        // Inizializzazione con localizzazione Carbon
        Carbon::setLocale(App::getLocale());
        $this->currentViewMonth = now()->format('Y-m');

        // Hydration/Dehydration del valore
        $this->afterStateHydrated(static function (self $component, $state): void {
            
            if ($state) {
                $date = Carbon::parse($state);
                $component->currentViewMonth = $date->format('Y-m');
            }
        });

        $this->dehydrateStateUsing(static function (self $component, $state) {
            
            return $state ? Carbon::parse($state)->format('Y-m-d') : null;
=======
        $this->displayDate = now()->startOfMonth();

        $this->afterStateHydrated(static function (InlineDatePicker $component, $state): void {
            if (! $state) {
                $component->state(null);
                return;
            }

            $state = \Illuminate\Support\Carbon::createFromTimestamp(
                strtotime($state)
            );

            $component->state($state);
            $component->displayDate = $state->copy()->startOfMonth();
        });

        $this->dehydrateStateUsing(static function (InlineDatePicker $component, $state) {
            if (! $state) {
                return null;
            }

            return $state->format('Y-m-d');
>>>>>>> 71e6efbe (✨ feat: add InlineDatePicker component for enhanced date selection in forms)
        });
    }

    /**
<<<<<<< HEAD
     * Naviga al mese precedente.
     */
    public function previousMonth(): void
    {
        $currentMonth = Carbon::createFromFormat('Y-m', $this->currentViewMonth);
        if(!$currentMonth){
            return;
        }
        $this->currentViewMonth = $currentMonth->subMonthNoOverflow()->format('Y-m');
    }

    /**
     * Naviga al mese successivo.
     */
    public function nextMonth(): void
    {
        $currentMonth = Carbon::createFromFormat('Y-m', $this->currentViewMonth);
        if(!$currentMonth){
            return;
        }
        $this->currentViewMonth = $currentMonth->addMonthNoOverflow()->format('Y-m');
    }

    /**
     * Imposta le date abilitate.
     * 
     * @param array<string>|Closure $dates
     * @return static
     */
    public function enabledDates(array|Closure $dates): static
    {
        $this->enabledDates = $dates;
        return $this;
    }

    /**
     * Imposta il mese corrente di visualizzazione.
     * 
     * @param string $month Formato Y-m (es. '2025-06')
     * @return static
     */
    public function currentViewMonth(string $month): static
    {
        // ✅ Validazione robusta - fallback se vuoto o invalido
        if (empty($month) || !preg_match('/^\d{4}-\d{2}$/', $month)) {
            $this->currentViewMonth = now()->format('Y-m');
        } else {
            // Verifica che sia una data valida
            try {
                Carbon::createFromFormat('Y-m', $month);
                $this->currentViewMonth = $month;
            } catch (\Exception $e) {
                $this->currentViewMonth = now()->format('Y-m');
            }
        }
        
        return $this;
    }

    

    /**
     * Ottiene le date abilitate risolte.
     * 
     * @return Collection<int, string>
     */
    public function getEnabledDates(): Collection
    {
        $dates = $this->evaluate($this->enabledDates) ?? [];
        /** @phpstan-ignore return.type, argument.templateType, argument.templateType */
        return collect($dates)->map(function ($date): string {
            return Carbon::parse($date)->format('Y-m-d');
        });
    }

    /**
     * Verifica se una data è abilitata.
     * 
     * @param string $date
     * @return bool
     */
    public function isDateEnabled(string $date): bool
    {
        return $this->getEnabledDates()->isEmpty() || $this->getEnabledDates()->contains($date);
    }

    /**
     * Genera i dati del calendario per il mese corrente.
     * 
     * @return array<string, mixed>
     */
    public function generateCalendarData(): array
    {
        // ✅ Validazione di sicurezza - assicura che currentViewMonth sia valido
        if (empty($this->currentViewMonth) || !preg_match('/^\d{4}-\d{2}$/', $this->currentViewMonth)) {
            $this->currentViewMonth = now()->format('Y-m');
        }
        
        /** @phpstan-ignore method.nonObject */
        $targetMonth = Carbon::createFromFormat('Y-m', $this->currentViewMonth)->startOfMonth();
        /** @phpstan-ignore-next-line */
        $firstDay = $targetMonth->copy()->startOfWeek(Carbon::MONDAY);
        $lastDay = $targetMonth->copy()->endOfMonth()->endOfWeek(Carbon::SUNDAY);
=======
     * Naviga al mese precedente
     * 
     * @return void
     */
    public function previousMonth(): void
    {
        $this->displayDate = $this->displayDate->subMonth();
    }

    /**
     * Naviga al mese successivo
     * 
     * @return void
     */
    public function nextMonth(): void
    {
        $this->displayDate = $this->displayDate->addMonth();
    }
    
    /**
     * Aggiorna il calendario al mese specificato
     * Metodo chiamato via Livewire per navigare tra i mesi
     * 
     * Questo metodo rappresenta il flusso di coscienza temporale
     * che permette all'utente di esplorare il continuum delle possibilità.
     * 
     * @param string $statePath
     * @param int $month
     * @param int $year
     * @return void
     */
    public function updateCalendarMonth(string $statePath, int $month, int $year): void
    {
        // Creare una nuova data dal mese e anno forniti
        $newDate = Carbon::createFromDate($year, $month, 1)->startOfMonth();
        
        // Aggiornare la data di visualizzazione
        $this->displayDate = $newDate;
    }

    /**
     * Imposta il mese corrente
     */
    public function setDisplayDate(CarbonInterface $date): static
    {
        $this->displayDate = $date->copy()->startOfMonth();
        return $this;
    }

    /**
     * Genera la struttura dati per la visualizzazione del calendario.
     * 
     * Implementa la geometria computazionale dello spazio-tempo secondo:
     * - Topologia: Struttura connessa dei giorni nel continuum temporale
     * - Algebra Lineare: Mappatura bidimensionale del tempo (settimane × giorni)
     * - Teoria dei Grafi: Relazioni di adiacenza tra date
     * - Fenomenologia: Rappresentazione dell'esperienza temporale dell'utente
     */
    public function generateCalendarData(): array
    {
        $firstDay = $this->displayDate->copy()->startOfMonth()->startOfWeek(Carbon::MONDAY);
        $lastDay = $this->displayDate->copy()->endOfMonth()->endOfWeek(Carbon::SUNDAY);
>>>>>>> 71e6efbe (✨ feat: add InlineDatePicker component for enhanced date selection in forms)
        
        $weeks = collect();
        $currentDay = $firstDay->copy();
        
        while ($currentDay->lte($lastDay)) {
            $week = collect();
            
            for ($i = 0; $i < 7; $i++) {
<<<<<<< HEAD
                $isCurrentMonth = $currentDay->month === $targetMonth->month;
                $isToday = $currentDay->isToday();
                
                // Gestione sicura del controllo selezione
                $isSelected = false;
                try {
                    $state = $this->getState();
                    /** @phpstan-ignore argument.type */
=======
                $isCurrentMonth = $currentDay->month === $this->displayDate->month;
                $isToday = $currentDay->isToday();
                $isSelected = false;
                
                // Gestione sicura del controllo selezione
                try {
                    $state = $this->getState();
>>>>>>> 71e6efbe (✨ feat: add InlineDatePicker component for enhanced date selection in forms)
                    $isSelected = $state && $currentDay->isSameDay(Carbon::parse($state));
                } catch (\Throwable $e) {
                    $isSelected = false;
                }
                
<<<<<<< HEAD
                $isEnabled = $this->isDateEnabled($currentDay->format('Y-m-d')) && $isCurrentMonth;
                
                $week->push([
                    'dateString' => $currentDay->format('Y-m-d'),
                    'datetime' => $currentDay->format('Y-m-d'),
=======
                $isEnabled = $this->isDateEnabled($currentDay->format('Y-m-d'));
                
                $week->push([
                    'date' => $currentDay->copy(), // Oggetto Carbon completo per massima flessibilità
>>>>>>> 71e6efbe (✨ feat: add InlineDatePicker component for enhanced date selection in forms)
                    'day' => $currentDay->day,
                    'isCurrentMonth' => $isCurrentMonth,
                    'isToday' => $isToday,
                    'isSelected' => $isSelected,
<<<<<<< HEAD
                    'isEnabled' => $isEnabled,
=======
                    'isEnabled' => $isEnabled && $isCurrentMonth, // Abilitazione solo nel mese corrente
>>>>>>> 71e6efbe (✨ feat: add InlineDatePicker component for enhanced date selection in forms)
                ]);
                
                $currentDay->addDay();
            }
            
            $weeks->push($week->toArray());
        }
        
        return [
<<<<<<< HEAD
            'weeks' => $weeks->toArray(),
            'month' => $targetMonth,
            'monthName' => $targetMonth->translatedFormat('F'),
            'year' => $targetMonth->year,
            'weekdays' => $this->getLocalizedWeekdays(),
=======
            // Compatibilità con template Blade: usa 'days' invece di 'weeks'
            'days' => $weeks->toArray(),
            'weeks' => $weeks->toArray(), // Backward compatibility
            
            // Metadati temporali
            'month' => $this->displayDate,
            'monthName' => $this->displayDate->translatedFormat('F'),
            'year' => $this->displayDate->year,
            
            // Controlli navigazione intelligente
            'hasPreviousMonth' => $this->hasPreviousMonth(),
            'hasNextMonth' => $this->hasNextMonth(),
            
            // Intestazioni giorni settimana
            'weekdays' => ['L', 'M', 'M', 'G', 'V', 'S', 'D'],
>>>>>>> 71e6efbe (✨ feat: add InlineDatePicker component for enhanced date selection in forms)
        ];
    }

    /**
<<<<<<< HEAD
     * Ottiene i giorni della settimana localizzati da Carbon.
     * 
     * @return array<string>
     */
    protected function getLocalizedWeekdays(): array
    {
        $weekdays = [];
        $monday = Carbon::now()->startOfWeek(Carbon::MONDAY);
        
        for ($i = 0; $i < 7; $i++) {
            /** @phpstan-ignore property.nonObject */
            $weekdays[] = $monday->copy()->addDays($i)->locale(App::getLocale())->shortLocaleDayOfWeek[0];
        }
        
        return $weekdays;
    }

    /**
     * Ottiene i dati per la vista.
     * 
=======
     * Verifica se esiste un mese precedente con date abilitate
     */
    protected function hasPreviousMonth(): bool
    {
        if ($this->getEnabledDates()->isEmpty()) {
            return true;
        }
        
        $firstEnabledDate = $this->getEnabledDates()
            ->map(fn (string $date): Carbon => Carbon::createFromFormat('Y-m-d', $date))
            ->sort()
            ->first();
            
        return $firstEnabledDate && $firstEnabledDate->lt($this->displayDate);
    }

    /**
     * Verifica se esiste un mese successivo con date abilitate
     */
    protected function hasNextMonth(): bool
    {
        if ($this->getEnabledDates()->isEmpty()) {
            return true;
        }
        
        $lastEnabledDate = $this->getEnabledDates()
            ->map(fn (string $date): Carbon => Carbon::createFromFormat('Y-m-d', $date))
            ->sort()
            ->last();
            
        return $lastEnabledDate && $lastEnabledDate->gt($this->displayDate->endOfMonth());
    }

    /**
     * Imposta le date abilitate per la selezione.
     * 
     * Pattern Strategy: permette algoritmi diversi per la determinazione delle date.
     * 
     * @param array<string>|Closure $dates Array di date in formato Y-m-d o Closure che le restituisce
     * @return static
     */
    public function enabledDates(array|Closure $dates): static
    {
        $this->enabledDates = $dates;
        return $this;
    }

    /**
     * Ottiene le date abilitate risolte.
     * 
     * Lazy Evaluation: le date vengono calcolate solo quando necessario.
     * 
     * @return Collection<int, string>
     */
    public function getEnabledDates(): Collection
    {
        $dates = $this->evaluate($this->enabledDates) ?? [];
        
        /** @var Collection<int, string> */
        return collect($dates)->map(function ($date): string {
            // Normalizzazione: tutte le date in formato Carbon per consistency
            if (is_string($date) || $date instanceof \DateTimeInterface) {
                return Carbon::parse($date)->format('Y-m-d');
            }
            return (string) $date;
        });
    }

    /**
     * Verifica se una data è abilitata.
     * 
     * Pattern Specification: logica di business incapsulata per riutilizzo.
     * 
     * @param Carbon|string $date
     * @return bool
     */
    public function isDateEnabled(Carbon|string $date): bool
    {
        $dateString = $date instanceof Carbon ? $date->format('Y-m-d') : $date;
        return $this->getEnabledDates()->contains($dateString);
    }

    /**
     * Ottiene il colore di evidenziazione configurato.
     * 
     * @return string
     */
    public function getHighlightColor(): string
    {
        return $this->highlightColor;
    }

    /**
     * Verifica se la modalità compatta è attiva.
     * 
     * @return bool
     */
    public function isCompactMode(): bool
    {
        return $this->compactMode;
    }

    /**
     * Verifica se la navigazione è visibile.
     * 
     * @return bool
     */
    public function isNavigationVisible(): bool
    {
        return $this->showNavigation;
    }

    /**
     * Recupera i dati per la vista.
     * 
     * Pattern View Model: separazione tra logica di presentation e business logic.
     * Implementa la trasformazione fenomenologica dei dati in esperienza utente secondo:
     * - Semiotica: Significati veicolati attraverso simboli temporali
     * - Pragmatica: Utilizzo contestuale delle informazioni
     * - Ergonomia Cognitiva: Ottimizzazione del carico mentale
     *
>>>>>>> 71e6efbe (✨ feat: add InlineDatePicker component for enhanced date selection in forms)
     * @return array<string, mixed>
     */
    public function getViewData(): array
    {
<<<<<<< HEAD
        $calendarData = $this->generateCalendarData();
        
        return array_merge(parent::getViewData(), [
            'calendarData' => $calendarData,
            'currentViewMonth' => $this->currentViewMonth,
            'currentValue' => $this->getState(),
            'enabledDates' => $this->getEnabledDates(),
            'statePath' => $this->getStatePath(),
            'monthName' => $calendarData['monthName'],
            'year' => $calendarData['year'],
            'weekdays' => $calendarData['weekdays'],
        ]);
    }
=======
        $currentState = null;
        try {
            $currentState = $this->getState();
        } catch (\Throwable $e) {
            $currentState = null;
        }

        return array_merge(parent::getViewData(), [
            // Struttura calendario principale  
            'calendar' => $this->generateCalendarData(),
            
            // Controllo temporale per navigazione
            'currentViewMonth' => $this->displayDate,
            'currentValue' => $currentState,
            'previousMonth' => $this->displayDate->copy()->subMonth(),
            'nextMonth' => $this->displayDate->copy()->addMonth(),
            
            // Configurazione comportamento
            'enabledDates' => $this->getEnabledDates(),
            'highlightColor' => $this->highlightColor,
            'compactMode' => $this->compactMode,
            'showNavigation' => $this->showNavigation,
            
            // Identificatori per binding JavaScript (solo se inizializzati)
            'componentId' => $this->getIdSafely(),
            'statePath' => $this->getStatePathSafely(),
            
            // Localizzazione temporale
            'monthName' => $this->displayDate->translatedFormat('F'),
            'year' => $this->displayDate->year,
            'monthYearLabel' => $this->displayDate->translatedFormat('F Y'),
            
            // Metadati per accessibilità e debugging
            'weekdays' => ['L', 'M', 'M', 'G', 'V', 'S', 'D'],
            'locale' => $this->getLocaleSafely(),
            'timezone' => $this->getTimezoneSafely(),
        ]);
    }

    /**
     * Imposta il mese di visualizzazione da stringa (metodo Livewire).
     * 
     * Implementa il ponte fenomenologico tra interfaccia JavaScript e logica PHP secondo:
     * - Pattern Bridge: Collegamento tra mondi diversi (JS/PHP)
     * - Teoria della Comunicazione: Trasferimento di informazione temporale
     * - Semiotica: Interpretazione di simboli temporali cross-platform
     * 
     * @param string $monthString Mese in formato Y-m (es. "2025-06")
     * @return void
     */
    public function setCurrentViewMonth(string $monthString): void
    {
        try {
            // Parsing sicuro della stringa temporale
            $parsedMonth = Carbon::createFromFormat('Y-m', $monthString)->startOfMonth();
            $this->displayDate = $parsedMonth;
            
        } catch (\Throwable $e) {
            // Gestione errori di parsing temporale
            // Fallback al presente fenomenologico
            $this->displayDate = Carbon::now()->startOfMonth();
            
            // Log per debugging temporale
            if (config('app.debug')) {
                logger()->warning('InlineDatePicker: Invalid month format', [
                    'input' => $monthString,
                    'error' => $e->getMessage(),
                    'component' => static::class
                ]);
            }
        }
    }

    /**
     * Imposta il colore di evidenziazione per le date abilitate.
     * 
     * Teoria del colore applicata alla UX: colori comunicano significato.
     * 
     * @param string $color Classi Tailwind CSS per lo styling
     * @return static
     */
    public function highlightColor(string $color): static
    {
        $this->highlightColor = $color;
        return $this;
    }

    /**
     * Attiva/disattiva la modalità compatta.
     * 
     * Responsive Design: adattamento al contenitore disponibile.
     * 
     * @param bool $compact
     * @return static
     */
    public function compactMode(bool $compact = true): static
    {
        $this->compactMode = $compact;
        return $this;
    }

    /**
     * Mostra/nasconde i controlli di navigazione.
     * 
     * Principio di controllo utente: l'utente decide il livello di interazione.
     * 
     * @param bool $show
     * @return static
     */
    public function showNavigation(bool $show = true): static
    {
        $this->showNavigation = $show;
        return $this;
    }

    /**
     * Ottiene l'ID del componente in modo sicuro.
     * 
     * @return string|null
     */
    protected function getIdSafely(): ?string
    {
        try {
            return $this->getId();
        } catch (\Throwable $e) {
            return null;
        }
    }

    /**
     * Ottiene il path dello stato in modo sicuro.
     * 
     * @return string|null
     */
    protected function getStatePathSafely(): ?string
    {
        try {
            return $this->getStatePath();
        } catch (\Throwable $e) {
            return null;
        }
    }

    /**
     * Ottiene la locale in modo sicuro.
     * 
     * @return string
     */
    protected function getLocaleSafely(): string
    {
        try {
            return app()->getLocale();
        } catch (\Throwable $e) {
            return 'it'; // Fallback alla locale italiana
        }
    }

    /**
     * Ottiene la timezone in modo sicuro.
     * 
     * @return string
     */
    protected function getTimezoneSafely(): string
    {
        try {
            return config('app.timezone', 'UTC');
        } catch (\Throwable $e) {
            return 'UTC'; // Fallback alla timezone UTC
        }
    }
>>>>>>> 71e6efbe (✨ feat: add InlineDatePicker component for enhanced date selection in forms)
} 