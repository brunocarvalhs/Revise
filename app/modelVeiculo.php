<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;
use TheSeer\Tokenizer\Exception;

class modelVeiculo extends Model
{
    private $id;
    private $placa;
    private $marca;
    private $modelo;
    private $ano;
    private $cor;
    private $Quilometragem;
    private $Estado;
    private $Cidade;
    private $delta;

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of placa
     */
    public function getPlaca()
    {
        return $this->placa;
    }

    /**
     * Set the value of placa
     *
     * @return  self
     */
    public function setPlaca($placa)
    {
        $this->placa = $placa;

        return $this;
    }

    /**
     * Get the value of marca
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     *
     * @return  self
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get the value of modelo
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     *
     * @return  self
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get the value of ano
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set the value of ano
     *
     * @return  self
     */
    public function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * Get the value of cor
     */
    public function getCor()
    {
        return $this->cor;
    }

    /**
     * Set the value of cor
     *
     * @return  self
     */
    public function setCor($cor)
    {
        $this->cor = $cor;

        return $this;
    }

    /**
     * Get the value of Quilometragem
     */
    public function getQuilometragem()
    {
        return $this->Quilometragem;
    }

    /**
     * Set the value of Quilometragem
     *
     * @return  self
     */
    public function setQuilometragem($Quilometragem)
    {
        $this->Quilometragem = $Quilometragem;

        return $this;
    }

    /**
     * Get the value of Estado
     */
    public function getEstado()
    {
        return $this->Estado;
    }

    /**
     * Set the value of Estado
     *
     * @return  self
     */
    public function setEstado($Estado)
    {
        $this->Estado = $Estado;

        return $this;
    }

    /**
     * Get the value of Cidade
     */
    public function getCidade()
    {
        return $this->Cidade;
    }

    /**
     * Set the value of Cidade
     *
     * @return  self
     */
    public function setCidade($Cidade)
    {
        $this->Cidade = $Cidade;

        return $this;
    }

    /**
     * Get the value of delta
     */
    public function getDelta()
    {
        return $this->delta;
    }

    /**
     * Set the value of delta
     *
     * @return  self
     */
    public function setDelta($delta)
    {
        $this->delta = $delta;

        return $this;
    }

    public function Cadastrar($idUsuario)
    {

        $id = $this->getId();
        $modelo = $this->getModelo();
        $marca = $this->getMarca();
        $placa = $this->getPlaca();
        $ano = $this->getAno();
        $cor = $this->getCor();
        $Quilometragem = $this->getQuilometragem();

        if (!(DB::table('tb_veiculo')->where('cd_placa', '=', $placa)->exists())) {

            $marca = DB::select("SELECT cd_marca as ID from tb_marca where nm_marca like CONCAT('%',?,'%')", [$marca]);
            $marca = ($marca[0]->ID);

            $idVeiculo = DB::table("tb_veiculo")->max('cd_veiculo') + 1;
            $this->setId($idVeiculo);
            $idVeiculo = $this->getId();

            //return dd($idVeiculo);

            if ((DB::table('tb_modelo')->where('nm_modelo', '=', $modelo)->exists())) {

                $modelo = DB::select("SELECT cd_modelo as ID from tb_modelo where nm_modelo like CONCAT('%',?,'%')", [$modelo]);

                $modelo = $modelo[0]->ID;
            } else {



                $idmodelo = DB::table("tb_modelo")->max('cd_modelo') + 1;

                DB::table('tb_modelo')->insert([
                    'cd_modelo' =>  $idmodelo,
                    'nm_modelo' => $modelo,
                    'cd_marca' => $marca,
                ]);

                $modelo = DB::select("SELECT cd_modelo as ID from tb_modelo where nm_modelo like CONCAT('%',?,'%')", [$modelo]);

                $modelo = $modelo[0]->ID;
            }


            DB::table('tb_veiculo')->insert([
                'cd_veiculo' =>  $idVeiculo,
                'nm_cor' => $cor,
                'qt_quilometragem' => $Quilometragem,
                'aa_veiculo' => $ano,
                'dt_verificacao' => date('Y-m-d'),
                'cd_placa' => $placa,
                'cd_usuario' => $idUsuario,
                'cd_modelo' => $modelo
            ]);

            return json_encode(['Status' => true, 'Mensagem' => 'Veículo cadastrado com sucesso, placa: ' . $placa]);;
        } else {
            return json_encode(['Status' => false, 'Mensagem' => 'Veículo já cadastrado com a placa ' . $placa]);;
        }
    }


    public function DetalhesDoVeiculo($placa)
    {
        /*
        SELECT
            v.cd_placa as 'Placa',
            mo.nm_modelo as 'Modelo',
            ma.nm_marca as 'Marca',
            v.nm_cor as 'Cor',
            v.aa_veiculo as 'Ano'
            FROM tb_veiculo as v
            INNER JOIN tb_modelo as mo on v.cd_modelo = mo.cd_modelo
                    INNER JOIN tb_marca as ma on mo.cd_marca = ma.cd_marca
                AND v.cd_veiculo = ?
        */

        $dados = DB::table('tb_veiculo')
                    ->join('tb_modelo', 'tb_veiculo.cd_modelo', '=', 'tb_modelo.cd_modelo')
                    ->join('tb_marca', 'tb_modelo.cd_marca', '=', 'tb_marca.cd_marca')
                    ->select('tb_veiculo.cd_placa', 'tb_modelo.nm_modelo', 'tb_marca.nm_marca', 'tb_veiculo.nm_cor', 'tb_veiculo.aa_veiculo')
                    ->where('tb_veiculo.cd_placa', '=', $placa)
                    ->first();

        return json_encode($dados);
    }


    public function compartibilidadeVeiculo($veiculo)
    {
        return DB::table('tb_marca')->where('nm_marca', 'LIKE', '%' . $veiculo[0] . '%')->exists();
    }


    private function CalculoQuilometragem($placa, $atualKM)
    {
        $anteriorKM = DB::table('tb_veiculo')->where('cd_placa', '=', $placa)->select('qt_quilometragem as KM')->first();

        $anteriorKM = (int) $anteriorKM->KM;

        $delta = ($atualKM - $anteriorKM);

        if($delta < 0){
            return false;
        }
        return ($delta);
    }

    public function CalculoTempo($placa){

        $ultimaVerificacao = DB::table('tb_veiculo')
        ->where('cd_placa', '=', $placa)
        ->select(DB::raw('timestampdiff(DAY,dt_verificacao,now()) as Tempo'))
        ->first();

        $ultimaVerificacao = (int) $ultimaVerificacao->Tempo;

        return ($ultimaVerificacao);
    }

    private function calculoPecorrido($placa,$pecorrido){
        $check = DB::table('tb_veiculo')->select('qt_pecorrido as Pecorrido')->where('cd_placa','=',$placa)->first();
        $check = $check->Pecorrido;
        if($check != null){
            return $check + $pecorrido;
        }
        return $pecorrido;
    }

    public function SistemaVerificacaoVeiculo($placa, $Km)
    {
        try {
            //Calcular diferença de quilometragem
            $resultado = $this->CalculoQuilometragem($placa, $Km);
            //Verificar resultado
            if ($resultado) {
                //Peças vencidas por Quilometragem
                $pecas = DB::table('tb_medida_peca')
                ->select(DB::raw('cd_peca'))
                ->where([
                    ['qt_medida', '<', $resultado],
                    ['sg_medida', '=', 'km']
                ])
                ->groupBy('cd_peca')
                ->get();
                //ID do veículo da placa
                $idVeiculo = DB::table('tb_veiculo')->select('cd_veiculo as id')->where('cd_placa','=',$placa)->first();
                //Isolando resultado do ID
                $idVeiculo = $idVeiculo->id;
                //Foreach de peças
                foreach($pecas as $peca){
                    //Auto inclemente do ID check
                    $id = DB::table('tb_check')->max('cd_check') + 1;
                    //Insert CHECK das peça vencida
                    DB::table('tb_check')->insert([
                        'cd_check' => $id,
                        'dt_check' => date("Y-m-d"),
                        'cd_veiculo' => $idVeiculo,
                        'sg_status' => 'A',
                        'cd_peca' => $peca->cd_peca
                    ]);
                }
                //Calculo de tempo desde a ultimo check
                $tempo = $this->CalculoTempo($placa);
                //Peças que venceram por tempo
                $pecas = DB::table('tb_medida_peca')
                ->select(DB::raw('cd_peca'))
                ->where([
                    ['qt_medida', '<', $tempo],
                    ['sg_medida', '=', 'T']
                ])
                ->groupBy('cd_peca')
                ->get();
                //Insert de peças vencidas por tempo
                foreach($pecas as $peca){
                    //Auto inclemente do ID check
                    $id = DB::table('tb_check')->max('cd_check') + 1;
                    //Insert CHECK das peça vencida
                    DB::table('tb_check')->insert([
                        'cd_check' => $id,
                        'dt_check' => date("Y-m-d"),
                        'cd_veiculo' => $idVeiculo,
                        'sg_status' => 'A',
                        'cd_peca' => $peca->cd_peca
                    ]);
                }
                //Somando quilometragem pecorrida desde o cadastro do veículo
                $resultado = $this->calculoPecorrido($placa, $resultado);
                //Atualizando dados do veiculo
                DB::table('tb_veiculo')
                ->where('cd_placa', '=', $placa)
                ->update(
                    [
                    'qt_quilometragem' => $Km,
                    'dt_verificacao' => date('Y-m-d'),
                    'qt_pecorrido' => $resultado
                    ]
                );
                return true;
            }
            else{
                return false;
            }
        } catch (Exception $e) {
            return false;
        }
    }

    public function QuantidadeVeiculosConta($idUsuario){
        $numero_veiculos = DB::table('tb_veiculo')->where('cd_usuario','=',$idUsuario)->count();
        return ($numero_veiculos);
    }
}
