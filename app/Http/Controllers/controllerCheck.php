<?php

namespace App\Http\Controllers;

use App\modelCheck;
use App\modelVeiculo;
use Illuminate\Http\Request;

class controllerCheck extends Controller
{
    public function listaVeiculosCheck(){

    }

    public function VeificarVeiculo(Request $request,modelCheck $modelCheck, controllerUsuario $controllerUsuario){
        return dd($request);

    }
}
