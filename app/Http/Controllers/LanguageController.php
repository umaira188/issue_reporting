<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;

class LanguageController extends Controller
{
    public function switchLang($lang)
    {
        $supported = ['en', 'si', 'ta'];

        if (in_array($lang, $supported)) {
            Session::put('app_locale', $lang);
            App::setLocale($lang); // Apply immediately for current request
        }

        return Redirect::back();
    }
}
