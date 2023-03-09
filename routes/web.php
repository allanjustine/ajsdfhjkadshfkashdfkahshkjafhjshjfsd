<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SiteController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/orders', [OrderController::class, 'order']);
Route::get('/edit/{order}', [OrderController::class, 'edit']);
Route::get('/orders/{id}', [OrderController::class, 'view'])->name('orders.view');

Route::get('/posts', [SiteController::class, 'index2']);
Route::get('/create-posts', [SiteController::class, 'createPost']);
Route::get('/create-categories', [SiteController::class, 'createCategory']);
Route::get('/categories', [SiteController::class, 'index']);
