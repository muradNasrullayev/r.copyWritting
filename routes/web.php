<?php

use App\Http\Controllers\{BlogController,ServiceController,BookingController, MainController};
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

Route::get('/', [MainController::class, 'index']);
Route::get('/home', [MainController::class, 'index'])->name('home');
Route::get('/services', [ServiceController::class, 'service'])->name('service');
Route::get('/booking', [BookingController::class,'booking'])->name('booking');
Route::get('/blogs', [BlogController::class,'blogs'])->name('blogs');
