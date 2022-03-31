<?php

use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [CalendarController::class, 'home'])->name('home');
Route::get('/product/{id}', [ProductController::class, 'single'])->name('product');

Route::get('/dashboard', [CalendarController::class, 'index'])->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
