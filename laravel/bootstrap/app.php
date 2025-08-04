<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use App\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
=======
//use Illuminate\Foundation\Application;
=======
>>>>>>> 03b27bf2 (✨ (laravel): update .env.example to remove DEBUGBAR_ENABLED and improve clarity)
use App\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
<<<<<<< HEAD
use Symfony\Component\HttpKernel\Exception\HttpException;
>>>>>>> aurmich/dev
=======
>>>>>>> 03b27bf2 (✨ (laravel): update .env.example to remove DEBUGBAR_ENABLED and improve clarity)
=======
//use Illuminate\Foundation\Application;
use App\Application;
use Illuminate\Http\Request;
use Modules\Xot\Exceptions\ExceptionHandler;
use Modules\Xot\Actions\View\GetViewPathAction;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======
use Symfony\Component\HttpKernel\Exception\HttpException;
>>>>>>> ac11c87d (✨ (Page.php): update page retrieval logic to abort with 404 if page not found, improving error handling)

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
<<<<<<< HEAD
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
<<<<<<< HEAD
<<<<<<< HEAD
=======
        ExceptionHandler::handles($exceptions);
       
>>>>>>> aurmich/dev
=======
>>>>>>> 03b27bf2 (✨ (laravel): update .env.example to remove DEBUGBAR_ENABLED and improve clarity)
=======
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======
        ExceptionHandler::handles($exceptions);
       
>>>>>>> ac11c87d (✨ (Page.php): update page retrieval logic to abort with 404 if page not found, improving error handling)
    })->create();
