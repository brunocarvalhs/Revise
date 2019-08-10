<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil</title>
    <link rel="stylesheet" href="../_frameworks/_bootstrap_css/bootstrap.css">
</head>
<body>
 <!--Menu-->
 <nav class="navbar navbar-expand-lg navbar-dark bg-revise">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link" id="bg-link" href="index.php">Home</a>
        <a class="nav-item nav-link" id="bg-link" href="#">Anúncios</a>
        <a class="nav-item nav-link" id="bg-link"  href="perfil.php">Perfil</a>
        <!--dropdown-->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="bg-link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Configurações
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item"  href="#">Ajustes</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="../singIn.php">Sair</a>
            </div>
          </li>
      </div>
 </div>
</nav>
<!--Página das alterações do fornecedor-->
<div class="container-fluid">
<div class="row align-items-center">
<!--Conteudo lado esquerdo--> 
<div class="col-11 col-xs-11 col-sm-11 col-md-11 col-lg-6 col-xl-6">
   <h1 class="display-4">Perfil</h1>
<!--Input Nome-->
<br>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Nome ou Empresa</span>
            </div>
            <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
          </div>
<!--Input CNPJ-->
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="basic-addon1">CNPJ</span>
    </div>
    <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
  </div>
<!--Input Email-->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Email</span>
            </div>
            <input type="email" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
          </div>
  <!--Input Endereço--> 
  <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">Endereço</span>
      </div>
      <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
  </div>
  <!--Input Estado-->
<div class="input-group mb-3">
    <div class="input-group-prepend">
      <label class="input-group-text" for="inputGroupSelect01">Estado</label>
</div>
  <select class="custom-select" id="inputGroupSelect01">
      <option selected>Selecione...</option>
      <option value="1">São Paulo</option>
      <option value="2">Minas Gerais</option>
      <option value="3">Santa Catarina</option>
  </select>
</div> 
  <!--Input Cidade-->
<div class="input-group mb-3">
    <div class="input-group-prepend">
      <label class="input-group-text" for="inputGroupSelect01">Cidade</label>
</div>
  <select class="custom-select" id="inputGroupSelect01">
      <option selected>Selecione...</option>
      <option value="1">São Vicente</option>
      <option value="2">Santos</option>
      <option value="3">Praia Grande</option>
  </select>
</div> 
  
       
<!--Botao Salvar Alteracao-->
  <button type="button" class="btn btn-danger-revise">Apagar Conta</button>
<!--Botao Apagar Conta-->

  <button type="button" class="btn btn-success-revise">Salvar Alteração</button>
 
</div>
<!--Conteudo lado direito-->
 <!--Card-->
 <div class="md-auto col-lg-6">
    <br><br>
    <div class="card">        
      <div class="card-body">
        <h5 class="card-text">Grátis</h5>
        <p class="card-text">Descrição plano</p>
      </div>
    </div>
    <br>
      <button type="button" id="alter" class="btn btn-warning-plano" href="/planos.phtml">Alterar Plano</button>
   </div>
  </div>
  
</body>
<!--Bootstrap-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   

</html>
