<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //mendapatkan dan menampiljan data tugas
    public function index()
    {
        // ambil data dari model
        $tasks = Task::all();

        return view('task.index', [
            'tasks' => $tasks,
        ]);
    }

    public function show($id)
    {
        $tasks = Task::all();
        $task = collect($tasks)->firstWhere('id', $id);

        if (!$task) {
            abort(404);
        }

        return view('task.detail', compact('task'));
    }
}
