<?php

declare(strict_types=1);

namespace Modules\User\Filament\Widgets;

use Filament\Forms\Form;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Filament\Widgets\Widget;
use Illuminate\Http\Request;
use Webmozart\Assert\Assert;
use Modules\Xot\Datas\XotData;
use Livewire\Attributes\Validate;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Modules\Xot\Contracts\UserContract;
use Filament\Forms\Components\Wizard\Step;
use Filament\Forms\Concerns\InteractsWithForms;
use Modules\Xot\Filament\Widgets\XotBaseWidget;
use Illuminate\Support\Facades\Log;

/**
 * EditUserWidget: Widget generico per la modifica dati utente.
 * 
 * Segue il pattern di delegazione del RegistrationWidget:
 * - Raccoglie i dati dal form
 * - Determina dinamicamente la risorsa, il modello e l'action da eseguire
 * - Delega la logica di salvataggio a una UpdateAction specifica del modulo
 * 
 * Il widget è completamente generico e riutilizzabile per qualsiasi tipo di utente.
<<<<<<< HEAD
 * 
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 * 
=======
=======
>>>>>>> b94d1b23 (✨ (User Module): introduce UpdateUserAction for doctor-specific user updates)
=======
=======
>>>>>>> 4c632a28 (✨ (bashscripts): add new scripts for managing MCP MySQL server and PHPStan analysis)
>>>>>>> f3af6b23 (📝 (bugfix.txt): remove merge conflict markers and clean up documentation for clarity and readability)
 *
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
=======
 * 
>>>>>>> 0dff6a67 (♻️ (studio.php, RegisterWidget.php, EditUserWidget.php, LoginWidgetTest.php, XotBaseWidget.php): remove merge conflict markers and clean up code to ensure proper functionality and readability)
>>>>>>> aurmich/dev
 * @property-read string $type
 * @property-read string $resource
 * @property-read string $model
 * @property-read string $action
 * @property-read Model $record
 * @property array|null $data
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 */
class EditUserWidget extends XotBaseWidget
{
    /** @var array<string, mixed>|null */
    public ?array $data = [];
    
<<<<<<< HEAD
<<<<<<< HEAD
    /** @var array<string, int|null>|int|string */
=======
    /** @var int|string|array<string, mixed> */
>>>>>>> aurmich/dev
=======
    /** @var array<string, int|null>|int|string */
>>>>>>> 345f8677 (phpstan)
    protected int | string | array $columnSpan = 'full';
    
=======
=======
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
=======
>>>>>>> f3af6b23 (📝 (bugfix.txt): remove merge conflict markers and clean up documentation for clarity and readability)
=======
>>>>>>> 0dff6a67 (♻️ (studio.php, RegisterWidget.php, EditUserWidget.php, LoginWidgetTest.php, XotBaseWidget.php): remove merge conflict markers and clean up code to ensure proper functionality and readability)
>>>>>>> aurmich/dev
 */
class EditUserWidget extends XotBaseWidget
{
    /** @var array<string, mixed>|null */
    public ?array $data = [];
    
    /** @var array<string, int|null>|int|string */
    protected int | string | array $columnSpan = 'full';
<<<<<<< HEAD
    
=======
<<<<<<< HEAD
>>>>>>> b58de900 (.)
=======
    
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
=======
=======
=======
>>>>>>> 4c632a28 (✨ (bashscripts): add new scripts for managing MCP MySQL server and PHPStan analysis)
 */
class EditUserWidget extends XotBaseWidget
{
    /** @var array<string, mixed>|null */
    public ?array $data = [];
    
    /** @var int|string|array<string, mixed> */
    protected int | string | array $columnSpan = 'full';
<<<<<<< HEAD
>>>>>>> 999c8e14 (✨ (User Module): introduce EditUserWidget for user data modification)
<<<<<<< HEAD
>>>>>>> b94d1b23 (✨ (User Module): introduce UpdateUserAction for doctor-specific user updates)
=======
=======
    
>>>>>>> 4c632a28 (✨ (bashscripts): add new scripts for managing MCP MySQL server and PHPStan analysis)
>>>>>>> f3af6b23 (📝 (bugfix.txt): remove merge conflict markers and clean up documentation for clarity and readability)
=======
>>>>>>> 0dff6a67 (♻️ (studio.php, RegisterWidget.php, EditUserWidget.php, LoginWidgetTest.php, XotBaseWidget.php): remove merge conflict markers and clean up code to ensure proper functionality and readability)
>>>>>>> aurmich/dev
    public string $type;
    public string $resource;
    public string $model;
    public string $action;
    public Model $record;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev

    /**
     * @phpstan-ignore-next-line
     */
<<<<<<< HEAD
=======
=======
    
>>>>>>> aurmich/dev
>>>>>>> aurmich/dev
    protected static string $view = 'pub_theme::filament.widgets.edit-user';

    /**
     * Initialize the widget with user type and optional user ID.
     *
     * @param string $type
     * @param int|null $userId
     * @return void
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
    
    protected static string $view = 'pub_theme::filament.widgets.edit-user';

<<<<<<< HEAD
>>>>>>> b58de900 (.)
=======
    /**
     * Initialize the widget with user type and optional user ID.
     *
     * @param string $type
     * @param int|null $userId
     * @return void
     */
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
=======
>>>>>>> 999c8e14 (✨ (User Module): introduce EditUserWidget for user data modification)
<<<<<<< HEAD
>>>>>>> b94d1b23 (✨ (User Module): introduce UpdateUserAction for doctor-specific user updates)
=======
=======
>>>>>>> 4c632a28 (✨ (bashscripts): add new scripts for managing MCP MySQL server and PHPStan analysis)
>>>>>>> f3af6b23 (📝 (bugfix.txt): remove merge conflict markers and clean up documentation for clarity and readability)
=======
>>>>>>> 0dff6a67 (♻️ (studio.php, RegisterWidget.php, EditUserWidget.php, LoginWidgetTest.php, XotBaseWidget.php): remove merge conflict markers and clean up code to ensure proper functionality and readability)
>>>>>>> aurmich/dev
    public function mount(string $type, ?int $userId = null): void
    {
        $this->type = $type;
        $this->resource = XotData::make()->getUserResourceClassByType($type);
        $this->model = $this->resource::getModel();
        $this->action = Str::of($this->model)->replace('\Models\\', '\Actions\\')->append('\UpdateUserAction')->toString();
        
        $record = $this->getFormModel($userId);
        $data = $this->getFormFill();
        
        $this->form->fill($data);
        $this->form->model($record);
        $this->data = $data;
        $this->record = $record;
    }

    /**
     * Ottiene il modello per il form.
     * Se viene fornito un userId, carica quell'utente, altrimenti usa l'utente autenticato.
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b94d1b23 (✨ (User Module): introduce UpdateUserAction for doctor-specific user updates)
=======
>>>>>>> f3af6b23 (📝 (bugfix.txt): remove merge conflict markers and clean up documentation for clarity and readability)
=======
>>>>>>> 0dff6a67 (♻️ (studio.php, RegisterWidget.php, EditUserWidget.php, LoginWidgetTest.php, XotBaseWidget.php): remove merge conflict markers and clean up code to ensure proper functionality and readability)
>>>>>>> aurmich/dev
     *
     * @param int|null $userId
     * @return Model
     */
    protected function getFormModel(?int $userId = null): Model
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
     *
     * @param int|null $userId
     * @return Model
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
     */
    public function getFormModel(?int $userId = null): Model
>>>>>>> b58de900 (.)
=======
>>>>>>> 0dff6a67 (♻️ (studio.php, RegisterWidget.php, EditUserWidget.php, LoginWidgetTest.php, XotBaseWidget.php): remove merge conflict markers and clean up code to ensure proper functionality and readability)
>>>>>>> aurmich/dev
    {
        if ($userId) {
            $user = $this->model::findOrFail($userId);
            return $user;
        }

        // Se non è specificato un userId, usa l'utente correntemente autenticato
        $currentUser = Auth::user();
        if ($currentUser && $currentUser instanceof $this->model) {
            return $currentUser;
        }

        // Fallback: cerca un utente del tipo corretto associato all'utente autenticato
        if ($currentUser) {
            $user = $this->model::where('user_id', $currentUser->id)->first();
            if ($user) {
                return $user;
            }
        }

        // Ultimo fallback: nuovo modello
        return app($this->model);
    }

    /**
     * Ottiene i dati per il riempimento del form.
<<<<<<< HEAD
     *
     * @return array<string, mixed>
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @return array<string, mixed>
=======
>>>>>>> b58de900 (.)
=======
     *
     * @return array<string, mixed>
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
=======
=======
>>>>>>> f3af6b23 (📝 (bugfix.txt): remove merge conflict markers and clean up documentation for clarity and readability)
     *
     * @return array<string, mixed>
=======
>>>>>>> 999c8e14 (✨ (User Module): introduce EditUserWidget for user data modification)
<<<<<<< HEAD
>>>>>>> b94d1b23 (✨ (User Module): introduce UpdateUserAction for doctor-specific user updates)
=======
=======
     *
     * @return array<string, mixed>
>>>>>>> 4c632a28 (✨ (bashscripts): add new scripts for managing MCP MySQL server and PHPStan analysis)
>>>>>>> f3af6b23 (📝 (bugfix.txt): remove merge conflict markers and clean up documentation for clarity and readability)
=======
     *
     * @return array<string, mixed>
>>>>>>> 0dff6a67 (♻️ (studio.php, RegisterWidget.php, EditUserWidget.php, LoginWidgetTest.php, XotBaseWidget.php): remove merge conflict markers and clean up code to ensure proper functionality and readability)
>>>>>>> aurmich/dev
     */
    public function getFormFill(): array
    {
        $model = $this->record ?? $this->getFormModel();
        
        // Se il modello ha un ID, significa che è stato trovato nel database
        if ($model->exists) {
            try {
                return $model->toArray();
            } catch (\Exception $e) {
                // Se toArray() fallisce (problemi con enum), usa getAttributes()
                Log::warning("Errore in toArray() per modello {$this->model}: " . $e->getMessage());
                $attributes = $model->getAttributes();
                
                // Gestisci specificamente gli enum se presenti
<<<<<<< HEAD
                if (isset($attributes['type']) && property_exists($model, 'type') && $model->type instanceof \BackedEnum) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                if (isset($attributes['type']) && property_exists($model, 'type') && $model->type instanceof \BackedEnum) {
=======
                if (isset($attributes['type']) && $model->type instanceof \BackedEnum) {
>>>>>>> aurmich/dev
=======
                if (isset($attributes['type']) && property_exists($model, 'type') && $model->type instanceof \BackedEnum) {
>>>>>>> 345f8677 (phpstan)
=======
                if (isset($attributes['type']) && $model->type instanceof \BackedEnum) {
>>>>>>> b58de900 (.)
=======
                if (isset($attributes['type']) && property_exists($model, 'type') && $model->type instanceof \BackedEnum) {
>>>>>>> 345f8677 (phpstan)
>>>>>>> aurmich/dev
                    $attributes['type'] = $model->type->value;
                }
                
                return $attributes;
            }
        }
        
        // Se è un nuovo modello, restituisci solo i campi fillable con valori null
        $fillable = $model->getFillable();
        $appends = $model->getAppends();
        $fields = array_merge($fillable, $appends);
        
        return array_fill_keys($fields, null);
    }

    /**
     * Ottiene lo schema del form dalla resource.
<<<<<<< HEAD
     *
     * @return array<int|string, \Filament\Forms\Components\Component>
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @return array<int|string, \Filament\Forms\Components\Component>
=======
>>>>>>> b58de900 (.)
=======
     *
     * @return array<string, mixed>
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
=======
=======
>>>>>>> f3af6b23 (📝 (bugfix.txt): remove merge conflict markers and clean up documentation for clarity and readability)
     *
     * @return array<string, mixed>
=======
>>>>>>> 999c8e14 (✨ (User Module): introduce EditUserWidget for user data modification)
<<<<<<< HEAD
>>>>>>> b94d1b23 (✨ (User Module): introduce UpdateUserAction for doctor-specific user updates)
=======
=======
     *
     * @return array<string, mixed>
>>>>>>> 4c632a28 (✨ (bashscripts): add new scripts for managing MCP MySQL server and PHPStan analysis)
>>>>>>> f3af6b23 (📝 (bugfix.txt): remove merge conflict markers and clean up documentation for clarity and readability)
=======
     *
     * @return array<int|string, \Filament\Forms\Components\Component>
>>>>>>> 0dff6a67 (♻️ (studio.php, RegisterWidget.php, EditUserWidget.php, LoginWidgetTest.php, XotBaseWidget.php): remove merge conflict markers and clean up code to ensure proper functionality and readability)
>>>>>>> aurmich/dev
     */
    public function getFormSchema(): array
    {
        return $this->resource::getFormSchemaWidget();
    }

    /**
     * Gestisce il salvataggio delle modifiche delegando all'action specifica.
     * 
     * @see https://filamentphp.com/docs/3.x/forms/adding-a-form-to-a-livewire-component
<<<<<<< HEAD
     *
     * @return \Illuminate\Http\RedirectResponse|\Livewire\Features\SupportRedirects\Redirector
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @return \Illuminate\Http\RedirectResponse|\Livewire\Features\SupportRedirects\Redirector
=======
>>>>>>> b58de900 (.)
=======
     *
     * @return \Illuminate\Http\RedirectResponse|\Livewire\Features\SupportRedirects\Redirector
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
=======
=======
>>>>>>> f3af6b23 (📝 (bugfix.txt): remove merge conflict markers and clean up documentation for clarity and readability)
     *
     * @return \Illuminate\Http\RedirectResponse|\Livewire\Features\SupportRedirects\Redirector
=======
>>>>>>> 999c8e14 (✨ (User Module): introduce EditUserWidget for user data modification)
<<<<<<< HEAD
>>>>>>> b94d1b23 (✨ (User Module): introduce UpdateUserAction for doctor-specific user updates)
=======
=======
     *
     * @return \Illuminate\Http\RedirectResponse|\Livewire\Features\SupportRedirects\Redirector
>>>>>>> 4c632a28 (✨ (bashscripts): add new scripts for managing MCP MySQL server and PHPStan analysis)
>>>>>>> f3af6b23 (📝 (bugfix.txt): remove merge conflict markers and clean up documentation for clarity and readability)
=======
     *
     * @return \Illuminate\Http\RedirectResponse|\Livewire\Features\SupportRedirects\Redirector
>>>>>>> 0dff6a67 (♻️ (studio.php, RegisterWidget.php, EditUserWidget.php, LoginWidgetTest.php, XotBaseWidget.php): remove merge conflict markers and clean up code to ensure proper functionality and readability)
>>>>>>> aurmich/dev
     */
    public function updateUser(): \Illuminate\Http\RedirectResponse|\Livewire\Features\SupportRedirects\Redirector
    {
        $data = $this->form->getState();
        $record = $this->record;
       
        // Delega l'aggiornamento all'action specifica
        $user = app($this->action)->execute($record, $data);
        
        // Notifica successo
        session()->flash('message', __('user::profile.update_success'));
        
        // Aggiorna il form con i nuovi dati
        $this->form->fill($this->getFormFill());
        
        return redirect()->back();
    }

    /**
     * Controlla se l'utente può modificare il record corrente.
<<<<<<< HEAD
     *
     * @return bool
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @return bool
=======
>>>>>>> b58de900 (.)
=======
     *
     * @return bool
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
=======
=======
>>>>>>> f3af6b23 (📝 (bugfix.txt): remove merge conflict markers and clean up documentation for clarity and readability)
     *
     * @return bool
=======
>>>>>>> 999c8e14 (✨ (User Module): introduce EditUserWidget for user data modification)
<<<<<<< HEAD
>>>>>>> b94d1b23 (✨ (User Module): introduce UpdateUserAction for doctor-specific user updates)
=======
=======
     *
     * @return bool
>>>>>>> 4c632a28 (✨ (bashscripts): add new scripts for managing MCP MySQL server and PHPStan analysis)
>>>>>>> f3af6b23 (📝 (bugfix.txt): remove merge conflict markers and clean up documentation for clarity and readability)
=======
     *
     * @return bool
>>>>>>> 0dff6a67 (♻️ (studio.php, RegisterWidget.php, EditUserWidget.php, LoginWidgetTest.php, XotBaseWidget.php): remove merge conflict markers and clean up code to ensure proper functionality and readability)
>>>>>>> aurmich/dev
     */
    public function canEdit(): bool
    {
        $currentUser = Auth::user();
        
        // L'utente può modificare solo il proprio profilo
        return $currentUser && (
<<<<<<< HEAD
            (property_exists($currentUser, 'id') && property_exists($this->record, 'id') && $currentUser->id === $this->record->id) ||
            (property_exists($currentUser, 'id') && $currentUser->id === ($this->record->user_id ?? null))
        );
    }
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            (property_exists($currentUser, 'id') && property_exists($this->record, 'id') && $currentUser->id === $this->record->id) ||
            (property_exists($currentUser, 'id') && $currentUser->id === ($this->record->user_id ?? null))
=======
            $currentUser->id === $this->record->id ||
            $currentUser->id === ($this->record->user_id ?? null)
>>>>>>> aurmich/dev
=======
            (property_exists($currentUser, 'id') && property_exists($this->record, 'id') && $currentUser->id === $this->record->id) ||
            (property_exists($currentUser, 'id') && $currentUser->id === ($this->record->user_id ?? null))
>>>>>>> 345f8677 (phpstan)
        );
=======
            $currentUser->id === $this->record->id ||
            $currentUser->id === ($this->record->user_id ?? null)
=======
            (property_exists($currentUser, 'id') && property_exists($this->record, 'id') && $currentUser->id === $this->record->id) ||
            (property_exists($currentUser, 'id') && $currentUser->id === ($this->record->user_id ?? null))
>>>>>>> 345f8677 (phpstan)
        );
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
} 
>>>>>>> b58de900 (.)
=======
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Modules\Xot\Filament\Widgets\XotBaseWidget;
use Modules\User\Models\User;
use Modules\Xot\Datas\XotData;

class EditUserWidget extends XotBaseWidget implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];
    protected int | string | array $columnSpan = 'full';
    public User $record;
    protected static string $view = 'user::filament.widgets.edit-user';

    public function mount(User $record): void
    {
        $this->record = $record;
        $this->form->fill([
            'name' => $record->name,
            'first_name' => $record->first_name,
            'last_name' => $record->last_name,
            'email' => $record->email,
            'lang' => $record->lang,
            'is_active' => $record->is_active,
            'is_otp' => $record->is_otp,
            'profile_photo_path' => $record->profile_photo_path,
            'password_expires_at' => $record->password_expires_at,
        ]);
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema($this->getFormSchema())
            ->statePath('data');
    }

    /**
     * Get the form schema for editing user profile.
     *
     * @return array<string, \Filament\Forms\Components\Component>
     */
    public function getFormSchema(): array
    {
        return [
            'personal_info' => Section::make()
                ->schema([
                    'profile_photo_path' => FileUpload::make('profile_photo_path')
                        ->avatar()
                        ->imageEditor()
                        ->directory('profile-photos')
                        ->visibility('public')
                        ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                        ->maxSize(2048),

                    'name_grid' => Grid::make(2)
                        ->schema([
                            'first_name' => TextInput::make('first_name')
                                ->required()
                                ->maxLength(255),

                            'last_name' => TextInput::make('last_name')
                                ->required()
                                ->maxLength(255),
                        ]),

                    'name' => TextInput::make('name')
                        ->required()
                        ->maxLength(255),

                    'email' => TextInput::make('email')
                        ->email()
                        ->required()
                        ->unique(User::class, 'email', ignoreRecord: true)
                        ->maxLength(255),
                ]),

            'preferences' => Section::make()
                ->schema([
                    'lang' => Select::make('lang')
                        ->options([
                            'it' => __('user::widgets.edit_user.fields.lang.options.it'),
                            'en' => __('user::widgets.edit_user.fields.lang.options.en'),
                            'es' => __('user::widgets.edit_user.fields.lang.options.es'),
                            'fr' => __('user::widgets.edit_user.fields.lang.options.fr'),
                            'de' => __('user::widgets.edit_user.fields.lang.options.de'),
                        ])
                        ->default('it'),
                ]),

            'security' => Section::make()
                ->schema([
                    'password_grid' => Grid::make(2)
                        ->schema([
                            'password' => TextInput::make('password')
                                ->password()
                                ->dehydrated(fn ($state): bool => filled($state))
                                ->rule(Password::default())
                                ->autocomplete('new-password'),

                            'password_confirmation' => TextInput::make('password_confirmation')
                                ->password()
                                ->same('password')
                                ->dehydrated(false)
                                ->autocomplete('new-password'),
                        ]),

                    'security_options' => Grid::make(2)
                        ->schema([
                            'is_otp' => Toggle::make('is_otp'),

                            'password_expires_at' => DateTimePicker::make('password_expires_at')
                                ->native(false)
                                ->displayFormat('d/m/Y H:i'),
                        ]),
                ])
                ->visible(fn (): bool => $this->canEditSecurity()),

            'admin_settings' => Section::make()
                ->schema([
                    'is_active' => Toggle::make('is_active'),
                ])
                ->visible(fn (): bool => $this->canEditAdminSettings()),
        ];
    }

    /**
     * Get form actions.
     *
     * @return array<\Filament\Forms\Components\Actions\Action>
     */
    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->action('save')
                ->color('primary'),

            Action::make('cancel')
                ->action('cancel')
                ->color('gray'),
        ];
    }

    /**
     * Save the form data.
     */
    public function save(): void
    {
        $data = $this->form->getState();

        // Hash password if provided
        if (filled($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }

        // Update the record
        $this->record->update($data);

        Notification::make()
            ->title(__('user::widgets.edit_user.messages.saved'))
            ->success()
            ->send();

        // Redirect or emit event as needed
        $this->dispatch('user-updated', userId: $this->record->id);
    }

    /**
     * Cancel editing.
     */
    public function cancel(): void
    {
        $this->form->fill([
            'name' => $this->record->name,
            'first_name' => $this->record->first_name,
            'last_name' => $this->record->last_name,
            'email' => $this->record->email,
            'lang' => $this->record->lang,
            'is_active' => $this->record->is_active,
            'is_otp' => $this->record->is_otp,
            'profile_photo_path' => $this->record->profile_photo_path,
            'password_expires_at' => $this->record->password_expires_at,
        ]);

        Notification::make()
            ->title(__('user::widgets.edit_user.messages.cancelled'))
            ->warning()
            ->send();
    }

    /**
     * Check if current user can edit security settings.
     */
    protected function canEditSecurity(): bool
    {
        $currentUser = auth()->user();
        
        // User can edit their own security settings
        if ($currentUser && $currentUser->id === $this->record->id) {
            return true;
        }

        // Admin can edit any user's security settings
        return $currentUser && $currentUser->hasRole('admin');
    }

    /**
     * Check if current user can edit admin settings.
     */
    protected function canEditAdminSettings(): bool
    {
        $currentUser = auth()->user();
        
        // Only admin can edit admin settings
        return $currentUser && $currentUser->hasRole('admin');
    }

    /**
     * Check if current user can edit this record.
     */
    protected function canEdit(): bool
    {
        $currentUser = auth()->user();
        
        // User can edit their own profile
        if ($currentUser && $currentUser->id === $this->record->id) {
            return true;
        }

        // Admin can edit any profile
        return $currentUser && $currentUser->hasRole('admin');
>>>>>>> efb0f4d1 (feat: add EditUserWidget with localization and documentation)
    }
=======
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
=======
>>>>>>> b94d1b23 (✨ (User Module): introduce UpdateUserAction for doctor-specific user updates)
=======
>>>>>>> f3af6b23 (📝 (bugfix.txt): remove merge conflict markers and clean up documentation for clarity and readability)
=======
>>>>>>> 0dff6a67 (♻️ (studio.php, RegisterWidget.php, EditUserWidget.php, LoginWidgetTest.php, XotBaseWidget.php): remove merge conflict markers and clean up code to ensure proper functionality and readability)
>>>>>>> aurmich/dev
}
