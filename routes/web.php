<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PersonController;

Route::get('/', [IndexController::class, 'Index']);
Route::get('/show/{id}', [IndexController::class, 'Show']);
Route::get('/edit/{id}', [IndexController::class, 'Edit']);
Route::put('/edit/{id}', [IndexController::class, 'Update']);
Route::delete('/delete/{id}', [IndexController::class, 'Delete']);
Route::get('/add', [PersonController::class, 'Show']);
Route::post('/add', [PersonController::class, 'store']);
