<?php

namespace App\Http\Middleware\My;

use Closure;
use Illuminate\Http\Request;

class RandomUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $cookie_name = "r_u";
        $cookie_value = 1850951858;
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
        return $next($request);
    }
}
