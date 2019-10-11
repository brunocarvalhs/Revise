<?php

namespace App;

use App\modelUsuario;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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


    public function Login($CPF, $SENHA)
    {
        try {
            $resultado = DB::table('tb_usuario')
                ->join('tb_usuario_fisico', 'tb_usuario.cd_usuario', '=', 'tb_usuario_fisico.cd_usuario')
                ->join('tb_controle_plano', 'tb_controle_plano.cd_usuario_fisico', '=', 'tb_usuario_fisico.cd_usuario_fisico')
                ->join('tb_plano', 'tb_plano.cd_plano', '=', 'tb_controle_plano.cd_plano')
                ->select('tb_usuario.cd_usuario as Id', 'tb_usuario_fisico.cd_usuario as Usuario', 'tb_usuario_fisico.cd_cpf as CPF', 'tb_usuario.cd_senha as Senha', 'tb_usuario_fisico.nm_usuario_fisico as Nome', 'tb_usuario.nm_email as Email', 'tb_usuario_fisico.dt_nascimento as Nascimento', 'tb_plano.nm_plano as Plano', 'tb_plano.qt_veiculo as QuantidadeVeiculo')
                ->where('tb_usuario_fisico.cd_cpf', '=', $CPF, 'and', 'tb_usuario.cd_senha', '=', $SENHA)
                ->first();

            if ($resultado->CPF == $CPF && $resultado->Senha == $SENHA) {
                $this->setSenha($resultado->Senha);
                $this->setEmail($resultado->Email);
                $this->setIdUsuario($resultado->Id);
                $this->setIdFisico($resultado->Usuario);
                $this->setNomeFisico($resultado->Nome);
                $this->setCPF($resultado->CPF);
                $this->setDataNascimento($resultado->Nascimento);
                return $resultado;
            } else {
                return false;
            }
        } catch (Exception $e) {
            return false;
        }
    }

    public function CadastrarUsuarioFisico($CPF, Request $request)
    {
        try {
            $campos = $this->ValidarCampos($request);
            if ($campos) {
                if ($request->txtsenha == $request->txtcsenha) {
                    $resultado = DB::table('tb_usuario_fisico')
                        ->join('tb_usuario', 'tb_usuario.cd_usuario', '=', 'tb_usuario_fisico.cd_usuario')
                        ->where('tb_usuario_fisico.cd_cpf', '=', $CPF, 'or', 'tb_usuario.nm_email', '=', $request->txtemail)
                        ->exists();
                    if (!($resultado)) {
                        $auto_usuario = DB::table('tb_usuario')->count() + 1;
                        $auto_usuario_fisico = DB::table('tb_usuario_fisico')->count() + 1;
                        $auto_controle_plano = DB::table('tb_controle_plano')->count() + 1;
                        DB::table('tb_usuario')->insert(
                            [
                                'cd_usuario' => $auto_usuario,
                                'nm_email' => $request->txtemail,
                                'cd_senha' => $request->txtsenha,
                                'cd_tipo_usuario' => 1
                            ]
                        );
                        DB::table('tb_usuario_fisico')->insert(
                            [
                                'cd_usuario_fisico' => $auto_usuario_fisico,
                                'nm_usuario_fisico' => $request->txtnome,
                                'cd_cpf' => $CPF,
                                'cd_usuario' => $auto_usuario,
                                'dt_nascimento' => $request->txtNascimento
                            ]
                        );
                        DB::table('tb_controle_plano')->insert(
                            [
                                'cd_controle' => $auto_controle_plano,
                                'cd_usuario_fisico' => $auto_usuario_fisico,
                                'cd_plano' => $request->txtplano,
                            ]
                        );

                        return json_encode(['Status' => true, 'Mensagem' => 'Cadastro realizado com sucesso']);
                    } else {
                        return json_encode(['Status' => false, 'Mensagem' => 'Usuario já cadastrado']);
                    }
                } else {
                    return json_encode(['Status' => false, 'Mensagem' => 'Senhas digitatas são diferentes, tente novamente!']);
                }
            }
        } catch (Exception $e) {
            return json_encode(['Status' => false, 'Mensagem' => 'Erro ao cadastrar.']);
        }
    }


    public function ValidarCampos(Request $request)
    {
        $r = $request->all();
        foreach ($r as $value => $key)
        {
            return dd($value);
        }
    }
}
