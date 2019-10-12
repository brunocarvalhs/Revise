<?php

namespace App\Http\Controllers;

use App\modelAnuncio;
use Illuminate\Http\Request;

class controllerAnuncio extends Controller
{




    public function Pesquisa(Request $request, modelAnuncio $modelAnuncio){
        return dd($request->pesquisa, $request->tipo, $request->preco);
    }
}
