<?php
require_once 'modelUsuario.php';
require_once './Lib/connection.php';

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
    public function Cadastrar($usuario,$veiculo,$plano)
    {
        $conexao = new conexaoPDO;
        $conexao = $conexao->getConnection();
        
        $sqlUsuario = 'INSERT INTO tb_usuario (cd_usuario,nm_email,cd_senha,cd_plano,cd_tipo_usuario) VALUES ()';
        $sqlUsuarioFisico = 'INSERT INTO tb_usuario_fisico (cd_usuario_fisico,nm_usuario_fisico,cd_cpf,cd_usuario) VALUES ()';
        $sqlCadastroVeiculo = 'INSERT INTO tb_veiculo(cd_veiculo,nm_cor,cd_placa,cd_usuario,cd_modelo, aa_veiculo, qt_quilometragem) VALUES ()';

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