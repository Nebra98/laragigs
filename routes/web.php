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

Route::get('listings/{listing}', [\App\Http\Controllers\ListingController::class, 'show']);
