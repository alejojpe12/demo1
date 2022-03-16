<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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



Route::get('/dashboard', [ProductsController::class, 'showOwnProducts'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [ProductsController::class,'index']);

Route::get('/product/{id}', [ProductsController::class, 'show']);

Route::get('/sell', function(){
    return view('sell');
})->middleware('auth');

Route::post('/product', [ProductsController::class, 'store']);

Route::get('/edit/{id}', [ProductsController::class, 'edit'])->middleware('auth', 'verify_seller');

Route::post('/update/{id}', [ProductsController::class, 'update'])->middleware('auth');

Route::post('/delete/{id}', [ProductsController::class, 'destroy'])->middleware('auth');


require __DIR__.'/auth.php';
