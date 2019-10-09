<?php

namespace App;

use App\modelUsuario;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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


    public function login($CNPJ, $SENHA){

        $resultado = DB::table('tb_usuario')
        ->join('tb_usuario_juridico', 'tb_usuario.cd_usuario', '=', 'tb_usuario_juridico.cd_usuario')
        ->select('tb_usuario_juridico.cd_usuario as Usuario','tb_usuario_juridico.cd_cnpj as CNPJ','tb_usuario.cd_senha as Senha','tb_usuario.nm_email as Email', 'tb_usuario_juridico.nm_nome_fantasia as Fantasia', 'tb_usuario_juridico.nm_razao_social as Razao')
        ->where('tb_usuario_juridico.cd_cnpj', '=', $CNPJ, 'and','tb_usuario.cd_senha', '=', $SENHA)
        ->first();

        if($resultado->CNPJ == $CNPJ && $resultado->Senha == $SENHA){
            $this->setSenha($resultado->Senha);
            $this->setEmail($resultado->Email);
            $_SESSION['autentic'] = '2';
            return $resultado;
        }
        else{
            return false;
        }
    }
}
