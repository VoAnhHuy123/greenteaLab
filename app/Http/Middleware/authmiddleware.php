<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class authmiddleware
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
	    if (!$request->session()->exists('auth')) {
		    // user value cannot be found in session
		    return redirect('login');
	    }

	    return $next($request);

    }
}
