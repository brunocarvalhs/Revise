<?php

namespace App\Http\Controllers;

use App\modelJuridico;
use Illuminate\Http\Request;
use App\Http\Controllers\controllerUsuario;

class controllerJuridico extends controllerUsuario
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

    public function Cadastro(Request $request, modelJuridico $modelJuridico){
        $modelJuridico->CadastroUsuarioJuridico($request);
    }
}
