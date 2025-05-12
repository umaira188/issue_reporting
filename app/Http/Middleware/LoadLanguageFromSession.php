<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LoadLanguageFromSession
{
    public function handle($request, Closure $next)
    {
        // Get locale from session or fallback to config default
        $locale = Session::get('app_locale', config('app.locale'));

        // Set the locale in the Laravel App instance
        App::setLocale($locale);

        return $next($request);
    }
}
