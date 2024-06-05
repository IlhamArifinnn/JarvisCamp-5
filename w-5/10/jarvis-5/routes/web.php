<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.index');
});

// http method:
// 1. Get: untuk menampilkan sesuatu
// 2. Post: untuk menambahkan data
// 3. Put/Patch: untuk mengubah data
// 4. Delete: untuk menghapus data

Route::get('/tasks', [TaskController::class, 'index']);
// routes/web.php
Route::get('/task/{id}', [TaskController::class, 'show'])->name('task.detail');

Route::get('/tasks/list', [TaskController::class, 'list'])->name('tasks.list');

Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');

Route::post('/tasks/store', [TaskController::class, 'store'])->name('tasks.store');

Route::get('/tasks/edit/{id}', [TaskController::class, 'edit'])->name('tasks.edit');

Route::put('/tasks/update/{id}', [TaskController::class, 'update'])->name('tasks.update');

Route::delete('/tasks/delete/{id}', [TaskController::class, 'delete'])->name('tasks.delete');
