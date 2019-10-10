<?php

namespace App\Http\Controllers;

use App\modelFisico;
use Illuminate\Http\Request;

class controllerFisico extends Controller
{
    public function RotasFisico($tipo){
        switch($tipo){
            case 'Perfil':{
                $this->PagePerfil();
                break;
            }
            case 'Notificacao':{
                $this->PageNotificacao();
                break;
            }
            case 'Veiculos':{
                $this->PageVeiculos();
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
        return view('Fisico\Perfil');
    }

    public function PageNotificacao(){
        return view('Fisico\Notificacao');
    }

    public function PageVeiculos(){
        return view('Fisico\Veiculo');
    }

    public function PageAnuncio(){
        return view('Fisico\Anuncio');
    }

}
