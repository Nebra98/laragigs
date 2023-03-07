<?php

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

Route::get('/', [\App\Http\Controllers\ListingController::class, 'index']);
Route::get('/listings/create', [\App\Http\Controllers\ListingController::class, 'create'])->middleware('auth');
Route::post('listings', [\App\Http\Controllers\ListingController::class, 'store'])->middleware('auth');
Route::get('/listings/{listing}/edit', [\App\Http\Controllers\ListingController::class, 'edit'])->middleware('auth');
Route::put('/listings/{listing}', [\App\Http\Controllers\ListingController::class, 'update'])->middleware('auth');
Route::delete('/listings/{listing}', [\App\Http\Controllers\ListingController::class, 'destroy'])->middleware('auth');
Route::get('/listings/manage', [App\Http\Controllers\ListingController::class, 'manage'])->middleware('auth');
Route::get('listings/{listing}', [\App\Http\Controllers\ListingController::class, 'show']);

Route::get('/register', [\App\Http\Controllers\UserController::class, 'create'])->middleware('guest');
Route::post('/users', [\App\Http\Controllers\UserController::class, 'store']);
Route::post('/logout', [\App\Http\Controllers\UserController::class, 'logout'])->middleware('auth');
Route::get('/login', [\App\Http\Controllers\UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/users/authenticate', [\App\Http\Controllers\UserController::class, 'authenticate']);

