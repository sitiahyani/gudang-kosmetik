<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class KaryawanAuth
{
    public function handle($request, Closure $next)
    {
        if (!Session::has('karyawan')) {
            return redirect('/login')->with('error', 'Silakan login sebagai karyawan.');
        }

        return $next($request);
    }
}