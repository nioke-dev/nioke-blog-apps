<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
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
        if (!auth()->check() || !auth()->user()->is_admin) {
            abort(403); //403 itu forbidden
        }
        // jika pakai check() beri not
        // kalau pakai guest() gausah pakai not karna guest kalau belum login itu true kalau check kebalikannya
        return $next($request);
    }
}
