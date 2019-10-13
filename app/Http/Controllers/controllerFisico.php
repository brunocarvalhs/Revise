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
            session(['Fisico' => $modelFisico]);
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
        $modelFisico = session()->get('Fisico');
        return view('Fisico\Inicio',['Fisico' => $modelFisico]);
    }


    // Perfil -----------------------------------------------------------------
    public function LerPerfil(){
        $modelFisico = session()->get('Fisico');
        $perfil = $modelFisico->DadosPerfil();
        $perfil = json_decode($perfil);
        return view('Fisico\Perfil',['Fisico' => $modelFisico, 'Perfil' => $perfil]);
    }

    public function AlterarPerfil(){

    }

    public function DeletarPerfil(){

    }

    // Veiculos ---------------------------------------------------------------
    public function CriarVeiculos(){

    }

    public function LerVeiculos(){
        $modelFisico = session()->get('Fisico');
        $Veiculos = $modelFisico->VeiculosDoUsuario();
        $Veiculos = json_decode($Veiculos);
        return view('Fisico\Veiculo',['Fisico' => $modelFisico, 'Veiculos' => $Veiculos]);
    }

    public function AlterarVeiculos(){

    }

    public function DeletarVeiculos(){

    }

    public function InserirQuilometragem(){

    }

    // Notificacao ---------------------------------------------------------------
    public function LerNotificacao(){
        $modelFisico = session()->get('Fisico');
        $Notificacao = $modelFisico->DadosPerfil();
        $Notificacao = json_decode($Notificacao);
        return view('Fisico\Notificacao',['Fisico' => $modelFisico, 'Notificacao' => $Notificacao]);
    }

    public function AlterarNotificacao(){

    }

    public function DeletarNotificacao(){

    }


}
