<?php

namespace App\Http\Controllers;


use App\modelFisico;
use App\modelJuridico;
use Exception;
use Illuminate\Http\Request;

session_start();

class controllerUsuario extends Controller
{
    public function SignIn(Request $request, modelFisico $modelFisico, modelJuridico $modelJuridico)
    {

        $login = $this->TratamentoLogin($request->cpfcnpj);
        $senha = $request->senha;

        if (strlen($login) === 14) {
            $result = $modelJuridico->login($login, $senha);
            if ($result != false) {
                $_SESSION['Dados'] = json_encode($result);
                $_SESSION['autentic'] = '2';
                return view('Juridico\Inicio',  ['dados' => json_decode($_SESSION['Dados'])]);
            } else
                return back();
        } else if (strlen($login) === 11) {
            $result = $modelFisico->Login($login, $senha);
            if ($result != false) {
                $_SESSION['Dados'] = json_encode($result);
                $_SESSION['autentic'] = '1';
                return view('Fisico\Inicio',  ['dados' => json_decode($_SESSION['Dados'])]);
            } else
                return back();
        } else {
            return back();
        }
    }

    public function Sistema()
    {
        try {
            if (((!empty($_SESSION['autentic'])) || (!isset($_SESSION['autentic'])))) {
                switch ($_SESSION['autentic']) {
                    case '1':
                        return view('Fisico\Inicio', ['dados' => json_decode($_SESSION['Dados'])]);
                        break;
                    case '2':
                        return view('Juridico\Inicio', ['dados' => json_decode($_SESSION['Dados'])]);
                        break;
                    default:
                        return back();
                        break;
                }
            } else {
                return back();
            }
        } catch (Exception $e) {
            return redirect('/SignIn');
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

    public function RotasSistema(Request $request, controllerFisico $controllerFisico, controllerJuridico $controllerJuridico)
    {
        try{
            if (((!empty($_SESSION['autentic'])) || (!isset($_SESSION['autentic'])))) {
                switch ($_SESSION['autentic']) {
                    case '1':
                        return view($controllerFisico->RotasFisico($request->tipo), ['dados' => json_decode($_SESSION['Dados'])]);
                        break;
                    case '2':
                        return view($controllerJuridico->RotasJuridico($request->tipo), ['dados' => json_decode($_SESSION['Dados'])]);
                        break;
                    default:
                        return back();
                        break;
                }
            }
        }
        catch(Exception $e){
            return redirect('/SignIn');
        }
    }

    public function SignOut()
    {
        session_destroy();
        return view('login');
    }
}
