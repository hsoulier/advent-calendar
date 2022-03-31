<?php

use App\Http\Controllers\CalendarController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Else_;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [CalendarController::class, 'index'])->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
