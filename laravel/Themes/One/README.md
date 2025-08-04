<<<<<<< HEAD
# Tema One - SaluteOra

## Panoramica

Il tema One è un tema moderno e pulito per l'applicazione SaluteOra, progettato per fornire un'interfaccia utente intuitiva e professionale per pazienti, dottori e amministratori.

## Principi di Design

### Integrazione Widget
Il tema One segue il principio fondamentale di **non duplicare funzionalità esistenti**. Invece di ricreare componenti da zero, il tema richiama i widget Filament esistenti e applica solo styling specifico.

#### ✅ Approccio Corretto
```php
// Richiama widget esistente
@livewire(\Modules\SaluteOra\Filament\Widgets\PatientCalendarWidget::class)
```

#### ❌ Approccio Sbagliato
```php
// NON ricreare funzionalità esistenti
<script>
    var calendar = new FullCalendar.Calendar(/* ... */);
</script>
```

## Componenti Principali

### Calendar Block
Il componente `calendar.blade.php` è stato completamente riprogettato per:

- **Riutilizzare Widget Esistenti**: Richiama i widget FullCalendar del modulo SaluteOra
- **Rispettare Sicurezza**: Mantiene tutti i controlli di accesso e tenancy
- **Applicare Styling**: Aggiunge solo CSS specifico del tema
- **Gestire Stati**: Mostra messaggi appropriati per utenti non autenticati o senza permessi

#### Funzionalità
- Rilevamento automatico tipo utente (Patient, Doctor, Admin)
- Verifica permessi e tenancy
- Styling responsive
- Stati di caricamento e errore
- Integrazione seamless con widget Filament

#### Utilizzo
```php
<x-one::blocks.calendar 
    title="Il Mio Calendario"
    height="600px"
    :show-toolbar="true"
/>
```

## Struttura File

```
resources/views/components/
├── blocks/
│   ├── calendar.blade.php          # ✅ Corretto - richiama widget
│   ├── calendar-dynamic.blade.php  # Da aggiornare
│   └── ...
├── layouts/
│   └── ...
└── ...
```

## Stili CSS

### Variabili Tema
```css
.theme-one-calendar {
    --calendar-primary: #3b82f6;
    --calendar-primary-hover: #2563eb;
    --calendar-border: #e5e7eb;
    --calendar-bg: #ffffff;
    --calendar-text: #111827;
    --calendar-text-muted: #6b7280;
}
```

### Integrazione Filament
Il tema applica stili specifici ai widget Filament senza modificarne la logica:

```css
/* Integrazione con widget Filament */
.theme-one-calendar .fi-wi-calendar {
    border: none;
    box-shadow: none;
    background: transparent;
}
```

## Responsive Design

Il tema è completamente responsive con breakpoint ottimizzati per:
- Desktop (>= 1024px)
- Tablet (768px - 1023px)  
- Mobile (< 768px)

## Sicurezza

### Controlli di Accesso
Il tema rispetta tutti i controlli di sicurezza implementati nei widget:
- Autenticazione utente
- Verifica tipo utente (Patient/Doctor/Admin)
- Tenancy multi-studio per dottori
- Filtri dati automatici

### Privacy
- Mascheramento dati sensibili quando necessario
- Rispetto GDPR
- Audit trail mantenuto dai widget

## Performance

### Ottimizzazioni
- Lazy loading dei widget
- Caching implementato nei widget sottostanti
- CSS ottimizzato per rendering veloce
- Immagini responsive

### Metriche Target
- First Contentful Paint: < 1.5s
- Largest Contentful Paint: < 2.5s
- Cumulative Layout Shift: < 0.1

## Accessibilità

### Standard WCAG 2.1 AA
- Contrasto colori conforme
- Navigazione keyboard
- Screen reader friendly
- Focus indicators visibili

### Supporto Tecnologie Assistive
- ARIA labels appropriati
- Semantic HTML
- Alt text per immagini
- Heading hierarchy corretta

## Manutenzione

### Aggiornamenti Widget
Quando i widget Filament vengono aggiornati, il tema eredita automaticamente:
- Nuove funzionalità
- Correzioni bug
- Miglioramenti sicurezza
- Ottimizzazioni performance

### Personalizzazioni
Per personalizzare l'aspetto:
1. Modificare solo variabili CSS
2. Non toccare logica widget
3. Testare su tutti i dispositivi
4. Verificare accessibilità

## Testing

### Test Richiesti
- [ ] Rendering corretto per tutti i tipi utente
- [ ] Responsive design su tutti i dispositivi
- [ ] Controlli di accesso funzionanti
- [ ] Performance entro target
- [ ] Accessibilità WCAG 2.1 AA

### Browser Supportati
- Chrome 90+
- Firefox 88+
- Safari 14+
- Edge 90+

## Troubleshooting

### Problemi Comuni

#### Widget Non Caricato
```
Errore: Class 'PatientCalendarWidget' not found
```
**Soluzione**: Verificare che il modulo SaluteOra sia installato e attivo.

#### Permessi Negati
```
Messaggio: "Accesso Limitato"
```
**Soluzione**: Verificare tipo utente e tenancy per dottori.

#### Styling Non Applicato
**Soluzione**: Verificare che i CSS del tema siano caricati dopo quelli di Filament.

## Contribuire

### Linee Guida
1. **Non Duplicare**: Mai ricreare funzionalità esistenti
2. **Solo Styling**: Modificare solo aspetto visivo
3. **Testare**: Verificare su tutti i dispositivi
4. **Documentare**: Aggiornare README per modifiche

### Pull Request
1. Fork del repository
2. Branch feature/fix
3. Test completi
4. Documentazione aggiornata
5. PR con descrizione dettagliata

## Changelog

### v2.0.0 (Corrente)
- ✅ **BREAKING**: Rimosso calendario custom, ora usa widget Filament
- ✅ Aggiunta integrazione sicura con widget SaluteOra
- ✅ Migliorato responsive design
- ✅ Aggiunto supporto tenancy multi-studio
- ✅ Ottimizzato performance e accessibilità

### v1.x.x (Deprecato)
- ❌ Implementazione calendario custom (rimossa)
- ❌ Duplicazione logica widget (corretta)

## Licenza

Questo tema è parte del progetto SaluteOra e segue la stessa licenza del progetto principale.

## Supporto

Per supporto tecnico:
- Documentazione: `/docs`
- Issues: Repository GitHub
- Email: support@saluteora.it
=======
# Tema One – Tema Frontend Moderno e Riusabile

## Introduzione

Tema One è un tema frontend moderno e altamente personalizzabile basato su:
- Laravel 10+
- Filament 3.3+ (per l'admin panel)
- Volt (per la gestione delle viste)
- Folio (per il routing)
- Laraxot (per l'estensibilità)

Può essere utilizzato sia come tema generico per progetti multipli, sia come tema predefinito per istanze specifiche come il progetto.

## 🎯 Caratteristiche Principali

- Design moderno e responsive
- Integrazione completa con Filament Admin
- Sistema di blocchi modulari
- Supporto multilingua
- Ottimizzato per SEO
- Performance ottimizzata
- Facile personalizzazione

> Consulta la documentazione dettagliata nella [cartella docs](docs/) del modulo e nella cartella docs principale del progetto per best practices, installazione, roadmap e altro.

## 📊 Roadmap

Per la roadmap completa e lo stato di sviluppo, consulta [docs/roadmap.md](docs/roadmap.md)

## 🛠️ Requisiti

- PHP 8.1+
- Laravel 10+
- Filament 3.3+
- Node.js 16+
- NPM 8+

## 🚀 Installazione

1. Aggiungi il tema al tuo `composer.json` (adatta il nome del pacchetto se usato in progetti diversi):

```json
{
    "require": {
        "saluteora/theme-one": "^1.0"
    }
}
```

2. Esegui l'installazione:

```bash
composer update
```

3. Pubblica gli asset del tema:

```bash
php artisan vendor:publish --tag=theme-one-assets
php artisan vendor:publish --tag=theme-one-views
php artisan vendor:publish --tag=theme-one-config
```

3. **IMPORTANTE:** Con Filament 3.x è OBBLIGATORIO usare solo le seguenti dipendenze (come da [Filament Docs](https://filamentphp.com/docs/3.x/notifications/installation#installing-tailwind-css)):
  ```sh
  npm install tailwindcss@3 @tailwindcss/forms @tailwindcss/typography postcss postcss-nesting autoprefixer --save-dev
  npm run build
  ```

4. Installa le dipendenze NPM:

```bash
npm install
```

5. Compila gli asset:

```bash
npm run build
```

## ⚙️ Configurazione

### Tailwind CSS

Il tema utilizza Tailwind CSS per lo styling. Assicurati che i seguenti file siano configurati correttamente:
1. `postcss.config.js`:

```js
module.exports = {
    plugins: {
        tailwindcss: {},
        autoprefixer: {},
    },
}
```

2. `tailwind.config.js`:

```js
const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './resources/views/**/*.blade.php',
        './vendor/saluteora/theme-one/resources/views/**/*.blade.php',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    50: '#f0f9ff',
                    100: '#e0f2fe',
                    200: '#bae6fd',
                    300: '#7dd3fc',
                    400: '#38bdf8',
                    500: '#0ea5e9',
                    600: '#0284c7',
                    700: '#0369a1',
                    800: '#075985',
                    900: '#0c4a6e',
                },
            },
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
}
```

3. `vite.config.js`:

```js
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
```

## 📁 Struttura del Tema

```
laravel/Themes/One/
├── app/
│   └── Providers/
│       └── ThemeServiceProvider.php
├── config/
│   └── theme.php
├── resources/
│   ├── views/
│   │   ├── components/
│   │   │   ├── ui/          # Componenti UI di base
│   │   │   ├── layouts/     # Layout principali
│   │   │   └── blocks/      # Blocchi di contenuto
│   │   └── pages/
│   │       ├── pages/
│   │       │   └── [slug].blade.php
│   │       └── it/
│   │           └── pages/
│   └── assets/
├── routes/
│   └── web.php
└── docs/
    ├── roadmap.md
    ├── blocks.md
    ├── folio.md
    └── installation.md
```

## 🧩 Componenti Disponibili

### UI Components
- `application-logo` - Logo dell'applicazione
- `dropdown` - Menu a tendina
- `dropdown-link` - Link per menu a tendina
- `input-error` - Messaggi di errore per input
- `input-label` - Etichette per input
- `nav-link` - Link di navigazione
- `primary-button` - Pulsante primario
- `responsive-nav-link` - Link di navigazione responsive
- `text-input` - Input di testo

### Layout Components
- `guest-layout` - Layout per utenti non autenticati
- `app-layout` - Layout principale dell'applicazione

### Block Components
- `hero` - Sezione hero con titolo e CTA
- `feature-sections` - Sezioni di caratteristiche
- `team` - Sezione team
- `stats` - Statistiche
- `cta` - Call to Action
- `paragraph` - Paragrafo di testo

## 🔧 Personalizzazione

### Viste
Le viste possono essere personalizzate copiandole dalla directory `resources/views` del tema nella directory `resources/views` della tua applicazione.

### Asset
Gli asset possono essere personalizzati modificando i file nella directory `resources/assets` del tema.

### Configurazione
La configurazione del tema può essere personalizzata modificando il file `config/theme.php`.

## 🔄 Integrazioni

### Filament
Il tema si integra perfettamente con Filament per la gestione dell'admin panel.

### Volt
Utilizza Volt per la gestione delle viste e dei componenti.

### Folio
Implementa Folio per il routing delle pagine frontend.

### Laraxot
Sfrutta Laraxot per l'estensibilità e la modularità.

## 📚 Documentazione

Per la documentazione completa, consulta:
- [Roadmap](docs/roadmap.md)
- [Blocchi](docs/blocks.md)
- [Folio](docs/folio.md)
- [Installazione](docs/installation.md)

## 🤝 Contribuire

1. Fork del repository
2. Crea un branch per la tua feature (`git checkout -b feature/AmazingFeature`)
3. Commit delle modifiche (`git commit -m 'Add some AmazingFeature'`)
4. Push del branch (`git push origin feature/AmazingFeature`)
5. Apri una Pull Request

## 📝 Licenza

Questo tema è open-source sotto la licenza MIT. Vedi il file `LICENSE` per maggiori dettagli.

## Integrazione con Laravel Folio

Il tema utilizza Laravel Folio per la gestione delle rotte frontend. Vedi la documentazione in `docs/folio.md` per maggiori dettagli.

## Integrazione con il CMS

Il tema si integra con il modulo CMS per la gestione dei contenuti. I blocchi di contenuto sono gestiti attraverso il modello `Page` del modulo CMS.

## Compatibilità

Assicurati che i nomi dei parametri nel database corrispondano a quelli attesi dai componenti. In particolare:

- Il blocco `feature_sections` utilizza il parametro `sections` invece di `features`
- Il blocco `stats` utilizza il parametro `number` invece di `value` per i valori delle statistiche

## Supporto

Per assistenza tecnica, contattare:
- Email: support@saluteora.com
- Documentazione: https://docs.saluteora.com
>>>>>>> 54f4fa16 (.)
