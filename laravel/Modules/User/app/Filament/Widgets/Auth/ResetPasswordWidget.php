<?php

declare(strict_types=1);

namespace Modules\User\Filament\Widgets\Auth;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Filament\Forms;
use Modules\Xot\Filament\Widgets\XotBaseWidget;

class ResetPasswordWidget extends XotBaseWidget
{
    protected static string $view = 'user::widgets.auth.reset-password-widget';

=======
=======
>>>>>>> a3f7230 (.)
>>>>>>> b58de900 (.)
use Filament\Forms;
use Filament\Forms\Form;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Arr;
=======
>>>>>>> aurmich/dev
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
=======
use Filament\Forms;
use Filament\Forms\Form;
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
=======
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
>>>>>>> b0db4ea8 (fixes)
use Filament\Forms\ComponentContainer;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Facades\Password;
use Modules\Xot\Filament\Widgets\XotBaseWidget;

/**
 * Reset password widget for user password reset functionality.
 *
<<<<<<< HEAD
<<<<<<< HEAD
 * Handles password reset functionality with token validation,
 * proper security measures, and user feedback. Follows Laraxot
 * architectural patterns and security best practices.
 *
 * @property ComponentContainer $form Form container from XotBaseWidget
=======
 * @property ComponentContainer $form
 * @property array<string, mixed>|null $data
<<<<<<< HEAD
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
=======
 * @property string|null $token
 *
 * @extends XotBaseWidget
>>>>>>> 14549b25 (chore(composer.json): update composer configuration to include keywords, license, and additional plugins for better project management and tooling integration)
=======
 * Handles password reset functionality with token validation,
 * proper security measures, and user feedback. Follows Laraxot
 * architectural patterns and security best practices.
 *
 * @property ComponentContainer $form Form container from XotBaseWidget
>>>>>>> b0db4ea8 (fixes)
 */
class ResetPasswordWidget extends XotBaseWidget
{
    /**
     * The view for this widget.
     *
     * @var view-string
     */
    protected static string $view = 'user::widgets.auth.reset-password-widget';

    /**
<<<<<<< HEAD
<<<<<<< HEAD
=======
     * Widget data array.
     * 
     * CRITICAL: Do not remove or redeclare this property - it's managed by XotBaseWidget.
     *
     * @var array<string, mixed>|null
     */
    public ?array $data = [];

    /**
     * Column span for the widget layout.
     *
     * @var int|string|array<string, mixed>
     */
    protected int | string | array $columnSpan = 'full';

    /**
     * Reset token from the request.
     *
     * @var string|null
     */
    public ?string $token = null;

    /**
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
=======
>>>>>>> b0db4ea8 (fixes)
     * Get the form schema for password reset.
     *
     * Uses string keys for Filament form compatibility and follows
     * the pattern established in widget documentation.
     *
     * @return array<string, \Filament\Forms\Components\Component>
     */
    public function getFormSchema(): array
    {
        return [
            'email' => TextInput::make('email')
                ->email()
                ->required()
                ->autocomplete('email'),
            'password' => TextInput::make('password')
                ->password()
                ->required()
                ->minLength(8)
                ->same('password_confirmation')
                ->autocomplete('new-password'),
            'password_confirmation' => TextInput::make('password_confirmation')
                ->password()
                ->required()
                ->autocomplete('new-password'),
        ];
    }

    /**
     * Mount the widget and initialize the form.
     *
     * @return void
     */
    public function mount(): void
    {
        $this->form->fill();
    }

    /**
     * Configure the form for this widget.
     *
     * @param \Filament\Forms\Form $form
     * @return \Filament\Forms\Form
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
=======
>>>>>>> e02686c3 (Here is a clean and descriptive commit message:)
use Filament\Forms;
use Filament\Forms\Form;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Filament\Forms\ComponentContainer;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Facades\Password;
use Modules\Xot\Filament\Widgets\XotBaseWidget;

/**
 * Reset password widget for user password reset functionality.
 *
 * @property ComponentContainer $form
 */
class ResetPasswordWidget extends XotBaseWidget
{
    /**
     * The view for this widget.
     *
     * @var view-string
     */
    protected static string $view = 'user::widgets.auth.reset-password-widget';

<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======
    /**
     * Widget data array.
     * 
     * CRITICAL: Do not remove or redeclare this property - it's managed by XotBaseWidget.
     *
     * @var array<string, mixed>|null
     */
    public ?array $data = [];

    /**
     * Get the form schema for password reset.
     *
     * @return array<string, \Filament\Forms\Components\Component>
     */
    public function getFormSchema(): array
    {
        return [
            'email' => TextInput::make('email')
                ->email()
                ->required()
                ->autocomplete('email'),
            'password' => TextInput::make('password')
                ->password()
                ->required()
                ->minLength(8)
                ->same('password_confirmation')
                ->autocomplete('new-password'),
            'password_confirmation' => TextInput::make('password_confirmation')
                ->password()
                ->required()
                ->autocomplete('new-password'),
        ];
    }

<<<<<<< HEAD
>>>>>>> e02686c3 (Here is a clean and descriptive commit message:)
=======
    /**
     * Mount the widget and initialize the form.
     *
     * @return void
     */
    public function mount(): void
    {
        $this->form->fill();
    }

    /**
     * Configure the form for this widget.
     *
     * @param \Filament\Forms\Form $form
     * @return \Filament\Forms\Form
     */
>>>>>>> a3174e5b (phpstan)
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
>>>>>>> a3f7230 (.)
>>>>>>> b58de900 (.)
=======
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
    public function form(Form $form): Form
    {
        return $form
            ->schema([
<<<<<<< HEAD
<<<<<<< HEAD
                Section::make()
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                    ->schema($this->getFormSchema())
=======
                    ->schema([
                        TextInput::make('email')
                            ->email()
                            ->required()
                            ->autocomplete('email'),

                        TextInput::make('password')
                            ->password()
                            ->required()
                            ->minLength(8)
                            ->same('password_confirmation')
                            ->autocomplete('new-password'),

                        TextInput::make('password_confirmation')
                            ->password()
                            ->required()
                            ->autocomplete('new-password'),
                    ])
>>>>>>> 54f4fa16 (.)
=======
                    ->schema($this->getFormSchema())
>>>>>>> a3174e5b (phpstan)
=======
                    ->schema([
                        TextInput::make('email')
                            ->email()
                            ->required()
                            ->autocomplete('email'),

                        TextInput::make('password')
                            ->password()
                            ->required()
                            ->minLength(8)
                            ->same('password_confirmation')
                            ->autocomplete('new-password'),

                        TextInput::make('password_confirmation')
                            ->password()
                            ->required()
                            ->autocomplete('new-password'),
                    ])
=======
                    ->schema($this->getFormSchema())
>>>>>>> aurmich/dev
=======
                    ->schema($this->getFormSchema())
>>>>>>> a3f7230 (.)
>>>>>>> b58de900 (.)
=======
                Section::make(__('user::auth.reset_password.section_title'))
                    ->description(__('user::auth.reset_password.section_description'))
=======
                Section::make()
>>>>>>> b0db4ea8 (fixes)
                    ->schema($this->getFormSchema())
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
                    ->columns(1),
            ])
            ->statePath('data');
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * Handle password reset with proper security and error handling.
<<<<<<< HEAD
     *
     * Implements Laravel's password reset functionality with explicit
     * type casting for security and proper error feedback.
=======
=======
    public function resetPassword(): void
=======
=======
>>>>>>> a3f7230 (.)
>>>>>>> b58de900 (.)
    /**
     * Handle password reset.
>>>>>>> a3174e5b (phpstan)
=======
    /**
<<<<<<< HEAD
     * Handle password reset with comprehensive error handling.
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
=======
     * Handle password reset with comprehensive error handling and type safety.
>>>>>>> 14549b25 (chore(composer.json): update composer configuration to include keywords, license, and additional plugins for better project management and tooling integration)
=======
>>>>>>> b0db4ea8 (fixes)
     *
     * Implements Laravel's password reset functionality with explicit
     * type casting for security and proper error feedback.
     *
     * @return \Illuminate\Http\RedirectResponse|void
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function resetPassword()
<<<<<<< HEAD
<<<<<<< HEAD
    {
        $data = $this->form->getState();

<<<<<<< HEAD
        $reset_data =Arr::only($data,['email','password','password_confirmation','token']);
        $status = Password::reset( $reset_data,
=======
        $status = Password::reset(
            [
                'email' => (string) $data['email'],
                'password' => (string) $data['password'],
                'password_confirmation' => (string) $data['password_confirmation'],
                'token' => (string) request()->route('token'),
            ],
>>>>>>> aurmich/dev
            function ($user, $password): void {
=======
    public function resetPassword(): void
=======
>>>>>>> a3174e5b (phpstan)
=======
>>>>>>> aurmich/dev
=======
>>>>>>> a3f7230 (.)
>>>>>>> b58de900 (.)
=======
    public function resetPassword(): \Illuminate\Http\RedirectResponse|\Livewire\Features\SupportRedirects\Redirector
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
=======
    public function resetPassword()
>>>>>>> b0db4ea8 (fixes)
    {
        $data = $this->form->getState();

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $status = Password::reset(
            [
<<<<<<< HEAD
<<<<<<< HEAD
                'email' => $data['email'],
                'password' => $data['password'],
                'password_confirmation' => $data['password_confirmation'],
                'token' => request()->route('token'),
            ],
            function ($user, $password) {
=======
=======
>>>>>>> a3f7230 (.)
=======
        $status = Password::reset(
            [
>>>>>>> b0db4ea8 (fixes)
                'email' => (string) $data['email'],
                'password' => (string) $data['password'],
                'password_confirmation' => (string) $data['password_confirmation'],
                'token' => (string) request()->route('token'),
            ],
<<<<<<< HEAD
<<<<<<< HEAD
            function ($user, $password) {
>>>>>>> 54f4fa16 (.)
=======
            function ($user, $password): void {
<<<<<<< HEAD
>>>>>>> a3174e5b (phpstan)
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
>>>>>>> a3f7230 (.)
>>>>>>> b58de900 (.)
=======
            function ($user, $password): void {
>>>>>>> b0db4ea8 (fixes)
                $user->forceFill([
                    'password' => Hash::make($password),
                    'remember_token' => Str::random(60),
                ])->save();
<<<<<<< HEAD
=======
            // Type-safe data extraction
            $email = (string) ($data['email'] ?? '');
            $password = (string) ($data['password'] ?? '');
            $passwordConfirmation = (string) ($data['password_confirmation'] ?? '');
            $token = (string) ($data['token'] ?? $this->token ?? '');

            if (empty($email) || empty($password) || empty($token)) {
                throw ValidationException::withMessages([
                    'email' => [__('user::auth.validation.required_fields')],
                ]);
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
            }

<<<<<<< HEAD
        if ($status === Password::PASSWORD_RESET) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            session()->flash('status', __($status));
            return redirect()->route('login');
        } else {
            /** @phpstan-ignore-next-line */
            $this->addError('email', __($status));
=======
=======
            session()->flash('status', __($status));
            redirect()->route('login');
        } else {
            $this->addError('email', __($status));
        }
    }

    public function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('email')
                ->email()
                ->required()
                ->maxLength(255),

            Forms\Components\TextInput::make('password')
                ->password()
                ->required()
                ->maxLength(255),

            Forms\Components\TextInput::make('password_confirmation')
                ->password()
                ->required()
                ->maxLength(255)
                ->same('password'),
        ];
    }
=======
=======
>>>>>>> a3f7230 (.)
>>>>>>> b58de900 (.)
            session()->flash('status', __((string) $status));
            return redirect()->route('login');
        } else {
            $this->addError('email', __((string) $status));
>>>>>>> aurmich/dev
        }
    }
<<<<<<< HEAD
=======
            session()->flash('status', __($status));
            redirect()->route('login');
=======
            session()->flash('status', __((string) $status));
            return redirect()->route('login');
>>>>>>> a3174e5b (phpstan)
        } else {
            $this->addError('email', __((string) $status));
        }
    }
<<<<<<< HEAD

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('email')
                ->email()
                ->required()
                ->maxLength(255),

            Forms\Components\TextInput::make('password')
                ->password()
                ->required()
                ->maxLength(255),

            Forms\Components\TextInput::make('password_confirmation')
                ->password()
                ->required()
                ->maxLength(255)
                ->same('password'),
        ];
    }
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> e02686c3 (Here is a clean and descriptive commit message:)
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
>>>>>>> a3f7230 (.)
>>>>>>> b58de900 (.)
=======
            // Attempt password reset
=======
            // Type-safe data extraction with rigorous validation
            Assert::isArray($data, 'Form data must be an array');
            Assert::keyExists($data, 'email', 'Email is required');
            Assert::keyExists($data, 'password', 'Password is required');
            Assert::keyExists($data, 'password_confirmation', 'Password confirmation is required');
            
            $email = $this->extractStringValue($data, 'email');
            $password = $this->extractStringValue($data, 'password');
            $passwordConfirmation = $this->extractStringValue($data, 'password_confirmation');
            $token = $this->extractStringValue($data, 'token');

            // Validate extracted values
            Assert::stringNotEmpty($email, 'Email cannot be empty');
            Assert::stringNotEmpty($password, 'Password cannot be empty');
            Assert::stringNotEmpty($passwordConfirmation, 'Password confirmation cannot be empty');
            Assert::stringNotEmpty($token, 'Reset token cannot be empty');
            
            // Validate email format
            Assert::true(
                filter_var($email, FILTER_VALIDATE_EMAIL) !== false, 
                'Invalid email format'
            );
            
            // Validate password confirmation
            Assert::same($password, $passwordConfirmation, 'Password confirmation does not match');

            // Attempt password reset using Laravel's built-in system
>>>>>>> 14549b25 (chore(composer.json): update composer configuration to include keywords, license, and additional plugins for better project management and tooling integration)
            $status = Password::reset(
                [
                    'email' => $email,
                    'password' => $password,
                    'password_confirmation' => $passwordConfirmation,
                    'token' => $token,
                ],
                function ($user, $password): void {
                    Assert::notNull($user, 'User is required for password reset');
                    Assert::stringNotEmpty($password, 'New password cannot be empty');
                    
                    // Update user password with secure hash
                    $user->forceFill([
                        'password' => Hash::make($password),
                        'remember_token' => Str::random(60),
                    ])->save();

                    // Log successful password reset for audit trail
                    Log::info('Password reset successfully completed', [
                        'user_id' => $user->id ?? 'unknown',
                        'email' => $user->email ?? 'unknown',
                        'ip_address' => request()->ip(),
                        'user_agent' => request()->userAgent(),
                    ]);
                }
            );

            Assert::string($status, 'Password reset status must be a string');

            if ($status === Password::PASSWORD_RESET) {
                // Show success notification
                Notification::make()
                    ->title(__('user::auth.reset_password.success'))
                    ->body(__('user::auth.reset_password.success_message'))
                    ->success()
                    ->send();

                // Flash success message for the login page
                session()->flash('status', __($status));
                
                return redirect()->route('login');
            } else {
                // Handle password reset failure with specific error logging
                $this->addError('email', __($status));
                
                Log::warning('Password reset failed', [
                    'email' => $email,
                    'status' => $status,
                    'token' => substr($token, 0, 8) . '...', // Partial token for security
                    'ip_address' => request()->ip(),
                ]);
                
                return redirect()->back();
            }

        } catch (ValidationException $e) {
            // Re-throw validation exceptions to display form errors
            Log::warning('Password reset validation failed', [
                'errors' => $e->errors(),
                'email' => $data['email'] ?? 'unknown',
                'token_present' => isset($data['token']),
            ]);
            throw $e;
            
        } catch (\Webmozart\Assert\InvalidArgumentException $e) {
            // Handle assertion failures with detailed logging
            Log::error('Password reset assertion failed', [
                'error' => $e->getMessage(),
                'data_keys' => array_keys($data ?? []),
                'token_present' => isset($data['token']),
                'trace' => $e->getTraceAsString(),
            ]);

            Notification::make()
                ->title(__('user::auth.reset_password.validation_error'))
                ->body(__('user::auth.reset_password.validation_error_message'))
                ->danger()
                ->send();

            return redirect()->back();
            
        } catch (\Exception $e) {
            // Log unexpected errors with comprehensive context
            Log::error('Password reset failed with unexpected error', [
                'error' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString(),
                'data_structure' => isset($data) ? array_keys($data) : 'unknown',
                'token_length' => isset($this->token) ? strlen($this->token) : 0,
            ]);

            // Show user-friendly error message
            Notification::make()
                ->title(__('user::auth.reset_password.error'))
                ->body(__('user::auth.reset_password.error_message'))
                ->danger()
                ->send();

            return redirect()->back();
        }
    }
<<<<<<< HEAD
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
=======

    /**
     * Extract a string value from array data with comprehensive type safety.
     *
     * @param array<string, mixed> $data
     * @param string $key
     * @return string
     * 
     * @throws \Webmozart\Assert\InvalidArgumentException
     */
    private function extractStringValue(array $data, string $key): string
    {
        Assert::keyExists($data, $key, "Key '{$key}' is required in form data");
        
        $value = $data[$key];
        
        // Handle string values (most common case)
        if (is_string($value)) {
            return trim($value);
        }
        
        // Handle null values
        if ($value === null) {
            throw new \Webmozart\Assert\InvalidArgumentException(
                "Value for key '{$key}' cannot be null"
            );
        }
        
        // Handle scalar values with safe conversion
        if (is_scalar($value)) {
            $stringValue = trim((string) $value);
            Assert::stringNotEmpty($stringValue, "Value for key '{$key}' cannot be empty after conversion");
            return $stringValue;
        }
        
        // Reject complex types
        throw new \Webmozart\Assert\InvalidArgumentException(
            "Value for key '{$key}' must be a string, " . gettype($value) . ' given'
=======
            }
>>>>>>> b0db4ea8 (fixes)
        );

        if ($status === Password::PASSWORD_RESET) {
            session()->flash('status', __((string) $status));
            return redirect()->route('login');
        } else {
            $this->addError('email', __((string) $status));
        }
    }
>>>>>>> 14549b25 (chore(composer.json): update composer configuration to include keywords, license, and additional plugins for better project management and tooling integration)
}
