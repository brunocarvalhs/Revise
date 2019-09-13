
/*$('.carousel').carousel({
    pause: true,
    interval: false,
    keyboard: true,
    wrap: false,
});*/

$(document).ready(function () {

    //Evento do clique de continuar
    $('#btnContinua').click(function () {
        return Validacao();
    }
    );

    //Evento de progresso de barra
    $('input').keypress(function () {
        if ($('input').val() == '') {
            var newprogress = newprogress - porcentagemPorUnidade;
            $('#theprogressbar').attr('aria-valuenow', newprogress).css('width', newprogress);
        }
    });

});

function BotaoContinuar() {
    return ["campoPlaca", "campoMarcaVeiculo", "campoModeloVeiculo", "campoAnoVeiculo", "campoCorVeiculo", "campoCidadeVeiculo", "campoEstado","campoNome", "campoSobrenome", "campoEmail", "campoDoCpf", "campoSenha", "campoConfirmaSenha",];
}

function Validacao() {
    var array = BotaoContinuar();
    for (input of array) {
        if ($('#' + input).val() == '') {
            alert('Campo em branco encontrado');
            return false;
        }
    }
    return true;
}
function juridico() {
    window.location.href = './cadastro_juridico.html';
}
function fisico() {
    window.location.href = './cadastro.html';
}
function redirecionar() {
    window.location.href = './redirecionamento.html';
}
function alertaOK() {
    swal({ title: "Seu cadastro foi realizado com sucesso!",
    icon: "success",
        buttons: {
            catch: {
              text: "OK",
              value: "certo",
            },
        }
        })
        .then((value) => {
            switch (value) {

                case "certo":
                    window.location.href = './login.html';
                    break;
            }

        });

}

