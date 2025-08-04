<?php

declare(strict_types=1);

namespace Modules\UI\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
<<<<<<< HEAD
use Illuminate\Support\Facades\Config;
=======
>>>>>>> 54f4fa16 (.)
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Recupera la lingua dalla sessione o usa quella predefinita
        $locale = Session::get('locale', config('app.locale'));
<<<<<<< HEAD
        if(!is_string($locale)){
            $locale = Config::string('app.locale');
        }
=======

>>>>>>> 54f4fa16 (.)
        // Imposta la lingua
        App::setLocale($locale);

        return $next($request);
    }
}
