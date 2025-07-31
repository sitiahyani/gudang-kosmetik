<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class AdminAuth
{
    public function handle($request, Closure $next)
    {
        if (!Session::has('admin')) {
            return redirect('/login')->with('error', 'Silakan login sebagai admin.');
        }

        return $next($request);
    }
}