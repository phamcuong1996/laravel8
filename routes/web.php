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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [\App\Http\Controllers\PostController::class, 'index']);
//create
Route::get('/posts/create', [\App\Http\Controllers\PostController::class, 'create']);
Route::post('/posts', [\App\Http\Controllers\PostController::class, 'store'])->name('posts.store');
//update
Route::get('/posts/{post}/edit', [\App\Http\Controllers\PostController::class, 'edit']);
Route::post('/posts/{post}', [\App\Http\Controllers\PostController::class, 'update'])->name('posts.update');

//delete
Route::get('/posts/{post}', [\App\Http\Controllers\PostController::class, 'destroy']) ->name('posts.destroy');

Route::get('/users',[\App\Http\Controllers\UserController::class, 'index']);
Route::get('/users/create',[\App\Http\Controllers\UserController::class, 'create']);
Route::post('/users', [\App\Http\Controllers\UserController::class, 'store'])->name('users.store');
