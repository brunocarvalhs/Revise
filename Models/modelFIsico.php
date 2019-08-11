<?php

    require_once 'modelUsuario.php';

    use Usuario;


    /**
     * Classe do Usuario Fisico 
     * 
     * Diretorio Pai - Models
     * 
     * @version 1.0.0
     */
    class Fisico extends Usuario{
        
        private $IDFisico;
        private $Nome;
        private $CPF;
        


        // --------------- Métodos CRUD --------------- //

        /**
         * Método de Incluir usuario Fisico (Create)
         *
         * @return void
         */
        public function IncluirFisico(){
            
        }
        
        /**
         * Método de Ver Fisico (Read)
         *
         * @return void
         */
        public function VerFisico(){

        }

        /**
         * Método de Alterar Fisico (Update)
         *
         * @return void
         */
        public function AlterarFisico(){

        }

        /**
         * Método de Deletar Fisico (Delete)
         *
         * @return void
         */
        public function DeletarFisico(){
            
        }


        // -------- Métodos Regra de Negocios -------- //
    }

?>