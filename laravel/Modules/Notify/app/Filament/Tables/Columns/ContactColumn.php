<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Tables\Columns;

use Filament\Tables\Columns\ViewColumn;
<<<<<<< HEAD
use Modules\Notify\Enums\ContactTypeEnum;
=======
>>>>>>> dadaf1e668 (.)

/**
 * ContactColumn - Colonna Filament riutilizzabile per rendering contatti
 * 
<<<<<<< HEAD
 * Utilizza ViewColumn + Blade view per separare completamente 
 * logica e presentazione seguendo i principi DRY/KISS
=======
 * Utilizza ViewColumn + Blade view + ContactTypeEnum per separare
 * completamente logica e presentazione seguendo i principi DRY/KISS
>>>>>>> dadaf1e668 (.)
 * 
 * PATTERN CORRETTO:
 * - ViewColumn per layout complessi
 * - Blade view separata per HTML
<<<<<<< HEAD
=======
 * - ContactTypeEnum come single source of truth
 * - Helper nel modello per dati
>>>>>>> dadaf1e668 (.)
 * - Accessibilità WCAG 2.1 AA compliant
 * 
 * @author Laraxot Team
 * @version 2.0 - REFACTOR COMPLETO
<<<<<<< HEAD
 * @since 2025-01-06
=======
 * @since 2025-08-01
>>>>>>> dadaf1e668 (.)
 */
class ContactColumn extends ViewColumn
{
    /**
     * View Blade per il rendering della colonna
     */
<<<<<<< HEAD
<<<<<<< HEAD
    protected string $view = 'notify::filament.tables.columns.contact';
    
    protected function setUp(): void
    {
        parent::setUp();
        
        // Passa i tipi di contatto alla view
        $contact_types = ContactTypeEnum::cases();
        
        $this->view(static::getView(), [
                'contact_types' => $contact_types,
            ])
            ->label(__('notify::columns.contact.label'))
            ->searchable(ContactTypeEnum::getSearchable())
            ->sortable(false)
            ->toggleable(isToggledHiddenByDefault: false);
    }
=======
    protected string $view = 'notify::filament.tables.columns.contact-column';
=======
    protected string $view = 'notify::filament.tables.columns.contact';
>>>>>>> 146aafd6bc (.)
    
    protected function setUp(): void
    {
        
            $this->view(static::getView())
            ->searchable(['phone', 'mobile', 'email', 'pec', 'whatsapp', 'fax'])
            ->sortable(false)
            
            ->toggleable(isToggledHiddenByDefault: false)
            ;
    }
    
    
<<<<<<< HEAD
    /**
     * Configurazione personalizzata per campi di ricerca
     * 
     * @param array<string> $fields Campi su cui abilitare la ricerca
     * @return static
     */
    public function searchableOn(array $fields): static
    {
        return $this->searchable($fields);
    }
    
    /**
     * Configurazione personalizzata per etichetta
     * 
     * @param string $label Etichetta personalizzata
     * @return static
     */
    public function withLabel(string $label): static
    {
        return $this->label($label);
    }
    
    /**
     * Disabilita la ricerca per questa colonna
     * 
     * @return static
     */
    public function withoutSearch(): static
    {
        return $this->searchable(false);
    }
    
    /**
     * Configura la colonna come nascosta di default
     * 
     * @return static
     */
    public function hiddenByDefault(): static
    {
        return $this->toggleable(isToggledHiddenByDefault: true);
    }
>>>>>>> dadaf1e668 (.)
=======
>>>>>>> 2f4e643f19 (.)
}