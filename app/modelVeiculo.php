<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

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

    public function Cadastrar($idUsuario)
    {

        $id = $this->getId();
        $modelo = $this->getModelo();
        $marca = $this->getMarca();
        $placa = $this->getPlaca();
        $ano = $this->getAno();
        $cor = $this->getCor();
        $Quilometragem = $this->getQuilometragem();

        if(!(DB::table('tb_veiculo')->where('cd_placa','=',$placa)->exists())){

            $marca = DB::select("SELECT cd_marca as ID from tb_marca where nm_marca like CONCAT('%',?,'%')",[$marca]);
            $marca = ($marca[0]->ID);

            $idVeiculo = DB::select("SELECT max(cd_veiculo) + 1 as ID FROM tb_veiculo");
            $this->setId($idVeiculo[0]->ID);
            $idVeiculo = $this->getId();

            //return dd($idVeiculo);

            if((DB::table('tb_modelo')->where('nm_modelo','=',$modelo)->exists())){

                $modelo = DB::select("SELECT cd_modelo as ID from tb_modelo where nm_modelo like CONCAT('%',?,'%')",[$modelo]);

                $modelo = $modelo[0]->ID;

            }
            else{


                $idmodelo = DB::select("SELECT max(cd_modelo) + 1 as ID FROM tb_modelo");

                $idmodelo = $idmodelo[0]->ID;

                DB::table('tb_modelo')->insert([
                    'cd_modelo' =>  $idmodelo,
                    'nm_modelo' => $modelo,
                    'cd_marca' => $marca,
                ]);

                $modelo = DB::select("SELECT cd_modelo as ID from tb_modelo where nm_modelo like CONCAT('%',?,'%')",[$modelo]);

                $modelo = $modelo[0]->ID;

            }


            DB::table('tb_veiculo')->insert([
                'cd_veiculo' =>  $idVeiculo,
                'nm_cor' => $cor,
                'qt_quilometragem' => $Quilometragem,
                'aa_veiculo' => $ano,
                'cd_placa' => $placa,
                'cd_usuario' => $idUsuario,
                'cd_modelo' => $modelo
            ]);

            return json_encode(['Status' => true, 'Mensagem' => 'Veículo cadastrado com sucesso, placa: '.$placa]);;
        }
        else{
            return json_encode(['Status' => false, 'Mensagem' => 'Veículo já cadastrado com a placa '.$placa]);;
      }

    }


    public function DetalhesDoVeiculo()
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

        DB::table('tb_veiculo')
        ->join('tb_modelo','','=','')
        ->join('tb_marca','','=','')
        ->select('')
        ->where('')
        ->first();
    }


    public function compartibilidadeVeiculo($veiculo){
        return DB::table('tb_marca')->where('nm_marca','LIKE','%'.$veiculo[0].'%')->exists();
    }

}
