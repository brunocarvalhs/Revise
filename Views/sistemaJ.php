<?php
$FotoDePerfil = 'img/user.jpg';
$nome = 'Auto Peças';
$sobrenome = 'Katry Jonsons';
$peças = 23;
$CNPJ = '12.345.678/9101-11';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/sistema.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <title>Revise - Home</title>
</head>

<body id="sistemaJ" class="bg-light">
    <div class="row">
        <div class="col-0 col-sm-0 col-md-0 col-lg-3 col-xl-3">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-0 menusuperior">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <a class="navbar-brand" href="#">
                        <div class="row">
                            <div class="col-4">
                                <img src="img/logo.png" width="50" height="50" alt="Revise"
                                    class="d-inline-block align-top">
                            </div>
                        </div>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>


                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link h4">Menu</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="sistema.php">Início</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="perfilFisico.php">Perfil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Anúncios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Índice de Acesso</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!--Menu lateral-->
            <div class="col-0 col-sm-0 col-md-0 col-lg-0 col-xl-2 responsivo">
                <div class="container-fluid">
                    <div class="row">
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
                                                    <img src="img/logo.png" width="50" height="50" alt="Revise"
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
                                            <span class="user-role"><?php echo $CNPJ ?></span>
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
                                                <a href="perfilJuridico.php">
                                                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                                                    <span>Perfil</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-content">
                                                <a href="">
                                                    <i class="fa fa-wrench" aria-hidden="true"></i>
                                                    <span>Anúncios</span>
                                                    <span
                                                        class="badge badge-pill badge-danger"><?php echo $peças; ?></span>
                                                </a>
                                            </li>
                                            <li class="sidebar-content">
                                                <a href="#">
                                                    <i class="fa fa-car" aria-hidden="true"></i>
                                                    <span>Indice de Acesso</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- sidebar-menu  -->
                                </div>
                                <!-- sidebar-content  -->
                                <div class="sidebar-footer rodapeMenu bg-dark">
                                    <div class="col-9"></div>
                                    <div class="col-2">
                                        <div class="dropdown">
                                            <button class="btn btn-dark" type="button" id="dropdownMenuButton"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <svg id="i-settings" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 32 32" width="22" height="22" fill="none"
                                                    stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2">
                                                    <path
                                                        d="M13 2 L13 6 11 7 8 4 4 8 7 11 6 13 2 13 2 19 6 19 7 21 4 24 8 28 11 25 13 26 13 30 19 30 19 26 21 25 24 28 28 24 25 21 26 19 30 19 30 13 26 13 25 11 28 8 24 4 21 7 19 6 19 2 Z" />
                                                    <circle cx="16" cy="16" r="4" />
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu bg-warning" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item bg-warning" href="">Excluir conta</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Anúncios Postados-->
        <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-6 col-xl-3 paddingCards">
                    <div class="card bg-dark h-100">
                        <img src="https://http2.mlstatic.com/oleo-do-motor-ipiranga-f1-master-sintetico-10w40-sm-4l-D_NQ_NP_656972-MLB31088368276_062019-O.webp" class="card-img-top sizeImg" alt="...">
                        <div class="card-body ">
                        <h5 class="card-title text-white">R$ 162,00</h5>
                            <p class="card-text text-white-50">Óleo Ipiranga</p>
                            <br><br>
                            <a class="btn btn-outline-warning  w-100" href="anunciosJ.php" role="button"> Mais Detalhes +</a>
                            <br><br>
                            <h6 class="card-title text-white-50">Local: Praia Grande - SP</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-6 col-xl-3" style="padding-top: 50px;">
                    <div class="card bg-dark h-100">
                        <img src="data:image/jpeg;base64,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"
                            class="card-img-top sizeImg" alt="...">
                        <div class="card-body ">
                        <h5 class="card-title text-white">R$ 00,00</h5>
                            <p class="card-text text-white-50">Escreva aqui o nome e a descrição que quiser do produto
                            </p>
                            <a class="btn btn-outline-warning w-100" href="#" role="button"> Mais Detalhes +</a>
                            <br><br>
                            <h6 class="card-title text-white-50">Local: Cubatão - SP</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-6 col-xl-3" style="padding-top: 50px;">
                    <div class="card bg-dark h-100">
                        <img src="https://www.vicentao.com.br/catalogo/app/thumber.php?q=70&zc=2&w=210&h=180&src=fotos/b109e89d608bf520004b33ce925d91e5.jpg"
                            class="card-img-top sizeImg" alt="...">
                        <div class="card-body ">
                        <h5 class="card-title text-white">R$ 19,90</h5>
                            <p class="card-text text-white-50">Cera Grand Prix Tradicional 200g</p>
                            <br>
                            <a class="btn btn-outline-warning w-100" href="#" role="button"> Mais Detalhes +</a>
                            <br><br>
                            <h6 class="card-title text-white-50">Local: Santos - SP</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-6 col-xl-3" style="padding-top: 50px;">
                    <div class="card bg-dark h-100">
                        <img src="https://www.vicentao.com.br/catalogo/app/thumber.php?q=70&zc=2&w=210&h=180&src=fotos/960a880fe6444be5377615ca29d442df.jpg"
                            class="card-img-top sizeImg" alt="...">
                        <div class="card-body ">
                        <h5 class="card-title text-white">R$ 300,00</h5>
                            <p class="card-text text-white-50">Bateria Heliar 45Ah - HG45BD</p>
                            <br><br>
                            <a class="btn btn-outline-warning w-100" href="#" role="button"> Mais Detalhes +</a>
                            <br><br>
                            <h6 class="card-title text-white-50">Local: Itanhaém - SP</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-6 col-xl-3" style="padding-top: 50px;">
                    <div class="card bg-dark h-100">
                        <img src="https://http2.mlstatic.com/pneu-22545r17-94w-aro-17-dz101-carro-pneus-dunlop-direzza-D_NQ_NP_15820-MLB20109868722_062014-F.jpg"
                            class="card-img-top sizeImg" alt="...">
                        <div class="card-body ">
                        <h5 class="card-title text-white">R$ 452,90</h5>
                            <p class="card-text text-white-50">Pneu 225/45r17 94w Aro 17</p>
                            <br>
                            <a class="btn btn-outline-warning w-100" href="#" role="button"> Mais Detalhes +</a>
                            <br><br>
                            <h6 class="card-title text-white-50">Local: Cubatão - SP</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-6 col-xl-3" style="padding-top: 50px;">
                    <div class="card bg-dark h-100">
                        <img src="https://cdn.motordoctor.de/thumb/assets/bvs/ersatz_categories/300x300/27.png"
                            class="card-img-top sizeImg" alt="...">
                        <div class="card-body ">
                        <h5 class="card-title text-white">R$ 97,90</h5>
                            <p class="card-text text-white-50">TYC 20-3431-05-2 Farol </p>
                            <br>
                            <a class="btn btn-outline-warning w-100" href="#" role="button"> Mais Detalhes +</a>
                            <br><br>
                            <h6 class="card-title text-white-50">Local: Santos - SP</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-6 col-xl-3" style="padding-top: 50px;">
                    <div class="card bg-dark h-100">
                        <img src="https://logo.empregos.com.br/354560_G.jpg"
                            class="card-img-top sizeImg" alt="...">
                        <div class="card-body ">
                        <h5 class="card-title text-white">R$ 00,00</h5>
                            <p class="card-text text-white-50">Monumento de Peças </p>
                            <br>
                            <a class="btn btn-outline-warning w-100" href="#" role="button"> Mais Detalhes +</a>
                            <br><br>
                            <h6 class="card-title text-white-50">Local: São Vicente - SP</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-6 col-xl-3" style="padding-top: 50px;">
                    <div class="card bg-dark h-100">
                        <img src="https://http2.mlstatic.com/escapamento-cbx-200-strada-silencioso-mod-original-fortuna-D_NQ_NP_684001-MLB20265457499_032015-F.jpg"
                            class="card-img-top sizeImg" alt="...">
                        <div class="card-body ">
                        <h5 class="card-title text-white">R$ 218,90</h5>
                            <p class="card-text text-white-50">Escapamento Cbx 200 </p>
                            <br>
                            <a class="btn btn-outline-warning w-100" href="#" role="button"> Mais Detalhes +</a>
                            <br><br>
                            <h6 class="card-title text-white-50">Local: Santos - SP</h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
<script src="./js/jquery.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="./js/wow.js"></script>
<script src="./js/index.js"></script>
<script src="js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="./js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
<script src="./js/sweetalert.min.js"></script>
<script src="./js/progressbar.js"></script>
<script src="./js/sistema.js"></script>
<script src="./js/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="./js/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
<script src="./js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

</html>