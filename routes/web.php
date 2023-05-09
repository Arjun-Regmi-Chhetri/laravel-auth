<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
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

Route::get('/',[DashboardController::class,'index']);
// Route::get('/',[LoginController::class, 'login'])->name('login')->middleware('log');
// Route::post('/login_check',[LoginController::class, 'login_check'])->name('login_check');

// Route::get('/dashboard',[DashboardController::class, 'dashboard'])->name('dashboard')->middleware('dash');
// Route::get('/logout', [DashboardController::class, 'logout']);

// Route::get('/register',[RegisterController::class, 'register'])->middleware('log');
// Route::post('/register_store',[RegisterController::class, 'store'])->name('store');
