<?php

namespace App\Http\Controllers;


use App\modelFisico;
use App\modelJuridico;
use App\modelUsuario;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

session_start();

class controllerUsuario extends Controller
{

    /**
     * Metodo de Login
     *
     * @param Request $request
     * @return View
     * @return JSON erro
     */
    public function SignIn(Request $request, modelFisico $modelFisico, modelJuridico $modelJuridico)
    {

        $validar = $this->ValidarCampos($request);

        if ($validar) {

            $login = $this->TratamentoLogin($request->cpfcnpj);
            $senha = $request->senha;

            if (strlen($login) === 14) {
                $result = $modelJuridico->login($login, $senha);
                if ($result != false) {
                    $_SESSION['Dados'] = json_encode($result);
                    $_SESSION['autentic'] = '2';
                    return view('Juridico\Inicio',  ['dados' => json_decode($_SESSION['Dados'])]);
                } else {
                    $Login = json_encode(['Status' => false, 'Mensagem' => 'Conta não encontrado']);
                }
            } else if (strlen($login) === 11) {
                $result = $modelFisico->Login($login, $senha);
                if ($result != false) {
                    $_SESSION['Dados'] = json_encode($result);
                    $_SESSION['autentic'] = '1';
                    return view('Fisico\Inicio',  ['dados' => json_decode($_SESSION['Dados'])]);
                } else {
                    $Login = json_encode(['Status' => false, 'Mensagem' => 'Conta não encontrado']);
                }
            } else {
                $Login = json_encode(['Status' => false, 'Mensagem' => 'Caracteres de login invalido, preencha corretamente os campos.']);
            }
        } else {
            $Login = json_encode(['Status' => false, 'Mensagem' => 'Campo em branco detectado, preencha corretamente os campos.']);
        }
        $Login = json_decode($Login);
        return redirect()->back()->with('Login', $Login);
    }



    /**
     * Metodo de validação de retorno do usuario
     *
     * @param Session $_SESSION['autentic']
     * @return View
     */
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

    /**
     * Matodo de limpa Login
     *
     * @param String $Login
     * @return String $Login
     */
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

    /**
     * Metodo de redirecionamento
     * para pagina de cadastro
     *
     * @param String $request
     *
     * @return View
     */
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

    /**
     *
     */
    public function RotasSistema(Request $request, controllerFisico $controllerFisico, controllerJuridico $controllerJuridico)
    {
        try {
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
        } catch (Exception $e) {
            return redirect('/SignIn');
        }
    }

    /**
     *
     */
    public function SignOut()
    {
        session_destroy();
        return redirect('/SignIn');
    }

    /**
     *
     */
    public function ValidarCampos(Request $request)
    {
        $r = $request->all();
        foreach ($r as $value => $key) {
            if (empty($key)) {
                return false;
            }
        }
        return true;
    }

    /**
     *
     */
    public function EsqueciSenha(Request $request, modelJuridico $modelJuridico, modelFisico $modelFisico){
        $campo = $this->ValidarCampos($request);
        if($campo){
            $login = $this->TratamentoLogin($request->cpfcnpj);
            if(strlen($login) === 14){
                $resultado = $modelJuridico->EsqueciSenha($login);
                if($resultado != false){
                    $Login = $modelJuridico->Email($resultado);
                }else{
                    $Login = json_encode(['Status' => false, 'Mensagem' => 'Usuario não encontrado.']);
                }
            }else if(strlen($login) === 11){
                $resultado = $modelFisico->EsqueciSenha($login);
                if($resultado != false){
                    $Login = $modelFisico->Email($resultado);
                }else{
                    $Login = json_encode(['Status' => false, 'Mensagem' => 'Usuario não encontrado.']);
                }
            }else{
                $Login = json_encode(['Status' => false, 'Mensagem' => 'Caracteres de login invalido, preencha corretamente os campos.']);
            }
        }else{
            $Login = json_encode(['Status' => false, 'Mensagem' => 'Campo em branco detectado, preencha corretamente os campos.']);
        }
        $Login = json_decode($Login);
        return redirect()->back()->with('Login', $Login);
    }


    public function getDownload(Request $request){

        $headers = array(
            'Content-Type: application/apk',
        );

        switch($request->tipo){
            case 'android':{
                $apk = "\download\build\app-debug.apk";
                redirect()->back();
                return Response::download($apk, 'revise.apk', $headers);
            }
            case 'ios':{
                return redirect()->back();
            }
            default:{
                return redirect()->back();

            }
        }
    }
}
