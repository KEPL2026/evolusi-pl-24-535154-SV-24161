<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/projects', function () {
    return 'Project List';
});

Route::get('/projects/create', function () {
    return 'Create Project';
});