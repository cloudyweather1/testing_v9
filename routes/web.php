<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CheckoutSuccessController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\ProductController;
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

Route::view('/homepage', 'template0_pages/homepage');
Route::view('/spongebob', 'template0_pages/homepage');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/store', [ProductController::class, 'index'])->name('store');

Route::get('/details/{id}', [DetailsController::class, 'index'])->name('store.details');

Route::middleware(['auth'])->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart');

    Route::put('/cart', [CartController::class, 'store'])->name('cart.store');

    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');

    Route::get('/checkout/success/{payment}/{id}', CheckoutSuccessController::class)->name('checkout.success');
});
