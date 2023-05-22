<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodolistController;

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
Route::get('/', [TodolistController::class, 'index']) -> name('index');
Route::post('/', [TodolistController::class, 'store']) -> name('store');
Route::get('/{todolist:id}', [TodolistController::class, 'edit']) -> name('edit');
Route::delete('/{todolist:id}', [TodolistController::class, 'destroy']) -> name('destroy');
Route::post('/update',[TodolistController::class, 'update']) -> name('update');