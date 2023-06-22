<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::redirect('/', 'login', 301);

Auth::routes();
Route::controller(HomeController::class)
    ->prefix('home')
    ->as('home.')
    ->middleware(['auth', 'is.user'])
    ->group(function () {
        Route::get('/', 'index')
            ->name('dashboard');
        Route::prefix('settings')->group(function () {
            Route::get('/', 'setting')
                ->name('setting');
            Route::get('/profile', 'profile')
                ->name('profile');
        });
    });

Route::controller(AdminController::class)
    ->prefix('admin')
    ->as('admin.')
    ->middleware(['auth', 'is.admin'])
    ->group(function () {
        Route::get('/', 'index')
            ->name('dashboard');
        Route::prefix('settings')->group(function () {
            Route::get('/', 'setting')
                ->name('setting');
            Route::get('/profile', 'profile')
                ->name('profile');
        });
    });
