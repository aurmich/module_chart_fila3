<?php
declare(strict_types=1);

namespace Modules\User\Filament\Widgets\Auth;

use Filament\Forms;
use Filament\Forms\Form;
use Illuminate\Support\Facades\Auth;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
use Filament\Forms\ComponentContainer;
use Modules\Xot\Filament\Widgets\XotBaseWidget;

/**
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
 * 
 * LoginWidget: Widget di login conforme alle regole Windsurf/Xot.
 * - Estende XotBaseWidget
 * - Usa solo componenti Filament importati
 * - Validazione e sicurezza integrate
 * - Facilmente estendibile (2FA, captcha, login social)
 *
 * @property array<string, mixed>|null $data
<<<<<<< HEAD
 * @property ComponentContainer $form
 */
=======
=======
>>>>>>> aurmich/dev
 * @property ComponentContainer $form
 */
=======
use Modules\Xot\Filament\Widgets\XotBaseWidget;

>>>>>>> 54f4fa16 (.)
=======
=======
use Modules\Xot\Filament\Widgets\XotBaseWidget;

class LoginWidget extends XotBaseWidget 
=======
=======
use Illuminate\Support\Facades\Auth;
>>>>>>> a3f7230 (.)
>>>>>>> b58de900 (.)
=======
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
use Filament\Forms\ComponentContainer;
use Modules\Xot\Filament\Widgets\XotBaseWidget;

/**
 * @property ComponentContainer $form
 */
>>>>>>> e02686c3 (Here is a clean and descriptive commit message:)
>>>>>>> aurmich/dev
class LoginWidget extends XotBaseWidget
{
    public ?array $data = [];

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
    /**
     * Blade view del widget nel modulo User.
     * IMPORTANTE: quando il widget viene usato con @livewire() direttamente nelle Blade,
     * il path deve essere senza il namespace del modulo (senza "user::").
     * 
     * @see \Modules\User\docs\WIDGETS_STRUCTURE.md - Sezione B
     * @var view-string
     * @phpstan-ignore property.defaultValue 
     */
    protected static string $view = 'pub_theme::filament.widgets.auth.login';
<<<<<<< HEAD
=======
=======
    protected static string $view = 'user::filament.widgets.auth.login';
>>>>>>> aurmich/dev
=======
    protected static string $view = 'user::filament.widgets.auth.login';
>>>>>>> 54f4fa16 (.)
>>>>>>> aurmich/dev

    public function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('email')
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
                ->label(__('user::auth.email'))
>>>>>>> aurmich/dev
=======
                ->label(__('user::auth.email'))
>>>>>>> 54f4fa16 (.)
>>>>>>> aurmich/dev
                ->email()
                ->required(),

            Forms\Components\TextInput::make('password')
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
                ->label(__('user::auth.password'))
>>>>>>> aurmich/dev
=======
                ->label(__('user::auth.password'))
>>>>>>> 54f4fa16 (.)
>>>>>>> aurmich/dev
                ->password()
                ->required(),

            Forms\Components\Checkbox::make('remember')
<<<<<<< HEAD
                ,
=======
<<<<<<< HEAD
<<<<<<< HEAD
                ,
=======
                ->label(__('user::auth.remember_me')),
>>>>>>> aurmich/dev
=======
                ->label(__('user::auth.remember_me')),
>>>>>>> 54f4fa16 (.)
>>>>>>> aurmich/dev
        ];
    }

    public function login(): void
    {
        $data = $this->form->getState();

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
        $credentials = [
            'email' => is_string($data['email'] ?? null) ? $data['email'] : '',
            'password' => is_string($data['password'] ?? null) ? $data['password'] : '',
        ];
        
        if (Auth::attempt($credentials)) {
            session()->regenerate();
            redirect()->intended('/');
<<<<<<< HEAD
=======
=======
        if (Auth::attempt($data)) {
            session()->regenerate();
            redirect()->intended(route('filament.admin.pages.dashboard'));
>>>>>>> aurmich/dev
=======
        if (Auth::attempt($data)) {
            session()->regenerate();
            redirect()->intended(route('filament.admin.pages.dashboard'));
>>>>>>> 54f4fa16 (.)
>>>>>>> aurmich/dev
        }

        $this->addError('email', __('auth.failed'));
    }
}
