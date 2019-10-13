<?php

namespace App\Http\Controllers;

use App\modelFisico;
use Illuminate\Http\Request;

class controllerFisico extends Controller
{

    public function Cadastro(Request $request, controllerUsuario $controllerUsuario, modelFisico $modelFisico)
    {
        $campos = $controllerUsuario->ValidarCampos($request);
        if ($campos) {
            $cadastro = $modelFisico->CadastrarUsuarioFisico($controllerUsuario->TratamentoLogin($request->txtcpf), $request);
        } else {
            $cadastro = json_encode(['Status' => false, 'Mensagem' => 'Campo em branco detectado, preencha corretamente os campos.']);
        }
        $cadastro = json_decode($cadastro);
        return redirect()->back()->with('Cadastro', $cadastro);
    }

    public function Login(Request $request, controllerUsuario $controllerUsuario){
        $CPF = $controllerUsuario->TratamentoLogin($request->cpfcnpj);
        $SENHA = $request->senha;
        $modelFisico = new modelFisico();
        $usuario = $modelFisico->Login($CPF,$SENHA);
        if($usuario != false){
            session(['Fisico' => $request->tokey]);
            session(['IntanciaFisico' => $modelFisico]);
            return view('Fisico\Inicio',['Fisico' => $modelFisico]);
        }
        else{
            unset($modelFisico);
            $Login = json_encode(['Status' => false, 'Mensagem' => 'Usuario não encontrado, verificar se os dados de acesso estão corretos!']);
        }
        $Login = json_decode($Login);
        return redirect()->back()->with('Login', $Login);
    }

    public function Index(){
        if(session()->has('Fisico')){
            $modelFisico = session()->get('IntanciaFisico');
            return view('Fisico\Inicio',['Fisico' => $modelFisico]);
        }
        else{
            $Login = json_encode(['Status' => false, 'Mensagem' => 'Sessão encerrada']);
        }
        $Login = json_decode($Login);
        return redirect()->back()->with('Login', $Login);
    }
}
