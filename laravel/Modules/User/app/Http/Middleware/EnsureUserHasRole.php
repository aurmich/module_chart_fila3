<?php

namespace Modules\User\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/** 
* Route::put('/post/{id}', function (string $id) {
*   // ...
* })->middleware(EnsureUserHasRole::class.':editor');
* Route::put('/post/{id}', function (string $id) {
*     // ...
*})->middleware(EnsureUserHasRole::class.':editor,publisher');
*/

class EnsureUserHasRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
<<<<<<< HEAD
        if (! $request->user()?->hasRole($role)) {
=======
        if (! $request->user()->hasRole($role)) {
>>>>>>> ce78fe45 (translations + middleware + field on patientresource + openinghoursfield su relationsmanager)
            // Redirect...
            return redirect()->route('home');
        }

        return $next($request);
    }
}