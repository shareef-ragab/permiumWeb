<?php

namespace App\Http\Middleware;

use Closure;

class loginAuth
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (session()->has('user')) {
            session()->put('user',session()->get('user'));
            $request->session()->put('user',session()->get('user'));
            return redirect()->route('Dashboard');
        }
        return $next($request);
    }
}
