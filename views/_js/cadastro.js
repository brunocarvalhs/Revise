function carro()
{

   var cardVeiculo = document.getElementById('hideVeiculo');
   cardVeiculo.hidden = false;
   var button = document.getElementById('botaoCadastro');
    button.style.visibility = "hidden";
}
function Plano()
{
   var cardPlano = document.getElementById('hidePlano');
   cardPlano.hidden = false;
   var button = document.getElementById('botaoVeiculo');
    button.style.visibility = "hidden";
}
function anuncio(){
    document.getElementById('hideAnuncio').hidden = false;
    var button = document.getElementById('botaoAnuncio');
    button.style.visibility = "hidden";
}
function tipoAnuncio(){
    var opcao = document.getElementById('anuncio').value;
    if(opcao=="1")
    {
        document.getElementById('servico').hidden = false;
        document.getElementById('produto').hidden = true;
    }
    else if(opcao=="2")
    {
        document.getElementById('servico').hidden = true;
        document.getElementById('produto').hidden = false;
    }
    else
    {
        document.getElementById('servico').hidden = true;
        document.getElementById('produto').hidden = true;
    }
}
