<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks', compact('tasks'));
    }

    public function create(Request $request)
    {
        $task = new Task();
        $task->title = $request->input('title');
        $task->save();
        return redirect('/tasks');
    }

    public function delete($id)
    {
        $task = Task::find($id);
        if ($task) {
            $task->delete();
        }
        return redirect('/tasks');
    }

    public function edit($id)
    {
        $task = Task::find($id);
        $tasks = Task::all();
        return view('tasks', compact('task', 'tasks'));
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $task = Task::find($id);
        if ($task) {
            $task->title = $request->input('title');
            $task->save();
        }
        return redirect('/tasks');
    }
}