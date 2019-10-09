<?php

namespace App\Http\Controllers;

use App\modelFisico;
use Illuminate\Http\Request;

class controllerFisico extends Controller
{
    public function Sistema(modelFisico $modelFisico){
        return view('Fisico\Perfil',['dados' => $modelFisico]);
    }
}
