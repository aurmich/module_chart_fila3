<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Widgets;

use Modules\Xot\Filament\Widgets\XotBaseWidget;

/**
 * RedirectWidget - Widget per gestire redirect verso URL specifici.
 *
 * Questo widget è progettato per creare elementi UI (bottoni, link) 
 * che reindirizzano l'utente verso URL specifici.
 * 
 * Utilizzo tipico in configurazioni JSON:
 * {
 *     "type": "widget",
 *     "data": {
 *         "view": "pub_theme::components.blocks.widget.simple",
 *         "to": "/admin",
 *         "widget": "Modules\\UI\\Filament\\Widgets\\RedirectWidget"
 *     }
 * }
 */
class RedirectWidget extends XotBaseWidget
{
    /**
     * URL di destinazione per il redirect.
     */
    public string $to = '';

    /**
     * Testo del link/button (opzionale).
     */
    public string $label = '';

    /**
     * Icona da mostrare (opzionale).
     */
    public string $icon = '';

    /**
     * Classe CSS per styling (opzionale).
     */
    public string $class = '';

    /**
     * Determina se aprire in una nuova tab.
     */
    public bool $external = false;

    /**
     * Vista di default per il widget.
     * Può essere sovrascritta dalla configurazione con la chiave 'view'.
     */
    protected static string $view = 'ui::filament.widgets.redirect-widget';
    
<<<<<<< HEAD
    

=======
<<<<<<< HEAD
<<<<<<< HEAD
    

=======
    //public function __construct(array $config = [])
   // {
    //    dddx($config);
   // }

    


    /**
     * Configura il widget con i parametri specificati.
     *
     * @param  array<string, mixed>  $config
     * @return static
     */
    public static function configure(array $config = [])
    {
        $instance = new static();
        
        // Imposta la vista personalizzata se specificata nella configurazione
        if (isset($config['view'])) {
            $instance::$view = $config['view'];
        }
        
        // Imposta le proprietà dalla configurazione
        foreach (['to', 'label', 'icon', 'class', 'external'] as $property) {
            if (isset($config[$property])) {
                $instance->$property = $config[$property];
            }
        }
        
        return $instance;
    }

>>>>>>> 198c0c0a (✨ (DoctorAppointmentsWidget.php, DoctorCalendarWidget.php): refactor appointment loading logic to use doctor_id instead of auth user id for better clarity and functionality)
=======
    

>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
    /**
     * Implementazione richiesta da XotBaseWidget.
     * Per questo widget non abbiamo form, quindi restituiamo array vuoto.
     *
     * @return array<string, mixed>
     */
    public function getFormSchema(): array
    {
        return [];
    }

    /**
     * Dati da passare alla vista.
     *
     * @return array<string, mixed>
     */
    protected function getViewData(): array
    {
        
        return [
            'to' => $this->to,
            'label' => $this->label ?: 'Vai',
            'icon' => $this->icon,
            'class' => $this->class,
            'external' => $this->external,
        ];
    }

    /**
     * Determina se il widget può essere visualizzato.
     * Per il redirect widget, sempre visibile se ha una destinazione.
     */
    public static function canView(): bool
    {
        return true;
    }
} 