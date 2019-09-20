<?php
require_once "../Lib/connection.php";

class Veiculo
{
    private $id;
    private $placa;
    private $marca;
    private $modelo;
    private $ano;
    private $cor;
 

    public function __construct($placa,$modelo,$ano,$cor)
    {
       $this->setId($this->getId());
       $this->setModelo($this->getModelo($modelo));
       $this->setMarca("CHEVROLET");
       $this->setPlaca($placa);
       $this->setAno($ano);
       $this->setCor($cor);
    }


    public function getId()
    {
        $conexao = new conexaoPDO;
        $conexao = $conexao->getConnection();
        $sql = "SELECT * FROM tb_veiculo";

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

    private function getPlaca()
    {
        return $this->placa;
    }

    private function setPlaca($placa)
    {
        $this->placa = $placa;

        return $this;
    }

    private function getMarca()
    {
        return $this->marca;
    }

    private function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }
 
    private function getModelo($modelo)
    {
        $conexao = new conexaoPDO;
        $conexao = $conexao->getConnection();
        $sql = "SELECT * FROM tb_modelo WHERE nm_modelo LIKE '%$modelo%' LIMIT 1;";

        $stmt = $conexao->prepare($sql);
        $stmt->execute();
        $modelo = $stmt->fetch(PDO::FETCH_ASSOC);
        return $modelo["cd_modelo"];
    }

    private function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    private function getAno()
    {
        return $this->ano;
    }

    private function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }

    private function getCor()
    {
        return $this->cor;
    }

    private function setCor($cor)
    {
        $this->cor = $cor;

        return $this;
    }
}
?>