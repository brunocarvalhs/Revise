<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\modelNotificacao;

class controllerNotificacao extends Controller
{
    private $modelNotificacao;


    /**
     * Get the value of modelNotificacao
     */
    public function getModelNotificacao()
    {
        if(isset($this->modelNotificacao))
            $this->modelNotificacao = new modelNotificacao();

        return $this->modelNotificacao;
    }

    public function Notificacao($placa){
        $this->getModelNotificacao()->Notificacoes($placa);
    }

    public function NotificacaoEspecifica(){
        $this->getModelNotificacao()->Notificacao();
    }

}
