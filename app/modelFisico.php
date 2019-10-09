<?php

namespace App;

use App\modelUsuario;
use Illuminate\Database\Eloquent\Model;

class modelFisico extends modelUsuario
{
    //


    public function Login($CNPJ, $SENHA){
        DB::select(`SELECT f.cd_usuario as 'Usuario', f.cd_cpf as 'CPF',
        u.cd_senha as 'Senha',
        f.nm_usuario_fisico as 'Nome' ,
        u.nm_email as 'Email',
        f.dt_nascimento as 'Nascimento',
        p.nm_plano as 'Plano',
        p.qt_veiculo as 'QuantidadeVeiculo'
        FROM tb_usuario as u
        INNER JOIN  tb_usuario_fisico as f on f.cd_usuario = u.cd_usuario
        INNER JOIN tb_controle_plano as cp on cp.cd_usuario_fisico = f.cd_usuario_fisico
        INNER JOIN tb_plano as p on p.cd_plano = cp.cd_plano
        and  f.cd_cpf = ? and u.cd_senha = ?`, [$CNPJ, $SENHA]);
        if($resultado){
            return view('home', $resultado);
        }
        else{
            return back();
        }
    }
}
