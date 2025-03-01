<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('tasks', [TaskController::class, 'index']);

Route::post('tasks/create', [TaskController::class, 'create']);

Route::post('tasks/delete/{id}', [TaskController::class, 'delete']);

Route::get('tasks/edit/{id}', [TaskController::class, 'edit']);

Route::post('tasks/update', [TaskController::class, 'update']);


// User Routes
Route::get('users', [UserController::class, 'index']);
Route::post('users/create', [UserController::class, 'create']);
Route::post('users/delete/{id}', [UserController::class, 'delete']);
Route::get('users/edit/{id}', [UserController::class, 'edit']);
Route::post('users/update', [UserController::class, 'update']);