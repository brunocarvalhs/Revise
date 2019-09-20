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
 

    public function Cadastrar($placa,$cor,$modelo,$ano,$idUsuario)
    {

       $this->setPlaca($placa);
       $this->setAno($ano);
       $this->setCor($cor);

       $id = $this->getId();
       $modelo = $this->getModelo($modelo);
       $placa = $this->getPlaca();
       $ano = $this->getAno();
       $cor = $this->getCor();
       $idUsuario = $idUsuario;

       $conn = new conexaoPDO;
       $conn = $conn->getConnection();

       $sql = "call sp_CadastroVeiculo(:id,:cor,:placa,:idUsuario,:modelo,:ano);";
       $stmt = $conn->prepare($sql);
       $stmt->bindParam(':id', $id, PDO::PARAM_INT);
       $stmt->bindParam(':cor', $cor, PDO::PARAM_STR);
       $stmt->bindParam(':placa', $placa, PDO::PARAM_STR);
       $stmt->bindParam(':idUsuario', $idUsuario, PDO::PARAM_INT);
       $stmt->bindParam(':modelo', $modelo, PDO::PARAM_STR);
       $stmt->bindParam(':ano', $ano, PDO::PARAM_INT);

       if($stmt->execute())
            {
                return true;
            }
            else
            {
                return false;
            }

       
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