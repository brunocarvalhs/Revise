<?php
    if(isset($_SESSION['usuario'])){
        header('Location: ../login.html');
    }


    //Teste de variaveis
    if(true == true){
        $FotoDePerfil = 'https://scontent.fssz6-1.fna.fbcdn.net/v/t1.0-9/67589280_495218954559623_650072793790021632_n.jpg?_nc_cat=111&_nc_oc=AQnTriGB-8DhxxeBQzuQFjHJ6xvhg8aRbmhOID1LO4_oB-t3zaF9KjTyekHjD7vgUCg&_nc_ht=scontent.fssz6-1.fna&oh=d9a2384e48f2040c874ef7d026fc491a&oe=5DD56DF4';
    }
    else{
        $FotoDePerfil = 'https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg';
    }
    $nome = 'Bruno';
    $sobrenome = 'Silva Carvalho';
    $placa = 'ABC-1234';
    $modelo = 'Corsa Classic';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="../css/sistema.css">
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <title>Document</title>
</head>

<body>
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
                                <img class="img-responsive img-rounded"
                                    src="<?php echo $FotoDePerfil ?>"
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
                                <li class="sidebar-dropdown">
                                    <a href="#">
                                        <i class="fa fa-tachometer-alt"></i>
                                        <span>Início</span>
                                        <span class="badge badge-pill badge-warning">New</span>
                                    </a>
                                    <div class="sidebar-submenu">
                                        <ul>
                                            <li>
                                                <a href="#">Dashboard 1
                                                    <span class="badge badge-pill badge-success">Pro</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Dashboard 2</a>
                                            </li>
                                            <li>
                                                <a href="#">Dashboard 3</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="sidebar-dropdown">
                                    <a href="#">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span>E-commerce</span>
                                        <span class="badge badge-pill badge-danger">3</span>
                                    </a>
                                    <div class="sidebar-submenu">
                                        <ul>
                                            <li>
                                                <a href="#">Products

                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Orders</a>
                                            </li>
                                            <li>
                                                <a href="#">Credit cart</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="sidebar-dropdown">
                                    <a href="#">
                                        <i class="far fa-gem"></i>
                                        <span>Components</span>
                                    </a>
                                    <div class="sidebar-submenu">
                                        <ul>
                                            <li>
                                                <a href="#">General</a>
                                            </li>
                                            <li>
                                                <a href="#">Panels</a>
                                            </li>
                                            <li>
                                                <a href="#">Tables</a>
                                            </li>
                                            <li>
                                                <a href="#">Icons</a>
                                            </li>
                                            <li>
                                                <a href="#">Forms</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="sidebar-dropdown">
                                    <a href="#">
                                        <i class="fa fa-chart-line"></i>
                                        <span>Charts</span>
                                    </a>
                                    <div class="sidebar-submenu">
                                        <ul>
                                            <li>
                                                <a href="#">Pie chart</a>
                                            </li>
                                            <li>
                                                <a href="#">Line chart</a>
                                            </li>
                                            <li>
                                                <a href="#">Bar chart</a>
                                            </li>
                                            <li>
                                                <a href="#">Histogram</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="sidebar-dropdown">
                                    <a href="#">
                                        <i class="fa fa-globe"></i>
                                        <span>Maps</span>
                                    </a>
                                    <div class="sidebar-submenu">
                                        <ul>
                                            <li>
                                                <a href="#">Google maps</a>
                                            </li>
                                            <li>
                                                <a href="#">Open street map</a>
                                            </li>
                                        </ul>
                                    </div>
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
            <div class="col">
                <button></button>
            </div>
        </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
<script src="./js/wow.js"></script>
<script src="./js/index.js"></script>
<!-- page-wrapper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

<script>
    new WOW().init();
    jQuery(function ($) {

        $(".sidebar-dropdown > a").click(function () {
            $(".sidebar-submenu").slideUp(200);
            if (
                $(this)
                    .parent()
                    .hasClass("active")
            ) {
                $(".sidebar-dropdown").removeClass("active");
                $(this)
                    .parent()
                    .removeClass("active");
            } else {
                $(".sidebar-dropdown").removeClass("active");
                $(this)
                    .next(".sidebar-submenu")
                    .slideDown(200);
                $(this)
                    .parent()
                    .addClass("active");
            }
        });

        $("#close-sidebar").click(function () {
            $(".page-wrapper").removeClass("toggled");
        });
        $("#show-sidebar").click(function () {
            $(".page-wrapper").addClass("toggled");
        });
    });
</script>

</html>