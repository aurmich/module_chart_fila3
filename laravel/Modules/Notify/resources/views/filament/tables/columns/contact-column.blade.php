{{--
<<<<<<< HEAD
/**
 * ContactColumn View - Rendering contatti con icone Heroicon
 * 
 * Utilizza ContactTypeEnum per icone, colori e etichette centralizzate
 * Supporta accessibilità WCAG 2.1 AA con ARIA roles e labels
 * 
 * @var \Illuminate\Database\Eloquent\Model $record
 * @var array $contacts - Array di contatti dal helper getContactsForColumn()
 * 
 * @author Laraxot Team
 * @version 2.0 - REFACTOR COMPLETO
 * @since 2025-08-01
 */
=======
    ContactColumn Blade View - Pattern Corretto DRY/KISS
    
    Utilizza ContactTypeEnum per centralizzare icone, colori e etichette
    Separazione completa tra logica (PHP) e presentazione (Blade)
    Accessibilità WCAG 2.1 AA compliant
    
    @author Laraxot Team
    @version 2.0 - REFACTOR COMPLETO
    @since 2025-08-01
>>>>>>> dadaf1e668 (.)
--}}

@php
    use Modules\Notify\Enums\ContactTypeEnum;
    
<<<<<<< HEAD
    $record = $getRecord();
    // Ottieni i contatti dal helper del modello
    $contacts = method_exists($record, 'getContactsForColumn') 
        ? $record->getContactsForColumn() 
        : [];
@endphp

@if(empty($contacts))
    <span class="text-gray-400 text-sm italic" role="status" aria-label="Nessun contatto">
        Nessun contatto
    </span>
@else
    <div class="flex flex-wrap gap-2 items-center" role="list" aria-label="Lista contatti">
        @foreach($contacts as $contact)
            @php
                try {
                    $enumCase = ContactTypeEnum::from($contact['type']);
                    $iconName = $enumCase->getIcon();
                    $colorClass = $enumCase->getColor();
                    $label = $enumCase->getLabel();
                    $ariaLabel = $label . ': ' . $contact['value'];
=======
    // Ottieni i contatti dal record usando helper method
    $contacts = $getRecord()->getContactsForColumn();
@endphp

<div class="flex flex-col gap-1" role="list" aria-label="{{ __('notify::contact-column.aria_labels.contact_list') }}">
    @forelse($contacts as $contact)
        @if(!empty($contact['value']))
            @php
                try {
                    $enumCase = ContactTypeEnum::from($contact['type']);
>>>>>>> dadaf1e668 (.)
                } catch (ValueError $e) {
                    // Fallback per tipi non riconosciuti
                    continue;
                }
            @endphp
            
<<<<<<< HEAD
            <div role="listitem" class="inline-flex items-center {{ $colorClass }} transition-colors duration-200">
                @if($contact['href'] ?? false)
                    {{-- Link cliccabile per contatti interattivi --}}
                    <a 
                        href="{{ $contact['href'] }}" 
                        class="inline-flex items-center {{ $colorClass }} hover:underline group"
                        title="{{ $ariaLabel }}"
                        aria-label="{{ $ariaLabel }}"
                        @if($contact['type'] === 'whatsapp') target="_blank" rel="noopener noreferrer" @endif
                    >
                        <x-filament::icon 
                            :name="$iconName" 
                            class="w-4 h-4 flex-shrink-0" 
                            aria-hidden="true"
                        />
                        <span class="ml-1 text-xs font-medium hidden sm:inline-block group-hover:underline">
                            {{ Str::limit($contact['value'], 15) }}
                        </span>
                    </a>
                @else
                    {{-- Non-clickable contact (like fax) --}}
                    <span 
                        class="inline-flex items-center {{ $colorClass }}"
                        title="{{ $ariaLabel }}"
                        aria-label="{{ $ariaLabel }}"
                    >
                        <x-filament::icon 
                            :name="$iconName" 
                            class="w-4 h-4 flex-shrink-0" 
                            aria-hidden="true"
                        />
                        <span class="ml-1 text-xs font-medium hidden sm:inline-block">
                            {{ Str::limit($contact['value'], 15) }}
                        </span>
                    </span>
                @endif
            </div>
        @endforeach
    </div>
@endif
=======
            @if($contact['href'] ?? false)
                {{-- Link cliccabile per contatti interattivi --}}
                <a href="{{ $contact['href'] }}" 
                   class="inline-flex items-center {{ $enumCase->getColor() }} transition-colors duration-200 group hover:underline"
                   role="listitem"
                   aria-label="{{ $enumCase->getLabel() }}: {{ $contact['value'] }}"
                   @if($contact['type'] === 'whatsapp') target="_blank" rel="noopener noreferrer" @endif
                   title="{{ __('notify::contact-column.tooltip.' . $contact['type']) }}">
                    
                    @svg($enumCase->getIcon(), 'w-4 h-4 flex-shrink-0', ['aria-hidden' => 'true'])
>>>>>>> dadaf1e668 (.)
                    
                    <span class="ml-1 text-xs font-medium group-hover:underline">
                        {{ $contact['display_value'] ?? $contact['value'] }}
                    </span>
                </a>
            @else
                {{-- Contatto non cliccabile (es. fax) --}}
                <div class="inline-flex items-center {{ $enumCase->getColor() }}"
                     role="listitem"
                     aria-label="{{ $enumCase->getLabel() }}: {{ $contact['value'] }}"
                     title="{{ $contact['value'] }}">
                    
                    @svg($enumCase->getIcon(), 'w-4 h-4 flex-shrink-0', ['aria-hidden' => 'true'])
                    
                    <span class="ml-1 text-xs font-medium">
                        {{ $contact['display_value'] ?? $contact['value'] }}
                    </span>
                </div>
            @endif
        @endif
    @empty
        <span class="text-gray-400 text-sm italic" 
              role="status" 
              aria-label="{{ __('notify::contact-column.aria_labels.no_contacts') }}">
            {{ __('notify::contact-column.no_contacts') }}
        </span>
    @endforelse
</div>
