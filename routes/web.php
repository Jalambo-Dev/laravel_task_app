<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('tasks', [TaskController::class, 'index']);

Route::post('create', [TaskController::class, 'create']);

Route::post('delete/{id}', [TaskController::class, 'delete']);

Route::get('edit/{id}', [TaskController::class, 'edit']);

Route::post('update', [TaskController::class, 'update']);


Route::get('app', function () {
    return view('layout.app');
});