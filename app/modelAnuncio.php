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
                    ->where([
                        ['tb_anuncio.nm_titulo', 'LIKE', '%'.$pesquisa.'%'],
                        ['tb_tipo_anuncio.nm_tipo_anuncio', 'LIKE', '%'.$tipo.'%'],
                    ])
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
            ->where([
                ['tb_anuncio.nm_titulo', 'LIKE', '%'.$pesquisa.'%'],
                ['tb_tipo_anuncio.nm_tipo_anuncio', 'LIKE', '%'.$tipo.'%'],
            ])
            ->get();
        }


        $lista = json_encode($lista);

        return ($lista);
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


    public function Anuncio($id){
        $Anuncio = DB::select('call sp_selectAnuncio(?)',[$id]);
        $Anuncio = json_encode($Anuncio);
        return ($Anuncio);
    }


    public function IndiceAcesso($id){
        $indice = DB::select("SELECT
        sum(i.vl_indice) AS 'Visualizacao',
        ta.nm_tipo_anuncio AS 'Tipo'
        FROM tb_indice AS i
        INNER JOIN tb_anuncio AS a ON i.cd_anuncio = a.cd_anuncio
        INNER JOIN tb_tipo_anuncio AS ta ON ta.cd_tipo_anuncio = a.cd_tipo_anuncio
        INNER JOIN tb_usuario_juridico AS uj ON uj.cd_usuario_juridico = a.cd_usuario_juridico
        WHERE uj.cd_usuario_juridico = ? group by ta.nm_tipo_anuncio", [$id]);

        if($indice == []){
            $indice = [["Visualizacao" => 0,"Tipo" => 'Produto'],["Visualizacao" => 0,"Tipo" => 'Serviço']];
        }
        $indice = json_encode($indice);
        return ($indice);
    }

    public function IndiceAnuncios($id){
        $indiceAnuncios = DB::select("SELECT
        i.vl_indice AS 'Visualizacao',
        a.nm_titulo AS 'Anuncio'
        FROM tb_indice AS i
        INNER JOIN tb_anuncio AS a ON i.cd_anuncio = a.cd_anuncio
        INNER JOIN tb_tipo_anuncio AS ta ON ta.cd_tipo_anuncio = a.cd_tipo_anuncio
        INNER JOIN tb_usuario_juridico AS uj ON uj.cd_usuario_juridico = a.cd_usuario_juridico
        WHERE uj.cd_usuario_juridico = ?",[$id]);

        if($indiceAnuncios == []){
            $indiceAnuncios = [["Visualizacao" => 0,"Tipo" => 'Anuncio']];
        }
        $indiceAnuncios = json_encode($indiceAnuncios,JSON_UNESCAPED_UNICODE);
        return ($indiceAnuncios);
    }
}
