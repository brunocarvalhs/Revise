<?php

namespace App;

use App\modelUsuario;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class modelFisico extends modelUsuario
{
    private $IdFisico;


    public function Login($CPF, $SENHA){

        $resultado = DB::table('tb_usuario')
        ->join('tb_usuario_fisico', 'tb_usuario.cd_usuario', '=', 'tb_usuario_fisico.cd_usuario')
        ->join('tb_controle_plano', 'tb_controle_plano.cd_usuario_fisico', '=', 'tb_usuario_fisico.cd_usuario_fisico')
        ->join('tb_plano', 'tb_plano.cd_plano', '=', 'tb_controle_plano.cd_plano')
        ->select('tb_usuario_fisico.cd_usuario as Usuario','tb_usuario_fisico.cd_cpf as CPF','tb_usuario.cd_senha as Senha','tb_usuario_fisico.nm_usuario_fisico as Nome','tb_usuario.nm_email as Email','tb_usuario_fisico.dt_nascimento as Nascimento','tb_plano.nm_plano as Plano','tb_plano.qt_veiculo as QuantidadeVeiculo')
        ->where('tb_usuario_fisico.cd_cpf', '=', $CPF, 'and','tb_usuario.cd_senha', '=', $SENHA)
        ->get();

        if($resultado){
            return view('home', ['users' => $users]);
        }
        else{
            return back();
        }
    }
}
