$(document).ready(function() {

    $("#txtnome").change(function() {
        document.getElementById("txtnome").setAttribute('class', "form-control");
    });
    $("#txtemail").change(function() {
        document.getElementById("txtemail").setAttribute('class', "form-control");
    });
    $("#txtcpf").change(function() {
        document.getElementById("txtcpf").setAttribute('class', "form-control");
    });
    $("#txtsenha").change(function() {
        document.getElementById("txtsenha").setAttribute('class', "form-control");
    });
    $("#txtcsenha").change(function() {
        document.getElementById("txtcsenha").setAttribute('class', "form-control");
    });
    $("#txtplaca").change(function() {
        document.getElementById("txtplaca").setAttribute('class', "form-control");

    });
    $("#txtNascimento").change(function() {
        document.getElementById("txtNascimento").setAttribute('class', "form-control");

    });

    $('#txtNascimento').attr({
        "max": max,
        "min": min
    });

    //Validação simples
});

function ValidarCadastroFisico() {
    var filter = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    var cpf = document.CadastroFisico.txtcpf.value;

    cpf = cpf.replace(/[^\d]+/g, '');
    if (cpf == '') {
        Swal.fire(
            'Formulário de Cadastro',
            'CPF Inválido',
            'info'
        )
        return false;
    }
    // Elimina CPFs invalidos conhecidos
    if (cpf.length != 11 ||
        cpf == "00000000000" ||
        cpf == "11111111111" ||
        cpf == "22222222222" ||
        cpf == "33333333333" ||
        cpf == "44444444444" ||
        cpf == "55555555555" ||
        cpf == "66666666666" ||
        cpf == "77777777777" ||
        cpf == "88888888888" ||
        cpf == "99999999999") {
        Swal.fire(
            'Formulário de Cadastro',
            'CPF Inválido',
            'info'
        )
        return false;
    }
    // Valida 1o digito
    add = 0;
    for (i = 0; i < 9; i++)
        add += parseInt(cpf.charAt(i)) * (10 - i);
    rev = 11 - (add % 11);
    if (rev == 10 || rev == 11)
        rev = 0;
    if (rev != parseInt(cpf.charAt(9))) {
        Swal.fire(
            'Formulário de Cadastro',
            'CPF Inválido',
            'info'
        )
        return false;
    }
    // Valida 2o digito
    add = 0;
    for (i = 0; i < 10; i++)
        add += parseInt(cpf.charAt(i)) * (11 - i);
    rev = 11 - (add % 11);
    if (rev == 10 || rev == 11)
        rev = 0;
    if (rev != parseInt(cpf.charAt(10))) {
        Swal.fire(
            'Formulário de Cadastro',
            'CPF Inválido',
            'info'
        )
        return false;
    }

    if (document.CadastroFisico.txtnome.value == '') {
        Swal.fire(
            'Formulário de Cadastro',
            'Verrifique os campos',
            'info'
        )
        document.getElementById("txtnome").setAttribute('class', "form-control is-invalid");
        return false;
    }
    if (document.CadastroFisico.txtnome.value.length > 125) {

        Swal.fire(
            'Formulário de Cadastro',
            'Seu nome não pode ter mais de 125 caracteres',
            'info'
        )
        document.getElementById("txtnome").setAttribute('class', "form-control is-invalid");
        return false;
    }
    if (document.CadastroFisico.txtemail.value == '') {
        Swal.fire(
            'Formulário de Cadastro',
            'Verrifique os campos',
            'info'
        )
        document.getElementById("txtemail").setAttribute('class', "form-control is-invalid");
        return false;
    }
    if (document.CadastroFisico.txtemail.value.length > 60) {
        Swal.fire(
            'Formulário de Cadastro',
            'Seu email não pode ter mais de 60 caracteres',
            'info'
        )
        document.getElementById("txtemail").setAttribute('class', "form-control is-invalid");
        return false;
    }
    if (!filter.test(document.CadastroFisico.txtemail.value)) {
        Swal.fire(
            'Formulário de Cadastro',
            'E-mail digitado inválido',
            'info'
        )
        return false;
    }
    if (document.CadastroFisico.txtcpf.value == '') {
        Swal.fire(
            'Formulário de Cadastro',
            'Verrifique os campos',
            'info'
        )
        document.getElementById("txtcpf").setAttribute('class', "form-control is-invalid");
        return false;
    }
    if (document.CadastroFisico.txtcpf.value.length > 14) {
        Swal.fire(
            'Formulário de Cadastro',
            'Seu cpf não pode ter mais de 14 caracteres',
            'info'
        )
        document.getElementById("txtcpf").setAttribute('class', "form-control is-invalid");
        return false;
    }
    if (document.CadastroFisico.txtsenha.value != document.CadastroFisico.txtcsenha.value) {
        Swal.fire(
            'Formulário de Cadastro',
            'As senhas não estão iguais',
            'info'
        )
        document.getElementById("txtsenha").setAttribute('class', "form-control is-invalid");
        document.getElementById("txtcsenha").setAttribute('class', "form-control is-invalid");
        return false;
    }
    if (document.CadastroFisico.txtsenha.value == '') {
        Swal.fire(
            'Formulário de Cadastro',
            'Verrifique os campos',
            'info'
        )
        document.getElementById("txtsenha").setAttribute('class', "form-control is-invalid");
        return false;
    }
    if (document.CadastroFisico.txtsenha.value.length < 6 && document.CadastroFisico.txtsenha.value.length > 20) {
        Swal.fire(
            'Formulário de Cadastro',
            'Sua senha não pode ter mais de 20 caracteres',
            'info'
        )
        document.getElementById("txtsenha").setAttribute('class', "form-control is-invalid");
        return false;
    }
    if (document.CadastroFisico.txtcsenha.value == '') {
        Swal.fire(
            'Formulário de Cadastro',
            'Verrifique os campos',
            'info'
        )
        document.getElementById("txtcsenha").setAttribute('class', "form-control is-invalid");
        return false;
    }
    if (document.CadastroFisico.txtcsenha.value.length < 6 && document.CadastroFisico.txtcsenha.value.length > 20) {
        Swal.fire(
            'Formulário de Cadastro',
            'Sua senha confirmação não pode ter mais de 20 caracteres',
            'info'
        )
        document.getElementById("txtcsenha").setAttribute('class', "form-control is-invalid");
        return false;
    }
    if (document.CadastroFisico.txtNascimento.value == '') {
        Swal.fire(
            'Formulário de Cadastro',
            'Verrifique os campos',
            'info'
        )
        document.getElementById("txtNascimento").setAttribute('class', "form-control is-invalid");
        return false;
    }
    if (document.CadastroFisico.txtplano.value == "0") {
        document.getElementById("txtplano").setAttribute('class', "form-control is-invalid");
        Swal.fire(
            'Formulário de Cadastro',
            'Selecione um plano',
            'info'
        )
        return false;
    }
    if (document.CadastroFisico.chkTermos.checked == false) {
        document.getElementById("chkTermos").setAttribute('class', "form-control is-invalid");
        Swal.fire(
            'Formulário de Cadastro',
            'Marque os Termos',
            'info'
        )
        return false;
    }

    return true;

}

function bloqueioNumero(event) {
    var regex = new RegExp("^[a-zA-ZÁ-ú \b\0]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);

    if (!regex.test(key)) {
        event.preventDefault();
        return false;
    }
}