<?php

use App\Http\Controllers\AdminGudangController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DirekturController;
use App\Http\Controllers\MarketingController;
use App\Http\Controllers\SupplierController;
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
Route::controller(CustomerController::class)
    ->prefix('customer')
    ->as('customer.')
    ->middleware(['auth', 'is.customer'])
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

Route::controller(MarketingController::class)
    ->prefix('marketing')
    ->as('marketing.')
    ->middleware(['auth', 'is.marketing'])
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

Route::controller(AdminGudangController::class)
    ->prefix('admin_gudang')
    ->as('admin.gudang.')
    ->middleware(['auth', 'is.admin.gudang'])
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

Route::controller(SupplierController::class)
    ->prefix('supplier')
    ->as('supplier.')
    ->middleware(['auth', 'is.supplier'])
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

Route::controller(DirekturController::class)
    ->prefix('direktur')
    ->as('direktur.')
    ->middleware(['auth', 'is.direktur'])
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
