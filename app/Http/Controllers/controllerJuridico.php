<?php

namespace App\Http\Controllers;

use App\modelJuridico;
use Illuminate\Http\Request;

class controllerJuridico extends Controller
{
    public function Sistema(modelJuridico $modelJuridico){
        return view('Fisico\Perfil',['dados' => $modelJuridico]);
    }
}
