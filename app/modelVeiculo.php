<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelVeiculo extends Model
{
    private $IdVeiculo;
    private $Cor;
    private $Ano;
    private $Quilometragem;
    private $Placa;

    /**
     * Get the value of IdVeiculo
     */
    public function getIdVeiculo()
    {
        return $this->IdVeiculo;
    }

    /**
     * Set the value of IdVeiculo
     *
     * @return  self
     */
    public function setIdVeiculo($IdVeiculo)
    {
        $this->IdVeiculo = $IdVeiculo;

        return $this;
    }

    /**
     * Get the value of Cor
     */
    public function getCor()
    {
        return $this->Cor;
    }

    /**
     * Set the value of Cor
     *
     * @return  self
     */
    public function setCor($Cor)
    {
        $this->Cor = $Cor;

        return $this;
    }

    /**
     * Get the value of Ano
     */
    public function getAno()
    {
        return $this->Ano;
    }

    /**
     * Set the value of Ano
     *
     * @return  self
     */
    public function setAno($Ano)
    {
        $this->Ano = $Ano;

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
     * Get the value of Placa
     */
    public function getPlaca()
    {
        return $this->Placa;
    }

    /**
     * Set the value of Placa
     *
     * @return  self
     */
    public function setPlaca($Placa)
    {
        $this->Placa = $Placa;

        return $this;
    }
}
