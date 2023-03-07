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
Route::get('/listings/create', [\App\Http\Controllers\ListingController::class, 'create']);
Route::post('listings', [\App\Http\Controllers\ListingController::class, 'store']);
Route::get('/listings/{listing}/edit', [\App\Http\Controllers\ListingController::class, 'edit']);
Route::put('/listings/{listing}', [\App\Http\Controllers\ListingController::class, 'update']);
Route::delete('/listings/{listing}', [\App\Http\Controllers\ListingController::class, 'destroy']);
Route::get('listings/{listing}', [\App\Http\Controllers\ListingController::class, 'show']);

Route::get('/register', [\App\Http\Controllers\UserController::class, 'create']);
Route::post('/users', [\App\Http\Controllers\UserController::class, 'store']);
