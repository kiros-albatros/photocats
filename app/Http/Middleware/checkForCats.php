<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class checkForCats
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $id)
    {
        echo ' check cat id with middleware '. $id .'<br>';
        if($id < 20) {
            echo 'old ';
        } else {
            echo 'fresh ';
        }
        return $next($request);
    }
}
