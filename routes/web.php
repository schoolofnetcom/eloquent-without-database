<?php

use Illuminate\Support\Facades\Route;
use App\Models\Role;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/roles', function () {
    return Role::all();
    // return Role::all()->pluck('label');
    // return Role::first();
});
