<?php

declare(strict_types=1);

/*
<<<<<<< HEAD
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::prefix('chart')->group(function (): void {
//     Route::get('/', 'ChartController@index');
// });
=======
//$this->routes();
Route::prefix('it')->group(function() {
    Route::prefix('geo')->group(function() {
        Route::get('/', 'GeoController@index');
    });
});
*/
>>>>>>> 8f11126c (Squashed 'laravel/Modules/Geo/' content from commit 9f987ec)
