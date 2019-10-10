<?php

namespace App\Http\Controllers;

use App\modelFisico;
use Illuminate\Http\Request;

class controllerFisico extends Controller
{
    public function RotasFisico($tipo){
        switch($tipo){
            case 'Perfil':{
                return 'Fisico\Perfil';
                break;
            }
            case 'Notificacao':{
                return 'Fisico\Notificacao';
                break;
            }
            case 'Veiculos':{
                return 'Fisico\Veiculo';
                break;
            }
            case 'Anuncio':{
                return 'Fisico\Anuncio';
                break;
            }
            default:{
                return back();
            }
        }
    }

    public function Cadastro(Request $request,controllerUsuario $controllerUsuario, modelFisico $modelFisico){
        $cadastro = $modelFisico->CadastrarUsuarioFisico($controllerUsuario->TratamentoLogin($request->txtcpf),$request);
        return view('Fisico',['Cadastro' => $cadastro]);
    }
}
