<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Pages;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Pages\Page;
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Contracts\Auth\Authenticatable;
use Modules\Xot\Actions\View\GetViewByClassAction;
use Modules\Xot\Filament\Traits\TransTrait;
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 54f4fa16 (.)
use Filament\Forms\Form;
use Filament\Pages\Page;
use Illuminate\Support\Str;
use Filament\Facades\Filament;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Filament\Traits\TransTrait;
use Filament\Forms\Concerns\InteractsWithForms;
use Illuminate\Contracts\Auth\Authenticatable;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d23ba493 (add calendar)
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Modules\Xot\Actions\View\GetViewByClassAction;
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
>>>>>>> 15cb84fb (fix collisions)
=======
>>>>>>> d23ba493 (add calendar)

/**
 * Classe base astratta per tutte le pagine Filament non legate a risorse specifiche.
 * Fornisce funzionalità comuni e standardizzate per la gestione delle pagine.
 *
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d23ba493 (add calendar)
 * Implementa:
 * - Sistema di traduzioni integrato
 * - Gestione autorizzazioni
 * - Integrazione con form
 * - Rilevamento intelligente modello
 * - Metodi helper comuni
 *
<<<<<<< HEAD
<<<<<<< HEAD
 * @property ?string              $model Il modello associato alla pagina
 * @property array<string, mixed> $data  I dati del form
=======
 * @property ?string $model Il modello associato alla pagina
 * @property array<string, mixed> $data I dati del form
>>>>>>> aurmich/dev
 *
 * @see \Modules\Xot\docs\xotbasepage_implementation.md Documentazione completa
=======
=======
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\App;
<<<<<<< HEAD
use Illuminate\Support\Facades\Cache;
use Modules\Xot\Actions\GetViewByClassAction;
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
=======
use Illuminate\Support\Facades\Log;
use Modules\Xot\Actions\View\GetViewByClassAction;
>>>>>>> 7440f060 (delete duplicate folder + add .md)
>>>>>>> aurmich/dev

/**
 * Classe base astratta per tutte le pagine Filament non legate a risorse specifiche.
 * Fornisce funzionalità comuni e standardizzate per la gestione delle pagine.
 *
 * Implementa:
 * - Sistema di traduzioni integrato
 * - Gestione autorizzazioni
 * - Integrazione con form
 * - Rilevamento intelligente modello
 * - Metodi helper comuni
 *
<<<<<<< HEAD
 * @property ?string              $model Il modello associato alla pagina
 * @property array<string, mixed> $data  I dati del form
 *
 * @see \Modules\Xot\docs\xotbasepage_implementation.md Documentazione completa
=======
<<<<<<< HEAD
 * @property ?string $model
>>>>>>> 54f4fa16 (.)
=======
=======
>>>>>>> d23ba493 (add calendar)
 * @property ?string $model Il modello associato alla pagina
 * @property array<string, mixed> $data I dati del form
 *
 * @see \Modules\Xot\docs\xotbasepage_implementation.md Documentazione completa
<<<<<<< HEAD
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
=======
 * @property ?string $model
>>>>>>> 15cb84fb (fix collisions)
=======
>>>>>>> d23ba493 (add calendar)
>>>>>>> aurmich/dev
 */
abstract class XotBasePage extends Page implements HasForms
{
    use TransTrait;
    use InteractsWithForms;

<<<<<<< HEAD
    
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    
=======
=======
>>>>>>> d23ba493 (add calendar)
    /**
     * Icona di navigazione predefinita per la pagina.
     * Può essere ridefinita nelle classi figlie.
     */
<<<<<<< HEAD
    protected static ?string $navigationIcon = 'heroicon-o-computer-desktop';

>>>>>>> aurmich/dev
>>>>>>> aurmich/dev
    /**
     * Vista predefinita per la pagina.
     * Deve essere sovrascritta nelle classi figlie.
     */
    protected static string $view = '';

    /**
     * Modello associato alla pagina.
     * Se non specificato, verrà dedotto automaticamente dal nome della classe.
     *
     * @var class-string<Model>|null
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
    public static ?string $model = null;
=======
    protected static ?string $model = null;
>>>>>>> aurmich/dev

    /**
     * Dati del form.
     * Contiene i dati del form durante la gestione della pagina.
     *
     * @var array<string, mixed>
     */
    public array $data = [];

    /**
     * Cache timeout per operazioni di cache (in secondi).
     */
    protected static int $cacheTimeout = 3600;

    /**
     * Ottiene il nome del modulo dalla classe.
     * Estrae il nome del modulo dal namespace della classe.
     *
     * @return string Il nome del modulo (es. 'SaluteOra', 'User', ecc.)
     */
    public static function getModuleName(): string
    {
        $namespace = static::class;
        $moduleName = Str::between($namespace, 'Modules\\', '\\Filament');

<<<<<<< HEAD
        if ('' === $moduleName) {
            throw new \LogicException(sprintf('Cannot extract module name from class %s', static::class));
=======
        if ($moduleName === '') {
            throw new \LogicException(
                sprintf('Cannot extract module name from class %s', static::class)
            );
>>>>>>> aurmich/dev
        }

        return $moduleName;
    }

    /**
     * Ottiene la chiave di traduzione per un dato key.
     * Genera un percorso di traduzione standardizzato basato sul modulo e sul nome della classe.
     *
     * @param string $key La chiave di traduzione specifica
<<<<<<< HEAD
     * @param array<string, bool|float|int|string> $replace Parametri di sostituzione per la traduzione
=======
     * @param array<string, mixed> $replace Parametri di sostituzione per la traduzione
>>>>>>> aurmich/dev
     * @param string|null $locale Locale da utilizzare (null = locale corrente)
     * @param bool $useFallback Se true, utilizza la chiave come fallback se la traduzione non esiste
     *
     * @return string La stringa tradotta o la chiave originale se non trovata
     */
    public static function trans(string $key, array $replace = [], ?string $locale = null, bool $useFallback = true): string
    {
        $moduleNameLow = Str::lower(static::getModuleName());
        $p = Str::after(static::class, 'Filament\\Pages\\');
        $p_arr = explode('\\', $p);
        $slug = collect($p_arr)->map(static fn (string $item): string => Str::kebab($item))->implode('.');

        $translationKey = $moduleNameLow.'::'.$slug.'.'.$key;
        $translation = __($translationKey, $replace, $locale);

        if ($translation === $translationKey && App::environment('local', 'development', 'testing')) {
            Log::warning("Traduzione mancante: {$translationKey}");
<<<<<<< HEAD

=======
>>>>>>> aurmich/dev
            return $useFallback ? $key : $translationKey;
        }

        return (string) $translation;
    }

    /**
     * Ottiene l'etichetta plurale del modello.
     *
     * @return string L'etichetta plurale del modello
     */
    public static function getPluralModelLabel(): string
    {
        return static::trans('plural_label');
    }

    /**
     * Ottiene il gruppo di navigazione.
     *
     * @return string Il gruppo di navigazione
     */
=======
=======
    /**
     * Icona di navigazione predefinita per la pagina.
     * Può essere ridefinita nelle classi figlie.
     */
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
    protected static ?string $navigationIcon = 'heroicon-o-computer-desktop';

=======
    
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
    /**
     * Vista predefinita per la pagina.
     * Deve essere sovrascritta nelle classi figlie.
     */
    protected static string $view = '';
=======
    protected static ?string $navigationIcon = 'heroicon-o-computer-desktop';

    protected static string $view = 'job::filament.pages.job-monitor';
>>>>>>> 15cb84fb (fix collisions)
=======
    protected static ?string $navigationIcon = 'heroicon-o-computer-desktop';

    /**
     * Vista predefinita per la pagina.
     * Deve essere sovrascritta nelle classi figlie.
     */
    protected static string $view = '';
>>>>>>> d23ba493 (add calendar)

    /**
     * Modello associato alla pagina.
     * Se non specificato, verrà dedotto automaticamente dal nome della classe.
     *
     * @var class-string<Model>|null
     */
>>>>>>> aurmich/dev
    public static ?string $model = null;

    /**
     * Dati del form.
     * Contiene i dati del form durante la gestione della pagina.
     *
     * @var array<string, mixed>
     */
    public array $data = [];

    /**
     * Cache timeout per operazioni di cache (in secondi).
     */
    protected static int $cacheTimeout = 3600;

    /**
     * Ottiene il nome del modulo dalla classe.
     * Estrae il nome del modulo dal namespace della classe.
     *
     * @return string Il nome del modulo (es. 'SaluteOra', 'User', ecc.)
     */
    public static function getModuleName(): string
    {
        $namespace = static::class;
        $moduleName = Str::between($namespace, 'Modules\\', '\\Filament');

<<<<<<< HEAD
        if ('' === $moduleName) {
            throw new \LogicException(sprintf('Cannot extract module name from class %s', static::class));
=======
        if ($moduleName === '') {
            throw new \LogicException(
                sprintf('Cannot extract module name from class %s', static::class)
            );
>>>>>>> aurmich/dev
        }

        return $moduleName;
    }

    /**
     * Ottiene la chiave di traduzione per un dato key.
     * Genera un percorso di traduzione standardizzato basato sul modulo e sul nome della classe.
     *
     * @param string $key La chiave di traduzione specifica
     * @param array<string, bool|float|int|string> $replace Parametri di sostituzione per la traduzione
     * @param string|null $locale Locale da utilizzare (null = locale corrente)
     * @param bool $useFallback Se true, utilizza la chiave come fallback se la traduzione non esiste
     *
     * @return string La stringa tradotta o la chiave originale se non trovata
     */
    public static function trans(string $key, array $replace = [], ?string $locale = null, bool $useFallback = true): string
    {
        $moduleNameLow = Str::lower(static::getModuleName());
        $p = Str::after(static::class, 'Filament\\Pages\\');
        $p_arr = explode('\\', $p);
        $slug = collect($p_arr)->map(static fn (string $item): string => Str::kebab($item))->implode('.');

        $translationKey = $moduleNameLow.'::'.$slug.'.'.$key;
        $translation = __($translationKey, $replace, $locale);

        if ($translation === $translationKey && App::environment('local', 'development', 'testing')) {
            Log::warning("Traduzione mancante: {$translationKey}");
<<<<<<< HEAD

=======
>>>>>>> aurmich/dev
            return $useFallback ? $key : $translationKey;
        }

        return (string) $translation;
    }

    /**
     * Ottiene l'etichetta plurale del modello.
     *
     * @return string L'etichetta plurale del modello
     */
    public static function getPluralModelLabel(): string
    {
        return static::trans('plural_label');
    }

    /**
     * Ottiene il gruppo di navigazione.
     *
     * @return string Il gruppo di navigazione
     */
    public static function getNavigationGroup(): string
    {
        return static::transFunc(__FUNCTION__);
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function getNavigationLabel(): string
    {
        return static::transFunc(__FUNCTION__);
        // return static::trans('navigation.plural');
    }

>>>>>>> 54f4fa16 (.)
    public static function getNavigationGroup(): string
    {
        return static::transFunc(__FUNCTION__);
    }

<<<<<<< HEAD
=======
>>>>>>> d23ba493 (add calendar)
>>>>>>> aurmich/dev
    /**
     * Ottiene il modello associato alla pagina.
     * Se non specificato esplicitamente, tenta di dedurlo dal nome della classe.
     *
     * @return class-string<Model> Il namespace completo della classe del modello
     */
<<<<<<< HEAD
    public function getModel(): string
    {
=======
<<<<<<< HEAD
    public function getModel(): string
    {
<<<<<<< HEAD
>>>>>>> aurmich/dev
        /** @phpstan-ignore property.staticAccess */
        if (static::$model !== null) {
            /** @var class-string<Model> $model */
            /** @phpstan-ignore property.staticAccess */
            $model = static::$model;

<<<<<<< HEAD
=======
=======
        if (static::$model !== null) {
            /** @var class-string<Model> $model */
            $model = static::$model;
>>>>>>> aurmich/dev
>>>>>>> aurmich/dev
            return $model;
        }

        $moduleName = static::getModuleName();
        $className = class_basename(static::class);

        // Rimuove suffissi comuni per ottenere il nome del modello
        $modelName = Str::of($className)
            ->before('Resource')
            ->before('Page')
            ->before('Dashboard')
            ->before('Report')
            ->trim()
            ->toString();

<<<<<<< HEAD
        if ('' === $modelName) {
            throw new \LogicException(sprintf('Cannot determine model name from class %s', static::class));
=======
<<<<<<< HEAD
        if ('' === $modelName) {
            throw new \LogicException(sprintf('Cannot determine model name from class %s', static::class));
=======
        if ($modelName === '') {
            throw new \LogicException(
                sprintf('Cannot determine model name from class %s', static::class)
            );
>>>>>>> aurmich/dev
>>>>>>> aurmich/dev
        }

        $modelNamespace = 'Modules\\'.$moduleName.'\\Models\\'.$modelName;

        // Verifica che la classe del modello esista
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
        if (! class_exists($modelNamespace)) {
            throw new \LogicException("Model class {$modelNamespace} does not exist");
        }
        Assert::classExists($modelNamespace);
        Assert::isInstanceOf($modelNamespace, Model::class);
        /* @var class-string<Model> $modelNamespace */
<<<<<<< HEAD
=======
=======
        if (!class_exists($modelNamespace)) {
            if (App::environment('local', 'development', 'testing')) {
                Log::warning("Modello {$modelNamespace} non trovato. Specificare static::\$model nella classe ".static::class);
            }
            throw new \LogicException("Model class {$modelNamespace} does not exist");
        }

        /** @var class-string<Model> $modelNamespace */
>>>>>>> aurmich/dev
>>>>>>> aurmich/dev
        return $modelNamespace;
    }

    /**
     * Configura il form della pagina.
     * Imposta lo schema e il percorso dello stato per il form.
     *
     * @param Form $form Il form da configurare
<<<<<<< HEAD
     *
=======
<<<<<<< HEAD
     *
=======
>>>>>>> aurmich/dev
>>>>>>> aurmich/dev
     * @return Form Il form configurato
     */
    public function form(Form $form): Form
    {
        $form = $form->schema($this->getFormSchema());

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
        $form->statePath('data');
        
        $debounce = $this->getAutosaveDebounce();
        if (null !== $debounce && method_exists($form, 'autosaveDebounce')) {
<<<<<<< HEAD
=======
=======
        // Controlla se il metodo statePath esiste prima di chiamarlo
        if (method_exists($form, 'statePath')) {
            $form->statePath('data');
        }

        $debounce = $this->getAutosaveDebounce();
        if ($debounce !== null && method_exists($form, 'autosaveDebounce')) {
>>>>>>> aurmich/dev
>>>>>>> aurmich/dev
            $form->autosaveDebounce($debounce);
        }

        return $form;
    }

    /**
     * Ottiene il tempo di debounce per l'autosave in millisecondi.
     * Sovrascrivere nelle classi figlie per modificare questo valore.
     *
     * @return int|null Il tempo di debounce in millisecondi o null per disabilitare l'autosave
     */
    protected function getAutosaveDebounce(): ?int
    {
        return null; // Disabilitato per default
    }

    /**
     * Ottiene lo schema del form.
     * Può essere sovrascritto nelle classi figlie per fornire uno schema personalizzato.
     * RIMOSSO ABSTRACT - questo era l'errore principale!
     *
     * @return array<int|string, \Filament\Forms\Components\Component>
     */
    protected function getFormSchema(): array
    {
        return [];
    }

    /**
     * Ottiene l'utente autenticato.
     * Verifica che l'utente sia un'istanza di Model per permettere aggiornamenti.
     *
<<<<<<< HEAD
     * @throws \RuntimeException Se l'utente non è autenticato o non è un'istanza di Model
     *
     * @return Authenticatable&Model L'utente autenticato
=======
<<<<<<< HEAD
     * @throws \RuntimeException Se l'utente non è autenticato o non è un'istanza di Model
     *
     * @return Authenticatable&Model L'utente autenticato
=======
     * @return Authenticatable&Model L'utente autenticato
     * @throws \RuntimeException Se l'utente non è autenticato o non è un'istanza di Model
>>>>>>> aurmich/dev
>>>>>>> aurmich/dev
     */
    protected function getUser(): Authenticatable&Model
    {
        $user = Filament::auth()->user();

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
        if (null === $user) {
            throw new \RuntimeException('Nessun utente autenticato trovato.');
        }

        if (! $user instanceof Model) {
            throw new \RuntimeException('L\'utente autenticato deve essere un modello Eloquent per permettere aggiornamenti.');
        }

        /* @var Authenticatable&Model $user */
<<<<<<< HEAD
=======
=======
        if ($user === null) {
            throw new \RuntimeException('Nessun utente autenticato trovato.');
        }

        if (!$user instanceof Model) {
            throw new \RuntimeException('L\'utente autenticato deve essere un modello Eloquent per permettere aggiornamenti.');
        }

        /** @var Authenticatable&Model $user */
>>>>>>> aurmich/dev
>>>>>>> aurmich/dev
        return $user;
    }

    /**
     * Verifica se l'utente ha l'accesso alla pagina.
     * Utilizza il sistema di autorizzazioni per controllare l'accesso.
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException Se l'utente non è autorizzato
     */
    protected function authorizeAccess(): void
    {
        $this->authorize('view', static::class);
    }

    /**
     * Verifica se l'utente ha un permesso specifico.
     * Utile per controlli granulari all'interno delle pagine.
     *
     * @param string $permission Il permesso da verificare
<<<<<<< HEAD
     *
=======
<<<<<<< HEAD
     *
=======
>>>>>>> aurmich/dev
     * @return bool True se l'utente ha il permesso, false altrimenti
     */
    protected function hasPermissionTo(string $permission): bool
    {
        $user = $this->getUser();

        // Verifiamo che il metodo hasPermissionTo esista sull'utente
<<<<<<< HEAD
        //if (!method_exists($user, 'hasPermissionTo')) {
        //    throw new \RuntimeException('Il modello utente deve implementare il metodo hasPermissionTo');
        //}
=======
        if (!method_exists($user, 'hasPermissionTo')) {
            throw new \RuntimeException('Il modello utente deve implementare il metodo hasPermissionTo');
        }
>>>>>>> aurmich/dev

        return $user->hasPermissionTo($permission);
    }

    /**
     * Ottiene la vista associata alla pagina.
     *
     * @return string Il percorso della vista
     */
    public function getView(): string
    {
<<<<<<< HEAD
        if ('' === static::$view) {
=======
        if (static::$view === '') {
>>>>>>> aurmich/dev
            $view = app(GetViewByClassAction::class)->execute(static::class);
            if (view()->exists($view)) {
                return (string) $view;
            }

            // Se non troviamo una vista, lanciamo un'eccezione
<<<<<<< HEAD
            throw new \RuntimeException('Nessuna vista trovata per la classe: '.static::class);
=======
            throw new \RuntimeException("Nessuna vista trovata per la classe: " . static::class);
>>>>>>> aurmich/dev
        }

        return static::$view;
    }

    /**
     * Risolve il percorso della vista.
     *
<<<<<<< HEAD
     * @throws \RuntimeException Se la vista non esiste
     *
     * @return string Il percorso della vista
=======
     * @return string Il percorso della vista
     * @throws \RuntimeException Se la vista non esiste
>>>>>>> aurmich/dev
     */
    protected function resolveViewPath(): string
    {
        $view = $this->getView();
        if (view()->exists($view)) {
            return $view;
        }

<<<<<<< HEAD
        throw new \RuntimeException("View [{$view}] not found for page: ".static::class);
=======
        throw new \RuntimeException("View [{$view}] not found for page: " . static::class);
>>>>>>> aurmich/dev
    }

    /**
     * Ottiene una query builder per il modello associato alla pagina.
     *
<<<<<<< HEAD
     * @throws \LogicException Se il modello non è definito
     *
     * @return Builder<Model>
=======
     * @return Builder<Model>
     * @throws \LogicException Se il modello non è definito
>>>>>>> aurmich/dev
     */
    protected function getQuery(): Builder
    {
        $modelClass = $this->getModel();

<<<<<<< HEAD
        if (! class_exists($modelClass)) {
=======
        if (!class_exists($modelClass)) {
>>>>>>> aurmich/dev
            throw new \LogicException("Model class {$modelClass} does not exist");
        }

        /** @var class-string<Model> $modelClass */
        $instance = new $modelClass();
<<<<<<< HEAD
        if (! $instance instanceof Model) {
=======
        if (!$instance instanceof Model) {
>>>>>>> aurmich/dev
            throw new \LogicException("Class {$modelClass} must extend Eloquent Model");
        }

        /** @var Builder<Model> $query */
        $query = $modelClass::query();
<<<<<<< HEAD

=======
>>>>>>> aurmich/dev
        return $query;
    }

    /**
     * Invalida la cache per il modello specificato.
     *
     * @param class-string<Model>|null $modelClass
<<<<<<< HEAD
=======
     * @param int|string|null $id
     * @return void
>>>>>>> aurmich/dev
     */
    protected function invalidateCache(?string $modelClass = null, int|string|null $id = null): void
    {
        // Implementazione custom se necessaria
        // Per ora lasciamo vuoto, può essere implementato nelle classi figlie
    }
<<<<<<< HEAD

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label(__('filament-panels::resources/pages/edit-record.form.actions.save.label'))
                ->submit('save'),
        ];
    }
}
=======
}
>>>>>>> aurmich/dev
=======
=======
    /**
     * Ottiene il modello associato alla pagina.
     * Se non specificato esplicitamente, tenta di dedurlo dal nome della classe.
     *
     * @return class-string<Model> Il namespace completo della classe del modello
     */
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
    public function getModel(): string
    {
        /** @phpstan-ignore-next-line */
        if (static::$model !== null) {
            /** @var class-string<Model> $model */
            /** @phpstan-ignore-next-line */
            $model = static::$model;
            return $model;
        }

=======
    public function getModel(): string
    {
        // if (null != static::$model) {
        //    return static::$model;
        // }
>>>>>>> 15cb84fb (fix collisions)
        $moduleName = static::getModuleName();
        $modelName = Str::before(class_basename(static::class), 'Resource');
        $res = 'Modules\\'.$moduleName.'\Models\\'.$modelName;
        $this->model = $res;
        // self::$model = $res;
=======
    public function getModel(): string
    {
        if (static::$model !== null) {
            /** @var class-string<Model> $model */
            $model = static::$model;
            return $model;
        }
>>>>>>> d23ba493 (add calendar)

        $moduleName = static::getModuleName();
        $className = class_basename(static::class);

        // Rimuove suffissi comuni per ottenere il nome del modello
        $modelName = Str::of($className)
            ->before('Resource')
            ->before('Page')
            ->before('Dashboard')
            ->before('Report')
            ->trim()
            ->toString();

        if ($modelName === '') {
            throw new \LogicException(
                sprintf('Cannot determine model name from class %s', static::class)
            );
        }

        $modelNamespace = 'Modules\\'.$moduleName.'\\Models\\'.$modelName;

        // Verifica che la classe del modello esista
        if (!class_exists($modelNamespace)) {
            if (App::environment('local', 'development', 'testing')) {
                Log::warning("Modello {$modelNamespace} non trovato. Specificare static::\$model nella classe ".static::class);
            }
            throw new \LogicException("Model class {$modelNamespace} does not exist");
        }

        /** @var class-string<Model> $modelNamespace */
        return $modelNamespace;
    }

    /**
     * Configura il form della pagina.
     * Imposta lo schema e il percorso dello stato per il form.
     *
     * @param Form $form Il form da configurare
     * @return Form Il form configurato
     */
    public function form(Form $form): Form
    {
        $form = $form->schema($this->getFormSchema());

        $form->statePath('data');
        
        $debounce = $this->getAutosaveDebounce();
        if ($debounce !== null && method_exists($form, 'autosaveDebounce')) {
            $form->autosaveDebounce($debounce);
        }

        return $form;
    }

    /**
     * Ottiene il tempo di debounce per l'autosave in millisecondi.
     * Sovrascrivere nelle classi figlie per modificare questo valore.
     *
     * @return int|null Il tempo di debounce in millisecondi o null per disabilitare l'autosave
     */
    protected function getAutosaveDebounce(): ?int
    {
        return null; // Disabilitato per default
    }

    /**
     * Ottiene lo schema del form.
     * Può essere sovrascritto nelle classi figlie per fornire uno schema personalizzato.
     * RIMOSSO ABSTRACT - questo era l'errore principale!
     *
     * @return array<int|string, \Filament\Forms\Components\Component>
     */
    protected function getFormSchema(): array
    {
        return [];
    }

    /**
     * Ottiene l'utente autenticato.
     * Verifica che l'utente sia un'istanza di Model per permettere aggiornamenti.
     *
     * @return Authenticatable&Model L'utente autenticato
     * @throws \RuntimeException Se l'utente non è autenticato o non è un'istanza di Model
     */
    protected function getUser(): Authenticatable&Model
    {
        $user = Filament::auth()->user();

        if ($user === null) {
            throw new \RuntimeException('Nessun utente autenticato trovato.');
        }

        if (!$user instanceof Model) {
            throw new \RuntimeException('L\'utente autenticato deve essere un modello Eloquent per permettere aggiornamenti.');
        }

        /** @var Authenticatable&Model $user */
        return $user;
    }
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d23ba493 (add calendar)

    /**
     * Verifica se l'utente ha l'accesso alla pagina.
     * Utilizza il sistema di autorizzazioni per controllare l'accesso.
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException Se l'utente non è autorizzato
     */
    protected function authorizeAccess(): void
    {
        $this->authorize('view', static::class);
    }

    /**
     * Verifica se l'utente ha un permesso specifico.
     * Utile per controlli granulari all'interno delle pagine.
     *
     * @param string $permission Il permesso da verificare
>>>>>>> aurmich/dev
     * @return bool True se l'utente ha il permesso, false altrimenti
     */
    protected function hasPermissionTo(string $permission): bool
    {
        $user = $this->getUser();

        // Verifiamo che il metodo hasPermissionTo esista sull'utente
        //if (!method_exists($user, 'hasPermissionTo')) {
        //    throw new \RuntimeException('Il modello utente deve implementare il metodo hasPermissionTo');
        //}

        return $user->hasPermissionTo($permission);
    }

    /**
     * Ottiene la vista associata alla pagina.
     *
     * @return string Il percorso della vista
     */
    public function getView(): string
    {
<<<<<<< HEAD
        if ('' === static::$view) {
=======
        if (static::$view === '') {
>>>>>>> aurmich/dev
            $view = app(GetViewByClassAction::class)->execute(static::class);
            if (view()->exists($view)) {
                return (string) $view;
            }

            // Se non troviamo una vista, lanciamo un'eccezione
<<<<<<< HEAD
            throw new \RuntimeException('Nessuna vista trovata per la classe: '.static::class);
=======
            throw new \RuntimeException("Nessuna vista trovata per la classe: " . static::class);
>>>>>>> aurmich/dev
        }

        return static::$view;
    }

    /**
     * Risolve il percorso della vista.
     *
<<<<<<< HEAD
     * @throws \RuntimeException Se la vista non esiste
     *
     * @return string Il percorso della vista
=======
     * @return string Il percorso della vista
     * @throws \RuntimeException Se la vista non esiste
>>>>>>> aurmich/dev
     */
    protected function resolveViewPath(): string
    {
        $view = $this->getView();
        if (view()->exists($view)) {
            return $view;
        }

<<<<<<< HEAD
        throw new \RuntimeException("View [{$view}] not found for page: ".static::class);
=======
        throw new \RuntimeException("View [{$view}] not found for page: " . static::class);
>>>>>>> aurmich/dev
    }

    /**
     * Ottiene una query builder per il modello associato alla pagina.
     *
<<<<<<< HEAD
     * @throws \LogicException Se il modello non è definito
     *
     * @return Builder<Model>
=======
     * @return Builder<Model>
     * @throws \LogicException Se il modello non è definito
>>>>>>> aurmich/dev
     */
    protected function getQuery(): Builder
    {
        $modelClass = $this->getModel();

<<<<<<< HEAD
        if (! class_exists($modelClass)) {
=======
        if (!class_exists($modelClass)) {
>>>>>>> aurmich/dev
            throw new \LogicException("Model class {$modelClass} does not exist");
        }

        /** @var class-string<Model> $modelClass */
        $instance = new $modelClass();
<<<<<<< HEAD
        if (! $instance instanceof Model) {
=======
        if (!$instance instanceof Model) {
>>>>>>> aurmich/dev
            throw new \LogicException("Class {$modelClass} must extend Eloquent Model");
        }

        /** @var Builder<Model> $query */
        $query = $modelClass::query();
<<<<<<< HEAD

=======
>>>>>>> aurmich/dev
        return $query;
    }

    /**
     * Invalida la cache per il modello specificato.
     *
     * @param class-string<Model>|null $modelClass
<<<<<<< HEAD
=======
     * @param int|string|null $id
     * @return void
>>>>>>> aurmich/dev
     */
    protected function invalidateCache(?string $modelClass = null, int|string|null $id = null): void
    {
        // Implementazione custom se necessaria
        // Per ora lasciamo vuoto, può essere implementato nelle classi figlie
    }
<<<<<<< HEAD

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label(__('filament-panels::resources/pages/edit-record.form.actions.save.label'))
                ->submit('save'),
        ];
    }
}
=======
<<<<<<< HEAD
<<<<<<< HEAD
}
>>>>>>> 54f4fa16 (.)
=======
}
>>>>>>> 7440f060 (delete duplicate folder + add .md)
=======
}
>>>>>>> 15cb84fb (fix collisions)
=======
}
>>>>>>> d23ba493 (add calendar)
>>>>>>> aurmich/dev
