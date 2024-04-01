<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\POSController;

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

Route::get('/kategori', [KategoriController::class, 'index']);
Route::post('/kategori', [KategoriController::class, 'store']);
Route::get('/kategori/create', [KategoriController::class, 'create']);
Route::get('/kategori/{id}/edit', [KategoriController::class, 'updateForm']);
Route::put('/kategori/{id}', [KategoriController::class, 'update']);
Route::delete('/kategori/{id}', [KategoriController::class, 'delete']);

// Route::get('/', [HomeController::class, 'home']);

Route::get('/penjualan', [HomeController::class, 'penjualan']);

Route::get('/user/{id}/name/{name}', [UserController::class, 'user']);

Route::prefix('category')->group(function () {
    Route::get('/baby', [ProductController::class, 'baby']);
    Route::get('/beauty', [ProductController::class, 'beauty']);
    Route::get('/food', [ProductController::class, 'food']);
    Route::get('/homecare', [ProductController::class, 'homecare']);
});

Route::resource('m_user', POSController::class);
