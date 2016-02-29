<?php

namespace App\Http\Middleware;

use Closure;
use \LaravelGettext;

class Gettext
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
        /**
         * The package need to be initialized, the locale will
         * be available after first method call. If you have
         * async calls in your project, this filter starts the 
         * locale environment before each request.
         */
        $old_locale = LaravelGettext::getLocale();

        LaravelGettext::setLocale(config('laravel-gettext.locale'));
        LaravelGettext::setLocale($old_locale);

        return $next($request);
    }
}