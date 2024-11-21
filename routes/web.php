<?php

use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\NotasController;
use App\Http\Controllers\ProfesoresController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource("/alumnos",AlumnosController::class);
Route::resource("/profesores",ProfesoresController::class);
Route::resource("/cursos",CursosController::class);
Route::resource("/notas",NotasController::class);