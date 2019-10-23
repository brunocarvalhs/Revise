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
        $modelFisico = session()->get('Fisico');
        $Notificacao = $modelCheck->listaNotificacao($request->Placa);
        $Notificacao = json_decode($Notificacao);
        $Veiculos = $controllerUsuario->ListaVeiculosDoUsuario($modelFisico);
        $Veiculos = json_decode($Veiculos);
        return dd($Notificacao);
        return view('Fisico\Notificacao',['Fisico' => $modelFisico, 'Notificacao' => $Notificacao, 'Veiculos' => $Veiculos]);
    }
}
