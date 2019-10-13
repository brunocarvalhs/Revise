<?php

namespace App\Http\Controllers;

use App\modelJuridico;
use Illuminate\Http\Request;

class controllerJuridico extends Controller
{
    public function Cadastro(Request $request, controllerUsuario $controllerUsuario, modelJuridico $modelJuridico)
    {
        $campos = $controllerUsuario->ValidarCampos($request);
        if ($campos) {
            $cadastro = $modelJuridico->CadastroUsuarioJuridico($controllerUsuario->TratamentoLogin($request->txtcnpj), $request);
        } else {
            $cadastro = json_encode(['Status' => false, 'Mensagem' => 'Campo em branco detectado, preencha corretamente os campos.']);
        }
        $cadastro = json_decode($cadastro);
        return redirect()->back()->with('Cadastro', $cadastro);
    }

    public function Login(Request $request, controllerUsuario $controllerUsuario){
        $CNPJ = $controllerUsuario->TratamentoLogin($request->cpfcnpj);
        $SENHA = $request->senha;
        $modelJuridico = new modelJuridico();
        $usuario = $modelJuridico->Login($CNPJ,$SENHA);
        if($usuario != false){
            session(['Juridico' => $modelJuridico]);
            return view('Juridico\Inicio',['Juridico' => $modelJuridico]);
        }
        else{
            unset($modelJuridico);
            $Login = json_encode(['Status' => false, 'Mensagem' => 'Usuario não encontrado, verificar se os dados de acesso estão corretos!']);
        }
        $Login = json_decode($Login);
        return redirect()->back()->with('Login', $Login);
    }

    public function Index(){
        $modelFisico = session()->get('Juridico');
        return view('Juridico\Inicio',['Juridico' => $modelFisico]);
    }
}
