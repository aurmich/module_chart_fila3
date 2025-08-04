<?php
declare(strict_types=1);

namespace Modules\User\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

class Logout extends Component
{
    public $processing = false;

    public function logout()
=======
=======
>>>>>>> a3f7230 (.)
>>>>>>> b58de900 (.)
=======
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
>>>>>>> aurmich/dev
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
>>>>>>> a3f7230 (.)
>>>>>>> b58de900 (.)
=======
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
>>>>>>> aurmich/dev
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        }
    }

    public function render()
=======
=======
>>>>>>> a3f7230 (.)
>>>>>>> b58de900 (.)
=======
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
>>>>>>> aurmich/dev
            return null;
        }
    }

    /**
     * Render the logout component view.
     */
    public function render(): View
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
>>>>>>> a3f7230 (.)
>>>>>>> b58de900 (.)
=======
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
>>>>>>> aurmich/dev
    {
        return view('user::livewire.logout');
    }
}
