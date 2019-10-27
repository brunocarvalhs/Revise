<?php

namespace App\Http\Controllers;

use App\modelCheck;
use App\modelFisico;
use App\modelUsuario;
use App\modelVeiculo;
use App\modelJuridico;
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

    public function Login($CPF,$SENHA){
        $modelFisico = new modelFisico();
        $usuario = $modelFisico->Login($CPF,$SENHA);
        if($usuario != false){
            session(['Fisico' => $modelFisico]);
            return redirect('/Home');
        }
        else{
            unset($modelFisico);
            $Login = json_encode(['Status' => false, 'Mensagem' => 'Usuario não encontrado, verificar se os dados de acesso estão corretos!']);
        }
        $Login = json_decode($Login);
        return redirect()->back()->with('Login', $Login);
    }

    public function Index(controllerUsuario $controllerUsuario, modelCheck $modelCheck){
        $modelFisico = session()->get('Fisico');
        $Notificacao = $modelCheck->listaNotificacoes($modelFisico->getIdUsuario());
        $Notificacao = json_decode($Notificacao);
        $Andamento = $modelCheck->listaNotificacao($modelFisico->getIdUsuario());
        $Andamento = json_decode($Andamento);
        $Veiculos = $controllerUsuario->ListaVeiculosDoUsuario($modelFisico);
        $Veiculos = json_decode($Veiculos);
        return view('Fisico\Inicio',['Fisico' => $modelFisico, 'Notificacoes' => $Notificacao, 'Veiculos' => $Veiculos, 'Andamentos' => $Andamento]);
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
    public function CriarVeiculos(Request $request, controllerVeiculo $controllerVeiculo, controllerUsuario $controllerUsuario,modelVeiculo $modelVeiculo){
        $campos = $controllerUsuario->ValidarCampos($request);
        if ($campos) {
            $veiculo = (explode("/",$request->txtMarca));
            if($controllerVeiculo->compartibilidadeVeiculo($veiculo,$modelVeiculo)){
                $modelFisico = session()->get('Fisico');
                $cadastro = $controllerVeiculo->AdicionarVeiculo($request, $modelVeiculo, $modelFisico);
            }
            else{
                $cadastro = json_encode(['Status' => false, 'Mensagem' => 'Modelo e Marca não suportado pelo Revise.']);
            }
        } else {
            $cadastro = json_encode(['Status' => false, 'Mensagem' => 'Campo em branco detectado, preencha corretamente os campos.']);
        }
        $cadastro = json_decode($cadastro);
        return redirect()->back()->with('Cadastro', $cadastro);
    }

    public function LerVeiculos(controllerUsuario $controllerUsuario){
        $modelFisico = session()->get('Fisico');
        $Veiculos = $controllerUsuario->ListaVeiculosDoUsuario($modelFisico);
        $Veiculos = json_decode($Veiculos);
        return view('Fisico\Veiculo',['Fisico' => $modelFisico, 'Veiculos' => $Veiculos]);
    }

    public function AlterarVeiculos(){

    }

    public function DeletarVeiculos(){

    }

}
