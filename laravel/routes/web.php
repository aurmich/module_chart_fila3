<?php

<<<<<<< HEAD
/*
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
*/
=======
declare(strict_types=1);

/**
 * il progetto Web Routes
 * 
 * IMPORTANTE: In il progetto, non definire rotte frontend qui.
 * Utilizzare Laravel Folio + Volt per il routing frontend creando file Blade in:
 * - Themes/{ThemeName}/resources/views/pages/
 * 
 * Per form complessi, utilizzare sempre:
 * @livewire(\Modules\{Module}\Filament\Widgets\{Widget}::class)
 * 
 * @see /var/www/html/base_il progetto/laravel/Modules/Xot/docs/ROUTING.md
 * @see /var/www/html/base_il progetto/laravel/Modules/Cms/docs/frontoffice/routing.md
 */

// Questo file è intenzionalmente vuoto.
// Le rotte frontend sono gestite tramite Laravel Folio + Volt.
// Le rotte backend sono definite nei rispettivi moduli.
>>>>>>> aurmich/dev
