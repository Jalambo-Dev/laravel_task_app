<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Task Routes
Route::get('tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::post('tasks/create', [TaskController::class, 'create'])->name('tasks.create');
Route::post('tasks/delete/{id}', [TaskController::class, 'delete'])->name('tasks.delete');
Route::get('tasks/edit/{id}', [TaskController::class, 'edit'])->name('tasks.edit');
Route::post('tasks/update', [TaskController::class, 'update'])->name('tasks.update');

// User Routes
Route::get('users', [UserController::class, 'index'])->name('users.index');
Route::post('users/create', [UserController::class, 'create'])->name('users.create');
Route::post('users/delete/{id}', [UserController::class, 'delete'])->name('users.delete');
Route::get('users/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
Route::post('users/update', [UserController::class, 'update'])->name('users.update');