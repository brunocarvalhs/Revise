
    $('.carousel').carousel({
        pause: true,
        interval: false,
        keyboard: true,
        wrap: false,
    });
    $(document).ready(function () {

        //Evento do clique de continuar
        $('#btnContinua').click(function () {
            var camposParaValidar = BotaoContinuar($('#btnContinua').val());
            return Validacao(camposParaValidar, (33.3333333 / camposParaValidar.length));
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

    function BotaoContinuar(parametroDePagina) {
        if (parametroDePagina == '2') {
            var inputs = ["campoPlaca", "campoMarcaVeiculo", "campoModeloVeiculo", "campoAnoVeiculo", "campoCorVeiculo", "campoCidadeVeiculo", "campoEstado"];
        }
        else {
            var inputs = ["campoNome", "campoSobrenome", "campoEmail", "campoDoCpf", "campoSenha", "campoConfirmaSenha"];
        }
        return inputs;
    }

    function Validacao(array, porcentagemPorUnidade) {
        for (input of array) {
            if ($('#' + input).val() == '') {
                alert('Campo em branco encontrado'); 
                return false;
            }
        }
        return true;
    }
    function juridico()
    {
        window.location.href ='./cadastro_juridico.html';
    }
    function fisico()
    {
        window.location.href ='./cadastro.html';
    }
    function redirecionar()
    {
        window.location.href ='./redirecionamento.html';    }
