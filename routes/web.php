<?php

use App\Http\Controllers\DiscussionController;
use App\Http\Controllers\ProblemController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;


Route::get('/', [ProblemController::class, 'index'])->name('problems.index');
Route::get('/problems/{slug}', [ProblemController::class, 'show'])->name('problems.show');

Route::get('/problems/{slug}/submissions', [ProblemController::class, 'submissions'])->name('problems.submissions');

Route::post('problems/{slug}/run', [ProblemController::class, 'run'])->name('problems.run')->middleware('auth');

Route::get('/problems-pickone', [ProblemController::class, 'pickOne'])->name('problems.pickone');

Route::get('/discuss/{type_slug}/', [DiscussionController::class, 'index'])->name('discussions.index');

Route::get('/discuss/{type_slug}/{slug}', [DiscussionController::class, 'show'])->name('discussions.show');

require __DIR__ . '/auth.php';


Route::prefix('admin')->name('admin.')->middleware(AdminMiddleware::class)->group(function () {
    require __DIR__ . '/admin.php';
});
