<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::view('/','problems.index');


require __DIR__.'/auth.php';
