<?php

require_once '../Lib/connection.php';

 class Usuario
{
        private $id;
        private $email;
        private $senha;

        public function Cadastrar($email,$senha)
        {

        }

        private function getId()
        {

                return $this->id;
        }

        private function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        private function getEmail()
        {
                return $this->email;
        }

        private function setEmail($email)
        {
                $this->email = $email;

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