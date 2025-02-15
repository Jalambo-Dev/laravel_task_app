<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    $name = 'Sir';
    $department = 'IT';
    $departments = [
        '1' => 'IT',
        '2' => 'CS',
        '3' => 'AI',
        '4' => 'SE',
        '5' => 'CE',
    ];
    // return view('about')->with('name', $name);
    // return view('about', ['name' => $name]);
    return view('about', compact('name', 'departments', 'department'));
});


Route::post('/about', function () {
    $name = $_POST['name'];
    $departmentIndex = $_POST['department'];
    $departments = [
        '1' => 'IT',
        '2' => 'CS',
        '3' => 'AI',
        '4' => 'SE',
        '5' => 'CE',
    ];
    $department = $departments[$departmentIndex];
    return view('about', compact('name', 'departments', 'department'));
});