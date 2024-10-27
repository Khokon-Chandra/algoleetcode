<?php

use App\Http\Controllers\Admin\ProblemController;
use App\Http\Controllers\Admin\TagController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('AdminPanel/Dashboard');
})->name('dashboard');



Route::resource('problems', ProblemController::class);

Route::resource('tags',TagController::class)->only('index','store','update','destroy');