<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->user()->role == 'admin') 
        {
            return $next($request);
        }
        if (auth()->user()->role == 'marketing') {
            return redirect(RouteServiceProvider::MARKETING)->with('error', 'Bukan tempatnya marketing');
        } 
        
        return redirect(RouteServiceProvider::LOGIN)->with('error', 'Kamu tidak memiliki akses');
    }
}
