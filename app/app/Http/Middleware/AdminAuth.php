<?php

namespace App\Http\Middleware;

use Closure;

/**
 * Class AdminAuth
 * @package App\Http\Middleware
 */
class AdminAuth
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
        // TODO Api admin Authorization status - Check Here.

        return $next($request);
    }
}
