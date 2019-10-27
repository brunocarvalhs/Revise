<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class modelPlano extends Model
{
    public function listaMensalidadeFisico($id){
        $lista = DB::table('tb_controle_plano')
        ->select('cd_controle as ID',
        DB::raw('DATE_FORMAT(dt_definicao, "%b") as mes'),
        DB::raw('DATE_FORMAT(dt_expiracao, "%M %d - %Y") as vencimento'),
        DB::raw('timestampdiff(DAY,now(),dt_expiracao)+1 as estado'),
        'vl_pago_plano as valor')
        ->where('cd_usuario_fisico','=',$id)->get();

        $lista = json_encode($lista);
        return ($lista);
    }

    public function MensalCobrança(){

    }
}
