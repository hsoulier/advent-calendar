<?php

use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ? endpoints global
Route::get('/', [CalendarController::class, 'home'])->name('home');
Route::get('/products/{id}', [ProductController::class, 'single'])->name('product');

// ? endpoints of profile (guest)
Route::get('/profile', [UserController::class, 'profile'])->middleware(['auth'])->name('profile');

// ? endpoints of Dashboard (admin)
Route::get('/dashboard', [UserController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::get('/dashboard/products', [UserController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::get('/dashboard/products/{id}', [UserController::class, 'index'])->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
