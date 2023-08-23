<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;
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

Route::get('/', [HomeController::class, 'home']);
Route::get('/buy-books', [BookController::class, 'home']);
Route::get('/details/{title}', [BookController::class, 'bookDetails']);
Route::post('/log-in', [HomeController::class, 'logIn']);

// PAYSTACK
Route::get('/payment/{title}', [BookController::class, 'payment']);
Route::get('/verify-payment/{reference}', [BookController::class, 'verifyPayment']);
Route::get('/payment/{title}/{id}', [BookController::class, 'anotherPayment']);

Route::post('/payment-success', [BookController::class, 'paymentSuccess']);
Route::post('/another-payment-success', [BookController::class, 'anotherPaymentSuccess'])->middleware('auth');

Route::get('/profile', [HomeController::class, 'profile'])->middleware('auth');
Route::get('/logout', [HomeController::class, 'logOut'])->middleware('auth');
Route::put('/file/{id}', [BookController::class, 'file'])->middleware('auth');

Route::get('/how-to-edu', [BookController::class, 'howToEdu'])->middleware('auth');
Route::get('/teen-girl', [BookController::class, 'teenGirl'])->middleware('auth');
Route::get('/sex-edu', [BookController::class, 'sexEdu'])->middleware('auth');
Route::get('/soro-soke', [BookController::class, 'soroSoke'])->middleware('auth');


Auth::routes();

