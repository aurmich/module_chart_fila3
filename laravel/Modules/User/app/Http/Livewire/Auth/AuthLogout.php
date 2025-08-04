<?php

declare(strict_types=1);

namespace Modules\User\Http\Livewire\Auth;

use Livewire\Component;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;
=======
>>>>>>> aurmich/dev
=======
use Illuminate\Support\Facades\Auth;
>>>>>>> 345f8677 (phpstan)
=======
>>>>>>> 54f4fa16 (.)

class AuthLogout extends Component
{
    public function mount(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Auth::logout();
    }

    public function render(): \Illuminate\Contracts\View\View
    {
        $view='livewire.auth.logout';
        if(!view()->exists($view)){
            throw new \Exception("View $view not found");
        }
        $view_params=[];
        return view($view,$view_params);
=======
        auth()->logout();
=======
        Auth::logout();
>>>>>>> 345f8677 (phpstan)
    }

    public function render(): \Illuminate\Contracts\View\View
    {
<<<<<<< HEAD
        return view('livewire.auth.logout');
>>>>>>> aurmich/dev
=======
        $view='livewire.auth.logout';
        if(!view()->exists($view)){
            throw new \Exception("View $view not found");
        }
        $view_params=[];
        return view($view,$view_params);
>>>>>>> 345f8677 (phpstan)
=======
        auth()->logout();
    }

    public function render()
    {
        return view('livewire.auth.logout');
>>>>>>> 54f4fa16 (.)
    }
}
