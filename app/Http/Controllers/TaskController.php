<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks', compact('tasks'));
    }

    public function create()
    {
        $task_title = $_POST['title'];
        $task = new Task();
        $task->title = $task_title;
        $task->save();
        return redirect('/tasks');
    }

    public function delete($id)
    {
        DB::table('tasks')->where('id', $id)->delete();
        return redirect('/tasks');
    }

    public function edit($id)
    {
        $task = DB::table('tasks')->where('id', $id)->first();
        $tasks = DB::table('tasks')->get();
        return view('tasks', compact('task', 'tasks'));
    }

    public function update()
    {
        $id = $_POST['id'];
        DB::table('tasks')->where('id', $id)->update([
            'title' => $_POST['title']
        ]);
        return redirect('/tasks');
    }
}