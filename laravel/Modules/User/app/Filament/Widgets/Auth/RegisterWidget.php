<?php
declare(strict_types=1);

namespace Modules\User\Filament\Widgets\Auth;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
use Filament\Forms\Form;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Modules\User\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
>>>>>>> a39073f3 (✨ (phpstan): add multiple PHPStan analysis scripts for systematic error checking)
>>>>>>> 2d644a13 (📝 (docs): resolve merge conflicts and clean up documentation files for localization and PHPStan integration)
=======
>>>>>>> 5ae95119 (✨ (phpstan): add multiple PHPStan analysis scripts for systematic error checking to enhance code quality and maintainability across modules.)
use Filament\Forms\ComponentContainer;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;
use Modules\User\Models\User;
use Modules\Xot\Filament\Widgets\XotBaseWidget;
use Webmozart\Assert\Assert;

class RegisterWidget extends XotBaseWidget
{
    protected static string $view = 'user::widgets.auth.register-widget';
<<<<<<< HEAD

    public static function canView(): bool
    {
        return !Auth::check();
    }
=======
    

>>>>>>> 999c8e14 (✨ (User Module): introduce EditUserWidget for user data modification)

    public function mount(): void
    {
        $this->form->fill([]);
        Log::debug('Registration form initialized', [
            'ip' => request()->ip(),
            'user_agent' => request()->userAgent(),
        ]);
    }

    public function getFormSchema(): array
    {
        return [
            'user_info' => Section::make()
                ->schema([
                    'first_name' => TextInput::make('first_name')
                        ->label(__('user::auth.fields.first_name'))
                        ->required()
                        ->string()
                        ->minLength(2)
                        ->maxLength(255)
                        ->autocomplete('given-name')
                        ->validationAttribute(__('user::auth.fields.first_name')),
                    
                    'last_name' => TextInput::make('last_name')
                        ->label(__('user::auth.fields.last_name'))
                        ->required()
                        ->string()
                        ->minLength(2)
                        ->maxLength(255)
                        ->autocomplete('family-name')
                        ->validationAttribute(__('user::auth.fields.last_name')),
                    
                    'email' => TextInput::make('email')
                        ->label(__('user::auth.fields.email'))
                        ->required()
                        ->email()
                        ->maxLength(255)
                        ->unique(User::class, 'email')
                        ->autocomplete('email')
                        ->validationAttribute(__('user::auth.fields.email'))
                        ->helperText(__('user::auth.help.email')),
                    
                    'password_grid' => Grid::make(2)
                        ->schema([
                            'password' => TextInput::make('password')
                                ->label(__('user::auth.fields.password'))
                                ->password()
                                ->required()
                                ->string()
                                ->minLength(12)
                                ->maxLength(255)
                                ->rules([
                                    'required',
                                    'string',
                                    'min:12',
                                    'regex:/[A-Z]/',
                                    'regex:/[a-z]/',
                                    'regex:/[0-9]/',
                                    'regex:/[^A-Za-z0-9]/'
                                ])
                                ->validationMessages([
                                    'password.regex' => __('user::auth.validation.password.complexity'),
                                ])
                                ->autocomplete('new-password')
                                ->validationAttribute(__('user::auth.fields.password'))
                                ->helperText(__('user::auth.help.password'))
                                ->confirmed(),
                            
                            'password_confirmation' => TextInput::make('password_confirmation')
                                ->label(__('user::auth.fields.password_confirmation'))
                                ->password()
                                ->required()
                                ->string()
                                ->minLength(12)
                                ->maxLength(255)
                                ->autocomplete('new-password')
                                ->validationAttribute(__('user::auth.fields.password_confirmation'))
                                ->dehydrated(false)
                                ->same('password'),
                        ]),
                ]),
        ];
=======
use Filament\Widgets\Widget;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Section;
=======
>>>>>>> e02686c3 (Here is a clean and descriptive commit message:)
=======
use Modules\Xot\Filament\Widgets\XotBaseWidget;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Section;
=======
>>>>>>> aurmich/dev
use Filament\Forms\Form;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Modules\User\Models\User;
<<<<<<< HEAD
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\TextInput as FormsTextInput;

class RegisterWidget extends XotBaseWidget 
{
    protected static string $view = 'user::widgets.auth.register-widget';
    
    public function getFormSchema(): array
    {
        return [
            Form\Components\TextInput::make('name')
                ->label('Nome')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('email')
                ->label('Email')
                ->email()
                ->required()
                ->maxLength(255),

            Forms\Components\TextInput::make('password')
                ->label('Password')
                ->password()
                ->required()
                ->minLength(8),
        ];
    }

    public ?array $data = [];

=======
=======
>>>>>>> b58de900 (.)
use Filament\Forms\Form;
use Modules\User\Models\User;
>>>>>>> a3f7230 (.)
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
=======
use Filament\Forms\Form;
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
=======
>>>>>>> b9902ce9 (feat: add revoke module to console command)
use Filament\Forms\ComponentContainer;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;
use Modules\User\Models\User;
use Modules\Xot\Filament\Widgets\XotBaseWidget;
use Webmozart\Assert\Assert;

class RegisterWidget extends XotBaseWidget
{
    protected static string $view = 'user::widgets.auth.register-widget';
    protected static ?int $sort = 2;
    protected static ?string $maxHeight = '600px';

    public static function canView(): bool
    {
        return !Auth::check();
    }

    public function mount(): void
    {
<<<<<<< HEAD
        $this->form->fill();
>>>>>>> 54f4fa16 (.)
=======
        $this->form->fill([]);
        Log::debug('Registration form initialized', [
            'ip' => request()->ip(),
            'user_agent' => request()->userAgent(),
        ]);
    }

    public function getFormSchema(): array
    {
        return [
            'user_info' => Section::make()
                ->schema([
                    'first_name' => TextInput::make('first_name')
                        ->label(__('user::auth.fields.first_name'))
                        ->required()
                        ->string()
                        ->minLength(2)
                        ->maxLength(255)
                        ->autocomplete('given-name')
                        ->validationAttribute(__('user::auth.fields.first_name')),
                    
                    'last_name' => TextInput::make('last_name')
                        ->label(__('user::auth.fields.last_name'))
                        ->required()
                        ->string()
                        ->minLength(2)
                        ->maxLength(255)
                        ->autocomplete('family-name')
                        ->validationAttribute(__('user::auth.fields.last_name')),
                    
                    'email' => TextInput::make('email')
                        ->label(__('user::auth.fields.email'))
                        ->required()
                        ->email()
                        ->maxLength(255)
                        ->unique(User::class, 'email')
                        ->autocomplete('email')
                        ->validationAttribute(__('user::auth.fields.email'))
                        ->helperText(__('user::auth.help.email')),
                    
                    'password_grid' => Grid::make(2)
                        ->schema([
                            'password' => TextInput::make('password')
                                ->label(__('user::auth.fields.password'))
                                ->password()
                                ->required()
                                ->string()
                                ->minLength(12)
                                ->maxLength(255)
                                ->rules([
                                    'required',
                                    'string',
                                    'min:12',
                                    'regex:/[A-Z]/',
                                    'regex:/[a-z]/',
                                    'regex:/[0-9]/',
                                    'regex:/[^A-Za-z0-9]/'
                                ])
                                ->validationMessages([
                                    'password.regex' => __('user::auth.validation.password.complexity'),
                                ])
                                ->autocomplete('new-password')
                                ->validationAttribute(__('user::auth.fields.password'))
                                ->helperText(__('user::auth.help.password'))
                                ->confirmed(),
                            
                            'password_confirmation' => TextInput::make('password_confirmation')
                                ->label(__('user::auth.fields.password_confirmation'))
                                ->password()
                                ->required()
                                ->string()
                                ->minLength(12)
                                ->maxLength(255)
                                ->autocomplete('new-password')
                                ->validationAttribute(__('user::auth.fields.password_confirmation'))
                                ->dehydrated(false)
                                ->same('password'),
                        ]),
                ]),
        ];
    }

<<<<<<< HEAD
    /**
     * Get user type options for registration.
     *
     * @return array<string, string>
     */
    protected function getUserTypeOptions(): array
    {
        $userTypes = config('moderation.user_types', []);
        $options = [];
        
        foreach ($userTypes as $key => $config) {
            $options[$key] = $config['label'] ?? ucfirst($key);
        }
        
        return $options ?: [
            'standard' => 'Standard User',
            'professional' => 'Professional',
        ];
>>>>>>> b0db4ea8 (fixes)
    }

    /**
     * Configure the form for this widget.
     *
     * @param \Filament\Forms\Form $form
     * @return \Filament\Forms\Form
     */
=======
>>>>>>> b9902ce9 (feat: add revoke module to console command)
    public function form(Form $form): Form
    {
        return $form
<<<<<<< HEAD
<<<<<<< HEAD
            ->schema($this->getFormSchema())
            ->statePath('data')
            ->operation('create');
    }

<<<<<<< HEAD
    public function submit(): void
    {
        try {
            $validatedData = $this->validateForm();
            $this->logRegistrationAttempt($validatedData);
            
            $user = DB::transaction(function () use ($validatedData) {
                $user = $this->createUser($validatedData);
                $this->afterUserCreated($user);
                return $user;
            });
            
            $this->handleSuccessfulRegistration($user);
            
        } catch (ValidationException $e) {
            throw $e;
        } catch (\Exception $e) {
            $this->handleRegistrationError($e);
        }
    }

    protected function validateForm(): array
    {
        $data = $this->form->getState();
        
        return [
<<<<<<< HEAD
            'first_name' => app(\Modules\Xot\Actions\Cast\SafeStringCastAction::class)->execute($data['first_name']),
            'last_name' => app(\Modules\Xot\Actions\Cast\SafeStringCastAction::class)->execute($data['last_name']),
            'email' => app(\Modules\Xot\Actions\Cast\SafeStringCastAction::class)->execute($data['email']),
            'password' => Hash::make(app(\Modules\Xot\Actions\Cast\SafeStringCastAction::class)->execute($data['password'])),
=======
            'first_name' => (string) ($data['first_name'] ?? ''),
            'last_name' => (string) ($data['last_name'] ?? ''),
            'email' => (string) ($data['email'] ?? ''),
            'password' => Hash::make((string) ($data['password'] ?? '')),
>>>>>>> aurmich/dev
            'type' => 'standard',
            'state' => 'pending',
            'email_verified_at' => null,
        ];
    }

    protected function logRegistrationAttempt(array $data): void
    {
<<<<<<< HEAD
        $email = app(\Modules\Xot\Actions\Cast\SafeStringCastAction::class)->execute($data['email']);
=======
        $email = is_string($data['email'] ?? null) ? $data['email'] : '';
>>>>>>> aurmich/dev
        Log::info('Registration attempt', [
            'email_hash' => hash('sha256', $email),
            'ip' => request()->ip(),
            'user_agent' => request()->userAgent(),
        ]);
    }

    protected function createUser(array $data): User
    {
        return User::create($data);
    }

    protected function afterUserCreated(User $user): void
    {
        activity()
            ->causedBy($user)
            ->performedOn($user)
            ->withProperties([
                'type' => $user->type,
                'ip_address' => request()->ip(),
                'user_agent' => request()->userAgent(),
            ])
            ->log('User registered via RegisterWidget');
    }

    protected function handleSuccessfulRegistration(User $user): void
    {
        if (config('auth.must_verify_email')) {
            $user->sendEmailVerificationNotification();
        }

        Auth::login($user);
        
        Notification::make()
            ->title(__('user::auth.registration.success'))
            ->success()
            ->send();
            
        $this->redirect(route('dashboard'));
    }

    protected function handleRegistrationError(\Exception $e): void
    {
        Log::error('Registration failed: ' . $e->getMessage(), [
            'exception' => $e,
            'trace' => $e->getTraceAsString(),
            'ip' => request()->ip(),
            'user_agent' => request()->userAgent(),
        ]);

        throw new \RuntimeException(__('user::auth.registration.error_occurred'));
=======
            ->schema([
                Section::make(__('user::auth.registration.section_title'))
                    ->description(__('user::auth.registration.section_description'))
                    ->schema($this->getFormSchema())
                    ->columns(1),
            ])
            ->statePath('data');
=======
            ->schema($this->getFormSchema())
            ->statePath('data')
            ->operation('create');
>>>>>>> b0db4ea8 (fixes)
    }

    /**
     * Handle form submission with comprehensive error handling and validation.
     *
     * @return void
     * @throws \Illuminate\Validation\ValidationException
     * @throws \RuntimeException
     */
=======
>>>>>>> b9902ce9 (feat: add revoke module to console command)
    public function submit(): void
    {
        try {
            $validatedData = $this->validateForm();
            $this->logRegistrationAttempt($validatedData);
            
            $user = DB::transaction(function () use ($validatedData) {
                $user = $this->createUser($validatedData);
                $this->afterUserCreated($user);
                return $user;
            });
            
            $this->handleSuccessfulRegistration($user);
            
        } catch (ValidationException $e) {
            throw $e;
        } catch (\Exception $e) {
            $this->handleRegistrationError($e);
        }
    }

    protected function validateForm(): array
    {
<<<<<<< HEAD
        try {
            $this->validate();
            $data = $this->form->getState();

            // Type-safe data extraction with explicit validation
            Assert::isArray($data, 'Form data must be an array');
            Assert::keyExists($data, 'name', 'Name is required');
            Assert::keyExists($data, 'email', 'Email is required');
            Assert::keyExists($data, 'password', 'Password is required');
            
            $name = $this->extractStringValue($data, 'name');
            $email = $this->extractStringValue($data, 'email');
            $password = $this->extractStringValue($data, 'password');

            Assert::stringNotEmpty($name, 'Name cannot be empty');
            Assert::stringNotEmpty($email, 'Email cannot be empty');
            Assert::stringNotEmpty($password, 'Password cannot be empty');
            
            // Additional email validation
            Assert::true(filter_var($email, FILTER_VALIDATE_EMAIL) !== false, 'Invalid email format');

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        redirect()->intended(route('dashboard'));
>>>>>>> 54f4fa16 (.)
=======
        return redirect()->intended(route('dashboard'));
>>>>>>> e02686c3 (Here is a clean and descriptive commit message:)
=======
<<<<<<< HEAD
        redirect()->intended(route('dashboard'));
=======
        return redirect()->intended(route('dashboard'));
>>>>>>> aurmich/dev
=======
        return redirect()->intended(route('dashboard'));
>>>>>>> a3f7230 (.)
>>>>>>> b58de900 (.)
=======
        return redirect()->intended(route('dashboard'));
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
=======
            // Create user with proper type casting and validation
            $user = User::create([
                'name' => $name,
                'email' => $email,
                'password' => Hash::make($password),
                'email_verified_at' => null, // Will be verified separately if needed
            ]);

            Assert::notNull($user, 'User creation failed');
            Assert::notNull($user->id, 'User ID is required');

            // Log successful registration for audit trail
            Log::info('User registered successfully', [
                'user_id' => $user->id,
                'email' => $user->email,
                'name' => $user->name,
=======
        $data = $this->form->getState();
        
        return [
            'first_name' => (string) ($data['first_name'] ?? ''),
            'last_name' => (string) ($data['last_name'] ?? ''),
            'email' => (string) ($data['email'] ?? ''),
            'password' => Hash::make((string) ($data['password'] ?? '')),
            'type' => 'standard',
            'state' => 'pending',
            'email_verified_at' => null,
        ];
    }

    protected function logRegistrationAttempt(array $data): void
    {
        $email = is_string($data['email'] ?? null) ? $data['email'] : '';
        Log::info('Registration attempt', [
            'email_hash' => hash('sha256', $email),
            'ip' => request()->ip(),
            'user_agent' => request()->userAgent(),
        ]);
    }

    protected function createUser(array $data): User
    {
        return User::create($data);
    }

    protected function afterUserCreated(User $user): void
    {
        activity()
            ->causedBy($user)
            ->performedOn($user)
            ->withProperties([
<<<<<<< HEAD
                'type' => $userData['type'],
>>>>>>> b0db4ea8 (fixes)
=======
                'type' => $user->type,
>>>>>>> 4211a572 (merge docs folders)
                'ip_address' => request()->ip(),
                'user_agent' => request()->userAgent(),
            ])
            ->log('User registered via RegisterWidget');
    }

<<<<<<< HEAD
    /**
     * Redirect to intended URL or dashboard after registration.
     *
     * @param User $user
     * @return void
     */
}

/**
 * Get user type options for registration.
 *
 * @return array<string, string>
 */
protected function getUserTypeOptions(): array
{
    $userTypes = config('moderation.user_types', []);
    $options = [];
    
    foreach ($userTypes as $key => $config) {
        $options[$key] = $config['label'] ?? ucfirst($key);
    }
    
    return $options ?: [
        'standard' => 'Standard User',
        'professional' => 'Professional',
    ];
}

/**
 * Configure the form for this widget.
 *
 * @param \Filament\Forms\Form $form
 * @return \Filament\Forms\Form
 */
public function form(Form $form): Form
{
    return $form
        ->schema($this->getFormSchema())
        ->statePath('data')
        ->operation('create');
}

/**
 * Handle form submission with comprehensive error handling and validation.
 *
 * @return void
 * @throws \Illuminate\Validation\ValidationException
 * @throws \RuntimeException
 */
public function submit(): void
{
    try {
        // Validate form data first
        $validatedData = $this->validateForm();
        
        // Log registration attempt with hashed PII for security
        $this->logRegistrationAttempt($validatedData);
        
        // Begin database transaction for data integrity
        $user = \DB::transaction(function () use ($validatedData) {
            // Create user with validated data
            $user = $this->createUser($validatedData);
            
            // Trigger any post-registration events
            $this->afterUserCreated($user);
            
            return $user;
        });
        
        // Log successful registration with user ID
        Log::info('User registered successfully', [
            'user_id' => $user->id,
            'email_hash' => hash('sha256', $user->email),
            'ip' => request()->ip(),
            'user_agent' => request()->userAgent(),
        ]);
        
<<<<<<< HEAD
<<<<<<< HEAD
        // Handle null or other types gracefully
        if ($value === null) {
            throw new \Webmozart\Assert\InvalidArgumentException("Value for key '{$key}' cannot be null");
        }
        
        // Attempt safe conversion to string
        if (is_scalar($value)) {
            return trim((string) $value);
        }
        
        throw new \Webmozart\Assert\InvalidArgumentException("Value for key '{$key}' must be a string, " . gettype($value) . ' given');
>>>>>>> 14549b25 (chore(composer.json): update composer configuration to include keywords, license, and additional plugins for better project management and tooling integration)
=======
        session()->flash('status', __('Registration completed successfully'));
>>>>>>> b0db4ea8 (fixes)
=======
        // Send email verification if needed
=======
    protected function handleSuccessfulRegistration(User $user): void
    {
>>>>>>> b9902ce9 (feat: add revoke module to console command)
        if (config('auth.must_verify_email')) {
            $user->sendEmailVerificationNotification();
        }

        Auth::login($user);
        
        Notification::make()
            ->title(__('user::auth.registration.success'))
            ->success()
            ->send();
            
        $this->redirect(route('dashboard'));
    }

    protected function handleRegistrationError(\Exception $e): void
    {
        Log::error('Registration failed: ' . $e->getMessage(), [
            'exception' => $e,
            'trace' => $e->getTraceAsString(),
            'ip' => request()->ip(),
            'user_agent' => request()->userAgent(),
        ]);

        throw new \RuntimeException(__('user::auth.registration.error_occurred'));
>>>>>>> 4211a572 (merge docs folders)
    }
}
