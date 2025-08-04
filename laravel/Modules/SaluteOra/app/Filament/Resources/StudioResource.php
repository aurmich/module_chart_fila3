<?php

declare(strict_types=1);

namespace Modules\SaluteOra\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
<<<<<<< HEAD
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Infolists;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Modules\Geo\Models\Comune;
use Modules\Geo\Models\Address;
use Filament\Infolists\Infolist;
use Modules\SaluteOra\Models\Studio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Component;
use Illuminate\Database\Eloquent\Builder;
use Modules\Geo\Filament\Resources\AddressResource;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\Geo\Filament\Forms\Components\AddressField;
use Modules\SaluteOra\Filament\Resources\StudioResource\Pages;
use Modules\SaluteOra\Filament\Resources\StudioResource\RelationManagers;
=======
use Filament\Infolists;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Tables\Table;
use Filament\Infolists\Infolist;
use Modules\SaluteOra\Models\Studio;
use Illuminate\Database\Eloquent\Builder;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\SaluteOra\Filament\Resources\StudioResource\Pages;
use Modules\SaluteOra\Filament\Resources\StudioResource\RelationManagers;
use Modules\Geo\Models\Address;
use Modules\Geo\Filament\Resources\AddressResource;
<<<<<<< HEAD
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
=======
use Filament\Forms\Components\Component;
>>>>>>> 77f21bed (✨ (AddressResource.php): refactor address form schema to conditionally show the name field based on the number of addresses, enhancing user experience)

class StudioResource extends XotBaseResource
{
    protected static ?string $model = Studio::class;
<<<<<<< HEAD
<<<<<<< HEAD
    //protected static ?string $tenantOwnershipRelationshipName = 'owner';
    //protected static ?string $tenantRelationshipName = 'blogPosts';
    protected static bool $isScopedToTenant = false;
=======
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
=======
    //protected static ?string $tenantOwnershipRelationshipName = 'owner';
    //protected static ?string $tenantRelationshipName = 'blogPosts';
    protected static bool $isScopedToTenant = false;
>>>>>>> 8aab2e4a (📝 (route-service-provider.md): update documentation for route service provider to improve clarity and organization)

    public static function getFormSchema(): array
    {
        return [
            'name' => Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255),

            'phone' => Forms\Components\TextInput::make('phone')
                ->tel()
<<<<<<< HEAD
                ->required()
=======
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
                ->maxLength(30),

            'email' => Forms\Components\TextInput::make('email')
                ->email()
<<<<<<< HEAD
                ->required()
                ->maxLength(100),

            'website' => Forms\Components\TextInput::make('website')
                //->url()
=======
                ->maxLength(100),

            'website' => Forms\Components\TextInput::make('website')
<<<<<<< HEAD
                ->url()
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
=======
                //->url()
>>>>>>> 77f21bed (✨ (AddressResource.php): refactor address form schema to conditionally show the name field based on the number of addresses, enhancing user experience)
                ->maxLength(255),

            'registration_number' => Forms\Components\TextInput::make('registration_number')
                ->maxLength(50),

            'vat_number' => Forms\Components\TextInput::make('vat_number')
                ->maxLength(30),

            'description' => Forms\Components\Textarea::make('description')
                ->maxLength(65535)
                ->columnSpanFull(),
<<<<<<< HEAD
<<<<<<< HEAD
            
            'address' => AddressField::make('address')
                ->relationship('address'),
        ];
    }

    /**
     * Schema semplificato per wizard di creazione senza reattività
     * per prevenire loop infiniti quando il record non esiste ancora
     */
    public static function getFormSchemaForWizard(): array
    {
        $schema=self::getFormSchema();
        return $schema;
        
=======
            /*
            'opening_hours' => Forms\Components\Repeater::make('opening_hours')
                ->schema([
                    'day' => Forms\Components\Select::make('day')
                        ->options([
                            'monday' => 'studio-resource.fields.opening_hours.days.monday',
                            'tuesday' => 'studio-resource.fields.opening_hours.days.tuesday',
                            'wednesday' => 'studio-resource.fields.opening_hours.days.wednesday',
                            'thursday' => 'studio-resource.fields.opening_hours.days.thursday',
                            'friday' => 'studio-resource.fields.opening_hours.days.friday',
                            'saturday' => 'studio-resource.fields.opening_hours.days.saturday',
                            'sunday' => 'studio-resource.fields.opening_hours.days.sunday',
                        ])
                        ->required(),
                    'open' => Forms\Components\TimePicker::make('open')
                        ->seconds(false),
                    'close' => Forms\Components\TimePicker::make('close')
                        ->seconds(false),
                ])
                ->columnSpanFull(),
=======
>>>>>>> 77f21bed (✨ (AddressResource.php): refactor address form schema to conditionally show the name field based on the number of addresses, enhancing user experience)

            'addresses' => Forms\Components\Repeater::make('addresses')
                ->relationship('addresses')
                ->schema(StudioResource::getAddressFormSchema())
                ->columnSpanFull()
                ->defaultItems(1)
                ->live()
                ->addActionLabel('Aggiungi Indirizzo'),
        ];
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function getListTableColumns(): array
    {
        return [
            'name' => Tables\Columns\TextColumn::make('name')
                ->searchable()
                ->sortable(),

            'city' => Tables\Columns\TextColumn::make('addresses.locality')
                ->label('studio-resource.fields.addresses.locality')
                ->searchable()
                ->sortable(),

            'phone' => Tables\Columns\TextColumn::make('phone')
                ->searchable(),

            'email' => Tables\Columns\TextColumn::make('email')
                ->searchable(),

            'doctors_count' => Tables\Columns\TextColumn::make('doctors_count')
                ->counts('doctors')
                ->sortable(),

            'active' => Tables\Columns\ToggleColumn::make('active')
                ->sortable(),

            'created_at' => Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),

            'updated_at' => Tables\Columns\TextColumn::make('updated_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
        ];
    }

    public static function getListTableFilters(): array
    {
        return [
            'active' => Tables\Filters\SelectFilter::make('active')
                ->options([
                    '1' => 'studio-resource.filters.active.options.active',
                    '0' => 'studio-resource.filters.active.options.inactive',
                ])
                ->attribute('active'),

            'city' => Tables\Filters\SelectFilter::make('city')
                ->relationship('addresses', 'locality')
                ->searchable(),
        ];
    }

    public static function getListTableActions(): array
    {
        return [
            'edit' => Tables\Actions\EditAction::make(),

            'view' => Tables\Actions\ViewAction::make(),

            'activate' => Tables\Actions\Action::make('activate')
                ->icon('heroicon-o-check-circle')
                ->color('success')
                ->visible(fn (Studio $record): bool => !$record->active)
                ->action(function (Studio $record): void {
                    $record->activate();
                }),

            'deactivate' => Tables\Actions\Action::make('deactivate')
                ->icon('heroicon-o-x-circle')
                ->color('danger')
                ->visible(fn (Studio $record): bool => $record->active)
                ->action(function (Studio $record): void {
                    $record->deactivate();
                }),

            'viewDoctors' => Tables\Actions\Action::make('viewDoctors')
                ->icon('heroicon-o-user-group')
                ->url(fn (Studio $record): string => route('filament.resources.doctors.index', [
                    'tableFilters[studio][value]' => $record->id,
                ])),

            'viewAppointments' => Tables\Actions\Action::make('viewAppointments')
                ->icon('heroicon-o-calendar')
                ->url(fn (Studio $record): string => route('filament.resources.appointments.index', [
                    'tableFilters[studio][value]' => $record->id,
                ])),
        ];
    }

    public static function getListBulkActions(): array
    {
        return [
            'delete' => Tables\Actions\DeleteBulkAction::make(),

            'activate' => Tables\Actions\BulkAction::make('activate')
                ->icon('heroicon-o-check-circle')
                ->color('success')
                ->action(function (\Illuminate\Database\Eloquent\Collection $records): void {
                    foreach ($records as $record) {
                        $record->activate();
                    }
                }),

            'deactivate' => Tables\Actions\BulkAction::make('deactivate')
                ->icon('heroicon-o-x-circle')
                ->color('danger')
                ->action(function (\Illuminate\Database\Eloquent\Collection $records): void {
                    foreach ($records as $record) {
                        $record->deactivate();
                    }
                }),
        ];
    }

    public static function getInfolistSchema(): array
    {
        return [
            'basic_info' => Infolists\Components\Section::make('studio-resource.sections.basic_info')
                ->schema([
                    'name' => Infolists\Components\TextEntry::make('name'),
                    'description' => Infolists\Components\TextEntry::make('description')
                        ->columnSpanFull(),
                ]),

            'contact_info' => Infolists\Components\Section::make('studio-resource.sections.contact_info')
                ->schema([
                    'addresses' => Infolists\Components\RepeatableEntry::make('addresses')
                        ->schema([
                            'full_address' => Infolists\Components\TextEntry::make('getFormattedAddress')
                                ->label('studio-resource.fields.addresses.full_address'),
                            'is_primary' => Infolists\Components\IconEntry::make('is_primary')
                                ->boolean(),
                        ]),
                    'phone' => Infolists\Components\TextEntry::make('phone'),
                    'email' => Infolists\Components\TextEntry::make('email'),
                    'website' => Infolists\Components\TextEntry::make('website')
                        ->url(),
                ]),

            'fiscal_info' => Infolists\Components\Section::make('studio-resource.sections.fiscal_info')
                ->schema([
                    'registration_number' => Infolists\Components\TextEntry::make('registration_number'),
                    'vat_number' => Infolists\Components\TextEntry::make('vat_number'),
                ]),

            'operations' => Infolists\Components\Section::make('studio-resource.sections.operations')
                ->schema([
                    'services' => Infolists\Components\TextEntry::make('services'),
                    'active' => Infolists\Components\IconEntry::make('active')
                        ->boolean(),
                    'doctors_count' => Infolists\Components\TextEntry::make('doctors_count')
                        ->getStateUsing(fn ($state, Studio $record): int => $record->doctors()->count()),
                    'appointments_count' => Infolists\Components\TextEntry::make('appointments_count')
                        ->getStateUsing(fn ($state, Studio $record): int => $record->appointments()->count()),
                ]),
        ];
>>>>>>> 843a9cc6 (✨ (Geo Module): add Address model and related migrations for managing)
    }
=======
    
>>>>>>> a872e835 (✨ (AddressResource.php): replace locality text input with a searchable select)
=======
   
>>>>>>> 2bcfd382 (fix Address)
=======

>>>>>>> 8aab2e4a (📝 (route-service-provider.md): update documentation for route service provider to improve clarity and organization)
=======
    /**
     * Schema form personalizzato per gli indirizzi con logica condizionale per i campi name e is_primary.
     *
     * @return array<string, \Filament\Forms\Components\Component>
     */
    protected static function getAddressFormSchema(): array
    {
        $baseSchema = AddressResource::getFormSchema();

        // Campo name: visibile solo con più di 1 elemento
        $baseSchema['name'] = Forms\Components\TextInput::make('name')
            ->maxLength(255)
            ->visible(function (Get $get): bool {
                $addresses = $get('../../addresses') ?? [];
                return count($addresses) > 1;
            })
            ->live();

        // Campo is_primary: logica complessa per esclusività
        $baseSchema['is_primary'] = Forms\Components\Toggle::make('is_primary')
            ->visible(function (Get $get): bool {
                $addresses = $get('../../addresses') ?? [];
                return count($addresses) > 1;
            })
            ->default(function (Get $get): bool {
                $addresses = $get('../../addresses') ?? [];
                // Se è il primo elemento o c'è un solo elemento, default true
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
                        foreach ($addresses as $index => $address) {
                            if ((string)$index !== (string)$currentIndex) {
                                $set("../../addresses.{$index}.is_primary", false);
                            }
                        }
                    }
                }
            })
            ->live()
            ->dehydrateStateUsing(function ($state, Get $get): bool {
                $addresses = $get('../../addresses') ?? [];
                // Se c'è un solo elemento, forza sempre true
                if (count($addresses) <= 1) {
                    return true;
                }
                return (bool) $state;
            });

        return $baseSchema;
    }
>>>>>>> 77f21bed (✨ (AddressResource.php): refactor address form schema to conditionally show the name field based on the number of addresses, enhancing user experience)
}
