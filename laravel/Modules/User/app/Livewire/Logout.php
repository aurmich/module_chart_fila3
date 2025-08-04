<?php

declare(strict_types=1);

namespace Modules\User\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
<<<<<<< HEAD
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
=======
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\View;
>>>>>>> a3174e5b (phpstan)

/**
 * Logout component for handling user logout functionality.
 */
class Logout extends Component
{
    /**
     * Processing state indicator.
     */
    public bool $processing = false;

<<<<<<< HEAD
    public function logout()
>>>>>>> 54f4fa16 (.)
=======
    /**
     * Handle user logout process.
     */
    public function logout(): ?RedirectResponse
>>>>>>> a3174e5b (phpstan)
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
=======
            return null;
        }
    }

    /**
     * Render the logout component view.
     */
    public function render(): View
>>>>>>> a3174e5b (phpstan)
    {
        return view('user::livewire.logout');
    }
}
