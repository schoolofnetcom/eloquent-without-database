<?php

use Illuminate\Support\Facades\Route;
use App\Models\Role;
use App\Models\State;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/roles', function () {
    return Role::all();
    // return Role::all()->pluck('label');
    // return Role::first();
});

/** Adicionado para teste dos alunos */
Route::get('/states', function () {
    return State::all();
});
