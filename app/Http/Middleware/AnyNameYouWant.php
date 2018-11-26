<?php

namespace App\Http\Middleware;

use Closure;

class AnyNameYouWant
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
        return $next($request);
    }

    return redirect('whereever you want to redirect');
}
// teste renato 11/2018
