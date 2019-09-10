<?php
require_once 'modelUsuario.php';

class UserFisico extends Usuario
{
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
    public function Cadastrar()
    {
        
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
}
?>