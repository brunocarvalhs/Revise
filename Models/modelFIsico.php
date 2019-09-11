<?php
require_once 'modelUsuario.php';
require_once './Lib/connection.php';

class UserFisico extends Usuario
{
    private $id;
    private $nome;
    private $cpf;
    private $dataNascimento;

    function __construct($id, $nome, $email, $cpf, $dataNascimento, $senha)
    {
        $this->setID($id);
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setCpf($cpf);
        $this->setDataNascimento($dataNascimento);
        $this->setSenha($senha);
    }

    public function Logar()
    {

    }
    public function Cadastrar($usuario)
    {
        $conexao = new conexaoPDO;
        $conexao = $conexao->getConnection();
        
        $sqlUsuario = 'INSERT INTO tb_usuario (cd_usuario,nm_email,cd_senha,cd_plano,cd_tipo_usuario) VALUES (:id,:email,:senha,:plano,:tipo)';

        $id = $usuario->getID();
        $email = $usuario->getEmail();
        $senha = $usuario->getSenha();
        $plano = 5;
        $tipo = 2;
        
        $stmt = $conexao->prepare($sqlUsuario);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':email', $email,  PDO::PARAM_STR);
        $stmt->bindParam(':senha', $senha,  PDO::PARAM_STR);
        $stmt->bindParam(':plano', $plano, PDO::PARAM_INT);
        $stmt->bindParam(':tipo', $tipo, PDO::PARAM_INT);

        if($stmt->execute())
        {
            echo 'Cadastro';
        }
        else
        {
            echo 'Não Cadastro';
        }


    }
    public function DeletarConta()
    {

    }
    public function Sair()
    {

    }

    protected function getNome()
    {
        return $this->nome;
    }

    protected function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    protected function getCpf()
    {
        return $this->cpf;
    }

    protected function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    protected function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    protected function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;

        return $this;
    }

    protected function getId()
    {
        $conexao = new conexaoPDO;
        $conexao = $conexao->getConnection();
        $sql = "SELECT * FROM tb_usuario";

        $stmt = $conexao->prepare($sql);
        $stmt->execute();
        $id = $stmt->rowCount() + 1;
        return $id;
    }

    protected function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
