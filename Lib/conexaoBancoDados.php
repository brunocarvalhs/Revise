<?php

    require_once 'dadosConexaoBanco.php';

    /**
     * Classe conexaoBancoDados
     * Responsavel pela conexão com o banco
     * 
     * Diretorio Pai - lib (Biblioteca) 
     * 
     * @author Bruno Silva Carvalho 
     * @version 1.0.0
     */
    class conexaoBancoDados extends dadosConexaoBanco
    {
        private $conectado = false; //Status do banco de dados se já foi conectado


        /**
         * Método que retorna conexão 
         * em PDO
         *
         * @return $conexao
         */
        public function ConexaoPDO(){
                try {
                    $conexao = new PDO('mysql:host='.$this->getServidor().':'.$this->getPorta().',dbname='.$this->getNomeDoBanco(),$this->getUsuario(),$this->getSenha());
                    return $conexao;
                } catch (PDOException $e) {
                    return $e;
                }

        }

        /**
         * Método que retorna a conexão
         * em MySQLi
         *
         * @return $conexao
         */
        public function ConexaoMySQLi(){
                $conexao = new mysqli($this->getServidor(),$this->getUsuario(),$this->getSenha(), $this->getNomeDoBanco(), $this->getPorta());
                return $conexao;
        }

        /**
         * Método responsavel por desconectar 
         * banco de dados 
         *
         * @return $conexao->close();
         */
        public function DesconectarBancoDeDados(){
            if($this->conectado === true){
                $conectado = false;
                return close();
            }
        }
    }
    

?>