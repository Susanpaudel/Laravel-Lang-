<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocaleMiddleware
{
    public function handle($request, Closure $next)
    {
        // Check if locale is set in session or query parameter
        $locale = $request->get('lang', Session::get('locale', config('app.locale')));

        // Validate locale
        if (array_key_exists($locale, config('app.supported_locales'))) {
            App::setLocale($locale);
            Session::put('locale', $locale);
        }

        return $next($request);
    }
}
