<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PickupRequestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Landing Page baru
Route::get('/', function () {
    return view('landing'); // ganti dari welcome ke landing
});

// CRUD Pickup Requests
Route::middleware(['auth'])->group(function () {
    Route::resource('pickup_requests', PickupRequestController::class);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
