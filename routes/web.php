<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;

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

Route::get('/add', [UserController::class, ('index')])->name('ad');
Route::post('/add', [UserController::class, 'addProduct'])->name('add')->middleware('auth');
Route::get('/', [UserController::class,'show'])->name('display');

// Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/admin', [AdminController::class, 'showAdmin'])->name('admin');

Route::get('posts/{id}', [AdminController::class, 'destroy'])->name('posts');

Route::get('edit/{id}', [AdminController::class, 'displayEdit'])->name('edit');

Route::get('/update/{id}', [AdminController::class, 'updated'])->name('update');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/loggedIn', [LoginController::class, 'store'])->name('loggedIn');

Route::get('/logout', [LogoutController::class, 'index'])->name('logout');







