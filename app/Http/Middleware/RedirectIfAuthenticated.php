<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check() && auth()->user()->role = 'customer') {
                return redirect(RouteServiceProvider::HOME);
            }
            if (Auth::guard($guard)->check() && auth()->user()->role = 'admin_gudang') {
                return redirect(RouteServiceProvider::ADMIN_GUDANG);
            } 
            if (Auth::guard($guard)->check() && auth()->user()->role = 'direktur') {
                return redirect(RouteServiceProvider::DIREKTUR);
            }
            // if (Auth::guard($guard)->role = 'customer') {
            //     return redirect(RouteServiceProvider::HOME);
            // } else if (Auth::guard($guard)->role = 'admin_gudang') {
            //     return redirect(RouteServiceProvider::ADMIN_GUDANG);
            // } else if (Auth::guard($guard)->role = 'supplier') {
            //     return redirect(RouteServiceProvider::SUPPLIER);
            // } else if (Auth::guard($guard)->role = 'marketing') {
            //     return redirect(RouteServiceProvider::MARKETING);
            // } else if (Auth::guard($guard)->role = 'direktur') {
            //     return redirect(RouteServiceProvider::DIREKTUR);
            // }
        }

        return $next($request);
    }
}
