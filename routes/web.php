<?php

use App\Http\Controllers\AdminGudangController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DirekturController;
use App\Http\Controllers\MarketingController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\DataSupplierController;
use App\Http\Controllers\DataCustomerController;
use App\Http\Controllers\DataBarangMasukController;
use App\Http\Controllers\DataBarangKeluarController;
use App\Http\Controllers\SuratPesananController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\DeliveryOrderController;
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

// Transaksi Dashboard
Route::controller(MarketingController::class)
    ->prefix('transaksi')
    ->as('marketing.')
    ->middleware(['auth', 'is.marketing'])
    ->group(function () {
        Route::get('/', 'index')
            ->name('dashboard');
        // single crud delivery order
        Route::resource('delivery', DeliveryOrderController::class)->names([
            'delivery' => 'delivery'
        ])->parameters([
            'delivery' => 'slug'
        ]);
        // single crud surat-pesanan
        Route::resource('pesanan', SuratPesananController::class)->names([
            'pesanan' => 'pesanan'
        ])->parameters([
            'pesanan' => 'slug'
        ]);
        // single crud nota
        Route::resource('nota', NotaController::class)->names([
            'nota' => 'nota'
        ])->parameters([
            'nota' => 'slug'
        ]);
        
        Route::prefix('settings')->group(function () {
            Route::get('/', 'setting')
                ->name('setting');
            Route::get('/profile', 'profile')
                ->name('profile');
        });
    });

    // Master Dashboard
Route::controller(AdminGudangController::class)
    ->prefix('master')
    ->as('admin.gudang.')
    ->middleware(['auth', 'is.admin'])
    ->group(function () {
        Route::get('/', 'index')
            ->name('dashboard');
        Route::prefix('data-barang')->group(function() {
            /**
             * barang masuk
             * Create
             * Read
             * Update
             * Delete
             */
            // Route::get('/masuk', 'masuk')->name('barang.masuk');
            Route::resource('masuk', DataBarangMasukController::class)->names([
                'masuk' => 'barang.masuk'
            ])->parameters([
                'masuk' => 'slug'
            ]);
            /**
             * barang keluar
             * Create
             * Read
             * Update
             * Delete
             */
            // Route::get('/keluar', 'keluar')->name('barang.keluar');
            Route::resource('keluar', DataBarangKeluarController::class)->names([
                'keluar' => 'barang.keluar'
            ])->parameters([
                'keluar' => 'slug'
            ]);
        });
        /**
         * manage all suppliers and customers
         */
        // single crud
        Route::resource('supplier', DataSupplierController::class)->names([
            'supplier' => 'supplier'
        ])->parameters([
            'supplier' => 'slug'
        ]);
        // single crud
        Route::resource('customer', DataCustomerController::class)->names([
            'customer' => 'customer'
        ])->parameters([
            'customer' => 'slug'
        ]);

        Route::prefix('settings')->group(function () {
            Route::get('/', 'setting')
                ->name('setting');
            Route::get('/profile', 'profile')
                ->name('profile');
        });
    });