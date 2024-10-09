<?php

use App\Http\Controllers\ProblemController;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/',[ProblemController::class,'index'])->name('problems.index');

Route::get('/problems/{slug}', [ProblemController::class,'show'])->name('problems.show');

Route::get('/problems/{slug}/submissions', [ProblemController::class,'submissions'])->name('problems.submissions');

Route::post('problems/{slug}/run',[ProblemController::class,'run'])->name('problems.run')->middleware('auth');

require __DIR__ . '/auth.php';
