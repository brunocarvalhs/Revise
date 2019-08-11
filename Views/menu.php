<?php


    class Menu{


        private $menu;
        
        
        function __contructor(){
            session_start();
            return $this->Menu($_SESSION['Usuario']);
        }

        /**
         * Settes e Gettes 
         */

         public function setMenu($menu){
             $this->menu = $menu;
         }
         public function getMenu(){
             return $this->menu;
         }

         public function  setConteudo($conteudo){
             $this->conteudo = $conteudo;
         }
         public function getConteudo(){
             return $this->conteudo;
         }



        /**
         * Método de
         */

        public function Menu($tipoUsuario){
            switch($tipoUsuario){//Verifica o tipo de usuario
                case 1:{//Menu do Usuario Fisico
                    $this->setMenu('
                    <div class="page-wrapper chiller-theme toggled">
                    <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
                        <i class="fas fa-bars"></i>
                    </a>
                    <nav id="sidebar" class="sidebar-wrapper">
                        <div class="sidebar-content">
                            <div class="sidebar-brand">
                                <a class="navbar-brand" href="#">
                                    <div class="row">
                                        <div class="col-4">
                                            <img src="../img/logo.png" width="50" height="50" alt="Revise"
                                                class="d-inline-block align-top">
                                        </div>
                                        <div class="col-8">
                                            <label class="tituloMenu">Revise</label>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-header">
                                <div class="user-pic">
                                    <img class="img-responsive img-rounded" src="<?php echo $FotoDePerfil ?>"
                                        alt="User picture">
                                </div>
                                <div class="user-info">
                                    <span class="user-name"><strong><?php echo $nome ?></strong>
                                        <?php echo $sobrenome ?>
                                    </span>
                                    <span class="user-role"><?php echo $placa ?></span>
                                    <span class="user-role"><?php echo $modelo ?></span>
                                </div>
                            </div>
                            <!-- sidebar-search  -->
                            <div class="sidebar-menu">
                                <ul>
                                    <li class="header-menu">
                                        <span>Geral</span>
                                    </li>
                                    <li class="sidebar-content">
                                        <a href="#">
                                            <i class="fa fa-home fa-fw" aria-hidden="true"></i>
                                            <span>Início</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-content">
                                        <a href="#">
                                            <i class="fa fa-user-circle" aria-hidden="true"></i>
                                            <span>Perfil</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-content">
                                        <a href="#">
                                            <i class="fa fa-wrench" aria-hidden="true"></i>
                                            <span>Peças</span>
                                            <span class="badge badge-pill badge-danger"><?php echo $peças; ?></span>
                                        </a>
                                    </li>
                                    <li class="sidebar-content">
                                        <a href="#">
                                            <i class="fa fa-car" aria-hidden="true"></i>
                                            <span>Veículos</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-content">
                                        <a href="#">
                                            <i class="fa fa-building" aria-hidden="true"></i>
                                            <span>Serviços e Produtos</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-content">
                                    </li>
                                    <li class="header-menu">
                                        <span>Extra</span>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-book"></i>
                                            <span>Documentation</span>
                                            <span class="badge badge-pill badge-primary">Beta</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-calendar"></i>
                                            <span>Calendar</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-folder"></i>
                                            <span>Examples</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- sidebar-menu  -->
                        </div>
                        <!-- sidebar-content  -->
                        <div class="sidebar-footer rodapeMenu">
                            <a href="#" class="buttonMenuRodape">
                                <svg id="i-settings" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="22"
                                    height="22" fill="none" stroke="currentcolor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2">
                                    <path
                                        d="M13 2 L13 6 11 7 8 4 4 8 7 11 6 13 2 13 2 19 6 19 7 21 4 24 8 28 11 25 13 26 13 30 19 30 19 26 21 25 24 28 28 24 25 21 26 19 30 19 30 13 26 13 25 11 28 8 24 4 21 7 19 6 19 2 Z" />
                                    <circle cx="16" cy="16" r="4" />
                                </svg>
                            </a>
                            <a href="#" class="buttonMenuRodape">
                                <svg id="i-signout" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="22"
                                    height="22" fill="none" stroke="currentcolor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2">
                                    <path d="M28 16 L8 16 M20 8 L28 16 20 24 M11 28 L3 28 3 4 11 4" />
                                </svg>
                            </a>
                        </div>
                    </nav>
                </div>
                    
                    
                    ');
                    break;
                }
                case 2:{// Menu do usuario Juridico
                    $this->setConteudo('
                    
                    <div class="page-wrapper chiller-theme toggled">
                        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
                            <i class="fas fa-bars"></i>
                        </a>
                        <nav id="sidebar" class="sidebar-wrapper">
                            <div class="sidebar-content">
                                <div class="sidebar-brand">
                                    <a class="navbar-brand" href="#">
                                        <div class="row">
                                            <div class="col-4">
                                                <img src="../img/logo.png" width="50" height="50" alt="Revise"
                                                    class="d-inline-block align-top">
                                            </div>
                                            <div class="col-8">
                                                <label class="tituloMenu">Revise</label>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="sidebar-header">
                                    <div class="user-pic">
                                        <img class="img-responsive img-rounded" src="<?php echo $FotoDePerfil ?>"
                                            alt="User picture">
                                    </div>
                                    <div class="user-info">
                                        <span class="user-name">
                                            <strong><?php echo $NomeEmpresa ?></strong>
                                        </span>
                                    </div>
                                </div>
                                <!-- sidebar-search  -->
                                <div class="sidebar-menu">
                                    <ul>
                                        <li class="header-menu">
                                            <span>Geral</span>
                                        </li>
                                        <li class="sidebar-content">
                                            <a href="#">
                                                <i class="fa fa-home fa-fw" aria-hidden="true"></i>
                                                <span>Início</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-content">
                                            <a href="#">
                                                <i class="fa fa-user-circle" aria-hidden="true"></i>
                                                <span>Perfil</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-content">
                                            <a href="#">
                                                <i class="fa fa-wrench" aria-hidden="true"></i>
                                                <span>Anuncios</span>
                                                <span class="badge badge-pill badge-danger"><?php echo $peças; ?></span>
                                            </a>
                                        </li>
                                        <li class="sidebar-content">
                                            <a href="#">
                                                <i class="fa fa-car" aria-hidden="true"></i>
                                                <span>Indice de Acesso</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-content">
                                        </li>
                                        <li class="header-menu">
                                            <span>Extra</span>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-book"></i>
                                                <span>Documentation</span>
                                                <span class="badge badge-pill badge-primary">Beta</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-calendar"></i>
                                                <span>Calendar</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-folder"></i>
                                                <span>Examples</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- sidebar-menu  -->
                            </div>
                            <!-- sidebar-content  -->
                            <div class="sidebar-footer rodapeMenu">
                                <a href="#" class="buttonMenuRodape">
                                    <svg id="i-settings" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="22"
                                        height="22" fill="none" stroke="currentcolor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2">
                                        <path
                                            d="M13 2 L13 6 11 7 8 4 4 8 7 11 6 13 2 13 2 19 6 19 7 21 4 24 8 28 11 25 13 26 13 30 19 30 19 26 21 25 24 28 28 24 25 21 26 19 30 19 30 13 26 13 25 11 28 8 24 4 21 7 19 6 19 2 Z" />
                                        <circle cx="16" cy="16" r="4" />
                                    </svg>
                                </a>
                                <a href="#" class="buttonMenuRodape">
                                    <svg id="i-signout" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="22"
                                        height="22" fill="none" stroke="currentcolor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2">
                                        <path d="M28 16 L8 16 M20 8 L28 16 20 24 M11 28 L3 28 3 4 11 4" />
                                    </svg>
                                </a>
                            </div>
                        </nav>
                    </div>
                    
                    ');
                    break;
                }
                default:{
                    header('Location: ../login.html');
                    break;
                }
            }
            return $this->Menu();
        }
    }


?>