<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "hello admin panel";
})->name('dashboard');
