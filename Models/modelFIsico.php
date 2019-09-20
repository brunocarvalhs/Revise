<?php
require_once 'modelUsuario.php';
require_once '../Lib/connection.php';

class UserFisico extends Usuario
{
    private $idUserFisico;
    private $nome;
    private $dataNascimento;
    private $tipoConta;
    private $plano;

    public function VerificarCadastrar($email,$cpf,$placa)
    {
        $conn = new conexaoPDO;
        $conn = $conn->getConnection();

        $sql = "CALL sp_VerificarCadastro(:email,:cpf,:placa);";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':cpf', $cpf, PDO::PARAM_INT);
        $stmt->bindParam(':placa', $placa, PDO::PARAM_STR);

        if($stmt->execute())
        {
            $res = $stmt->fetch(PDO::FETCH_OBJ);
            $res =  $res->RES;
            return $res;
        }
        else
        {
            echo 'Erro: Não foi possivel fazer a verrificação de cadastro.';
        }
    }

    public function Cadastrar($nome,$email,$senha,$plano,$cpf,$nascimento)
    {
        $conn = new conexaoPDO;
        $conn = $conn->getConnection();

        //CADASTRO DO USUARIO

        $this->setEmail($email);
        $this->setSenha($senha);
        $this->setPlano($plano);

        $idUsuario = $this->getId();
        $email = $this->getEmail();
        $senha = $this->getSenha();
        $plano = $this->getPlano();
        

        $sql = "CALL sp_CadastrarUsuario(:idUsuario,:email,:senha,:plano,1)";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':idUsuario', $idUsuario, PDO::PARAM_INT);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':senha', $senha, PDO::PARAM_STR);
        $stmt->bindParam(':plano', $plano, PDO::PARAM_INT);

        if($stmt->execute())
            {
                //CADASTRO DO USUARIO FISICO
                $this->setNome($nome);
                $this->setCpf($cpf);
                $this->setDataNascimento($nascimento);
        
                $id = $this->getIdUserFisico();
                $nome = $this->getNome();
                $cpf = $this->getCpf();
                $nascimento = $this->getDataNascimento();

                $sql = "call sp_CadastroUsuarioFisico(:id,:nome,:cpf,:nascimento,:idUsuario)";

                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
                $stmt->bindParam(':cpf', $cpf, PDO::PARAM_INT);
                $stmt->bindParam(':nascimento', $nascimento, PDO::PARAM_STR);
                $stmt->bindParam(':idUsuario', $idUsuario, PDO::PARAM_INT);
        
                if($stmt->execute())
                    {
                        return true;
                    }
                    else
                    {
                        echo 'Erro: tb_usuario_fisico não cadastro.';
                    }
            }
            else
            {
                echo 'Erro: tb_usuario não cadastro.';
            }
        

    }

    public function logar($CPFouCNPJ,$senha)
    {

            $conn = new conexaoPDO;
            $conn = $conn->getConnection();

            $sql = "call sp_SignInFisico(:CPFouCNPJ,:senha)";

            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':CPFouCNPJ', $CPFouCNPJ, PDO::PARAM_INT);
            $stmt->bindParam(':senha', $senha, PDO::PARAM_STR);
            
            if($stmt->execute())
            {
                    $RES = $stmt->rowCount(); 
                    if($RES == 1)
                    {
                            return true;
                    }
                    else
                    {
                            return false;
                    }
            }
            else
            {
                    echo "Falha na Execução";
            }
    }

    private function getNome()
    {
        return $this->nome;
    }

    private function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    private function getCpf()
    {
        return $this->cpf;
    }

    private function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    private function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    private function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;

        return $this;
    }
    private function getTipoConta()
    {
        return $this->tipoConta;
    }
    private function setTipoConta($tipoConta)
    {
        $this->tipoConta = $tipoConta;

        return $this;
    }

    private function getPlano()
    {
        return $this->plano;
    }

    private function setPlano($plano)
    {
        $this->plano = $plano;

        return $this;
    }

    private function getIdUserFisico()
    {
        $conexao = new conexaoPDO;
        $conexao = $conexao->getConnection();
        $sql = "SELECT * FROM tb_usuario_fisico";

        $stmt = $conexao->prepare($sql);
        $stmt->execute();
        $idUserFisico = $stmt->rowCount() + 1;
        return $idUserFisico;
    }

    private function setIdUserFisico($idUserFisico)
    {
        $this->idUserFisico = $idUserFisico;

        return $this;
    }
}
