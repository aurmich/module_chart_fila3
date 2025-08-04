<?php

declare(strict_types=1);

namespace Modules\User\Http\Volt;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Volt\Routing\Attribute\Post;
/*
Attribute class Volt\Routing\Attribute\Post does not exist.

<<<<<<< HEAD
/*
Attribute class Volt\Routing\Attribute\Post does not exist.

#[Post('/logout', name: 'logout', middleware: ['web', 'auth'])]
*/
<<<<<<< HEAD
=======
#[Post('/logout', name: 'logout', middleware: ['web', 'auth'])]
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> e02686c3 (Here is a clean and descriptive commit message:)
final class LogoutAction
{
    public function __invoke(): RedirectResponse
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();

        return redirect()->route('home');
    }
}
