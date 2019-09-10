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

    public function getHost()
    {
        return $this->host;
    }

    public function setHost($host)
    {
        $this->host = $host;

        return $this;
    }

    public function getPorta()
    {
        return $this->porta;
    }

    public function setPorta($porta)
    {
        $this->porta = $porta;

        return $this;
    }

    public function getDbName()
    {
        return $this->dbName;
    }

    public function setDbName($dbName)
    {
        $this->dbName = $dbName;

        return $this;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }
}
?>