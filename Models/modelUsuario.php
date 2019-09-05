<?php

    class Usuario{
        
        private $email;
        private $plano;
        private $TipoDeUsuario;



        /**
         * Get do email
         */ 
        protected function getEmail()
        {
            return $this->email;
        }

        /**
         * Set do email
         *
         * @return  self
         */ 
        protected function setEmail($email)
        {
            $this->email = $email;
        }

        /**
         * Get do plano
         */ 
        protected function getPlano()
        {
            return $this->plano;
        }

        /**
         * Set do plano
         *
         * @return  self
         */ 
        protected function setPlano($plano)
        {
            $this->plano = $plano;
        }

        /**
         * Get do TipoDeUsuario
         */ 
        protected function getTipoDeUsuario()
        {
            return $this->TipoDeUsuario;
        }

        /**
         * Set do TipoDeUsuario
         *
         * @return  self
         */ 
        protected function setTipoDeUsuario($TipoDeUsuario)
        {
            $this->TipoDeUsuario = $TipoDeUsuario;
        }
        


        // --------------- Métodos CRUD --------------- //

        /**
         * Método de Incluir Usuario (Create)
         *
         * @return void
         */
        protected function IncluirUsuario(){
            
        }
        
        /**
         * Método de Ver Usuario (Read)
         *
         * @return void
         */
        protected function VerUsuario(){

        }

        /**
         * Método de Alterar Usuario (Update)
         *
         * @return void
         */
        protected function AlterarUsuario(){

        }

        /**
         * Método de Deletar Usuario (Delete)
         *
         * @return void
         */
        protected function DeletarUsuario(){
            
        }


        // -------- Métodos Regra de Negocios -------- //


        /**
         * Método de CRIPTOGRAFIA base64
         *
         * @param var $dados
         * @return void
         */
        protected function CriptografiaDeDado($dados){
            return base64_encode($dados);                                                                                                                                                  
        }

        /**
         * Método de DESCRIPTOGRAFIA base64
         *
         * @param var $dados
         * @return void
         */
        protected function DescriptografiaDeDados($dados){
            return base64_decode($dados);
        }
    }

?>