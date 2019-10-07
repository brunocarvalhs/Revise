<?php
require_once "modelUsuario.php";

class UsuarioFisico extends Usuario
{
    private $idUsuarioFisico;
    private $nome;
    private $cpf;
    private $nascimento;
    
    public function Cadastrar($email,$senha,$nome,$cpf,$nascimento)
    {

        $IdUsuario = $this->getIdUsuario();
        $IdUsuarioFisico = $this->getIdUsuarioFisico();

        $conn = new conexaoPDO;
        $conn = $conn->getConnection();

        $sql = "call sp_CadastrarUsuario(:IdUsuario,:email,:senha,:IdUsuarioFisico,:nome,:cpf,:nascimento)";
        
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":IdUsuario",$IdUsuario,PDO::PARAM_INT);
        $stmt->bindParam(":IdUsuarioFisico",$IdUsuarioFisico,PDO::PARAM_INT);
        $stmt->bindParam(":email",$email,PDO::PARAM_STR);
        $stmt->bindParam(":senha",$senha,PDO::PARAM_STR);
        $stmt->bindParam(":nome",$nome,PDO::PARAM_STR);
        $stmt->bindParam(":cpf",$cpf,PDO::PARAM_INT);
        $stmt->bindParam(":nascimento",$nascimento,PDO::PARAM_STR);
        
        if($stmt->execute())
        {
           return  "Cadastro";
        }
        else
        {
            return  "Nao Cadastro";
        }
    }

    private function getIdUsuarioFisico()
    {
        $conn = new conexaoPDO;
        $conn = $conn->getConnection();

        $sql = "SELECT * FROM tb_usuario_fisico";

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $idUsuarioFisico = $stmt->rowCount() + 1;
        if($idUsuarioFisico == 0 || $idUsuarioFisico == null)
        {
                $idUsuarioFisico = 1;
        }
        return $idUsuarioFisico;
    }

    private function setIdUsuarioFisico($idUsuarioFisico)
    {
        $this->idUsuarioFisico = $idUsuarioFisico;

        return $this;
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

    private function getNascimento()
    {
        return $this->nascimento;
    }

    private function setNascimento($nascimento)
    {
        $this->nascimento = $nascimento;

        return $this;
    }
}
?>