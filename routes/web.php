<?php

use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\NotasController;
use App\Http\Controllers\ProfesoresController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get("/alumnos",[AlumnosController::class, "alumnos"]);
Route::get("/profesores",[ProfesoresController::class, "profesores"]);
Route::get("/cursos",[CursosController::class, "cursos"]);
Route::get("/notas",[NotasController::class, "notas"]);
Route::get("/notas",[NotasController::class, "notass"]);