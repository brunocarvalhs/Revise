<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelAnuncio extends Model
{
    private $IdAnuncio;
    private $Titulo;
    private $Descricao;
    private $Valor;
    private $Data;
    private $ValorMensal;
    private $DataExpiracao;

    public function Cadastro(Request $request, modelJuridico $modelJuridico, modelTipoAnuncio $modelTipoAnuncio)
    {

        $check = $modelJuridico->ValidarCampos($request);

        if ($check) {
            $auto_anuncio = DB::table('tb_anuncio')->count() + 1;

            DB::table('tb_anuncio')->insert(
                [
                    'cd_anuncio' => $auto_anuncio,
                    'nm_titulo' => '',
                    'ds_publicacao' => '',
                    'vl_anunciado' => '',
                    'dt_publicacao' => '',
                    'vl_mensal' => '',
                    'cd_usuario_juridico' => '',
                    'cd_tipo_anuncio' => '',
                    'dt_expira_publicacao' => ''
                ]
            );
        }else{
            return json_encode(['Status' => false, 'Mensagem' => "Campos em branco detectado."]);
        }
    }
}
