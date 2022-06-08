<?php

use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StripeController;
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
Route::get('/contact', fn () => view('contact'))->name('contact');
Route::post('/contact', [UserController::class, 'sendContact'])->name('send-contact');
Route::get('/about', fn () => view('about'))->name('about');
Route::get('/products/{id}', [ProductController::class, 'single'])->name('product');
Route::post('/products/comment', [ProductController::class, 'send_comment'])->name('send-comment');
Route::get('/xxx/{id}', [ProductController::class, 'deleteComment'])->name('delete-comment-product');


// ? endpoints of profile (guest)
Route::get('/profile', [UserController::class, 'profile'])->middleware(['auth'])->name('profile');
Route::get('/logout', [UserController::class, 'logout'])->middleware(['auth'])->name('logout');

// ? endpoints of Dashboard (admin)
Route::get('/dashboard', [UserController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::get('/dashboard/products', [UserController::class, 'index'])->middleware(['auth'])->name('dashboard-products');
Route::get('/dashboard/products/{id}', [UserController::class, 'index'])->middleware(['auth'])->name('dashboard-product');

Route::get('/deleteAccount/{id}', [AdminController::class, 'deleteAccount'])->middleware(['auth'])->name('delete-account');
Route::get('/edit/{id}', [AdminController::class, 'editProduct'])->middleware(['auth'])->name('edit-product');
Route::get('/update/{id}', [AdminController::class, 'updateProduct'])->middleware(['auth'])->name('update-product');
Route::get('/deleteContactMessage/{id}', [AdminController::class, 'deleteContactMessage'])->middleware(['auth'])->name('delete-contact-message');
Route::get('/deleteComment/{id}', [AdminController::class, 'deleteComment'])->middleware(['auth'])->name('delete-comment');

// Stripe
Route::get('/profile/create-customer', [UserController::class, 'create_customer'])->middleware(['auth'])->name('create-customer');
Route::get('/checkout/{price_id}', [StripeController::class, 'checkout'])->middleware(['auth'])->name('checkout');
Route::get('/payment-success', [StripeController::class, 'payment_success'])->name('payment-success');
Route::get('/payment-cancel', fn (Request $request) => view('payment', ['type' => 'cancel', 'price_id' => $request->price_id]))->name('payment-cancel');

require __DIR__ . '/auth.php';
