<?php

abstract class Usuario
{
        private $email;
        private $senha;

        abstract function Logar();
        abstract function DeletarConta();
        abstract function Sair();

        protected function getEmail()
        {
                return $this->email;
        }

        protected function setEmail($email)
        {
                $this->email = $email;

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