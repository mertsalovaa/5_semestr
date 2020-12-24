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
Route::get('/posts', [\App\Http\Controllers\MainController::class, 'List'])->name("post.list");
Route::get('/posts/create', [\App\Http\Controllers\MainController::class, 'Create']);
Route::get('/posts/edit/{id}', [\App\Http\Controllers\MainController::class, 'Edit'])->name("post.edit");
Route::post('/posts/store', [\App\Http\Controllers\MainController::class, 'Store'])->name("post.store");
Route::post('/posts/storeEdit', [\App\Http\Controllers\MainController::class, 'StoreEdit'])->name("post.storeEdit");
Route::post('/posts/upload', [\App\Http\Controllers\MainController::class, 'UploadImage']);
Route::get('/posts/details/{id}', [\App\Http\Controllers\MainController::class, 'Details'])->name("post.details");

Route::get('/register', [\App\Http\Controllers\MainController::class, 'Register'])->name("post.viewRegister");
Route::post('/register/store', [\App\Http\Controllers\MainController::class, 'RegisterStore'])->name("post.registerStore");

Route::get('/logout', [\App\Http\Controllers\MainController::class,'Logout']);
Route::get('/login', [\App\Http\Controllers\MainController::class, 'Login'])->name("post.viewLogin");
Route::post('/login/store', [\App\Http\Controllers\MainController::class, 'LoginStore'])->name('post.login');