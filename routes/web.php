<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [UserController::class, 'index'])->name('comments.index');

Route::post('/', [UserController::class, 'store'])->name('comments.store')->middleware('auth');

Route::get('//{user}', [UserController::class, 'show'])->name('comments.show')->middleware('auth');

Route::delete('/{id}', [UserController::class, 'destroy'])->name('comments.destroy')->middleware('auth');

