<?php

use App\Http\Controllers\Admin\ProblemController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('AdminPanel/Dashboard');
})->name('dashboard');



Route::resource('problems', ProblemController::class);