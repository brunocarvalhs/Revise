<?php
require_once '../Lib/connection.php';

abstract class Usuario
{
        private $CPFouCNPJ;
        private $senha;

        public abstract function logar($CPFouCNPJ,$senha);

        private function getCPFouCNPJ()
        {
                return $this->CPFouCNPJ;
        }

        private function setCPFouCNPJ($CPFouCNPJ)
        {
                $this->CPFouCNPJ = $CPFouCNPJ;

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