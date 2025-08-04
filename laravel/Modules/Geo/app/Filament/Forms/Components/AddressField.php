<?php

declare(strict_types=1);

namespace Modules\Geo\Filament\Forms\Components;

use Filament\Forms;
use Webmozart\Assert\Assert;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Model;
use Modules\Geo\Filament\Resources\AddressResource;

// use Squire\Models\Country;

class AddressField extends Forms\Components\Section
{
    
    //protected string $view = 'filament-forms::components.group';

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
    protected bool $disableLiveUpdates = false;

    protected function setUp(): void
    {
        parent::setUp();
        $this->schema($this->getAddressFormSchema());
        $this->columns(2);
    }

    /**
     * Disabilita gli aggiornamenti live per evitare loop infiniti nei wizard di creazione
     */
    public function disableLiveUpdates(bool $disable = true): static
    {
        $this->disableLiveUpdates = $disable;
        return $this;
<<<<<<< HEAD
=======
=======
=======
    protected bool $disableLiveUpdates = false;

>>>>>>> 71e6efbe (✨ feat: add InlineDatePicker component for enhanced date selection in forms)
    protected function setUp(): void
    {
        parent::setUp();

        $this->schema($this->getAddressFormSchema());
<<<<<<< HEAD
>>>>>>> 423f7d03 (✨ (AddressesField): introduce reusable AddressesField component for managing multiple addresses, improving code maintainability and reducing duplication across resources)
=======
        $this->columns(2);
    }

    /**
     * Disabilita gli aggiornamenti live per evitare loop infiniti nei wizard di creazione
     */
    public function disableLiveUpdates(bool $disable = true): static
    {
        $this->disableLiveUpdates = $disable;
        return $this;
>>>>>>> 71e6efbe (✨ feat: add InlineDatePicker component for enhanced date selection in forms)
>>>>>>> aurmich/dev
    }

    protected function getAddressFormSchema(): array
    {
        $baseSchema = AddressResource::getFormSchema();
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
        
        // Rimuovi campi non necessari per relazioni semplici
        unset($baseSchema['name']);
        unset($baseSchema['is_primary']);
        
        // Se i live updates sono disabilitati, rimuovi la reattività
        if ($this->disableLiveUpdates) {
            $baseSchema = $this->removeReactivityFromSchema($baseSchema);
        }
        
        return $baseSchema;
    }

    /**
     * Rimuove tutti i pattern reattivi dai campi per prevenire loop infiniti
     *
     * @param array<string, mixed> $schema
     * @return array<string, mixed>
     */
    protected function removeReactivityFromSchema(array $schema): array
    {
        foreach ($schema as $key => $field) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
            /** @phpstan-ignore argument.type */
            if (method_exists($field, 'live')) {
                // Rimuovi reattività live
                /** @phpstan-ignore method.nonObject */
                $field->live(false);
            }
            
            /** @phpstan-ignore argument.type */
            if (method_exists($field, 'afterStateUpdated')) {
                // Rimuovi callback afterStateUpdated
                /** @phpstan-ignore method.nonObject */
                $field->afterStateUpdated(null);
            }
            
            /** @phpstan-ignore argument.type */
            if (method_exists($field, 'disabled')) {
                // Rimuovi condizioni disabled dinamiche
                /** @phpstan-ignore method.nonObject */
                $field->disabled(false);
            }
            
            $schema[$key] = $field;
        }
        
        return $schema;
    }

    
<<<<<<< HEAD
=======
=======
=======
        
        // Rimuovi campi non necessari per relazioni semplici
>>>>>>> 71e6efbe (✨ feat: add InlineDatePicker component for enhanced date selection in forms)
        unset($baseSchema['name']);
        unset($baseSchema['is_primary']);
        
        // Se i live updates sono disabilitati, rimuovi la reattività
        if ($this->disableLiveUpdates) {
            $baseSchema = $this->removeReactivityFromSchema($baseSchema);
        }
        
        return $baseSchema;
    }
<<<<<<< HEAD
>>>>>>> 423f7d03 (✨ (AddressesField): introduce reusable AddressesField component for managing multiple addresses, improving code maintainability and reducing duplication across resources)
=======

    /**
     * Rimuove tutti i pattern reattivi dai campi per prevenire loop infiniti
     *
     * @param array<string, mixed> $schema
     * @return array<string, mixed>
     */
    protected function removeReactivityFromSchema(array $schema): array
    {
        foreach ($schema as $key => $field) {
=======
            /** @phpstan-ignore-next-line */
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
            if (method_exists($field, 'live')) {
                // Rimuovi reattività live
                /** @phpstan-ignore-next-line */
                $field->live(false);
            }
            
            /** @phpstan-ignore-next-line */
            if (method_exists($field, 'afterStateUpdated')) {
                // Rimuovi callback afterStateUpdated
                /** @phpstan-ignore-next-line */
                $field->afterStateUpdated(null);
            }
            
            /** @phpstan-ignore-next-line */
            if (method_exists($field, 'disabled')) {
                // Rimuovi condizioni disabled dinamiche
                /** @phpstan-ignore-next-line */
                $field->disabled(false);
            }
            
            $schema[$key] = $field;
        }
        
        return $schema;
    }

    
>>>>>>> 71e6efbe (✨ feat: add InlineDatePicker component for enhanced date selection in forms)
>>>>>>> aurmich/dev
    /*
    public function saveRelationships(): void
    {
        
        $state = $this->getState();
        $record = $this->getRecord();
        $relationship = $record->{$this->getRelationship()}();

        if (null === $relationship) {
            return;
        }
        if ($address = $relationship->first()) {
            $address->update($state);
        } else {
            $relationship->updateOrCreate($state);
        }

        $record->touch();
    }
    */
    
}
