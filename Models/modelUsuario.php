<?php
require_once './Lib/connection.php';

class Usuario
{
        private $email;
        private $senha;

        function __construct($email,$senha)
        {
                $this->setEmail($email);
                $this->setSenha($senha);
        }
        
        function Logar($usuario)
        {
                $conexao = new conexaoPDO;
                $conexao = $conexao->getConnection();
        
                $sql = "SELECT * FROM tb_usuario WHERE nm_email = :email AND cd_senha = :senha";

                $email = $usuario->getEmail();
                $senha = $usuario->getSenha();

                $stmt = $conexao->prepare($sql);
                $stmt->bindParam(':email', $email, PDO::PARAM_STR);
                $stmt->bindParam(':senha', $senha, PDO::PARAM_STR);
                
                if($stmt->execute())
                {
                    $res = $stmt->rowCount(); 
                    if($res === 1)
                    {
                        return true;
                    } 
                    else
                    {
                        return false;
                    }
                }
                else
                {
                        return false;
                }
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