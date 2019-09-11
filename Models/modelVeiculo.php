<?php

class Veiculo
{
    private $id;
    private $placa;
    private $marca;
    private $modelo;
    private $ano;
    private $cor;
    private $cidade;
    private $estado;

    function __construct($id,$placa,$marca,$modelo,$ano,$cor,$cidade,$estado)
    {
        $this->setId($id);
        $this->setPlaca($placa);
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setAno($ano);
        $this->setCor($cor);
        $this->setCidade($cidade);
        $this->setEstado($estado);
    }
    
    protected function getPlaca()
    {
        return $this->placa;
    }

    protected function setPlaca($placa)
    {
        $this->placa = $placa;

        return $this;
    }

    protected function getMarca()
    {
        return $this->marca;
    }

    protected function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    protected function getModelo()
    {
        return $this->modelo;
    }

    protected function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    protected function getAno()
    {
        return $this->ano;
    }

    protected function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }

    protected function getCor()
    {
        return $this->cor;
    }

    protected function setCor($cor)
    {
        $this->cor = $cor;

        return $this;
    }

    protected function getCidade()
    {
        return $this->cidade;
    }

    protected function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

    protected function getEstado()
    {
        return $this->estado;
    }

    protected function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}

?>