<?php
require_once 'modelUsuario.php';
require_once '../Lib/connection.php';

class UserFisico extends Usuario
{
    private $id;
    private $nome;
    private $cpf;
    private $dataNascimento;
    private $tipoConta;

    function Cadastrar($id, $nome, $email, $cpf, $dataNascimento, $senha,$tipoConta)
    {
        $this->setID($id);
        $this->setTipoConta($tipoConta);
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setCpf($cpf);
        $this->setDataNascimento($dataNascimento);
        $this->setSenha($senha);
    }

    public function logar($CPFouCNPJ,$senha)
    {

            $conn = new conexaoPDO;
            $conn = $conn->getConnection();

            $sql = "call chkLoginFisico(:CPFouCNPJ,:senha)";

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

    private function getId()
    {
        $conexao = new conexaoPDO;
        $conexao = $conexao->getConnection();
        $sql = "SELECT * FROM tb_usuario";

        $stmt = $conexao->prepare($sql);
        $stmt->execute();
        $id = $stmt->rowCount() + 1;
        return $id;
    }

    private function setId($id)
    {
        $this->id = $id;

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
}
