<?php
require_once '../Lib/connection.php';

abstract class Usuario
{
        private $CPFouCNPJ;
        private $senha;

        public abstract function logar($CPFouCNPJ,$senha);

        protected function getCPFouCNPJ()
        {
                return $this->CPFouCNPJ;
        }

        protected function setCPFouCNPJ($CPFouCNPJ)
        {
                $this->CPFouCNPJ = $CPFouCNPJ;

                return $this;
        }

        protected function getSenha()
        {
                return $this->senha;
        }
 
        protected function setSenha($senha)
        {
                $this->senha = $senha;

                return $this;
        }
}