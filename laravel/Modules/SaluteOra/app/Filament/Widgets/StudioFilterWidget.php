<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Filament\Widgets;

use Livewire\Attributes\On;
use Filament\Facades\Filament;
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Notifications\Notification;
=======
>>>>>>> 18569998 (✨ (StudioFilterWidget): introduce a new widget for selecting and displaying the current studio for doctors, enhancing user experience by allowing easy studio management)
=======
use Filament\Notifications\Notification;
>>>>>>> 13ea6524 (phpstan)
use Illuminate\Support\Facades\Auth;
use Modules\SaluteOra\Models\Studio;
use Modules\SaluteOra\Models\Doctor;
use Modules\SaluteOra\Enums\UserTypeEnum;
use Modules\Xot\Filament\Widgets\XotBaseWidget;

/**
 * Widget per la selezione e visualizzazione dello studio corrente.
 *
 * Permette ai dottori di:
 * - Visualizzare informazioni dello studio corrente
 * - Cambiare studio tra quelli disponibili
 * - Dispatchare eventi per notificare il cambio studio
 */
class StudioFilterWidget extends XotBaseWidget
{
    /**
     * La vista del widget.
     */
    protected static string $view = 'pub_theme::filament.widgets.studio-filter-widget';

    /**
     * ID dello studio attualmente selezionato.
     *
     * @var int|null
     */
    public ?int $currentStudioId = null;

    /**
     * Dati dello studio corrente.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @var \Modules\SaluteOra\Models\Studio|null
=======
     * @var Studio|null
>>>>>>> 18569998 (✨ (StudioFilterWidget): introduce a new widget for selecting and displaying the current studio for doctors, enhancing user experience by allowing easy studio management)
=======
     * @var \Modules\SaluteOra\Models\Studio|null
>>>>>>> 13ea6524 (phpstan)
     */
    public ?Studio $currentStudio = null;

    /**
     * Lista degli studi disponibili per il dottore.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @var \Illuminate\Support\Collection<int, \Modules\SaluteOra\Models\Studio>|null
     */
    public ?\Illuminate\Support\Collection $availableStudios = null;

    /**
     * Mount del widget.
     *
     * @return void
=======
     * @var \Illuminate\Support\Collection
=======
     * @var \Illuminate\Support\Collection<int, \Modules\SaluteOra\Models\Studio>|null
>>>>>>> 13ea6524 (phpstan)
     */
    public ?\Illuminate\Support\Collection $availableStudios = null;

    /**
     * Mount del widget.
<<<<<<< HEAD
>>>>>>> 18569998 (✨ (StudioFilterWidget): introduce a new widget for selecting and displaying the current studio for doctors, enhancing user experience by allowing easy studio management)
=======
     *
     * @return void
>>>>>>> 13ea6524 (phpstan)
     */
    public function mount(): void
    {
        // Imposta lo studio corrente dal tenant di Filament o dal primo studio disponibile
<<<<<<< HEAD
<<<<<<< HEAD
        $tenant = Filament::getTenant();
        $this->currentStudioId = $tenant->id ?? $this->getFirstAvailableStudioId();
        $this->loadStudioData();
=======
        $this->currentStudioId = Filament::getTenant()?->id ?? $this->getFirstAvailableStudioId();
        $this->loadStudioData();
        
        // Inizializza il form se necessario
        if (method_exists($this, 'form')) {
            $this->form->fill();
        }
>>>>>>> 18569998 (✨ (StudioFilterWidget): introduce a new widget for selecting and displaying the current studio for doctors, enhancing user experience by allowing easy studio management)
=======
        $tenant = Filament::getTenant();
        $this->currentStudioId = $tenant->id ?? $this->getFirstAvailableStudioId();
        $this->loadStudioData();
>>>>>>> 13ea6524 (phpstan)
    }

    /**
     * Verifica se l'utente può visualizzare questo widget.
     * Override del metodo base per implementare la logica specifica.
     *
     * @return bool
     */
    public static function canView(): bool
    {
        $user = Auth::user();
        
        // Solo i dottori possono visualizzare questo widget
<<<<<<< HEAD
<<<<<<< HEAD
        return $user instanceof Doctor && 
               $user->type === UserTypeEnum::DOCTOR;
=======
        return $user && 
               $user->type === UserTypeEnum::DOCTOR &&
               $user instanceof Doctor;
>>>>>>> 18569998 (✨ (StudioFilterWidget): introduce a new widget for selecting and displaying the current studio for doctors, enhancing user experience by allowing easy studio management)
=======
        return $user instanceof Doctor && 
               $user->type === UserTypeEnum::DOCTOR;
>>>>>>> 13ea6524 (phpstan)
    }

    /**
     * Ottiene lo schema del form per questo widget.
     * Richiesto da XotBaseWidget, ma per questo widget non abbiamo un form.
     *
     * @return array<int|string, \Filament\Forms\Components\Component>
     */
    public function getFormSchema(): array
    {
        // Per questo widget non abbiamo un form vero e proprio
        // Restituiamo un array vuoto
        return [];
    }

    /**
     * Ottiene i dati da passare alla vista.
     *
     * @return array<string, mixed>
     */
    protected function getViewData(): array
    {
        return [
            'currentStudio' => $this->currentStudio,
            'availableStudios' => $this->availableStudios,
            'doctor' => Auth::user(),
            'hasMultipleStudios' => $this->availableStudios && $this->availableStudios->count() > 1,
        ];
    }

    /**
     * Gestisce il cambio di studio.
     *
     * @param int $studioId
     * @return void
     */
    public function changeStudio(int $studioId): void
    {
        $user = Auth::user();
        
        if (!$user || !($user instanceof Doctor)) {
            return;
        }

        // Verifica che il dottore possa accedere a questo studio
        $studio = $user->studios()->where('studios.id', $studioId)->first();
        
        if (!$studio) {
<<<<<<< HEAD
<<<<<<< HEAD
            Notification::make()
=======
            $this->notification()
>>>>>>> 18569998 (✨ (StudioFilterWidget): introduce a new widget for selecting and displaying the current studio for doctors, enhancing user experience by allowing easy studio management)
=======
            Notification::make()
>>>>>>> 13ea6524 (phpstan)
                ->title(__('saluteora::widgets.studio_filter.errors.unauthorized'))
                ->danger()
                ->send();
            return;
        }

        $this->currentStudioId = $studioId;
        $this->loadStudioData();

        // Dispatcha eventi per notificare altri componenti del cambio studio
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 13ea6524 (phpstan)
        if ($this->currentStudio) {
            $this->dispatch('studio-changed', [
                'studioId' => $studioId,
                'studio' => $this->currentStudio->toArray(),
            ]);
        }
<<<<<<< HEAD

        // Aggiorna anche il tenant di Filament se necessario
        $tenant = Filament::getTenant();
        if ($tenant && $tenant->getKey() !== $studioId) {
            session(['tenant_id' => $studioId]);
        }

        if ($this->currentStudio) {
            Notification::make()
                ->title(__('saluteora::widgets.studio_filter.messages.studio_changed'))
                ->body(__('saluteora::widgets.studio_filter.messages.studio_changed_body', [
                    'studio' => $this->currentStudio->name
                ]))
                ->success()
                ->send();
        }
=======
        $this->dispatch('studio-changed', [
            'studioId' => $studioId,
            'studio' => $this->currentStudio->toArray(),
        ]);
=======
>>>>>>> 13ea6524 (phpstan)

        // Aggiorna anche il tenant di Filament se necessario
        $tenant = Filament::getTenant();
        if ($tenant && $tenant->getKey() !== $studioId) {
            session(['tenant_id' => $studioId]);
        }

<<<<<<< HEAD
        $this->notification()
            ->title(__('saluteora::widgets.studio_filter.messages.studio_changed'))
            ->body(__('saluteora::widgets.studio_filter.messages.studio_changed_body', [
                'studio' => $this->currentStudio->name
            ]))
            ->success()
            ->send();
>>>>>>> 18569998 (✨ (StudioFilterWidget): introduce a new widget for selecting and displaying the current studio for doctors, enhancing user experience by allowing easy studio management)
=======
        if ($this->currentStudio) {
            Notification::make()
                ->title(__('saluteora::widgets.studio_filter.messages.studio_changed'))
                ->body(__('saluteora::widgets.studio_filter.messages.studio_changed_body', [
                    'studio' => $this->currentStudio->name
                ]))
                ->success()
                ->send();
        }
>>>>>>> 13ea6524 (phpstan)
    }

    /**
     * Listener per eventi esterni di cambio studio.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param array<string, mixed> $data
=======
     * @param array $data
>>>>>>> 18569998 (✨ (StudioFilterWidget): introduce a new widget for selecting and displaying the current studio for doctors, enhancing user experience by allowing easy studio management)
=======
     * @param array<string, mixed> $data
>>>>>>> 13ea6524 (phpstan)
     * @return void
     */
    #[On('studio-selected')]
    public function onStudioSelected(array $data): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
        if (isset($data['studioId']) && is_int($data['studioId'])) {
=======
        if (isset($data['studioId'])) {
>>>>>>> 18569998 (✨ (StudioFilterWidget): introduce a new widget for selecting and displaying the current studio for doctors, enhancing user experience by allowing easy studio management)
=======
        if (isset($data['studioId']) && is_int($data['studioId'])) {
>>>>>>> 13ea6524 (phpstan)
            $this->changeStudio($data['studioId']);
        }
    }

    /**
     * Carica i dati dello studio corrente e la lista degli studi disponibili.
     *
     * @return void
     */
    protected function loadStudioData(): void
    {
        $user = Auth::user();
        
        if (!$user || !($user instanceof Doctor)) {
            return;
        }

        // Carica gli studi disponibili per il dottore
        $this->availableStudios = $user->studios()
            ->with(['address'])
            ->where('active', true)
            ->orderBy('name')
<<<<<<< HEAD
<<<<<<< HEAD
            ->get()
            ->filter(fn($studio) => $studio instanceof Studio)
            ->values();

        // Carica lo studio corrente
        if ($this->currentStudioId && $this->availableStudios !== null) {
            $foundStudio = $this->availableStudios
                ->where('id', $this->currentStudioId)
                ->first();
            
            if ($foundStudio instanceof Studio) {
                $this->currentStudio = $foundStudio;
            }
        }

        // Se non è stato trovato uno studio corrente, prendi il primo disponibile
        if (!$this->currentStudio && $this->availableStudios && $this->availableStudios->isNotEmpty()) {
            $firstStudio = $this->availableStudios->first();
            // $firstStudio is guaranteed to be a Studio instance from the collection
            $this->currentStudio = $firstStudio;
            $firstStudioId = $this->currentStudio->getKey();
            $this->currentStudioId = is_int($firstStudioId) ? $firstStudioId : (int) $firstStudioId;
=======
            ->get();
=======
            ->get()
            ->filter(fn($studio) => $studio instanceof Studio)
            ->values();
>>>>>>> 13ea6524 (phpstan)

        // Carica lo studio corrente
        if ($this->currentStudioId) {
            $foundStudio = $this->availableStudios
                ->where('id', $this->currentStudioId)
                ->first();
            
            if ($foundStudio instanceof Studio) {
                $this->currentStudio = $foundStudio;
            }
        }

        // Se non è stato trovato uno studio corrente, prendi il primo disponibile
<<<<<<< HEAD
        if (!$this->currentStudio && $this->availableStudios->isNotEmpty()) {
            $this->currentStudio = $this->availableStudios->first();
            $this->currentStudioId = $this->currentStudio->id;
>>>>>>> 18569998 (✨ (StudioFilterWidget): introduce a new widget for selecting and displaying the current studio for doctors, enhancing user experience by allowing easy studio management)
=======
        if (!$this->currentStudio && $this->availableStudios && $this->availableStudios->isNotEmpty()) {
            $firstStudio = $this->availableStudios->first();
            //if ($firstStudio instanceof Studio) {
                $this->currentStudio = $firstStudio;
                $firstStudioId = $this->currentStudio->getKey();
                $this->currentStudioId = is_int($firstStudioId) ? $firstStudioId : (int) $firstStudioId;
            //}
>>>>>>> 13ea6524 (phpstan)
        }
    }

    /**
     * Ottiene l'ID del primo studio disponibile per il dottore.
     *
     * @return int|null
     */
    protected function getFirstAvailableStudioId(): ?int
    {
        $user = Auth::user();
        
        if (!$user || !($user instanceof Doctor)) {
            return null;
        }

        $firstStudio = $user->studios()
            ->where('active', true)
            ->orderBy('name')
            ->first();

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 13ea6524 (phpstan)
        if (!$firstStudio instanceof Studio) {
            return null;
        }

        $studioId = $firstStudio->getKey();
        return is_int($studioId) ? $studioId : (is_numeric($studioId) ? (int) $studioId : null);
<<<<<<< HEAD
=======
        return $firstStudio?->id;
>>>>>>> 18569998 (✨ (StudioFilterWidget): introduce a new widget for selecting and displaying the current studio for doctors, enhancing user experience by allowing easy studio management)
=======
>>>>>>> 13ea6524 (phpstan)
    }

    /**
     * Refresh del widget per ricaricare i dati.
     *
     * @return void
     */
    public function refresh(): void
    {
        $this->loadStudioData();
    }

    /**
     * Ottiene le informazioni di contatto dello studio formattate.
     *
     * @return array<string, string>
     */
    public function getStudioContactInfo(): array
    {
        if (!$this->currentStudio) {
            return [];
        }

        return array_filter([
            'phone' => $this->currentStudio->phone,
            'email' => $this->currentStudio->email,
            'website' => $this->currentStudio->website,
        ]);
    }

    /**
     * Ottiene l'indirizzo completo dello studio.
     *
     * @return string|null
     */
    public function getStudioFullAddress(): ?string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        if (!$this->currentStudio) {
            return null;
        }

        // Se address è una stringa, restituiscila direttamente
        if (is_string($this->currentStudio->address)) {
            return $this->currentStudio->address;
        }

        // Se address è un oggetto con proprietà, costruisci l'indirizzo
        $address = $this->currentStudio->address;
        if (is_object($address)) {
            return trim(implode(', ', array_filter([
                $address->street ?? null,
                $address->city ?? null,
                $address->postal_code ?? null,
            ])));
        }

        return null;
=======
        if (!$this->currentStudio || !$this->currentStudio->address) {
            return $this->currentStudio?->address ?? null;
=======
        if (!$this->currentStudio) {
            return null;
>>>>>>> 13ea6524 (phpstan)
        }

        // Se address è una stringa, restituiscila direttamente
        if (is_string($this->currentStudio->address)) {
            return $this->currentStudio->address;
        }

        // Se address è un oggetto con proprietà, costruisci l'indirizzo
        $address = $this->currentStudio->address;
<<<<<<< HEAD
        
        return trim(implode(', ', array_filter([
            $address->street ?? null,
            $address->city ?? null,
            $address->postal_code ?? null,
        ])));
>>>>>>> 18569998 (✨ (StudioFilterWidget): introduce a new widget for selecting and displaying the current studio for doctors, enhancing user experience by allowing easy studio management)
=======
        if (is_object($address)) {
            return trim(implode(', ', array_filter([
                $address->street ?? null,
                $address->city ?? null,
                $address->postal_code ?? null,
            ])));
        }

        return null;
>>>>>>> 13ea6524 (phpstan)
    }
}
