<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::post('/product', [ProductController::class, 'createProduct'])
    ->middleware('auth');
Route::get('/cart/addToCart/{id}', [CartController::class, 'addToCart'])
    ->middleware('auth')
    ->name("addToCart");
Route::get('/product/list', [ProductController::class, 'showProductList'])
    ->middleware('auth')
    ->name("catalog");

Route::get('/review/list', [\App\Http\Controllers\ReviewController::class, 'listReview']);

Route::get('/product/{id}', [ProductController::class, 'showProductId']);

require __DIR__.'/auth.php';
