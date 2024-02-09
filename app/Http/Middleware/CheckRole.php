<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;

class CheckRole //extends Middleware
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (! $request->user() || ! in_array($request->user()->role, $roles)) {
            return redirect()-> route('login');
        }

        return $next($request);
    }
}