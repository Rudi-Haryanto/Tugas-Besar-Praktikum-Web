<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\BookingHistoryController;

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

// autentikasi
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

// rooms
Route::resource('/rooms', RoomController::class)->middleware('auth');

// bookings
Route::resource('/bookings', BookingController::class)->middleware('auth');

// photos
Route::get('/photos', [PhotoController::class, 'index'])->middleware('auth');

// history
Route::get('/history/bookings', [BookingHistoryController::class, 'index'])->name('bookings.history')->middleware('auth');
Route::get('/history/bookings/{id}', [BookingHistoryController::class, 'show'])->name('bookings.history.show')->middleware('auth');
