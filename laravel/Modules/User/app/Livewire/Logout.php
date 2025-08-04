<?php
declare(strict_types=1);

namespace Modules\User\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
<<<<<<< HEAD
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\View;

/**
 * Logout component for handling user logout functionality.
 */
class Logout extends Component
{
    /**
     * Processing state indicator.
     */
    public bool $processing = false;

    /**
     * Handle user logout process.
     */
    public function logout(): ?RedirectResponse
=======

class Logout extends Component
{
    public $processing = false;

    public function logout()
>>>>>>> 54f4fa16 (.)
    {
        $this->processing = true;

        try {
            Auth::logout();
            session()->invalidate();
            session()->regenerateToken();

            return redirect()->route('home');
        } catch (\Exception $e) {
            $this->processing = false;
            session()->flash('error', __('Errore durante il logout. Riprova.'));
<<<<<<< HEAD
            return null;
        }
    }

    /**
     * Render the logout component view.
     */
    public function render(): View
=======
        }
    }

    public function render()
>>>>>>> 54f4fa16 (.)
    {
        return view('user::livewire.logout');
    }
}
