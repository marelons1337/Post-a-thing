<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [CommentController::class, 'index'])->name('comments.index');

Route::post('/', [CommentController::class, 'store'])->name('comments.store')->middleware('auth');

Route::get('/{id}', [CommentController::class, 'show'])->name('comments.show');

Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show')->middleware('auth');

Route::delete('/{id}', [CommentController::class, 'destroy'])->name('comments.destroy')->middleware('auth');

