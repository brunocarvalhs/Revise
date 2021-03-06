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
    protected function setIdFisico($IdFisico)
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
    protected function setNomeFisico($NomeFisico)
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
    protected function setCPF($CPF)
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
    protected function setDataNascimento($DataNascimento)
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
                ->select('tb_usuario.cd_usuario as Id', 'tb_usuario_fisico.cd_usuario_fisico as Usuario', 'tb_usuario_fisico.cd_cpf as CPF', 'tb_usuario.cd_senha as Senha', 'tb_usuario_fisico.nm_usuario_fisico as Nome', 'tb_usuario.nm_email as Email', 'tb_usuario_fisico.dt_nascimento as Nascimento', 'tb_plano.nm_plano as Plano', 'tb_plano.qt_veiculo as QuantidadeVeiculo')
                ->where('tb_usuario_fisico.cd_cpf', '=', $CPF, 'and', 'tb_usuario.cd_senha', '=', $SENHA)
                ->first();

            if ($resultado->CPF == $CPF && $resultado->Senha == $SENHA && $resultado != null) {
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
            if ($request->txtsenha == $request->txtcsenha) {

                $resultado = DB::table('tb_usuario_fisico')
                    ->join('tb_usuario', 'tb_usuario.cd_usuario', '=', 'tb_usuario_fisico.cd_usuario')
                    ->where('tb_usuario_fisico.cd_cpf', '=', $CPF, 'or', 'tb_usuario.nm_email', '=', $request->txtemail)
                    ->exists();

                if (!($resultado)) {

                    $auto_usuario = DB::table('tb_usuario')->max('cd_usuario') + 1;
                    $auto_usuario_fisico = DB::table('tb_usuario_fisico')->max('cd_usuario_fisico') + 1;
                    $auto_controle_plano = DB::table('tb_controle_plano')->max('cd_controle') + 1;

                    $plano = DB::table('tb_plano')->select('cd_plano as ID', 'vl_plano as valor')->where('cd_plano', '=', $request->txtplano)->first();

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
                            'cd_plano' => $plano->ID,
                            'dt_definicao' => date('Y-m-d'),
                            'dt_expiracao' => date('Y-m-d', strtotime('+1 month')),
                            'vl_pago_plano' => $plano->valor
                        ]
                    );

                    return json_encode(['Status' => true, 'Mensagem' => 'Cadastro realizado com sucesso!']);
                } else {
                    return json_encode(['Status' => false, 'Mensagem' => 'Usuário já cadastrado!']);
                }
            } else {
                return json_encode(['Status' => false, 'Mensagem' => 'Insira senhas iguais!']);
            }
        } catch (Exception $e) {
            return json_encode(['Status' => false, 'Mensagem' => 'Ops! Ocorreu um erro ao cadastrar']);
        }
    }


    public function EsqueciSenha($CPF)
    {

        $check = DB::table('tb_usuario_fisico')
            ->join('tb_usuario', 'tb_usuario.cd_usuario', '=', 'tb_usuario_fisico.cd_usuario')
            ->where('tb_usuario_fisico.cd_cpf', '=', $CPF)
            ->exists();

        if ($check) {

            $Dados = DB::table('tb_usuario')
                ->join('tb_usuario_fisico', 'tb_usuario.cd_usuario', '=', 'tb_usuario_fisico.cd_usuario')
                ->join('tb_controle_plano', 'tb_controle_plano.cd_usuario_fisico', '=', 'tb_usuario_fisico.cd_usuario_fisico')
                ->join('tb_plano', 'tb_plano.cd_plano', '=', 'tb_controle_plano.cd_plano')
                ->select('tb_usuario.cd_senha as Senha', 'tb_usuario_fisico.nm_usuario_fisico as Nome', 'tb_usuario.nm_email as Email')
                ->where('tb_usuario_fisico.cd_cpf', '=', $CPF)
                ->first();

            return $Dados;
        } else {
            return false;
        }
    }


    public function DadosPerfil()
    {
        $resultado = DB::table('tb_usuario')
            ->join('tb_usuario_fisico', 'tb_usuario.cd_usuario', '=', 'tb_usuario_fisico.cd_usuario')
            ->join('tb_controle_plano', 'tb_controle_plano.cd_usuario_fisico', '=', 'tb_usuario_fisico.cd_usuario_fisico')
            ->join('tb_plano', 'tb_plano.cd_plano', '=', 'tb_controle_plano.cd_plano')
            ->select('tb_usuario.cd_usuario as Id', 'tb_usuario_fisico.cd_usuario as Usuario', 'tb_usuario_fisico.cd_cpf as CPF', 'tb_usuario.cd_senha as Senha', 'tb_usuario_fisico.nm_usuario_fisico as Nome', 'tb_usuario.nm_email as Email', 'tb_usuario_fisico.dt_nascimento as Nascimento', 'tb_plano.nm_plano as Plano', 'tb_plano.qt_veiculo as QuantidadeVeiculo')
            ->where('tb_usuario_fisico.cd_cpf', '=', $this->getCPF())
            ->first();
        $resultado = json_encode($resultado);
        return $resultado;
    }

    public function atualizarPerfil($dados, $IdFisico, $idUsuario)
    {
        try {
            DB::table('tb_usuario_fisico')
                ->where('cd_usuario_fisico', $IdFisico)
                ->update(
                    [
                        'nm_usuario_fisico' => $dados->campoNome,
                        'dt_nascimento' => $dados->campoDeNascimento
                    ]
                );
            DB::table('tb_usuario')
                ->where('cd_usuario', $idUsuario)
                ->update(
                    [
                        'nm_email' => $dados->campoEmail,
                    ]
                );
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function DeletarPerfil($IdFisico, $idUsuario)
    {
        try {
            //Deletar veiculos do usuario
            DB::table('tb_veiculo')->where('cd_usuario', $idUsuario)->delete();
            //Deletar plano do usuario
            DB::table('tb_controle_plano')->where('cd_usuario_fisico', $IdFisico)->delete();
            //Deletar usuario da tabela usuario_fisico
            DB::table('tb_usuario_fisico')
                ->where('cd_usuario', '=', $idUsuario, 'and', 'cd_usuario_fisico', '=', $IdFisico)
                ->delete();
            DB::table('tb_usuario')->where('cd_usuario', $idUsuario)->delete();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}
