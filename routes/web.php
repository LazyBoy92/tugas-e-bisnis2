<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Test Home";
});

Route::get('/login', function () {
    return view("login");
});
