$(document).ready(function () {

    $("#razaoSocial").change(function () {
        document.getElementById("razaoSocial").setAttribute('class', "form-control");
    });

    $("#nomeFantasia").change(function () {
        document.getElementById("nomeFantasia").setAttribute('class', "form-control");
    });

    $("#txtCEP").change(function () {
        document.getElementById("txtCEP").setAttribute('class', "form-control");
    });

    $("#txtEstado").change(function () {
        document.getElementById("txtEstado").setAttribute('class', "form-control");
    });

    $("#txtCidade").change(function () {
        document.getElementById("txtCidade").setAttribute('class', "form-control");
    });

    $("#txtBairro").change(function () {
        document.getElementById("txtBairro").setAttribute('class', "form-control");
    });

    $("#txtRua").change(function () {
        document.getElementById("txtRua").setAttribute('class', "form-control");
    });

    $("#txtNumero").change(function () {
        document.getElementById("txtNumero").setAttribute('class', "form-control");
    });

    $("#campoEmail").change(function () {
        document.getElementById("campoEmail").setAttribute('class', "form-control");
    });

    $("#txtcnpj").change(function () {
        document.getElementById("txtcnpj").setAttribute('class', "form-control");
    });

    $("#campoSenha").change(function () {
        document.getElementById("campoSenha").setAttribute('class', "form-control");
    });

    $("#campoConfirmaSenha").change(function () {
        document.getElementById("campoConfirmaSenha").setAttribute('class', "form-control");
    });

});

function ValidarCadastroJuridico() {

    var filter = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    var logErro = 0;

    if (document.CadastroJuridico.razaoSocial.value == '') {
        alert('O campo Razão Social completo está vazio.');
        document.getElementById("razaoSocial").setAttribute('class', "form-control is-invalid");
        logErro = 1;
    }

    if (document.CadastroJuridico.nomeFantasia.value == '') {
        alert('O campo Nome Fantasia completo está vazio.');
        document.getElementById("nomeFantasia").setAttribute('class', "form-control is-invalid");
        logErro = 1;
    }


    if (document.CadastroJuridico.txtCEP.value == '') {
        alert('O campo CEP está vazio.');
        document.getElementById("txtCEP").setAttribute('class', "form-control is-invalid");
        logErro = 1;
    }
    else{
        if (document.CadastroJuridico.txtCEP.value.length != 9) {
            alert('Seu CEP não pode ter mais de 9 caracteres.');
            document.getElementById("txtCEP").setAttribute('class', "form-control is-invalid");
            logErro = 1;
        }
    }


    if (document.CadastroJuridico.txtEstado.value == '') {
        alert('O campo Estado está vazio, procure pelo seu CEP.');
        document.getElementById("txtEstado").setAttribute('class', "form-control is-invalid");
        logErro = 1;
    }

    if (document.CadastroJuridico.txtCidade.value == '') {
        alert('O campo Cidade está vazio, procure pelo seu CEP.');
        document.getElementById("txtCidade").setAttribute('class', "form-control is-invalid");
        logErro = 1;
    }

    if (document.CadastroJuridico.txtBairro.value == '') {
        alert('O campo Bairro está vazio.');
        document.getElementById("txtBairro").setAttribute('class', "form-control is-invalid");
        logErro = 1;
    }

    if (document.CadastroJuridico.txtRua.value == '') {
        alert('O campo Rua está vazio.');
        document.getElementById("txtRua").setAttribute('class', "form-control is-invalid");
        logErro = 1;
    }

    if (document.CadastroJuridico.txtNumero.value == '') {
        alert('O campo Numero está vazio.');
        document.getElementById("txtNumero").setAttribute('class', "form-control is-invalid");
        logErro = 1;
    }

    if (document.CadastroJuridico.campoEmail.value == '') {
        alert('O campo E-mail está vazio.');
        document.getElementById("campoEmail").setAttribute('class', "form-control is-invalid");
        logErro = 1;
    }

    if (document.CadastroJuridico.txtcnpj.value == '') {
        alert('O campo CNPJ está vazio.');
        document.getElementById("txtcnpj").setAttribute('class', "form-control is-invalid");
        logErro = 1;
    }else{
        if (document.CadastroJuridico.txtcnpj.value.length === 14) {
            alert('O campo CNPJ deve-se ter 14 caracteres.');
            document.getElementById("txtcnpj").setAttribute('class', "form-control is-invalid");
            logErro = 1;
        }
    }

    if (document.CadastroJuridico.campoSenha.value == '') {
        alert('O campo senha está vazio.');
        document.getElementById("campoSenha").setAttribute('class', "form-control is-invalid");
        logErro = 1;
    }

    if (document.CadastroJuridico.campoSenha.value.length < 6 && document.CadastroJuridico.campoSenha.value.length > 20) {
        alert('Sua senha não pode ter mais de 20 caracteres.');
        document.getElementById("campoSenha").setAttribute('class', "form-control is-invalid");
        logErro = 1;
    }

    if (document.CadastroJuridico.campoConfirmaSenha.value == '') {
        alert('O campo comfirma senha está vazio.');
        document.getElementById("campoConfirmaSenha").setAttribute('class', "form-control is-invalid");
        logErro = 1;
    }
    if (document.CadastroJuridico.campoConfirmaSenha.value.length < 6 && document.CadastroJuridico.campoConfirmaSenha.value.length > 20) {
        alert('Sua senha confirmação não pode ter mais de 20 caracteres.');
        document.getElementById("campoConfirmaSenha").setAttribute('class', "form-control is-invalid");
        logErro = 1;
    }

    if (document.CadastroJuridico.txtEstado.value == '') {
        alert('Nenhum Endereço carregado.');
        logErro = 1;
    }

    if (logErro != 0) {
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
