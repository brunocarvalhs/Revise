<?php

    //Importando Classe
require_once 'modelUsuario.php';

    //Usando as classes
use Usuario;


/**
 * Classe do Juridico reponsavel por gerenciar 
 * dados do usuario juridico
 * 
 * Diretorio Pai - Models
 * 
 * @version 1.0.0
 */
class Juridico extends Usuario
{
        
        //Atributos
    private $IDUsuario;
    private $NomeFantasia;
    private $RazaoSocial;
    private $CNPJ;


        //Metodos 

    function __construct()
    {

    }

    /**
     * Gettes e Settes ID
     */
    private function setIDUsuario($id)
    {
        $this->IDUsuario = $id;
    }
    private function getIDUsuario()
    {
        return $this->IDUsuario;
    }
    /**
     * Gettes e Settes Nome Fantasia
     */
    private function setNomeFantasia($NomeFantasia)
    {
        $this->NomeFantasia = $NomeFantasia;
    }
    private function getNomeFantasia()
    {
        return $this->NomeFantasia;
    }
    /**
     * Gettes e Settes Razão Social
     */
    private function setRazaoSocial($RazaoSocial)
    {
        $this->RazaoSocial = $RazaoSocial;
    }
    private function getRazaoSocial()
    {
        return $this->RazaoSocial;
    }
    /**
     * Gettes e Settes CNPJ
     */
    private function setCNPJ($CNPJ)
    {
        $this->CNPJ = $CNPJ;
    }
    private function getCNPJ()
    {
        return $this->CNPJ;
    }


        // --------------- Métodos CRUD --------------- //

    /**
     * Método de Incluir usuario Juridico (Create)
     *
     * @return void
     */
    public function IncluirJuridico()
    {

    }

    /**
     * Método de Ver Juridico (Read)
     *
     * @return void
     */
    public function VerJuridico()
    {

    }

    /**
     * Método de Alterar Juridico (Update)
     *
     * @return void
     */
    public function AlterarJuridico()
    {

    }

    /**
     * Método de Deletar Juridico (Delete)
     *
     * @return void
     */
    public function DeletarJuridico()
    {

    }


        // -------- Métodos Regra de Negocios -------- //
}

?>