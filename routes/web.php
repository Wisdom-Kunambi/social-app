<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;

Route::get('/', [ExampleController::class, "homePage"]);

Route::get('/about', [ExampleController::class, "aboutPage"]);