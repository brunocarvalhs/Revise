<?php

namespace App\Http\Controllers;

use App\modelAnuncio;
use App\modelJuridico;
use App\modelPlano;
use Illuminate\Http\Request;

class controllerJuridico extends Controller
{
    public function Cadastro(Request $request, controllerUsuario $controllerUsuario, modelJuridico $modelJuridico)
    {
        $campos = $controllerUsuario->ValidarCampos($request);
        if ($campos) {
            $cadastro = $modelJuridico->CadastroUsuarioJuridico($controllerUsuario->TratamentoLogin($request->txtcnpj), $request);
        } else {
            $cadastro = json_encode(['Status' => false, 'Mensagem' => 'Preencha os campos em branco!']);
        }
        $cadastro = json_decode($cadastro);
        return redirect()->back()->with('Cadastro', $cadastro);
    }

    public function Login($CNPJ, $SENHA){
        $modelJuridico = new modelJuridico();
        $usuario = $modelJuridico->Login($CNPJ,$SENHA);
        if($usuario != false){
            session(['Juridico' => $modelJuridico]);
            return redirect('/Painel');
        }
        else{
            unset($modelJuridico);
            $Login = json_encode(['Status' => false, 'Mensagem' => 'Usuário não encontrado!']);
        }
        $Login = json_decode($Login);
        return redirect()->back()->with('Login', $Login);
    }

    public function Index(modelAnuncio $modelAnuncio){
        $modelJuridico = session()->get('Juridico');
        return view('Juridico\Inicio',['Juridico' => $modelJuridico]);
    }



    public function LerPerfil(){
        $modelJuridico = session()->get('Juridico');
        $dados = $modelJuridico->dadosUsuario($modelJuridico->getIdJuridico());
        $dados = json_decode($dados);
        return view('Juridico\Perfil',['Juridico' => $modelJuridico, 'Dados' => $dados]);
    }

    public function AlterarPerfil(Request $request, modelPlano $modelPlano){
        $modelJuridico = session()->get('Juridico');
        if($modelJuridico->atualizarPerfil($request, $modelJuridico->getIdJuridico(), $modelJuridico->getIdUsuario())){
            $atualizacao = json_encode(['Status'=>true, 'Mensagem'=>'']);
        }else{
            $atualizacao = json_encode(['Status'=>false, 'Mensagem'=>'']);
        }
        $atualizacao = json_decode($atualizacao);
        return redirect()->back()->with('Atualizacao', $atualizacao);
    }

    public function DeletarPerfil(){
        $modelJuridico = session()->get('Juridico');
        if($modelJuridico->DeletarPerfil($modelJuridico->getIdJuridico(), $modelJuridico->getIdUsuario())){
            $atualizacao = json_encode(['Status'=>true, 'Mensagem'=>'Deletado com sucesso']);
        }
        else{
            $atualizacao = json_encode(['Status'=>false, 'Mensagem'=>'Erro ao deletar']);
        }
        $atualizacao = json_decode($atualizacao);
        session()->clear();
        return redirect('/SignIn')->with('Login',$atualizacao);
    }



}
