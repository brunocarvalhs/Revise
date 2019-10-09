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

        if (strlen($login) === 14) {
            if($modelJuridico->login($login,$senha)){
                return redirect('/');
            }
            else{
                return back();
            }
        } else if (strlen($login) === 11) {
            if($modelFisico->Login($login, $senha)){
                return redirect('/Home');
            }
            else{
                return back();
            }
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
                return view('Juridico');
                break;
            case 'fisico':
                return view('Fisico');
                break;
            default:
                return back();
                break;
        }
    }
}
