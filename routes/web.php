<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    $name = "Ahmed";
    // return view('about')->with('name', $name);
    // return view('about', ['name' => $name]);
    return view('about', compact('name'));
});


Route::post('/about', function () {
    $name = $_POST['name'];
    return view('about', compact('name'));
});
