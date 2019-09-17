<?php
require_once '../Lib/connection.php';

abstract class Usuario
{
        private $id;
        private $email;
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
        protected function getId()
        {
                $conexao = new conexaoPDO;
                $conexao = $conexao->getConnection();
                $sql = "SELECT * FROM tb_usuario";
        
                $stmt = $conexao->prepare($sql);
                $stmt->execute();
                $id = $stmt->rowCount() + 1;
                return $id;
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
}