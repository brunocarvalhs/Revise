<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class modelCheck extends Model
{
    public function listaNotificacao($placa){
        $listaNotificacao = DB::table('tb_check')
        ->join('tb_peca','tb_check.cd_peca','=','tb_peca.cd_peca')
        ->join('tb_status','tb_check.sg_status','=','tb_status.sg_status')
        ->join('tb_veiculo','tb_check.cd_veiculo','=','tb_veiculo.cd_veiculo')
        ->select('tb_check.cd_check','tb_status.nm_status','tb_peca.nm_peca')
        ->where([['tb_veiculo.cd_placa','=',$placa]])->get();
        return json_encode($listaNotificacao);
    }

    public function listaNotificacoes($id){
        $listaNotificacao = DB::table('tb_check')
        ->join('tb_peca','tb_check.cd_peca','=','tb_peca.cd_peca')
        ->join('tb_status','tb_check.sg_status','=','tb_status.sg_status')
        ->join('tb_veiculo','tb_check.cd_veiculo','=','tb_veiculo.cd_veiculo')
        ->select('tb_check.cd_check','tb_check.cd_check','tb_status.nm_status','tb_peca.nm_peca')
        ->where([['tb_veiculo.cd_usuario','=',$id],['tb_check.sg_status','=','A']])->orderBy('tb_check.sg_status')->get();
        return json_encode($listaNotificacao);
    }

    public function listaPecasVerificados($id){
        $listaNotificacao = DB::table('tb_check')
        ->join('tb_peca','tb_check.cd_peca','=','tb_peca.cd_peca')
        ->join('tb_status','tb_check.sg_status','=','tb_status.sg_status')
        ->join('tb_veiculo','tb_check.cd_veiculo','=','tb_veiculo.cd_veiculo')
        ->select('tb_check.cd_check','tb_check.cd_check','tb_status.nm_status','tb_peca.nm_peca')
        ->where([['tb_veiculo.cd_usuario','=',$id],['tb_check.sg_status','!=','A']])->orderBy('tb_check.sg_status')->get();
        return json_encode($listaNotificacao);
    }
}
