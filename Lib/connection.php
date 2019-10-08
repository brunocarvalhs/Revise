<?php

class conexaoPDO
{
    private $host;
    private $porta;
    private $dbName;
    private $usuario;
    private $senha;

    function __construct()
    {
        $this->setHost('localhost');
        $this->setPorta('3306');
        $this->setDbName('db_revise;charset=utf8');
        $this->setUsuario('root');
        $this->setSenha('');
    }

    public function getConnection()
    {
        try {

            $conn = New PDO('mysql:host='.$this->getHost().';port='.$this->getPorta().';dbname='.$this->getDbName().'', $this->getUsuario(), $this->getSenha());
            return $conn;

        } catch (PDOException $ex) {
            return 'ERRO: '.$ex->getMessage();
        }
    }

    private function getHost()
    {
        return $this->host;
    }

    private function setHost($host)
    {
        $this->host = $host;

        return $this;
    }

    private function getPorta()
    {
        return $this->porta;
    }

    private function setPorta($porta)
    {
        $this->porta = $porta;

        return $this;
    }

    private function getDbName()
    {
        return $this->dbName;
    }

    private function setDbName($dbName)
    {
        $this->dbName = $dbName;

        return $this;
    }

    private function getUsuario()
    {
        return $this->usuario;
    }

    private function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    private function getSenha()
    {
        return $this->senha;
    }

    private function setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }
}
?>