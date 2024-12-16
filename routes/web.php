<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\UserController;

Route::get('/', [ExampleController::class, "homePage"]);

Route::get('/about', [ExampleController::class, "aboutPage"]);

Route::post('/register', [UserController::class, "register"]);