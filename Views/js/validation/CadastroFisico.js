$(document).ready(function(){
    $("#txtnome").change(function(){
        document.getElementById("txtnome").setAttribute('class', "form-control"); 
    });
    $("#txtemail").change(function(){
        document.getElementById("txtemail").setAttribute('class', "form-control");
    });
    $("#txtcpf").change(function(){
        document.getElementById("txtcpf").setAttribute('class', "form-control"); 
    });
    $("#txtsenha").change(function(){
        document.getElementById("txtsenha").setAttribute('class', "form-control");
    });
    $("#txtcsenha").change(function(){
        document.getElementById("txtcsenha").setAttribute('class', "form-control"); 
    });
    $("#txtplaca").change(function(){
        document.getElementById("txtplaca").setAttribute('class', "form-control"); 
       
    });
    $("#txtNascimento").change(function(){
        document.getElementById("txtNascimento").setAttribute('class', "form-control"); 
       
    });
     
  });
function ValidarCadastroFisico()
{
    var filter = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    var date = new Date();
    var logErro = 0;
    var Data = document.getElementById("txtNascimento").value;
    var ano = Data.split("-");
    var ano4    = date.getFullYear();
    var idade = ano4 - ano[0];
    

    if(document.CadastroFisico.txtnome.value == '')
    {
        alert('O campo nome completo está vazio.');
        document.getElementById("txtnome").setAttribute('class', "form-control is-invalid"); 
        logErro = 1;
    }
    if(document.CadastroFisico.txtnome.value.length > 125)
    {
        alert('Seu nome não pode ter mais de 125 caracteres.');
        document.getElementById("txtnome").setAttribute('class', "form-control is-invalid"); 
        logErro = 1;
    }
    if(document.CadastroFisico.txtemail.value == '')
    {
        alert('O campo e-mail está vazio.');
        document.getElementById("txtemail").setAttribute('class', "form-control is-invalid"); 
        logErro = 1;
    }
    if(document.CadastroFisico.txtemail.value.length > 60)
    {
        alert('Seu email não pode ter mais de 60 caracteres.');
        document.getElementById("txtemail").setAttribute('class', "form-control is-invalid"); 
        logErro = 1;
    }
    if (!filter.test(document.CadastroFisico.txtemail.value)) {
		alert('E-mail digitado inválido.');
		logErro = 1;
	}
    if(document.CadastroFisico.txtcpf.value == '')
    {
        alert('O campo cpf está vazio.');
        document.getElementById("txtcpf").setAttribute('class', "form-control is-invalid"); 
        logErro = 1;
    }
    if(document.CadastroFisico.txtcpf.value.length > 14)
    {
        alert('Seu cpf não pode ter mais de 14 caracteres.');
        document.getElementById("txtcpf").setAttribute('class', "form-control is-invalid"); 
        logErro = 1;
    }
    if(document.CadastroFisico.txtsenha.value != document.CadastroFisico.txtcsenha.value)
    {
        alert('As senhas não estão iguais.');
        document.getElementById("txtsenha").setAttribute('class', "form-control is-invalid"); 
        document.getElementById("txtcsenha").setAttribute('class', "form-control is-invalid"); 
        logErro = 1;
    }
    if(document.CadastroFisico.txtsenha.value == '')
    {
        alert('O campo senha está vazio.');
        document.getElementById("txtsenha").setAttribute('class', "form-control is-invalid"); 
        logErro = 1;
    }
    if(document.CadastroFisico.txtsenha.value.length < 6 && document.CadastroFisico.txtsenha.value.length > 20)
    {
        alert('Sua senha não pode ter mais de 20 caracteres.');
        document.getElementById("txtsenha").setAttribute('class', "form-control is-invalid"); 
        logErro = 1;
            }
    if(document.CadastroFisico.txtcsenha.value == '')
    {
        alert('O campo comfirma senha está vazio.');
        document.getElementById("txtcsenha").setAttribute('class', "form-control is-invalid"); 
        logErro = 1;
    }
    if(document.CadastroFisico.txtcsenha.value.length < 6 && document.CadastroFisico.txtcsenha.value.length > 20)
    {
        alert('Sua senha confirmação não pode ter mais de 20 caracteres.');
        document.getElementById("txtcsenha").setAttribute('class', "form-control is-invalid"); 
        logErro = 1;
    }
    if(document.CadastroFisico.txtplaca.value == '')
    {
        alert('O campo placa está vazio.');
        document.getElementById("txtplaca").setAttribute('class', "form-control is-invalid"); 
        logErro = 1;
    }
    if(document.CadastroFisico.txtNascimento.value == '')
    {
        alert('O campo data de nascimento está vazio.');
        document.getElementById("txtNascimento").setAttribute('class', "form-control is-invalid"); 
        logErro = 1;
    }
    if(document.CadastroFisico.txtplaca.value.length > 8)
    {
        alert('Sua placa não pode ter mais de 8 caracteres.');
        document.getElementById("txtplaca").setAttribute('class', "form-control is-invalid"); 
        logErro = 1;
    }
    if(document.CadastroFisico.txtMarca.value == '')
    {
        alert('Nenhum veículo carregado.');
        logErro = 1;
    }
    if(idade < 18)
    {
        alert('Você tem que ser maior de idade.');
        document.getElementById("txtNascimento").setAttribute('class', "form-control is-invalid"); 
        logErro = 1;
    }
       if(document.CadastroFisico.txtplano.value == 0)
    {
        document.getElementById("txtplano").setAttribute('class', "form-control is-invalid"); 
        alert('Selecione um plano.');
        logErro = 1;
    }
    if(document.CadastroFisico.txtMarca.value != '')
    {
        var string =  document.getElementById("txtMarca").value;	
        var retorno = string.split("/");
        if(retorno[0] != 'CHEVROLET')
        {
            alert('Marca de carro não suportado.');
            logErro = 1;
        }
    }
    if(logErro != 0)
    {
        logErro = 0;
        return false;
    }
    
}
function bloqueioNumero(event) {
	var regex = new RegExp("^[a-zA-ZÁ-ú \b\0]+$");
	var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);

	if (!regex.test(key)) {
		event.preventDefault();
		return false;
	}
}
$("#txtcpf").mask("999.999.999-99");
$("#txtplaca").mask("AAA-9999");