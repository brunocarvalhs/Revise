<?php

namespace App\Http\Controllers;

use App\modelJuridico;
use Illuminate\Http\Request;

class controllerJuridico extends Controller
{
    public function RotasJuridico($tipo){
        switch($tipo){
            case 'Perfil':{
                return 'Juridico\Perfil';
                break;
            }
            case 'Indice':{
                return 'Juridico\Indice';
                break;
            }
            case 'Anuncio':{
                return 'Juridico\Anuncio';
                break;
            }
            default:{
                return back();
            }
        }
    }

    public function Cadastro(Request $request,controllerUsuario $controllerUsuario ,modelJuridico $modelJuridico){
        $cadastro = $modelJuridico->CadastroUsuarioJuridico($controllerUsuario->TratamentoLogin($request->txtcnpj), $request);
        return view('Juridico',['Cadastro' => $cadastro]);
    }
}
