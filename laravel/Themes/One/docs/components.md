<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
# Componenti UI
=======
# Documentazione Componenti
>>>>>>> d23ba493 (add calendar)

## Blocchi Base

### 1. Hero (`components/blocks/hero/`)

#### 1.1 Variante Simple
```php
<x-blocks.hero.simple
    title="Titolo Hero"
    subtitle="Sottotitolo opzionale"
    image="/path/to/image.jpg"
    :cta="[
        'text' => 'Call to Action',
        'link' => '/action'
    ]"
/>
```

Props disponibili:
- `title`: string (required)
- `subtitle`: string (optional)
- `image`: string (required)
- `cta`: array (optional)
  - `text`: string
  - `link`: string

### 2. Feature Sections (`components/blocks/feature_sections/`)

#### 2.1 Variante V1
```php
<x-blocks.feature_sections.v1
    title="Titolo Sezione"
    :sections="[
        [
            'title' => 'Feature 1',
            'description' => 'Descrizione feature',
            'icon' => 'check-circle'
        ]
    ]"
/>
```

Props disponibili:
- `title`: string (required)
- `sections`: array (required)
  - `title`: string
  - `description`: string
  - `icon`: string (optional)
  - `link`: string (optional)
  - `link_text`: string (optional)

### 3. Stats (`components/blocks/stats/`)

#### 3.1 Variante V1
```php
<x-blocks.stats.v1
    title="Statistiche"
    :stats="[
        [
            'number' => '100+',
            'label' => 'Clienti'
        ]
    ]"
/>
```

Props disponibili:
- `title`: string (required)
- `stats`: array (required)
  - `number`: string
  - `label`: string
  - `description`: string (optional)

### 4. CTA (`components/blocks/cta/`)

#### 4.1 Variante V1
```php
<x-blocks.cta.v1
    title="Call to Action"
    description="Descrizione della CTA"
    button_text="Azione"
    button_link="/action"
/>
```

<<<<<<< HEAD
#### Varianti
```html
<!-- Elevated -->
<div class="card" data-variant="elevated">
  <!-- Contenuto -->
</div>
=======
# Documentazione Componenti
=======
# Componenti UI
>>>>>>> 15cb84fb (fix collisions)

## Introduzione

Questo documento descrive in dettaglio i componenti UI disponibili nel tema "One". Ogni componente è progettato seguendo i principi di minimalismo, funzionalità e accessibilità.

## Componenti Base

### Button

#### Varianti
```html
<!-- Primary -->
<button class="button" data-variant="primary">
  <span class="button__text">Primary</span>
</button>

<!-- Secondary -->
<button class="button" data-variant="secondary">
  <span class="button__text">Secondary</span>
</button>

<!-- Outline -->
<button class="button" data-variant="outline">
  <span class="button__text">Outline</span>
</button>

<!-- Text -->
<button class="button" data-variant="text">
  <span class="button__text">Text</span>
</button>
```

#### Stati
```html
<!-- Disabled -->
<button class="button" disabled>
  <span class="button__text">Disabled</span>
</button>

<!-- Loading -->
<button class="button" data-loading="true">
  <span class="button__text">Loading</span>
  <span class="button__loader"></span>
</button>
```

#### Dimensioni
```html
<!-- Small -->
<button class="button" data-size="sm">
  <span class="button__text">Small</span>
</button>

<!-- Medium -->
<button class="button" data-size="md">
  <span class="button__text">Medium</span>
</button>

<!-- Large -->
<button class="button" data-size="lg">
  <span class="button__text">Large</span>
</button>
```

### Card

#### Base
```html
<div class="card">
  <div class="card__header">
    <h3 class="card__title">Titolo</h3>
  </div>
  <div class="card__body">
    <p class="card__content">Contenuto</p>
  </div>
  <div class="card__footer">
    <button class="button">Azione</button>
  </div>
</div>
```

#### Varianti
```html
<!-- Elevated -->
<div class="card" data-variant="elevated">
  <!-- Contenuto -->
</div>

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7440f060 (delete duplicate folder + add .md)
> **NOTA**: La documentazione generale sui componenti UI è centralizzata nel [modulo UI](../../../Modules/UI/docs/components.md). Questa sezione documenta solo i componenti specifici del tema One.

## Collegamenti

- [Documentazione generale componenti UI](../../../Modules/UI/docs/components.md)
- [Componenti form](../../../Modules/UI/docs/form-components.md)
- [Componenti layout](../../../Modules/UI/docs/layout-components.md)
<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)

=======
>>>>>>> 35e9b7ea (feat(scripts): add script to rename files to lowercase while preserving README.md case for consistency and organization)
=======

>>>>>>> 7440f060 (delete duplicate folder + add .md)
=======
>>>>>>> bead9c28 (fix case)
## Logo
=======
<!-- Outlined -->
<div class="card" data-variant="outlined">
  <!-- Contenuto -->
</div>
>>>>>>> 15cb84fb (fix collisions)
=======
Props disponibili:
- `title`: string (required)
- `description`: string (optional)
- `button_text`: string (required)
- `button_link`: string (required)

## Stili e Personalizzazione
>>>>>>> d23ba493 (add calendar)

### 1. Colori
I componenti utilizzano le seguenti classi di colore Tailwind:
- Primary: `text-indigo-600`, `bg-indigo-600`
- Neutral: `text-gray-900`, `text-gray-600`
- Background: `bg-white`

### 2. Tipografia
Gerarchie tipografiche standard:
- H1: `text-4xl font-bold`
- H2: `text-3xl font-semibold`
- Body: `text-base leading-7`
- Small: `text-sm`

### 3. Spaziatura
- Sezioni: `py-24 sm:py-32`
- Elementi: `gap-x-8 gap-y-16`
- Contenitori: `max-w-7xl mx-auto`

## Responsive Design

### 1. Breakpoint
```css
sm: @media (min-width: 640px)
md: @media (min-width: 768px)
lg: @media (min-width: 1024px)
xl: @media (min-width: 1280px)
2xl: @media (min-width: 1536px)
```

<<<<<<< HEAD
### Form Elements

#### Input
```html
<div class="form-group">
  <label class="form-label" for="input">Etichetta</label>
  <input 
    class="form-input" 
    id="input" 
    type="text" 
    placeholder="Placeholder"
  >
  <div class="form-help">Testo di aiuto</div>
</div>
```

#### Select
```html
<div class="form-group">
  <label class="form-label" for="select">Seleziona</label>
  <select class="form-select" id="select">
    <option value="">Seleziona un'opzione</option>
    <option value="1">Opzione 1</option>
    <option value="2">Opzione 2</option>
  </select>
</div>
```

<<<<<<< HEAD
### Best Practices
- Mantenere le proporzioni usando `w-auto`
- Per header e navbar, usare dimensioni tra h-8 e h-16
- Per hero sections e splash screens, considerare dimensioni maggiori
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 7440f060 (delete duplicate folder + add .md)

## Collegamenti tra versioni di components.md
* [components.md](laravel/Modules/UI/docs/components.md)
* [components.md](laravel/Modules/UI/docs/themes/components.md)
* [components.md](laravel/Modules/Cms/docs/components.md)
* [components.md](laravel/Themes/One/docs/components.md)

<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======
 
>>>>>>> 35e9b7ea (feat(scripts): add script to rename files to lowercase while preserving README.md case for consistency and organization)
=======
 
>>>>>>> 7440f060 (delete duplicate folder + add .md)
=======
>>>>>>> bead9c28 (fix case)
=======
#### Checkbox
```html
<div class="form-group">
  <label class="checkbox">
    <input type="checkbox" class="checkbox__input">
    <span class="checkbox__label">Accetta i termini</span>
  </label>
</div>
```

### Navigation

#### Navbar
```html
<nav class="navbar">
  <div class="navbar__brand">
    <a href="/" class="navbar__logo">Logo</a>
  </div>
  <div class="navbar__menu">
    <a href="#" class="navbar__link">Link 1</a>
    <a href="#" class="navbar__link">Link 2</a>
    <a href="#" class="navbar__link">Link 3</a>
  </div>
</nav>
```

#### Breadcrumb
```html
<nav class="breadcrumb">
  <a href="#" class="breadcrumb__item">Home</a>
  <span class="breadcrumb__separator">/</span>
  <a href="#" class="breadcrumb__item">Sezione</a>
  <span class="breadcrumb__separator">/</span>
  <span class="breadcrumb__item">Pagina</span>
</nav>
```

## Componenti Avanzati

### Modal
```html
<div class="modal" data-modal="example">
  <div class="modal__overlay"></div>
  <div class="modal__content">
    <div class="modal__header">
      <h3 class="modal__title">Titolo</h3>
      <button class="modal__close">&times;</button>
    </div>
    <div class="modal__body">
      <p>Contenuto</p>
    </div>
    <div class="modal__footer">
      <button class="button">Chiudi</button>
    </div>
  </div>
</div>
```

### Accordion
```html
<div class="accordion">
  <div class="accordion__item">
    <button class="accordion__header">
      <span class="accordion__title">Titolo 1</span>
      <span class="accordion__icon">+</span>
    </button>
    <div class="accordion__content">
      <p>Contenuto 1</p>
    </div>
  </div>
  <!-- Altri items -->
</div>
```

### Tabs
```html
<div class="tabs">
  <div class="tabs__header">
    <button class="tabs__button" data-tab="1">Tab 1</button>
    <button class="tabs__button" data-tab="2">Tab 2</button>
    <button class="tabs__button" data-tab="3">Tab 3</button>
  </div>
  <div class="tabs__content">
    <div class="tabs__panel" data-tab="1">
      <p>Contenuto 1</p>
    </div>
    <div class="tabs__panel" data-tab="2">
      <p>Contenuto 2</p>
    </div>
    <div class="tabs__panel" data-tab="3">
      <p>Contenuto 3</p>
    </div>
  </div>
</div>
```
=======
### 2. Grid System
- Mobile: `grid-cols-1`
- Tablet: `sm:grid-cols-2`
- Desktop: `lg:grid-cols-3`
>>>>>>> d23ba493 (add calendar)

## Best Practices

### 1. Utilizzo dei Componenti
- Mantenere i componenti il più possibile autonomi
- Utilizzare props per la configurazione
- Evitare logica complessa nei template
- Documentare tutte le props richieste

### 2. Personalizzazione
- Utilizzare slot per contenuto personalizzato
- Override dei componenti tramite Blade Components
- Estendere le classi CSS base

### 3. Performance
- Lazy loading per immagini pesanti
- Minimizzare le dipendenze JavaScript
- Ottimizzare le query database

## Testing

### 1. Unit Testing
```php
class ComponentTest extends TestCase
{
    /** @test */
    public function it_renders_hero_component()
    {
        $view = $this->blade(
            '<x-blocks.hero.simple :title="$title" />',
            ['title' => 'Test Title']
        );
        
        $view->assertSee('Test Title');
    }
}
```

### 2. Browser Testing
```php
class ComponentBrowserTest extends DuskTestCase
{
    /** @test */
    public function it_shows_cta_button()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                   ->assertSee('Call to Action')
                   ->click('@cta-button');
        });
    }
}
```

## Esempi di Implementazione

<<<<<<< HEAD
- [Sistema di Design](../design_system.md)
- [Roadmap](../roadmap.md)
- [Guida allo Stile](../style_guide.md)
- [Best Practices](../best_practices.md) 
>>>>>>> 15cb84fb (fix collisions)
=======
### 1. Pagina con Hero e Features
```php
<x-layouts.app>
    <x-blocks.hero.simple
        title="Welcome"
        subtitle="Subtitle here"
        image="/img/hero.jpg"
    />
    
    <x-blocks.feature_sections.v1
        title="Our Features"
        :sections="$features"
    />
</x-layouts.app>
```

### 2. Sezione Statistiche con CTA
```php
<div class="space-y-24">
    <x-blocks.stats.v1
        title="Our Numbers"
        :stats="$statistics"
    />
    
    <x-blocks.cta.v1
        title="Ready to Start?"
        button_text="Get Started"
        button_link="/register"
    />
</div>
```

# Componenti del Tema One

## Logo

Il componente `x-ui.logo` è un SVG che rappresenta il logo dell'applicazione. 

### Utilizzo Base
```blade
<x-ui.logo />
```

### Dimensioni
- Dimensione predefinita: altezza 64px (h-16) con larghezza automatica
- Le dimensioni possono essere sovrascritte passando classi Tailwind:
```blade
<x-ui.logo class="h-8 w-auto" />
```

### Colori
- Il colore può essere controllato attraverso la classe `text-{color}` grazie all'uso di `currentColor` nell'SVG
- Supporta il tema chiaro/scuro attraverso le classi `dark:`

### Best Practices
- Mantenere le proporzioni usando `w-auto`
- Per header e navbar, usare dimensioni tra h-8 e h-16
- Per hero sections e splash screens, considerare dimensioni maggiori
>>>>>>> d23ba493 (add calendar)
