<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

    public function handle($request, Closure $next, ...$admin)
    {
        if (!$request->user() || !$request->user()->hasAnyRole($admin)) {
            // Redirect or abort access if the user doesn't have the required role
//            return redirect('/admin'); // You can modify this redirect as needed
        }

        return $next($request);
    }


}
