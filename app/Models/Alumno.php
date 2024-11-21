<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table ="alumnos";

    protected $fillable=[
        "id",
        "nombre_completo",
        "dni",
        "telefono",
        "email",
        "carrera"
    ];
}
