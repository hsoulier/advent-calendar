<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\UserController;

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
Route::get('/contact', fn () => view('contact'))->name('contact');
Route::get('/about', fn () => view('about'))->name('about');
Route::get('/products/{id}', [ProductController::class, 'single'])->name('product');

Route::get('/addDay', [CalendarController::class, 'addDay'])->middleware(['auth'])->name('addDay');
Route::get('/resetDay', [CalendarController::class, 'resetDay'])->middleware(['auth'])->name('resetDay');

// ? endpoints of profile (guest)
Route::get('/profile', [UserController::class, 'profile'])->middleware(['auth'])->name('profile');
Route::get('/logout', [UserController::class, 'logout'])->middleware(['auth'])->name('logout');
Route::get('/delete-user', [UserController::class, 'delete_user'])->middleware(['auth'])->name('delete-user');

// ? endpoints of Dashboard (admin)
Route::get('/dashboard', [UserController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::get('/dashboard/products', [UserController::class, 'index'])->middleware(['auth'])->name('dashboard-products');
Route::get('/dashboard/products/{id}', [UserController::class, 'index'])->middleware(['auth'])->name('dashboard-product');

// Stripe
Route::get('/profile/create-customer', [UserController::class, 'create_customer'])->middleware(['auth'])->name('create-customer');
Route::get('/checkout/{price_id}', [StripeController::class, 'checkout'])->middleware(['auth'])->name('checkout');
Route::get('/payment-success', [StripeController::class, 'payment_success'])->name('payment-success');
Route::get('/payment-cancel', fn (Request $request) => view('payment', ['type' => 'cancel', 'price_id' => $request->price_id]))->name('payment-cancel');

require __DIR__ . '/auth.php';
