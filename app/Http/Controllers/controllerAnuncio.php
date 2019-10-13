<?php

namespace App\Http\Controllers;

use App\modelAnuncio;
use Illuminate\Http\Request;

class controllerAnuncio extends Controller
{




    public function PesquisaFisico(Request $request, modelAnuncio $modelAnuncio){
        $modelFisico = session()->get('Fisico');
        $pesquisa = $request->pesquisa;
        $tipo = $request->tipo;
        $preco = $request->preco;
        return dd($request);
        $lista = $modelAnuncio->PesquisaDeAnuncio($pesquisa,$tipo,$preco);
        $lista = json_decode($lista);
        return view('Fisico\Anuncio',['Fisico' => $modelFisico, 'Anuncios' => $lista]);
    }

    public function ListaAnunciosFisico(modelAnuncio $modelAnuncio){
        $modelFisico = session()->get('Fisico');
        $lista = $modelAnuncio->listaAnuncio();
        $lista = json_decode($lista);
        return view('Fisico\Anuncio',['Fisico' => $modelFisico, 'Anuncios' => $lista]);
    }
}
