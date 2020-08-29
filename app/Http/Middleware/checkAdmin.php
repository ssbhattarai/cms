<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class checkAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    //* this is SOLVED!!
    public function handle($request, Closure $next, $role)
    {   
        // if(!Auth::check()) {
        //     return redirect('/login');
        // }

        // if (! $request->user()->hasRole($role)) {
        //     abort(401, 'This action is unauthorized.');
        //     // return redirect('/');
        // }
        // return $next($request);

        // if(Auth::user()->roles->pluck('name') !== "admin" || Auth::user()->roles->pluck('name') !== "manager"){ //Check your users' role or permission, in my case only admin role for routes
        //     return redirect('/');
        // }
        // return $next($request);

        
    }
}
