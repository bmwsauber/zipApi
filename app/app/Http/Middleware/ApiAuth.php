<?php

namespace App\Http\Middleware;

use Closure;

/**
 * Class ApiAuth
 * @package App\Http\Middleware
 */
class ApiAuth
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
        // TODO Api Authorization status - Check Here.

        return $next($request);
    }
}
