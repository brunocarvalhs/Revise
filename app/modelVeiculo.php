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


    public function Cadastrar(Request $request, modelUsuario $modelUsuario)
    {

       $this->setPlaca($request->placa);
       $this->setAno($request->ano);
       $this->setCor($request->cor);

       $id = $this->getId();
       $modelo = $this->getModelo();
       $placa = $this->getPlaca();
       $ano = $this->getAno();
       $cor = $this->getCor();
       $idUsuario = $modelUsuario->getIdUsuario();


    }

}
