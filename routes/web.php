<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\ModuloController;
use App\Http\Controllers\AlumnoController;




Route::get('/', function () {
    return view('welcome');
});
Route::resource('profesores', ProfesorController::class);
Route::resource('profesores', ModuloController::class);
Route::resource('alumnos', AlumnoController::class);
