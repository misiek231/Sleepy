<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\RoomController;
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

Route::get('/', fn() => view('welcome'))->name("index");
Route::resource('offers', OfferController::class);
Route::controller(RoomController::class)->group(function () {
    Route::get('/rooms', 'index')->name('rooms.index');
    Route::get('/rooms/create/{offerId}', 'create')->name('rooms.create');
    Route::post('/rooms', 'store')->name('rooms.store');
    Route::get('/rooms/{id}', 'show')->name('rooms.show');
    Route::get('/rooms/{id}/edit', 'edit')->name('rooms.edit');
    Route::put('/rooms/{id}', 'update')->name('rooms.update');
    Route::delete('/rooms/{id}', 'destroy')->name('rooms.destroy');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'authenticate')->name('login.authenticate');
    Route::get('/logout', 'logout')->name('logout');
    Route::get('/register', 'create')->name('register');
    Route::post('/register', 'store')->name('register.store');
});
