<?php

namespace App\Http\Controllers;

use App\modelJuridico;
use Illuminate\Http\Request;

class controllerJuridico extends Controller
{
    public function RotasJuridico($tipo){
        switch($tipo){
            case 'Perfil':{
                $this->PagePerfil();
                break;
            }
            case 'Indice':{
                $this->PageIndice();
                break;
            }
            case 'Anuncio':{
                $this->PageAnuncio();
                break;
            }
            default:{
                return back();
            }
        }
    }

    public function PagePerfil(){
        return view('Juridico\Perfil');
    }

    public function PageIndice(){
        return view('Juridico\Indice');
    }

    public function PageAnuncio(){
        return view('Juridico\Anuncio');
    }

}
