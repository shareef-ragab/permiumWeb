<?php

namespace App\Http\Middleware;

use Closure;

class Authriztion
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request)
    {
        if (! $request->session()->has('user')) {
            return route('home');
        }
    }
}
