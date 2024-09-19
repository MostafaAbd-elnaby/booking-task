<?php

use App\Http\Controllers\Admin\FlightController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
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
Route::controller(AuthController::class)->group(function () {
   Route::get('login', 'login')->name('login');
   Route::post('do-login', 'doLogin')->name('do-login');
   Route::post('register', 'register')->name('register');
   Route::get('logout', 'logout')->name('logout'); 
});
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/search', 'search')->name('search-flights');
    Route::get('/all-flights', 'getAllFlights')->name('all-flights');
});
Route::controller(BookingController::class)->group(function () {
    Route::get('/book-flight/{flight}', 'bookFlight')->name('book-flight');
    Route::post('/do-book-flight', 'doBookFlight')->name('do-book-flight');
});

Route::resource('/crud/flights', FlightController::class);
