<?php

    require_once 'dadosConexaoBanco.php';

    use dadosConexaoBanco;

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
            if($this->conectado === false){
                try {

                    $conexao = new PDO('host='.$this->servidor.':'.$this->porta.',dbname='.$this->NomeDoBanco,$this->usuario,$this->senha);

                    ($conexao) ? $this->conectado = true : $this->conectado = false;

                    return $conexao;
                    
                } catch (PDOException $e) {
                    $this->conectado = false;
                }
            }
        }

        /**
         * Método que retorna a conexão
         * em MySQLi
         *
         * @return $conexao
         */
        public function ConexaoMySQLi(){
            if($this->conectado === false){
                $conexao = new mysqli($this->servidor,$this->usuario,$this->senha, $this->NomeDoBanco, $this->porta);

                if($conexao->connect_errno){
                    $conectado = false;
                }
                else{
                    $conectado = true;
                }
            }
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