<?php

namespace App\Http\Controllers;

use App\modelFisico;
use App\modelJuridico;
use Illuminate\Http\Request;

class controllerUsuario extends Controller
{
    public function SignIn(Request $request, modelFisico $modelFisico, modelJuridico $modelJuridico)
    {

        $login = $this->TratamentoLogin($request->cpfcnpj);
        $senha = $request->senha;

        if (strlen($login) === 14) { } else if (strlen($login) === 11) {
            $modelFisico->Login($login, $senha);
        } else {
            return back();
        }
    }

    public function TratamentoLogin($Login)
    {
        $Login = trim($Login);
        $Login = str_replace(".", "", $Login);
        $Login = str_replace(",", "", $Login);
        $Login = str_replace("-", "", $Login);
        $Login = str_replace("/", "", $Login);
        $Login = str_replace("'", "", $Login);
        $Login = str_replace(";", "", $Login);
        $Login = str_replace('"', '"', $Login);
        return $Login;
    }

    public function Cadastro(Request $request)
    {
        switch ($request->tipo) {
            case 'juridico':
                return view('CadastroJuridico');
                break;
            case 'fisico':
                return view('CadastroFisico');
                break;
            default:
                return back();
                break;
        }
    }
}
