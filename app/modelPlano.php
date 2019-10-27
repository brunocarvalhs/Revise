<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class modelPlano extends Model
{
    public function listaMensalidadeFisico($idFisico){

        $lista = DB::table('tb_controle_plano')
        ->select('cd_controle as ID',
        DB::raw('DATE_FORMAT(dt_definicao, "%b") as mes'),
        DB::raw('DATE_FORMAT(dt_expiracao, "%M %d - %Y") as vencimento'),
        DB::raw('timestampdiff(DAY,now(),dt_expiracao)+1 as estado'),
        'vl_pago_plano as valor')
        ->where('cd_usuario_fisico','=',$idFisico)->get();

        $lista = json_encode($lista);
        return ($lista);
    }

    public function MensalCobrança(){

    }

    public function MaximoVeiculosDoPlano($idUsuarioFisico){
        $maximo = DB::select("select qt_veiculo from tb_controle_plano
        inner join tb_usuario_fisico on tb_usuario_fisico.cd_usuario_fisico =
        tb_controle_plano.cd_usuario_fisico inner join tb_plano on tb_plano.cd_plano =
        tb_controle_plano.cd_plano where tb_usuario_fisico.cd_usuario_fisico = ?",[$idUsuarioFisico]);

        $maximo = $maximo[0]->qt_veiculo;

        return ((int)$maximo);
    }
}
