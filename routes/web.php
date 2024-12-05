<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "<h1>Home Page</h1><a href='/about'>Go About</a>";
});

Route::get('/about', function() {
    return "<h1>About Page</h1><a href='/'>Back to Home</a>";
});