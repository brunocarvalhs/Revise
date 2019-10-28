<?php

namespace App\Http\Controllers;

use App\modelCheck;
use App\modelVeiculo;
use Illuminate\Http\Request;

class controllerCheck extends Controller
{
    public function listaVeiculosCheck(){

    }

    public function VerificarVeiculo(Request $request,modelCheck $modelCheck, controllerUsuario $controllerUsuario){
        $modelFisico = session()->get('Fisico');
        $Notificacao = $modelCheck->listaNotificacoes($request->Placa);
        $Notificacao = json_decode($Notificacao);
        if($Notificacao == [])
            $Notificacao = false;

        $Veiculos = $controllerUsuario->ListaVeiculosDoUsuario($modelFisico);
        $Veiculos = json_decode($Veiculos);
        return view('Fisico\Notificacao',['Fisico' => $modelFisico, 'Notificacao' => $Notificacao, 'Veiculos' => $Veiculos]);
    }

    public function listaNotificacoes(Request $request, controllerUsuario $controllerUsuario, modelCheck $modelCheck){
        $modelFisico = session()->get('Fisico');
        $Notificacao = $modelCheck->listaNotificacoes($modelFisico->getIdUsuario());
        $Notificacao = json_decode($Notificacao);
        $Veiculos = $controllerUsuario->ListaVeiculosDoUsuario($modelFisico);
        $Veiculos = json_decode($Veiculos);
        return view('Fisico\Notificacao',['Fisico' => $modelFisico, 'Notificacao' => $Notificacao, 'Veiculos' => $Veiculos]);
    }


    public function AlterarNotificacao(){

    }

    public function DeletarNotificacao(){

    }
}
