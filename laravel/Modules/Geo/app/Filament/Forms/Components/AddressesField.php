<?php

declare(strict_types=1);

namespace Modules\Geo\Filament\Forms\Components;

use Filament\Forms;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Forms\Components\Component;
use Modules\Geo\Filament\Resources\AddressResource;
<<<<<<< HEAD
use function Safe\preg_match;
=======
<<<<<<< HEAD
<<<<<<< HEAD
use function Safe\preg_match;
=======
>>>>>>> 423f7d03 (✨ (AddressesField): introduce reusable AddressesField component for managing multiple addresses, improving code maintainability and reducing duplication across resources)
=======
use function Safe\preg_match;
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev

/**
 * Componente riutilizzabile per la gestione di indirizzi multipli.
 * 
 * Questo componente incapsula la logica complessa per gestire:
 * - Indirizzi multipli attraverso un Repeater
 * - Visibilità condizionale del campo 'name' (solo con più di 1 indirizzo)
 * - Gestione esclusiva del campo 'is_primary' (solo uno può essere primario)
 * - Utilizzo dello schema completo dell'AddressResource
 * 
 * @example
 * AddressesField::make('addresses')
 *     ->relationship('addresses')
 *     ->minItems(1)
 *     ->addActionLabel('Aggiungi Indirizzo')
 */
class AddressesField extends Forms\Components\Repeater
{
    //protected string $view = 'geo::filament.forms.components.addresses-field';

    protected function setUp(): void
    {
        parent::setUp();

        $this->schema($this->getAddressFormSchema());
        $this->columnSpanFull()
            ->defaultItems(1)
            ->live()
            ->addActionLabel('Aggiungi Indirizzo');

    }
     /**
     * Schema form personalizzato per gli indirizzi con logica condizionale per i campi name e is_primary.
     *
     * @return array<string, \Filament\Forms\Components\Component>
     */
    protected function getAddressFormSchema(): array
    {
        $baseSchema = AddressResource::getFormSchema();

        // Campo name: visibile solo con più di 1 elemento
        $baseSchema['name'] = Forms\Components\TextInput::make('name')
            ->maxLength(255)
            ->visible(function (Get $get): bool {
                $addresses = $get('../../addresses') ?? [];
<<<<<<< HEAD
                /** @phpstan-ignore argument.type */
=======
<<<<<<< HEAD
<<<<<<< HEAD
                /** @phpstan-ignore argument.type */
=======
>>>>>>> 423f7d03 (✨ (AddressesField): introduce reusable AddressesField component for managing multiple addresses, improving code maintainability and reducing duplication across resources)
=======
                /** @phpstan-ignore-next-line */
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
                return count($addresses) > 1;
            })
            ->live();

        // Campo is_primary: logica complessa per esclusività
        $baseSchema['is_primary'] = Forms\Components\Toggle::make('is_primary')
            ->visible(function (Get $get): bool {
                $addresses = $get('../../addresses') ?? [];
<<<<<<< HEAD
                /** @phpstan-ignore argument.type */
=======
<<<<<<< HEAD
<<<<<<< HEAD
                /** @phpstan-ignore argument.type */
=======
>>>>>>> 423f7d03 (✨ (AddressesField): introduce reusable AddressesField component for managing multiple addresses, improving code maintainability and reducing duplication across resources)
=======
                /** @phpstan-ignore-next-line */
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
                return count($addresses) > 1;
            })
            ->default(function (Get $get): bool {
                $addresses = $get('../../addresses') ?? [];
                // Se è il primo elemento o c'è un solo elemento, default true
<<<<<<< HEAD
                /** @phpstan-ignore argument.type */
=======
<<<<<<< HEAD
<<<<<<< HEAD
                /** @phpstan-ignore argument.type */
=======
>>>>>>> 423f7d03 (✨ (AddressesField): introduce reusable AddressesField component for managing multiple addresses, improving code maintainability and reducing duplication across resources)
=======
                /** @phpstan-ignore-next-line */
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
                return count($addresses) <= 1;
            })
            ->afterStateUpdated(function ($state, $set, Get $get, Component $component): void {
                // Se questo diventa primary, disattiva tutti gli altri
                if ($state === true) {
                    $addresses = $get('../../addresses') ?? [];

                    // Estrae l'indice dal path del componente (es. "addresses.0.is_primary")
                    $path = $component->getStatePath();
                    preg_match('/addresses\.(\d+)\.is_primary/', $path, $matches);
                    $currentIndex = $matches[1] ?? null;

                    if ($currentIndex !== null) {
                        // Disattiva is_primary negli altri elementi
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
                        /** @phpstan-ignore foreach.nonIterable */
                        foreach ($addresses as $index => $address) {
                            $indexStr = app(\Modules\Xot\Actions\Cast\SafeStringCastAction::class)->execute($index);
                            $currentIndexStr = app(\Modules\Xot\Actions\Cast\SafeStringCastAction::class)->execute($currentIndex);
                            if ($indexStr !== $currentIndexStr) {
                                $set("../../addresses." . $indexStr . ".is_primary", false);
<<<<<<< HEAD
=======
=======
=======
                        /** @phpstan-ignore-next-line */
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
                        foreach ($addresses as $index => $address) {
                            if ((string)$index !== (string)$currentIndex) {
                                /** @phpstan-ignore-next-line */
                                $set("../../addresses.{$index}.is_primary", false);
>>>>>>> 423f7d03 (✨ (AddressesField): introduce reusable AddressesField component for managing multiple addresses, improving code maintainability and reducing duplication across resources)
>>>>>>> aurmich/dev
                            }
                        }
                    }
                }
            })
            ->live()
            ->dehydrateStateUsing(function ($state, Get $get): bool {
                $addresses = $get('../../addresses') ?? [];
                // Se c'è un solo elemento, forza sempre true
<<<<<<< HEAD
                /** @phpstan-ignore argument.type */
=======
<<<<<<< HEAD
<<<<<<< HEAD
                /** @phpstan-ignore argument.type */
=======
>>>>>>> 423f7d03 (✨ (AddressesField): introduce reusable AddressesField component for managing multiple addresses, improving code maintainability and reducing duplication across resources)
=======
                /** @phpstan-ignore-next-line */
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
                if (count($addresses) <= 1) {
                    return true;
                }
                return (bool) $state;
            });

        return $baseSchema;
    }
} 