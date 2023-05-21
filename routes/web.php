<?php

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
Route::get('/welcome', function () {
   return view('welcome');
});

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', function () {
   return view('login');
})->name('login');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->middleware(['auth','is.user'])
    ->name('home');

Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index'])
    ->middleware(['auth','is.admin'])
    ->name('admin');
