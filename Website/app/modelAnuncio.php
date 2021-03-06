<?php

namespace App;

use DateTime;
use Exception;
use App\modelJuridico;
use Illuminate\Http\Request;
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

    public function Cadastro($request, modelJuridico $modelJuridico)
    {
        try {

            $check = $modelJuridico->ValidarCampos($request);

            if ($check) {

                $auto_anuncio = DB::table('tb_anuncio')->max('cd_anuncio') + 1;

                $TipoAnuncio = DB::select("SELECT cd_tipo_anuncio AS id FROM tb_tipo_anuncio WHERE nm_tipo_anuncio = ?", [$request->txtTipo]);

                if ($request->txtTipo == 'Serviço') {
                    $request->txtPreco = null;
                }

                $atual = date("Y-m-d");

                $expiracao = date('Y-m-d"', strtotime('+1 month'));

                DB::table('tb_anuncio')->insert(
                    [
                        'cd_anuncio' => $auto_anuncio,
                        'nm_titulo' => $request->txtAnuncio,
                        'ds_publicacao' => $request->txtDescricao,
                        'vl_anunciado' => $request->txtPreco,
                        'dt_publicacao' => $atual,
                        'dt_expira_publicacao' => $expiracao,
                        'cd_usuario_juridico' => $modelJuridico->getIdJuridico(),
                        'cd_tipo_anuncio' => $TipoAnuncio[0]->id
                    ]
                );

                return json_encode(['Status' => true, 'Tipo' => 'success', 'Titulo' => 'Cadastrado com sucesso!', 'Mensagem' => '']);
            } else {

                return json_encode(['Status' => false, 'Tipo' => 'warning', 'Titulo' => 'Falha', 'Mensagem' => 'Preencha os campos em branco!']);
            }
        } catch (Exception $e) {

            return json_encode(['Status' => false, 'Tipo' => 'error', 'Titulo' => 'Falha', 'Mensagem' => 'Erro ao cadastrar']);
        }
    }

    public function PesquisaDeAnuncio($pesquisa, $tipo, $preco)
    {
        try {
            if ($preco != null) {

                if ($preco == 'menor') {
                    $preco = 'asc';
                } else {
                    $preco = 'desc';
                }

                $lista = DB::table('tb_anuncio')
                    ->join('tb_tipo_anuncio', 'tb_anuncio.cd_tipo_anuncio', '=', 'tb_tipo_anuncio.cd_tipo_anuncio')
                    ->join('tb_usuario_juridico', 'tb_usuario_juridico.cd_usuario_juridico', '=', 'tb_anuncio.cd_usuario_juridico')
                    ->join('tb_logradouro', 'tb_logradouro.cd_usuario_juridico', '=', 'tb_usuario_juridico.cd_usuario_juridico')
                    ->join('tb_bairro', 'tb_bairro.cd_bairro', '=', 'tb_logradouro.cd_bairro')
                    ->join('tb_cidade', 'tb_cidade.cd_cidade', '=', 'tb_bairro.cd_cidade')
                    ->join('tb_uf', 'tb_uf.sg_uf', '=', 'tb_cidade.sg_uf')
                    ->select(
                        'tb_anuncio.cd_anuncio as ID',
                        'tb_anuncio.nm_titulo as Titulo',
                        'tb_anuncio.ds_publicacao as Descricao',
                        'tb_anuncio.vl_anunciado as Valor',
                        'tb_anuncio.dt_publicacao as Data',
                        'tb_tipo_anuncio.nm_tipo_anuncio as Tipo',
                        'tb_usuario_juridico.nm_nome_fantasia as Empresa',
                        'tb_logradouro.nm_logradouro as Endereco',
                        'tb_bairro.nm_bairro as Bairro',
                        'tb_cidade.nm_cidade as Cidade',
                        'tb_uf.sg_uf as Estado'
                    )
                    ->where([
                        ['tb_anuncio.nm_titulo', 'LIKE', '%' . $pesquisa . '%'],
                        ['tb_tipo_anuncio.nm_tipo_anuncio', 'LIKE', '%' . $tipo . '%'],
                        ['tb_anuncio.dt_expira_publicacao', '>', 'NOW()']
                    ])
                    ->orderByRaw('tb_anuncio.vl_anunciado ' . $preco)
                    ->get();
            } else {

                $lista = DB::table('tb_anuncio')
                    ->join('tb_tipo_anuncio', 'tb_anuncio.cd_tipo_anuncio', '=', 'tb_tipo_anuncio.cd_tipo_anuncio')
                    ->join('tb_usuario_juridico', 'tb_usuario_juridico.cd_usuario_juridico', '=', 'tb_anuncio.cd_usuario_juridico')
                    ->join('tb_logradouro', 'tb_logradouro.cd_usuario_juridico', '=', 'tb_usuario_juridico.cd_usuario_juridico')
                    ->join('tb_bairro', 'tb_bairro.cd_bairro', '=', 'tb_logradouro.cd_bairro')
                    ->join('tb_cidade', 'tb_cidade.cd_cidade', '=', 'tb_bairro.cd_cidade')
                    ->join('tb_uf', 'tb_uf.sg_uf', '=', 'tb_cidade.sg_uf')
                    ->select(
                        'tb_anuncio.cd_anuncio as ID',
                        'tb_anuncio.nm_titulo as Titulo',
                        'tb_anuncio.ds_publicacao as Descricao',
                        'tb_anuncio.vl_anunciado as Valor',
                        'tb_anuncio.dt_publicacao as Data',
                        'tb_tipo_anuncio.nm_tipo_anuncio as Tipo',
                        'tb_usuario_juridico.nm_nome_fantasia as Empresa',
                        'tb_logradouro.nm_logradouro as Endereco',
                        'tb_bairro.nm_bairro as Bairro',
                        'tb_cidade.nm_cidade as Cidade',
                        'tb_uf.sg_uf as Estado'
                    )
                    ->where([
                        ['tb_anuncio.nm_titulo', 'LIKE', '%' . $pesquisa . '%'],
                        ['tb_tipo_anuncio.nm_tipo_anuncio', 'LIKE', '%' . $tipo . '%'],
                        ['tb_anuncio.dt_expira_publicacao', '>', 'NOW()']
                    ])
                    ->get();
            }


            $lista = json_encode($lista);

            return ($lista);
        } catch (Exception $e) {
            return false;
        }
    }


    public function listaAnuncio()
    {
        $lista = DB::table('tb_anuncio')
            ->join('tb_tipo_anuncio', 'tb_anuncio.cd_tipo_anuncio', '=', 'tb_tipo_anuncio.cd_tipo_anuncio')
            ->join('tb_usuario_juridico', 'tb_usuario_juridico.cd_usuario_juridico', '=', 'tb_anuncio.cd_usuario_juridico')
            ->join('tb_logradouro', 'tb_logradouro.cd_usuario_juridico', '=', 'tb_usuario_juridico.cd_usuario_juridico')
            ->join('tb_bairro', 'tb_bairro.cd_bairro', '=', 'tb_logradouro.cd_bairro')
            ->join('tb_cidade', 'tb_cidade.cd_cidade', '=', 'tb_bairro.cd_cidade')
            ->join('tb_uf', 'tb_uf.sg_uf', '=', 'tb_cidade.sg_uf')
            ->select(
                'tb_anuncio.cd_anuncio as ID',
                'tb_anuncio.nm_titulo as Titulo',
                'tb_anuncio.ds_publicacao as Descricao',
                'tb_anuncio.vl_anunciado as Valor',
                'tb_anuncio.dt_publicacao as Data',
                'tb_tipo_anuncio.nm_tipo_anuncio as Tipo',
                'tb_usuario_juridico.nm_nome_fantasia as Empresa',
                'tb_logradouro.nm_logradouro as Endereco',
                'tb_bairro.nm_bairro as Bairro',
                'tb_cidade.nm_cidade as Cidade',
                'tb_uf.sg_uf as Estado'
            )
            ->where('tb_anuncio.dt_expira_publicacao', '>', 'NOW()')
            ->get();

        $lista = json_encode($lista);

        return $lista;
    }


    public function Anuncio($id)
    {
        $Anuncio = DB::select('call sp_selectAnuncio(?)', [$id]);
        $Anuncio = json_encode($Anuncio);
        return ($Anuncio);
    }


    public function AnuncioDoJuridico($id)
    {
        $lista = DB::table('tb_anuncio')
            ->join('tb_tipo_anuncio', 'tb_anuncio.cd_tipo_anuncio', '=', 'tb_tipo_anuncio.cd_tipo_anuncio')
            ->join('tb_usuario_juridico', 'tb_usuario_juridico.cd_usuario_juridico', '=', 'tb_anuncio.cd_usuario_juridico')
            ->select(
                'tb_anuncio.cd_anuncio as ID',
                'tb_anuncio.nm_titulo as Titulo',
                'tb_anuncio.ds_publicacao as Descricao',
                'tb_anuncio.vl_anunciado as Valor',
                'tb_anuncio.dt_publicacao as Data',
                'tb_anuncio.dt_expira_publicacao as Validade',
                'tb_tipo_anuncio.nm_tipo_anuncio as Tipo'
            )
            ->where([
                ['tb_usuario_juridico.cd_usuario_juridico', '=', $id],
                ['tb_anuncio.dt_expira_publicacao', '>', 'NOW()']
            ])
            ->get();

        $lista = json_encode($lista);

        return $lista;
    }

    public function DeletarAnuncio($IdAnuncio)
    {
        if (DB::table('tb_indice')->where('cd_anuncio', '=', $IdAnuncio)->exists()) {
            DB::table('tb_indice')->where('cd_anuncio', '=', $IdAnuncio)->delete();
        }
        $deletar = DB::table('tb_anuncio')->where('cd_anuncio', '=', $IdAnuncio)->delete();
        if ($deletar) {
            return json_encode(['Status' => true, 'Tipo' => 'success', 'Titulo' => 'Deletado com sucesso', 'Mensagem' => '']);
        } else {
            return json_encode(['Status' => false, 'Tipo' => 'error', 'Titulo' => 'Falha', 'Mensagem' => 'Erro ao tentar deletar.']);
        }
    }
}
