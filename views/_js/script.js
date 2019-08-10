//Ativar o script da framework WOW
new Window().init();

function cadastrar()
{
   var cadastro = document.getElementById('hide');
   cadastro.hidden = false;
}

function quilometragem()
{
   var cadastro = document.getElementById('hide');
   cadastro.hidden = false;
}
function redirecionar()
{
   location.href= "index.php";
}
function redirecionarLogin()
{
   location.href= "singIn.php";
}
function redirecionarSair(){
   location.href="../";
}