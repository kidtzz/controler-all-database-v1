<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TrackController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|--------------------------------------------------------------------------
*/

// Halaman utama diarahkan ke index
Route::get('/', function () {
  return view('homepage');
})->name('home');



Route::get('/index', [ProductController::class, 'index']);
Route::get('/index-track', [TrackController::class, 'index']);

// CRUD otomatis
Route::resource('products', ProductController::class);
Route::resource('tracks', TrackController::class);
