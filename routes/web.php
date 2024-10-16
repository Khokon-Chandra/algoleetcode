<?php

use App\Http\Controllers\ProblemController;
use Illuminate\Support\Facades\Route;


Route::get('/',[ProblemController::class,'index'])->name('problems.index');
Route::get('/problems/{slug}', [ProblemController::class,'show'])->name('problems.show');

Route::get('/problems/{slug}/submissions', [ProblemController::class,'submissions'])->name('problems.submissions');

Route::post('problems/{slug}/run',[ProblemController::class,'run'])->name('problems.run')->middleware('auth');

Route::get('/problems-pickone',[ProblemController::class,'pickOne'])->name('problems.pickone');

require __DIR__ . '/auth.php';
