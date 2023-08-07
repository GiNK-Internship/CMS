<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\TableController;
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

Route::get('/homepage', [UserController::class, 'homepage'])->name('homepage');
Route::get('/items', [ItemController::class, 'index'])->name('items');

Route::get('/tables', [TableController::class, 'index'])->name('tables');
Route::get('/tables/{id}', [TableController::class, 'detail'])->name('tables/');
Route::post('/tables_process/{id}', [TableController::class, 'table_process'])->name('tables_process/');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/users', [UserController::class, 'index'])->name('users');
