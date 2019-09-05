<?php
    /**
     *  Classe de dados de conexão com o banco de dados
     *
     *  Diretorio Pai - Lib (Bibliotecas)
     *
     *  @author     Bruno Silva Carvalho    -   
     *  @version     1.0
     */
    class dadosConexaoBanco
    {
        private $servidor       =   '127.0.0.1';    //IP do servidor
        private $porta          =   '3307';         //Porta de conexao do banco de dados
        private $usuario        =   'root';         //Nome de login do banco de dados
        private $senha          =   'usbw';         //Senha de login do banco de dados
        private $NomeDoBanco    =   'db_revise';    //Nome do banco de dados que será usado


        

        /**
         * Get the value of servidor
         */ 
        protected function getServidor()
        {
                return $this->servidor;
        }

        /**
         * Set the value of servidor
         *
         * @return  self
         */ 
        protected function setServidor($servidor)
        {
                $this->servidor = $servidor;

                return $this;
        }

        /**
         * Get the value of porta
         */ 
        protected function getPorta()
        {
                return $this->porta;
        }

        /**
         * Set the value of porta
         *
         * @return  self
         */ 
        protected function setPorta($porta)
        {
                $this->porta = $porta;

                return $this;
        }

        /**
         * Get the value of usuario
         */ 
        protected function getUsuario()
        {
                return $this->usuario;
        }

        /**
         * Set the value of usuario
         *
         * @return  self
         */ 
        protected function setUsuario($usuario)
        {
                $this->usuario = $usuario;

                return $this;
        }

        /**
         * Get the value of senha
         */ 
        protected function getSenha()
        {
                return $this->senha;
        }

        /**
         * Set the value of senha
         *
         * @return  self
         */ 
        protected function setSenha($senha)
        {
                $this->senha = $senha;

                return $this;
        }

        /**
         * Get the value of NomeDoBanco
         */ 
        protected function getNomeDoBanco()
        {
                return $this->NomeDoBanco;
        }

        /**
         * Set the value of NomeDoBanco
         *
         * @return  self
         */ 
        protected function setNomeDoBanco($NomeDoBanco)
        {
                $this->NomeDoBanco = $NomeDoBanco;

                return $this;
        }
    }
    

?>