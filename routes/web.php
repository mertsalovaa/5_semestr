<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [\App\Http\Controllers\MainController::class, 'Index']);
Route::get('/posts', [\App\Http\Controllers\MainController::class, 'List']);
Route::get('/posts/create', [\App\Http\Controllers\MainController::class, 'Create']);
