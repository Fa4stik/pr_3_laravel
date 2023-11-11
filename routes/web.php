<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [IndexController::class, 'Index']);
Route::get('/show/{id}', [IndexController::class, 'Show']);
