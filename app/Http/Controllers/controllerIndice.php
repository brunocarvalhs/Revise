<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\modelIndice;

class controllerIndice extends Controller
{

    public function IndiceTipo(Request $request, modelIndice $modelIndice){
        $modelJuridico = session()->get('Juridico');
        $indice = $modelIndice->IndiceAcesso($modelJuridico->getIdJuridico());
        return json_decode($indice);
    }

    public function IndiceAnuncios(Request $request, modelIndice $modelIndice){
        $modelJuridico = session()->get('Juridico');
        $Anuncios = $modelIndice->IndiceAnuncios($modelJuridico->getIdJuridico());
        return json_decode($Anuncios);
    }

    public function ControlerDeIndiceJuridico(Request $request){
        $modelJuridico = session()->get('Juridico');
        return view('Juridico.Indice',['Juridico' => $modelJuridico]);
    }
}
