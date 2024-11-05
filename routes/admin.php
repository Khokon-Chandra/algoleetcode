<?php

use App\Http\Controllers\Admin\ProblemController;
use App\Http\Controllers\Admin\TagController;
use App\Models\Problem;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('AdminPanel/Dashboard',[
        'user_count' => User::count(),
        'problem_count' => Problem::count(),
        'submission_count' => 1234,
    ]);
})->name('dashboard');



Route::resource('problems', ProblemController::class);

Route::resource('tags',TagController::class)->only('index','store','update','destroy');