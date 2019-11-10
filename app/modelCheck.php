<?php

namespace App;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class modelCheck extends Model
{
    public function listaNotificacao($placa)
    {
        $listaNotificacao = DB::table('tb_check')
            ->join('tb_peca', 'tb_check.cd_peca', '=', 'tb_peca.cd_peca')
            ->join('tb_status', 'tb_check.sg_status', '=', 'tb_status.sg_status')
            ->join('tb_veiculo', 'tb_check.cd_veiculo', '=', 'tb_veiculo.cd_veiculo')
            ->select('tb_check.cd_check', 'tb_status.nm_status', 'tb_peca.nm_peca', 'tb_check.dt_check', 'tb_veiculo.cd_placa')
            ->where([['tb_veiculo.cd_placa', '=', $placa]])
            ->orderBy('tb_check.dt_check')
            ->get();
        return json_encode($listaNotificacao);
    }

    public function listaNotificacoes($id)
    {
        $listaNotificacao = DB::table('tb_check')
            ->join('tb_peca', 'tb_check.cd_peca', '=', 'tb_peca.cd_peca')
            ->join('tb_status', 'tb_check.sg_status', '=', 'tb_status.sg_status')
            ->join('tb_veiculo', 'tb_check.cd_veiculo', '=', 'tb_veiculo.cd_veiculo')
            ->select('tb_check.cd_check', 'tb_check.dt_check', 'tb_status.nm_status', 'tb_peca.nm_peca', 'tb_veiculo.cd_placa')
            ->where([['tb_veiculo.cd_usuario', '=', $id], ['tb_check.sg_status', '=', 'A']])
            ->orderBy('tb_check.dt_check')
            ->get();
        return json_encode($listaNotificacao);
    }

    public function listaPecasVerificados($id)
    {
        $listaNotificacao = DB::table('tb_check')
            ->join('tb_peca', 'tb_check.cd_peca', '=', 'tb_peca.cd_peca')
            ->join('tb_status', 'tb_check.sg_status', '=', 'tb_status.sg_status')
            ->join('tb_veiculo', 'tb_check.cd_veiculo', '=', 'tb_veiculo.cd_veiculo')
            ->join('tb_medida_peca', 'tb_medida_peca.cd_peca', '=', 'tb_peca.cd_peca')
            ->select('tb_check.cd_check', 'tb_check.dt_check', 'tb_status.nm_status', 'tb_peca.nm_peca', 'tb_medida_peca.qt_medida', 'tb_veiculo.qt_pecorrido', 'tb_veiculo.cd_placa')
            ->where([['tb_veiculo.cd_usuario', '=', $id], ['tb_check.sg_status', '!=', 'A']])
            ->orderBy('tb_check.dt_check')
            ->get();
        return json_encode($listaNotificacao);
    }

    public function DeletarNotificacao($idCheck, $placa, $idUsuario)
    {
        try {
            $informacao =  DB::table('tb_veiculo')
                ->join('tb_modelo', 'tb_veiculo.cd_modelo', '=', 'tb_modelo.cd_modelo')
                ->join('tb_marca', 'tb_modelo.cd_marca', '=', 'tb_marca.cd_marca')
                ->join('tb_usuario', 'tb_usuario.cd_usuario', '=', 'tb_veiculo.cd_usuario')
                ->select('tb_veiculo.cd_veiculo as veiculo')
                ->where([
                    ['tb_veiculo.cd_placa', '=', $placa],
                    ['tb_veiculo.cd_usuario', '=', $idUsuario]
                ])
                ->first();
            if ($informacao != null) {
                DB::table('tb_check')
                    ->where([
                        ['cd_veiculo', '=', $informacao->veiculo],
                        ['cd_check', '=', $idCheck]
                    ])
                    ->delete();
                    return json_encode(['Status' => true, 'Mensagem' => 'Notificação deletado com sucesso!']);
            } else {
                return json_encode(['Status' => false, 'Mensagem' => 'Notificação do veículo não encontrado!']);
            }
        } catch (Exception $e) {
            return json_encode(['Status' => false, 'Mensagem' => 'Erro na tentativa de deletado notificação!']);
        }
    }
}
