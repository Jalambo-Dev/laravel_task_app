<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    $name = 'Sir';
    $departments = [
        '1' => 'IT',
        '2' => 'CS',
        '3' => 'AI',
        '4' => 'SE',
        '5' => 'CE',
    ];
    // return view('about')->with('name', $name);
    // return view('about', ['name' => $name]);
    return view('about', compact('name', 'departments'));
});


Route::post('/about', function () {
    $name = $_POST['name'];
    $departments = [
        '1' => 'IT',
        '2' => 'CS',
        '3' => 'AI',
        '4' => 'SE',
        '5' => 'CE',
    ];
    return view('about', compact('name'));
});
