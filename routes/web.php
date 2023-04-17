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

Route::get('/', [ComicController::class, 'index'])->name('comics.index');

Route::get('comics.create', [ComicController::class, 'create'])->name('comics.create');
Route::post('comics.store', [ComicController::class, 'store'])->name('comics.store');

Route::get('comics.edit/{id}', [ComicController::class, 'edit'])->name('comics.edit');
Route::put('comics.update/{id}', [ComicController::class, 'update'])->name('comics.update');

Route::get('/comics/{id}', [ComicController::class, 'show'])->name('comics.show');
