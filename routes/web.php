<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\StoresController;
use App\Http\Controllers\UserController;
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

Route::get('/', [MainController::class, 'home'])->name('home');

Route::post('/processmail', [StoresController::class, 'newLatters']);

Route::get('/cars', [MainController::class, 'cars'])->name('cars');

Route::get('/cars/create', [MainController::class, 'create'])->middleware('auth');

Route::post('/cars/createprocess', [StoresController::class, 'createCars']);

Route::put('/update/{cars}', [StoresController::class, 'update'])->middleware('auth');

Route::get('/cars/{cars}/edit', [MainController::class, 'edit'])->middleware('auth');

Route::get('/cars/{cars}', [MainController::class, 'show'])->name('show');

Route::delete('/delete/{cars}', [StoresController::class, 'destroy'])->middleware('auth');

Route::get('/register', [UserController::class, 'create'])->middleware('guest');

Route::post('/registerProcess', [UserController::class, 'store']);

Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

Route::post('/loginProcess', [UserController::class, 'autheticate']);

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');
