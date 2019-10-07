<?php

require_once "./Lib/connection.php";

abstract class Usuario
{
        private $idUsuario;
        private $email;
        private $senha; 

            
        protected function getIdUsuario()
        {
                $conn = new conexaoPDO;
                $conn = $conn->getConnection();

                $sql = "SELECT * FROM tb_usuario";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $idUsuario = $stmt->rowCount() + 1;
                if($idUsuario == 0 || $idUsuario == null)
                {
                        $idUsuario = 1;
                }
                return $idUsuario;

        }

        protected function setIdUsuario($idUsuario)
        {
                $this->idUsuario = $idUsuario;

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
?>