<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SubscriptionController;
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

Route::get('/addDay', [CalendarController::class, 'addDay'])->middleware(['auth'])->name('addDay');
Route::get('/resetDay', [CalendarController::class, 'resetDay'])->middleware(['auth'])->name('resetDay');

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
// Stripe
// Route::get('/subscription/create', [SubscriptionController::class, 'index'])->name('subscription.create');
// Route::post('order-post', [SubscriptionController::class, 'orderPost'])->name('order-post');

require __DIR__ . '/auth.php';
