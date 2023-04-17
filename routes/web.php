<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;

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

Route::get('/', [ComicController::class, 'index']);

Route::get('/create', [ComicController::class, 'create']);
Route::post('/store', [ComicController::class, 'store']);
Route::get('/edit/{id}', [ComicController::class, 'edit']);
Route::put('/update/{id}', [ComicController::class, 'update']);
Route::match(['post'], '/comics', [ComicController::class, 'store'])->name('comics.store');
Route::post('/comics', [ComicController::class, 'store'])->name('comics.store');
