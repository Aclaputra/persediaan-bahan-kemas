<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsCustomer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->user()->role == 'customer') {
            return $next($request);
        } 
        if (auth()->user()->role == 'admin_gudang') {
            return redirect(RouteServiceProvider::ADMIN_GUDANG)->with('error', 'Bukan tempatnya admin gudang');
        } 
        if (auth()->user()->role == 'direktur') {
            return redirect(RouteServiceProvider::DIREKTUR)->with('error', 'Bukan tempatnya direktur');
        }
        if (auth()->user()->role == 'supplier') {
            return redirect(RouteServiceProvider::SUPPLIER)->with('error', 'Bukan tempatnya supplier');
        }
        if (auth()->user()->role == 'marketing') {
            return redirect(RouteServiceProvider::MARKETING)->with('error', 'Bukan tempatnya marketing');
        }

        return redirect(RouteServiceProvider::LOGIN)->with('error', 'Kamu tidak memiliki akses');
    }
}
