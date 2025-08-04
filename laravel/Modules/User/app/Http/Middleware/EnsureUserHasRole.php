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
<<<<<<< HEAD
        if (! $request->user()?->hasRole($role)) {
=======
        if (! $request->user()->hasRole($role)) {
>>>>>>> ce78fe45 (translations + middleware + field on patientresource + openinghoursfield su relationsmanager)
=======
        if (! $request->user()?->hasRole($role)) {
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
            // Redirect...
            return redirect()->route('home');
        }

        return $next($request);
    }
}