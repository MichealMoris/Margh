<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class LocaleMiddleware
{
    public function handle($request, Closure $next)
    {
        $locale = $request->segment(1);

        if (in_array($locale, ['ar', 'en'])) {
            App::setLocale($locale);
        }else {
            $locale = 'ar'; // Default to Arabic
            App::setLocale($locale);
            return redirect('/ar');
        }

        return $next($request);
    }
}
