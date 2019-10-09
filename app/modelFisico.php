<?php

namespace App;

use App\modelUsuario;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
//session_start();

class modelFisico extends modelUsuario
{
    private $IdFisico;
    private $NomeFisico;
    private $CPF;
    private $DataNascimento;

    /**
     * Get the value of IdFisico
     */
    public function getIdFisico()
    {
        return $this->IdFisico;
    }

    /**
     * Set the value of IdFisico
     *
     * @return  self
     */
    public function setIdFisico($IdFisico)
    {
        $this->IdFisico = $IdFisico;

        return $this;
    }

    /**
     * Get the value of NomeFisico
     */
    public function getNomeFisico()
    {
        return $this->NomeFisico;
    }

    /**
     * Set the value of NomeFisico
     *
     * @return  self
     */
    public function setNomeFisico($NomeFisico)
    {
        $this->NomeFisico = $NomeFisico;

        return $this;
    }

    /**
     * Get the value of CPF
     */
    public function getCPF()
    {
        return $this->CPF;
    }

    /**
     * Set the value of CPF
     *
     * @return  self
     */
    public function setCPF($CPF)
    {
        $this->CPF = $CPF;

        return $this;
    }

    /**
     * Get the value of DataNascimento
     */
    public function getDataNascimento()
    {
        return $this->DataNascimento;
    }

    /**
     * Set the value of DataNascimento
     *
     * @return  self
     */
    public function setDataNascimento($DataNascimento)
    {
        $this->DataNascimento = $DataNascimento;

        return $this;
    }


    public function Login($CPF, $SENHA){

        $resultado = DB::table('tb_usuario')
        ->join('tb_usuario_fisico', 'tb_usuario.cd_usuario', '=', 'tb_usuario_fisico.cd_usuario')
        ->join('tb_controle_plano', 'tb_controle_plano.cd_usuario_fisico', '=', 'tb_usuario_fisico.cd_usuario_fisico')
        ->join('tb_plano', 'tb_plano.cd_plano', '=', 'tb_controle_plano.cd_plano')
        ->select('tb_usuario.cd_usuario as Id','tb_usuario_fisico.cd_usuario as Usuario','tb_usuario_fisico.cd_cpf as CPF','tb_usuario.cd_senha as Senha','tb_usuario_fisico.nm_usuario_fisico as Nome','tb_usuario.nm_email as Email','tb_usuario_fisico.dt_nascimento as Nascimento','tb_plano.nm_plano as Plano','tb_plano.qt_veiculo as QuantidadeVeiculo')
        ->where('tb_usuario_fisico.cd_cpf', '=', $CPF, 'and','tb_usuario.cd_senha', '=', $SENHA)
        ->first();

        if($resultado->CPF == $CPF && $resultado->Senha == $SENHA){
            $this->setSenha($resultado->Senha);
            $this->setEmail($resultado->Email);
            //$this->IdUsuario($resultado->Id);
            $this->setIdFisico($resultado->Usuario);
            $this->setNomeFisico($resultado->Nome);
            $this->setCPF($resultado->CPF);
            $this->setDataNascimento($resultado->Nascimento);
            $_SESSION['autentic'] = $resultado->Usuario;
            return redirect('/Home')->view('Fisico\Perfil',['dados' => $resultado]);
        }
        else{
            return false;
        }
    }
}
