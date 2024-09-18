<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Check if the URL starts with /fa
        if ($request->is('fa/*')) {
            App::setLocale('fa');
        }

        if ($request->is('fi/*')) {
            App::setLocale('fi');
        }

        return $next($request);
    }
}
