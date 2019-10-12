<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerAnuncio extends Controller
{




    public function Pesquisa(Request $request){
        return dd($request->pesquisa, $request->tipo, $request->preco);
    }
}
