<?php

abstract class Usuario
{
        private $id;
        private $email;
        private $senha;

        abstract function Logar();
        abstract function DeletarConta();
        abstract function Sair();

        protected function getId()
        {
                return $this->id;
        }

        protected function setId($id)
        {
                $this->id = $id;

                return $this;
        }

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