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
        // if (auth()->user()->role == 'user') {
        //     return $next($request);
        // } elseif (auth()->user()->role == 'admin') {
        //     return redirect('/admin')->with('error', 'Bukan tempatnya admin');
        // }
        if (auth()->user()->role == 'customer') {
            return $next($request);
        } 
        if (auth()->user()->role = 'admin_gudang') {
            return redirect('/admin_gudang')->with('error', 'Bukan tempatnya admin gudang');
        } 

        // hanya bisa membuat 2 kondisi diatas
        if (auth()->user()->role = 'direktur') {
            return redirect('/direktur')->with('error', 'Bukan tempatnya direktur');
        }

        return redirect(RouteServiceProvider::LOGIN)->with('error', 'Kamu tidak memiliki akses');
    }
}
