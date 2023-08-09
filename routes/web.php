<?php

use App\Http\Controllers\AuthController;
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

Route::get('/', [AuthController::class, 'index'])->name('/');
Route::post('/login_process', [AuthController::class, 'login_process'])->name('login-process');

Route::get('/homepage', [UserController::class, 'homepage'])->name('homepage');

Route::get('/items', [ItemController::class, 'index'])->name('items');
Route::get('/items/create', [ItemController::class, 'create'])->name('create_items');
Route::post('/items/create_process', [ItemController::class, 'create_process'])->name('create_items_process');
Route::get('/items/{id}', [ItemController::class, 'detail'])->name('items/');
Route::post('/items_process/{id}', [ItemController::class, 'item_process'])->name('items_process/');
Route::get('/items/{id}/delete', [ItemController::class, 'delete'])->name('items/delete/');

Route::get('/tables', [TableController::class, 'index'])->name('tables');
Route::get('/tables/create', [TableController::class, 'create'])->name('create_table');
Route::post('/tables/create_process', [TableController::class, 'create_process'])->name('create_table_process');
Route::get('/tables/{id}', [TableController::class, 'detail'])->name('tables/');
Route::post('/tables_process/{id}', [TableController::class, 'table_process'])->name('tables_process/');
Route::get('/tables/{id}/delete', [TableController::class, 'delete'])->name('tables/delete/');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('create_category');
Route::post('/categories/create_process', [CategoryController::class, 'create_process'])->name('create_category_process');
Route::get('/categories/{id}', [CategoryController::class, 'detail'])->name('categories/');
Route::post('/categories_process/{id}', [CategoryController::class, 'category_process'])->name('categories_process/');
Route::get('/categories/{id}/delete', [CategoryController::class, 'delete'])->name('categories/delete/');

Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/users/create', [UserController::class, 'create'])->name('create_user');
Route::post('/users/create_process', [UserController::class, 'create_process'])->name('create_user_process');
Route::get('/users/{id}', [UserController::class, 'detail'])->name('users/');
Route::post('/users_process/{id}', [UserController::class, 'user_process'])->name('users_process/');
Route::get('/users/{id}/delete', [UserController::class, 'delete'])->name('users/delete/');
