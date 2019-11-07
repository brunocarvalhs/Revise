<?php

namespace App\Http\Controllers;


use App\modelFisico;
use App\modelJuridico;
use App\modelUsuario;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

session_start();

class controllerUsuario extends Controller
{

    /**
     * Metodo de Login
     *
     * @param Request $request
     * @return Redirect
     * @return JSON erro
     */
    public function SignIn(Request $request, controllerUsuario $controllerUsuario, controllerFisico $controllerFisico, controllerJuridico $controllerJuridico )
    {
        $validar = $this->ValidarCampos($request);
        if ($validar) {
            $login = $this->TratamentoLogin($request->cpfcnpj);
            $senha = $request->senha;
            if (strlen($login) === 14) {
                return $controllerJuridico->Login($login,$senha);
            } else if (strlen($login) === 11) {
                return $controllerFisico->Login($login,$senha);
            } else {
                $Login = json_encode(['Status' => false, 'Mensagem' => 'Caracteres inválidos, preencha corretamente os campos']);
            }
        } else {
            $Login = json_encode(['Status' => false, 'Mensagem' => 'Preencha todos os campos']);
        }
        $Login = json_decode($Login);
        return redirect()->back()->with('Login', $Login);
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
    public function SignOut()
    {
        if(session()->has('Fisico')){
            $modelFisico = session()->get('Fisico');
            unset($modelFisico);
            session()->flush();
        }
        else if (session()->has('Juridico')){
            $modelJuridico = session()->get('Juridico');
            unset($modelJuridico);
            session()->flush();
        }
        else{
            session()->flush();
        }
        session()->flush();
        return redirect('/SignIn');
    }

    /**
     *
     */
    public function ValidarCampos($request)
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
        switch($request->tipo){
            case 'android':{
                $apk = public_path()."\download\build\app-debug.apk";
                redirect()->back();
                return Response::download($apk,'revise',[
                    'Content-Type'=>'application/vnd.android.package-archive',
                    'Content-Disposition'=> 'attachment; filename="app.apk"',
                    ]);
            }
            case 'ios':{
                return redirect()->back();
            }
            default:{
                return redirect()->back();
            }
        }
    }

    public function ListaVeiculosDoUsuario($model){
        return $model->VeiculosDoUsuario();
    }
}
