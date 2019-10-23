<?php

namespace App\Http\Controllers;

use App\modelAnuncio;
use App\modelTipoAnuncio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class controllerAnuncio extends Controller
{




    public function PesquisaFisico(Request $request, modelAnuncio $modelAnuncio)
    {
        $modelFisico = session()->get('Fisico');
        $pesquisa = $request->pesquisa;
        $tipo = $request->tipo;
        $preco = $request->preco;
        $lista = $modelAnuncio->PesquisaDeAnuncio($pesquisa, $tipo, $preco);
        $lista = json_decode($lista);
        return view('Fisico\Anuncio', ['Fisico' => $modelFisico, 'Anuncios' => $lista]);
    }

    public function ListaAnunciosFisico(modelAnuncio $modelAnuncio)
    {
        $modelFisico = session()->get('Fisico');
        $lista = $modelAnuncio->listaAnuncio();
        $lista = json_decode($lista);
        return view('Fisico\Anuncio', ['Fisico' => $modelFisico, 'Anuncios' => $lista]);
    }

    public function DetalhesAnuncios(Request $request, modelAnuncio $modelAnuncio)
    {
        $modelFisico = session()->get('Fisico');
        $id = $request->id;
        if ($id != '') {
            $Anuncio = $modelAnuncio->Anuncio($id);
            $Anuncio = json_decode($Anuncio);
            //return dd($Anuncio);
            return view('Fisico\DetalhesAnuncio', ['Fisico' => $modelFisico, 'Anuncio' => $Anuncio]);
        } else {
            return redirect()->back();
        }
    }

    public function CadastroAnuncio(Request $request, modelAnuncio $modelAnuncio)
    {
        $modelJuridico = session()->get('Juridico');
        $cadastro = $modelAnuncio->Cadastro($request, $modelJuridico);
        $cadastro = json_decode($cadastro);
        return dd($cadastro);
        return redirect('/Painel/Anuncio')->with('cadastro', $cadastro);
    }

    public function ControlerDeAnuncioJuridico(Request $request, modelAnuncio $modelAnuncio)
    {
        $modelJuridico = session()->get('Juridico');
        $Anuncios = $modelAnuncio->AnuncioDoJuridico($modelJuridico->getIdJuridico());
        $Anuncios = json_decode($Anuncios);
        return view('Juridico.Anuncio', ['Juridico' => $modelJuridico, 'Anuncios' => $Anuncios]);
    }


    public function deletarAnuncio(Request $request, modelAnuncio $modelAnuncio)
    {
        $mensagem = $modelAnuncio->deletarAnuncio($request->anuncio);
        $mensagem = json_decode($mensagem);
        return redirect('/Painel/Anuncio')->with('status', $mensagem);
    }
}
