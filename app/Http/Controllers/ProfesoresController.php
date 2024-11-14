<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfesoresController extends Controller
{
    public function profesores(){
        return view("profesores.profesor");
    }
}
