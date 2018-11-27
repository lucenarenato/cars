<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Session\TokenMismatchException;
//use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //'api/*' 
        /*'stripe/*',
        'http://example.com/foo/bar',
        'http://example.com/foo/*',*/
    ];
    /**
     * Routes we want to exclude.
     *
     * @var array
     */
    /*protected $routes = [            
            'routes',
            'route',
            'settings'
    ];*/
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     *
     * @throws \Illuminate\Session\TokenMismatchException
     */
    public function handle($request, Closure $next)
    {
        /*if ( 
            $this->isReading($request) ||
            $this->runningUnitTests() ||
            $this->shouldPassThrough($request) ||
            $this->tokensMatch($request)
        )  
        {
            //dd($request, $next($request));exit;
            return $this->addCookieToResponse($request, $next($request));
            
        }

        //throw new \TokenMismatchException;
                // redirect the user back to the last page and show error
        return Redirect::back()->withErrors( ['Sorry, we could not verify your request. Please try again.'] );*/
    }

    /**
     * This will return a bool value based on route checking.

     * @param  Request $request
     * @return boolean
     */
   /* protected function excludedRoutes($request)
    {
        foreach($this->routes as $route)
            if ($request->is($route))
                return true;

            return false;
    }*/
}
