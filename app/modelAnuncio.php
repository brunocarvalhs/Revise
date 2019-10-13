<?php

namespace App;

use Illuminate\Support\Facades\DB;
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

    public function PesquisaDeAnuncio($pesquisa, $tipo, $preco){
        /*
            select
            tb_anuncio.cd_anuncio, tb_anuncio.nm_titulo, tb_anuncio.ds_publicacao, tb_anuncio.vl_anunciado, tb_anuncio.dt_publicacao,
            tb_tipo_anuncio.nm_tipo_anuncio,
            tb_usuario_juridico.nm_nome_fantasia,
            tb_logradouro.nm_logradouro,
            tb_bairro.nm_bairro,
            tb_cidade.nm_cidade,
            tb_uf.sg_uf
            from tb_anuncio
            inner join tb_tipo_anuncio on tb_anuncio.cd_tipo_anuncio = tb_tipo_anuncio.cd_tipo_anuncio
            inner join tb_usuario_juridico on tb_usuario_juridico.cd_usuario_juridico = tb_anuncio.cd_usuario_juridico
            inner join tb_logradouro on tb_logradouro.cd_usuario_juridico = tb_usuario_juridico.cd_usuario_juridico
            inner join tb_bairro on tb_bairro.cd_bairro = tb_logradouro.cd_bairro
            inner join tb_cidade on tb_cidade.cd_cidade = tb_bairro.cd_cidade
            inner join tb_uf on tb_uf.sg_uf = tb_cidade.sg_uf
            WHERE tb_anuncio.nm_titulo LIKE '%p%';
        */

        if($preco != null){

            if($preco == 'menor'){
                $preco = 'asc';
            }
            else{
                $preco = 'desc';
            }

            $lista = DB::table('tb_anuncio')
            ->join('tb_tipo_anuncio','tb_anuncio.cd_tipo_anuncio','=','tb_tipo_anuncio.cd_tipo_anuncio')
            ->join('tb_usuario_juridico','tb_usuario_juridico.cd_usuario_juridico', '=', 'tb_anuncio.cd_usuario_juridico')
            ->join('tb_logradouro','tb_logradouro.cd_usuario_juridico', '=', 'tb_usuario_juridico.cd_usuario_juridico')
            ->join('tb_bairro','tb_bairro.cd_bairro', '=', 'tb_logradouro.cd_bairro')
            ->join('tb_cidade','tb_cidade.cd_cidade','=','tb_bairro.cd_cidade')
            ->join('tb_uf', 'tb_uf.sg_uf','=','tb_cidade.sg_uf')
            ->select('tb_anuncio.cd_anuncio as ID','tb_anuncio.nm_titulo as Titulo',
                    'tb_anuncio.ds_publicacao as Descricao','tb_anuncio.vl_anunciado as Valor',
                    'tb_anuncio.dt_publicacao as Data','tb_tipo_anuncio.nm_tipo_anuncio as Tipo',
                    'tb_usuario_juridico.nm_nome_fantasia as Empresa','tb_logradouro.nm_logradouro as Endereco',
                    'tb_bairro.nm_bairro as Bairro','tb_cidade.nm_cidade as Cidade',
                    'tb_uf.sg_uf as Estado')
            ->where('tb_anuncio.nm_titulo','LIKE','%'.$pesquisa.'%','and','tb_tipo_anuncio.nm_tipo_anuncio','LIKE','%'.$tipo.'%')
            ->orderByRaw('tb_anuncio.vl_anunciado '.$preco)
            ->get();
        } else {

            $lista = DB::table('tb_anuncio')
            ->join('tb_tipo_anuncio','tb_anuncio.cd_tipo_anuncio','=','tb_tipo_anuncio.cd_tipo_anuncio')
            ->join('tb_usuario_juridico','tb_usuario_juridico.cd_usuario_juridico', '=', 'tb_anuncio.cd_usuario_juridico')
            ->join('tb_logradouro','tb_logradouro.cd_usuario_juridico', '=', 'tb_usuario_juridico.cd_usuario_juridico')
            ->join('tb_bairro','tb_bairro.cd_bairro', '=', 'tb_logradouro.cd_bairro')
            ->join('tb_cidade','tb_cidade.cd_cidade','=','tb_bairro.cd_cidade')
            ->join('tb_uf', 'tb_uf.sg_uf','=','tb_cidade.sg_uf')
            ->select('tb_anuncio.cd_anuncio as ID','tb_anuncio.nm_titulo as Titulo',
                    'tb_anuncio.ds_publicacao as Descricao','tb_anuncio.vl_anunciado as Valor',
                    'tb_anuncio.dt_publicacao as Data','tb_tipo_anuncio.nm_tipo_anuncio as Tipo',
                    'tb_usuario_juridico.nm_nome_fantasia as Empresa','tb_logradouro.nm_logradouro as Endereco',
                    'tb_bairro.nm_bairro as Bairro','tb_cidade.nm_cidade as Cidade',
                    'tb_uf.sg_uf as Estado')
            ->where('tb_anuncio.nm_titulo','LIKE','%'.$pesquisa.'%','and','tb_tipo_anuncio.nm_tipo_anuncio','LIKE','%'.$tipo.'%')
            ->get();
        }


        $lista = json_encode($lista);

        return $lista;
    }


    public function listaAnuncio(){
        $lista = DB::table('tb_anuncio')
            ->join('tb_tipo_anuncio','tb_anuncio.cd_tipo_anuncio','=','tb_tipo_anuncio.cd_tipo_anuncio')
            ->join('tb_usuario_juridico','tb_usuario_juridico.cd_usuario_juridico', '=', 'tb_anuncio.cd_usuario_juridico')
            ->join('tb_logradouro','tb_logradouro.cd_usuario_juridico', '=', 'tb_usuario_juridico.cd_usuario_juridico')
            ->join('tb_bairro','tb_bairro.cd_bairro', '=', 'tb_logradouro.cd_bairro')
            ->join('tb_cidade','tb_cidade.cd_cidade','=','tb_bairro.cd_cidade')
            ->join('tb_uf', 'tb_uf.sg_uf','=','tb_cidade.sg_uf')
            ->select('tb_anuncio.cd_anuncio as ID','tb_anuncio.nm_titulo as Titulo',
                    'tb_anuncio.ds_publicacao as Descricao','tb_anuncio.vl_anunciado as Valor',
                    'tb_anuncio.dt_publicacao as Data','tb_tipo_anuncio.nm_tipo_anuncio as Tipo',
                    'tb_usuario_juridico.nm_nome_fantasia as Empresa','tb_logradouro.nm_logradouro as Endereco',
                    'tb_bairro.nm_bairro as Bairro','tb_cidade.nm_cidade as Cidade',
                    'tb_uf.sg_uf as Estado')
            ->get();

        $lista = json_encode($lista);

        return $lista;
    }
}
