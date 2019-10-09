<?php

namespace App;

use App\modelUsuario;

class modelJuridico extends modelUsuario
{
    private $IdJuridico;
    private $NomeFantasia;
    private $RazaoSocial;
    private $CNPJ;

    /**
     * Get the value of IdJuridico
     */
    public function getIdJuridico()
    {
        return $this->IdJuridico;
    }

    /**
     * Set the value of IdJuridico
     *
     * @return  self
     */
    public function setIdJuridico($IdJuridico)
    {
        $this->IdJuridico = $IdJuridico;

        return $this;
    }

    /**
     * Get the value of NomeFantasia
     */
    public function getNomeFantasia()
    {
        return $this->NomeFantasia;
    }

    /**
     * Set the value of NomeFantasia
     *
     * @return  self
     */
    public function setNomeFantasia($NomeFantasia)
    {
        $this->NomeFantasia = $NomeFantasia;

        return $this;
    }

    /**
     * Get the value of RazaoSocial
     */
    public function getRazaoSocial()
    {
        return $this->RazaoSocial;
    }

    /**
     * Set the value of RazaoSocial
     *
     * @return  self
     */
    public function setRazaoSocial($RazaoSocial)
    {
        $this->RazaoSocial = $RazaoSocial;

        return $this;
    }

    /**
     * Get the value of CNPJ
     */
    public function getCNPJ()
    {
        return $this->CNPJ;
    }

    /**
     * Set the value of CNPJ
     *
     * @return  self
     */
    public function setCNPJ($CNPJ)
    {
        $this->CNPJ = $CNPJ;

        return $this;
    }



}
