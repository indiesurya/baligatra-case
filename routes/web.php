<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GoogleController;
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
Route::get('/home', [HomeController::class, 'index']);

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
    Route::get('/auth/google', [AuthController::class, 'redirectToGoogle'])->name('google.login');
    Route::get('/auth/google/callback', [AuthController::class, 'handleGoogleCallback'])->name('google.callback');
    Route::get('/auth/facebook', [AuthController::class, 'redirectToFacebook'])->name('facebook.login');
    Route::get('/auth/facebook/callback', [AuthController::class, 'handleFacebookCallback'])->name('facebook.callback');
    Route::get('/auth/linkedin', [AuthController::class, 'redirectToLinkedin'])->name('linkedin.login');
    Route::get('/auth/linkedin/callback', [AuthController::class, 'handleLinkedinCallback'])->name('linkedin.callback');
});