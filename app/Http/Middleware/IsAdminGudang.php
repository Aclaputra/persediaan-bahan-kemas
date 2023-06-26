<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdminGudang
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->user()->role == 'admin_gudang') {
            return $next($request);
        }
        if (auth()->user()->role = 'direktur') {
            return redirect(RouteServiceProvider::DIREKTUR);
        }

        // hanya bisa buat 2 kondisi diatas
        if (auth()->user()->role = 'customer') {
            return redirect(RouteServiceProvider::HOME);
        }


        return redirect(RouteServiceProvider::LOGIN)->with('error', 'Kamu tidak memiliki akses');
    }
}
