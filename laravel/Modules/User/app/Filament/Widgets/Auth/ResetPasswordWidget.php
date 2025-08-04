<?php

declare(strict_types=1);

namespace Modules\User\Filament\Widgets\Auth;

<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Forms;
use Filament\Forms\Form;
<<<<<<< HEAD
use Illuminate\Support\Arr;
=======
>>>>>>> aurmich/dev
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
 * Handles password reset functionality with token validation,
 * proper security measures, and user feedback. Follows Laraxot
 * architectural patterns and security best practices.
 *
 * @property ComponentContainer $form Form container from XotBaseWidget
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
 * @property ComponentContainer $form
 */
class ResetPasswordWidget extends XotBaseWidget
{
    protected static string $view = 'user::widgets.auth.reset-password-widget';

<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======
    /**
     * Get the form schema for this widget.
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

>>>>>>> e02686c3 (Here is a clean and descriptive commit message:)
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
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
                    ->columns(1),
            ])
            ->statePath('data');
    }

<<<<<<< HEAD
    /**
     * Handle password reset with proper security and error handling.
     *
     * Implements Laravel's password reset functionality with explicit
     * type casting for security and proper error feedback.
     *
     * @return \Illuminate\Http\RedirectResponse|void
     */
    public function resetPassword()
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
    {
        $data = $this->form->getState();

        $status = Password::reset(
            [
                'email' => $data['email'],
                'password' => $data['password'],
                'password_confirmation' => $data['password_confirmation'],
                'token' => request()->route('token'),
            ],
            function ($user, $password) {
>>>>>>> 54f4fa16 (.)
                $user->forceFill([
                    'password' => Hash::make($password),
                    'remember_token' => Str::random(60),
                ])->save();
            }
        );

        if ($status === Password::PASSWORD_RESET) {
<<<<<<< HEAD
<<<<<<< HEAD
            session()->flash('status', __($status));
            return redirect()->route('login');
        } else {
            /** @phpstan-ignore-next-line */
            $this->addError('email', __($status));
=======
            session()->flash('status', __((string) $status));
            return redirect()->route('login');
        } else {
            $this->addError('email', __((string) $status));
>>>>>>> aurmich/dev
        }
    }
=======
            session()->flash('status', __($status));
            redirect()->route('login');
        } else {
            $this->addError('email', __($status));
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
}
