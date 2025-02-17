<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('tasks', function () {
    $tasks = DB::table('tasks')->get();
    return view('tasks', compact('tasks'));
});

Route::post('create', function () {
    $task_title = $_POST['title'];
    DB::table('tasks')->insert([
        'title' => $task_title
    ]);
    return redirect('/tasks');
});

Route::post('delete/{id}', function ($id) {
    DB::table('tasks')->where('id', $id)->delete();
    return redirect('/tasks');
});

Route::get('edit/{id}', function ($id) {
    $task = DB::table('tasks')->where('id', $id)->first();
    $tasks = DB::table('tasks')->get();
    return view('tasks', compact('task', 'tasks'));
});

Route::post('update', function () {
    $id = $_POST['id'];
    DB::table('tasks')->where('id', $id)->update([
        'title' => $_POST['title']
    ]);
    return redirect('/tasks');
});
