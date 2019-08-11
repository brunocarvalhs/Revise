<?php

    class Usuario{
        
        private $email;
        private $plano;
        private $TipoDeUsuario;



        /**
         * Get do email
         */ 
        public function getEmail()
        {
            return $this->email;
        }

        /**
         * Set do email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
            $this->email = $email;
        }

        /**
         * Get do plano
         */ 
        public function getPlano()
        {
            return $this->plano;
        }

        /**
         * Set do plano
         *
         * @return  self
         */ 
        public function setPlano($plano)
        {
            $this->plano = $plano;
        }

        /**
         * Get do TipoDeUsuario
         */ 
        public function getTipoDeUsuario()
        {
            return $this->TipoDeUsuario;
        }

        /**
         * Set do TipoDeUsuario
         *
         * @return  self
         */ 
        public function setTipoDeUsuario($TipoDeUsuario)
        {
            $this->TipoDeUsuario = $TipoDeUsuario;
        }
        


        // --------------- Métodos CRUD --------------- //

        /**
         * Método de Incluir Usuario (Create)
         *
         * @return void
         */
        public function IncluirUsuario(){
            
        }
        
        /**
         * Método de Ver Usuario (Read)
         *
         * @return void
         */
        public function VerUsuario(){

        }

        /**
         * Método de Alterar Usuario (Update)
         *
         * @return void
         */
        public function AlterarUsuario(){

        }

        /**
         * Método de Deletar Usuario (Delete)
         *
         * @return void
         */
        public function DeletarUsuario(){
            
        }


        // -------- Métodos Regra de Negocios -------- //


        /**
         * Método de CRIPTOGRAFIA base64
         *
         * @param var $dados
         * @return void
         */
        public function CriptografiaDeDado($dados){
            return base64_encode($dados);
        }

        /**
         * Método de DESCRIPTOGRAFIA base64
         *
         * @param var $dados
         * @return void
         */
        public function DescriptografiaDeDados($dados){
            return base64_decode($dados);
        }
    }

?>