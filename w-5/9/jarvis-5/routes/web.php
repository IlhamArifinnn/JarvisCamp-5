<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.index');
});

Route::get('/tasks', [TaskController::class, 'index']);
// routes/web.php
Route::get('/task/{id}', [TaskController::class, 'show'])->name('task.detail');
