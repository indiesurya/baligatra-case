<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

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

Route::get('/', [HomeController::class, 'index']);

Route::group(['middleware' => ['auth']], function () {
    Route::post('/inputdata', [ProductController::class, 'inputdata']);
    Route::get('/logout', [AuthController ::class, 'logout']);
    Route::get('/inputdata', [ProductController::class, 'index']);
    Route::get('/updatedata/{id}', [ProductController::class, 'updateindex']);
    Route::post('/updatedata/{id}', [ProductController::class, 'updatedata']);
    Route::get('/hapus/{id}', [ProductController::class, 'hapusdata']);
    Route::get('/admin', [AdminController::class, 'index']);
});

Route::group(['middleware' => ['guest']], function () {
    Route::get('/register', [AuthController::class, 'index']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::get('/login', [AuthController::class, 'indexlogin']);
    Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
});