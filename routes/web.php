<?php

use Illuminate\Support\Facades\Auth;
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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/price-list', [\App\Http\Controllers\PriceController::class, 'index'])->name('price-list');
Route::get('/reviews', [\App\Http\Controllers\ReviewController::class, 'index'])->name('reviews');
Route::get('/orders', [\App\Http\Controllers\OrderController::class, 'index'])->name('orders');

Route::post('/reviews', [\App\Http\Controllers\ReviewController::class, 'store'])->name('reviews.store');
Route::post('order', [\App\Http\Controllers\OrderController::class, 'store'])->name('order.store');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/edit-order', [\App\Http\Controllers\OrderController::class, 'edit'])->name('order.edit');

Route::post('/delete-order/{id]', [\App\Http\Controllers\OrderController::class, 'delete'])->name('order.delete');
Route::post('/delete-review/{id}', [\App\Http\Controllers\ReviewController::class, 'delete'])->name('review.delete');

Route::post('/add-service', [\App\Http\Controllers\ServiceController::class, 'store'])->name('service.store');
Route::post('/add-price', [\App\Http\Controllers\PriceController::class, 'store'])->name('price.store');
