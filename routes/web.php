<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

// User related routes
Route::get('/', [UserController::class, "showCorrectHomepage"]);
Route::post('/register', [UserController::class, "register"]);
Route::post('/login', [UserController::class, "login"]);
Route::post('/logout', [UserController::class, 'logout']);

// Blog post related routes
Route::get('/create-post', [PostController::class, "showCreatePostForm"]);