<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('AdminPanel/Dashboard');
})->name('dashboard');
