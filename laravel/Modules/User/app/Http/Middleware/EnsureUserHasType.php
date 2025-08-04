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

class EnsureUserHasType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $type): Response
    {
<<<<<<< HEAD
        
        if ($request->user()?->type->value !== $type) {
=======
        if ($request->user()->type->value !== $type) {
>>>>>>> ce78fe45 (translations + middleware + field on patientresource + openinghoursfield su relationsmanager)
            // Redirect...
            return redirect()->route('home');
        }

        return $next($request);
    }
}