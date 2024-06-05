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

    public function list()
    {
        $tasks = Task::all();

        return view('task.list', compact('tasks'));
    }

    public function create()
    {
        return view('task.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $data = $request->validate(
            [
                'name' => "required|max:255|min:3",
                'deadline' => 'required|date',
                'status' => 'required|in:belum dikerjakan, sedang dikerjakan, selesai',
                'description' => 'required'
            ]
        );

        Task::create($data);

        return redirect()->route('tasks.list');
    }

    public function edit(string $id)
    {
        $task = Task::find($id);

        return view('task.edit', compact('task'));
    }

    public function update(Request $request, string $id)
    {
        $data = $request->validate(
            [
                'name' => "required|max:255|min:3",
                'deadline' => 'required|date',
                'status' => 'required|in:belum dikerjakan, sedang dikerjakan, selesai',
                'description' => 'required'
            ]
        );
        $task = Task::find($id);
        $task->update([
            'name' => $request['name'],
            'deadline' => $request['deadline'],
            'status' => $request['status'],
            'description' => $request['description'],
        ]);
        return redirect()->route('tasks.list');
    }

    public function delete(string $id){
        $task = Task::find($id);
        $task->delete();
        return redirect()->route('tasks.list');
    }
}
