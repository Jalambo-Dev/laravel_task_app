<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
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


// User Routes
Route::get('users', [UserController::class, 'index']);
Route::post('create', [UserController::class, 'create']);
Route::post('delete/{id}', [UserController::class, 'delete']);
Route::get('edit/{id}', [UserController::class, 'edit']);
Route::post('update', [UserController::class, 'update']);