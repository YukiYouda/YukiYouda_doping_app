<?php

use App\Http\Controllers\SupplementController;
use App\Http\Controllers\ReviewController;
use App\Models\Review;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [SupplementController::class, 'index'])->name('root');

Route::resource('supplements', SupplementController::class);

Route::resource('supplements.reviews', ReviewController::class)->except(['index', 'show']);