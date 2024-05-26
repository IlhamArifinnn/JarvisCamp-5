<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('template');
});

Route::get('/tasks', [TaskController::class, 'index']);
// routes/web.php
Route::get('/task/{id}', [TaskController::class, 'show'])->name('task.detail');
