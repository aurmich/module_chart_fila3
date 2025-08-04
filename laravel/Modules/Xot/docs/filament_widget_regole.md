# Regole Widget Filament (XotBase)

## Path delle view dei Widget Filament

- Tutte le view dei widget Filament devono essere referenziate come 'modulo::filament.widgets.nome-widget'.
- La struttura delle cartelle deve essere sempre resources/views/filament/widgets/.
- Mai usare path generici come widgets. o pages. senza il prefisso filament.
- **Esempio corretto:**
  ```php
  protected static string $view = 'saluteora::filament.widgets.find-doctor-and-appointment';
  ```
- **Esempio sbagliato:**
  ```php
  protected static string $view = 'saluteora::widgets.find-doctor-and-appointment';
  ```

## Label e Placeholder

<<<<<<< HEAD
- Non usare MAI // Label gestita automaticamente da LangServiceProvider, ->placeholder(), né stringhe tradotte direttamente nei componenti Filament.
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- Non usare MAI // Label gestita automaticamente da LangServiceProvider, ->placeholder(), né stringhe tradotte direttamente nei componenti Filament.
=======
- Non usare MAI ->label(), ->placeholder(), né stringhe tradotte direttamente nei componenti Filament.
>>>>>>> aurmich/dev
=======
- Non usare MAI ->label(), ->placeholder(), né stringhe tradotte direttamente nei componenti Filament.
>>>>>>> 520b5152 (📝 (mcp.json, filament-best-practices.mdc, find-dentist-implementation.md): update documentation for improved clarity and consistency in coding practices, including namespace rules, widget implementation, and translation handling to ensure adherence to project standards and enhance maintainability.)
=======
- Non usare MAI ->label(), ->placeholder(), né stringhe tradotte direttamente nei componenti Filament.
>>>>>>> d23ba493 (add calendar)
>>>>>>> aurmich/dev
- Tutte le label, placeholder, titoli e descrizioni sono risolte tramite i file di traduzione del modulo (es: Modules/SaluteOra/lang/it/widgets.php).
- Chi estende XotBaseWidget, XotBaseResource, XotBasePage deve affidarsi solo alle chiavi di traduzione.
- **Esempio corretto:**
  ```php
  Forms\Components\TextInput::make('location');
  ```
- **Esempio sbagliato:**
  ```php
<<<<<<< HEAD
  Forms\Components\TextInput::make('location')// Label gestita automaticamente da LangServiceProvider);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
  Forms\Components\TextInput::make('location')// Label gestita automaticamente da LangServiceProvider);
=======
  Forms\Components\TextInput::make('location')->label(__('saluteora::widgets.find_doctor.location_label'));
>>>>>>> aurmich/dev
=======
  Forms\Components\TextInput::make('location')->label(__('saluteora::widgets.find_doctor.location_label'));
>>>>>>> 520b5152 (📝 (mcp.json, filament-best-practices.mdc, find-dentist-implementation.md): update documentation for improved clarity and consistency in coding practices, including namespace rules, widget implementation, and translation handling to ensure adherence to project standards and enhance maintainability.)
=======
  Forms\Components\TextInput::make('location')->label(__('saluteora::widgets.find_doctor.location_label'));
>>>>>>> d23ba493 (add calendar)
>>>>>>> aurmich/dev
  ```

---

Vedi anche: [find-dentist-functionality.md](../../saluteora/docs/find-dentist-functionality.md) 
