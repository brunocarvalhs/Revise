<?php

namespace App\Http\Controllers;

use App\modelPlano;
use App\modelVeiculo;
use Illuminate\Http\Request;

class controllerVeiculo extends Controller
{

    public function CriarVeiculos(Request $request, controllerVeiculo $controllerVeiculo, controllerUsuario $controllerUsuario,modelVeiculo $modelVeiculo, modelPlano $modelPlano){


        $campos = $controllerUsuario->ValidarCampos($request);
        if ($campos) {
            $veiculo = (explode("/",$request->txtMarca));
            if($controllerVeiculo->compartibilidadeVeiculo($veiculo,$modelVeiculo)){
                $modelFisico = session()->get('Fisico');
                if($controllerVeiculo->quantidadeVeiculoPorPlano($modelFisico,$modelVeiculo,$modelPlano)){
                    $cadastro = $controllerVeiculo->AdicionarVeiculo($request, $modelVeiculo, $modelFisico);
                }
                else{
                    $cadastro = json_encode(['Status' => false, 'Mensagem' => 'Sua garagem está cheia, seu limite maximo de veículos no seu plano foi preenchido, caso queira registra mais veículos terá que mudar de plano na pagina de perfil, cobrando valor mensal.']);
                }
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

    public function DetalhesVeiculo(Request $request,modelVeiculo $modelVeiculo, controllerUsuario $controllerUsuario){
        $modelFisico = session()->get('Fisico');
        $Veiculos = $controllerUsuario->ListaVeiculosDoUsuario($modelFisico);
        $Veiculos = json_decode($Veiculos);
        $Veiculo = $modelVeiculo->DetalhesDoVeiculo($request->placa,$modelFisico->getIdUsuario());
        $Veiculo = json_decode($Veiculo);
        return view('Fisico\Veiculo',['Fisico' => $modelFisico, 'Veiculos' => $Veiculos, 'Dados' => $Veiculo]);
    }

    public function AdicionarVeiculo(Request $request,modelVeiculo $modelVeiculo, $usuario){
        $Placa = (strtoupper($request->txtplaca));//Deixa maiusculo
        $veiculo = (explode("/",$request->txtMarca));//Separar Marca e Modelo
        $modelVeiculo = new modelVeiculo();
        $modelVeiculo->setAno($request->txtAno);
        $modelVeiculo->setCor($request->txtCor);
        $modelVeiculo->setMarca($veiculo[0]);
        $modelVeiculo->setPlaca($Placa);
        $modelVeiculo->setModelo($veiculo[1]);
        $modelVeiculo->setEstado($request->txtEstado);
        $modelVeiculo->setCidade($request->txtCidade);
        $modelVeiculo->setQuilometragem($request->txtQuilometragem);
        $id = $usuario->getIdUsuario();
        return $modelVeiculo->Cadastrar($id);
    }

    public function AlterarVeiculo(){

    }

    public function DeletarVeiculo(request $request, modelVeiculo $modelVeiculo){
        $modelFisico = session()->get('Fisico');
        $resultado = $modelVeiculo->Deletar($request->placa,$modelFisico->getIdUsuario());
        return redirect()->back()->with('delete', $resultado);
    }

    public function InserirQuilometragem(Request $request, modelVeiculo $modelVeiculo){
        $result = $modelVeiculo->SistemaVerificacaoVeiculo($request->Placa,$request->KM);
        return redirect()->back();
    }

    public function compartibilidadeVeiculo($veiculo, modelVeiculo $modelVeiculo){
        return ($modelVeiculo->compartibilidadeVeiculo($veiculo));
    }

    public function verificarVeiculo(Request $request, modelVeiculo $modelVeiculo){
        $modelVeiculo->verificarVeiculo($request);
    }

    public function quantidadeVeiculoPorPlano($modelUsuario, modelVeiculo $modelVeiculo, modelPlano $modelPlano){
        $quantidade = $modelVeiculo->QuantidadeVeiculosConta($modelUsuario->getIdUsuario());
        $maximo = $modelPlano->MaximoVeiculosDoPlano($modelUsuario->getIdFisico());

        $valor = $maximo - $quantidade;

        if($valor > 0){
            return true;
        }
        else{
            return false;
        }
    }
}
