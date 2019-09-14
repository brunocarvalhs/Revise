
$(document).ready(function () {

    //Evento do clique de continuar
    $('#btnContinua').click(function () {
        return Validacao();
    }
    );

   
function BotaoContinuar() {
    return ["campoPlaca", "campoMarcaVeiculo", "campoModeloVeiculo", "campoAnoVeiculo", "campoCorVeiculo", "campoCidadeVeiculo", "campoEstado","campoNome", "campoSobrenome", "campoEmail", "campoDoCpf", "campoSenha", "campoConfirmaSenha","servicoInput", "produtoInput"];
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
/*
function juridico() {
    window.location.href = './cadastro_juridico.html';
}
function fisico() {
    window.location.href = './cadastro.html';
}
function redirecionar() {
    window.location.href = './redirecionamento.html';
}
*/

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
    }})

    $(document).ready(function () {
        $('#servicoInput').click(function () {
            var valorPro = 1.00;
            var valorProduto = $('#produtoInput').val();
            $('#valorProduto').text('R$  ' + valorProduto * valorPro);
        });
        $('#produtoInput').click(function () {
            var valorPro = 1.00;
            var valorProduto = $('#produtoInput').val();
            $('#valorProduto').text('R$  ' + valorProduto * valorPro);
        });
        setInterval(function () {
            var valorPro = 1.00;
            var valorProduto = $('#produtoInput').val();
            $('#valorProduto').text('R$  ' + valorProduto * valorPro);
            var valorSer = 10.00;
            var valorServico = $('#servicoInput').val();
            $('#valorServico').text('R$  ' + valorServico * valorSer);
            $('#valorTotal').text('R$  ' + (valorServico + valorProduto));
        });
    });