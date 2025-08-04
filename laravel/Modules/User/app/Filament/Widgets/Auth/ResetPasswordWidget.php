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
use Illuminate\Support\Arr;
=======
>>>>>>> aurmich/dev
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
=======
use Filament\Forms;
use Filament\Forms\Form;
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
use Filament\Forms\ComponentContainer;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Notifications\Notification;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rules\Password as PasswordRule;
use Illuminate\Validation\ValidationException;
use Modules\Xot\Filament\Widgets\XotBaseWidget;

/**
 * Reset password widget for user password reset functionality.
 * 
 * Handles password reset form with token validation and secure password update.
 *
<<<<<<< HEAD
 * Handles password reset functionality with token validation,
 * proper security measures, and user feedback. Follows Laraxot
 * architectural patterns and security best practices.
 *
 * @property ComponentContainer $form Form container from XotBaseWidget
=======
 * @property ComponentContainer $form
 * @property array<string, mixed>|null $data
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
 */
class ResetPasswordWidget extends XotBaseWidget implements HasForms
{
    use InteractsWithForms;

    /**
     * The view for this widget.
     *
     * @var view-string
     */
    protected static string $view = 'user::widgets.auth.reset-password-widget';

    /**
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
            'token' => Hidden::make('token')
                ->default($this->token),
                
            'email' => TextInput::make('email')
                ->email()
                ->required()
                ->maxLength(255)
                ->autocomplete('email')
                ->validationAttribute(__('user::auth.fields.email.validation_attribute')),
                
            'password' => TextInput::make('password')
                ->password()
                ->required()
                ->rule(PasswordRule::default())
                ->same('password_confirmation')
                ->autocomplete('new-password')
                ->validationAttribute(__('user::auth.fields.password.validation_attribute')),
                
            'password_confirmation' => TextInput::make('password_confirmation')
                ->password()
                ->required()
                ->dehydrated(false)
                ->autocomplete('new-password')
                ->validationAttribute(__('user::auth.fields.password_confirmation.validation_attribute')),
        ];
    }

    /**
     * Mount the widget and initialize the form.
     *
     * @param string|null $token
     * @param string|null $email
     * @return void
     */
    public function mount(?string $token = null, ?string $email = null): void
    {
        $this->token = $token ?? (string) request()->route('token');
        
        $this->form->fill([
            'token' => $this->token,
            'email' => $email ?? (string) request()->query('email'),
        ]);
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
     * Handle password reset with comprehensive error handling.
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
     *
     * @return \Illuminate\Http\RedirectResponse|\Livewire\Features\SupportRedirects\Redirector
     */
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
    {
        try {
            $this->validate();
            $data = $this->form->getState();

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
                'email' => (string) $data['email'],
                'password' => (string) $data['password'],
                'password_confirmation' => (string) $data['password_confirmation'],
                'token' => (string) request()->route('token'),
            ],
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
                $user->forceFill([
                    'password' => Hash::make($password),
                    'remember_token' => Str::random(60),
                ])->save();
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
            $status = Password::reset(
                [
                    'email' => $email,
                    'password' => $password,
                    'password_confirmation' => $passwordConfirmation,
                    'token' => $token,
                ],
                function ($user, $password): void {
                    $user->forceFill([
                        'password' => Hash::make($password),
                        'remember_token' => Str::random(60),
                    ])->save();

                    // Log successful password reset
                    Log::info('Password reset successfully', [
                        'user_id' => $user->id,
                        'email' => $user->email,
                    ]);
                }
            );

            if ($status === Password::PASSWORD_RESET) {
                // Show success notification
                Notification::make()
                    ->title(__('user::auth.reset_password.success'))
                    ->success()
                    ->send();

                session()->flash('status', __((string) $status));
                return redirect()->route('login');
            } else {
                // Handle password reset failure
                $this->addError('email', __((string) $status));
                
                Log::warning('Password reset failed', [
                    'email' => $email,
                    'status' => $status,
                ]);
                
                return redirect()->back();
            }

        } catch (ValidationException $e) {
            // Re-throw validation exceptions to display form errors
            throw $e;
        } catch (\Exception $e) {
            // Log unexpected errors
            Log::error('Password reset error', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
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
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
}
