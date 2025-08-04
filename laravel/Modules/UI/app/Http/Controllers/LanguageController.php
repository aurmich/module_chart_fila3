<?php

declare(strict_types=1);

namespace Modules\UI\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;
=======
use Illuminate\Routing\Controller;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
>>>>>>> 54f4fa16 (.)
=======
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;
>>>>>>> bf0cd1be (phpstan)
>>>>>>> aurmich/dev

class LanguageController extends Controller
{
    /**
     * Cambia la lingua dell'applicazione.
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
    public function switch(string $locale): RedirectResponse
    {
        // Usa configurazione per ottenere le lingue supportate
        $supportedLocales = Config::array('app.supported_locales', ['en', 'it']);
        
        if (!in_array($locale, $supportedLocales)) {
            $locale = Config::string('app.locale', 'en');
<<<<<<< HEAD
=======
=======
    public function switch($locale)
    {
        if (!in_array($locale, LaravelLocalization::getSupportedLocalesKeys())) {
            $locale = LaravelLocalization::getDefaultLocale();
>>>>>>> 54f4fa16 (.)
=======
    public function switch(string $locale): RedirectResponse
    {
        // Usa configurazione per ottenere le lingue supportate
        $supportedLocales = Config::array('app.supported_locales', ['en', 'it']);
        
        if (!in_array($locale, $supportedLocales)) {
            $locale = Config::string('app.locale', 'en');
>>>>>>> bf0cd1be (phpstan)
>>>>>>> aurmich/dev
        }

        session()->put('locale', $locale);
        app()->setLocale($locale);

        return redirect()->back();
    }
}
