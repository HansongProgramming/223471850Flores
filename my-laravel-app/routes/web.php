<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

Route::resource('notes', NoteController::class);

use App\Http\Controllers\UserController;

Route::get('/register', [UserController::class, 'showRegistrationForm']);
Route::post('/register', [UserController::class, 'register'])->name('register');

Route::get('/login', [UserController::class, 'showLoginForm']);
Route::post('/login', [UserController::class, 'login'])->name('login');

