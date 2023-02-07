<?php

use App\Http\Controllers\PostsController;
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

Route::get('/', [PostsController::class, 'post'])->name('posts');
Route::post('/create', [PostsController::class, 'create'])->name('create');
Route::get('/update/{id}', [PostsController::class, 'updatePage'])->name('update');
Route::post('/update/{id}', [PostsController::class, 'update'])->name('update');
Route::post('/delete/{id}', [PostsController::class, 'destroy'])->name('delete');
