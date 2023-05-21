<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->user()->role == 'user') {
            return $next($request);
        } else if (auth()->user()->role == 'admin') {
            return redirect('/admin')->with('error', 'Bukan tempatnya admin');
        }

        return redirect('/login')->with('error', 'Kamu tidak memiliki akses');
    }
}
