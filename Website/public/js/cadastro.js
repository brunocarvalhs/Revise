
$(document).ready(function () {

    //Evento do clique de continuar
    $('#btnContinua').click(function () {
        return Validacao();
    }
    );
    $(document).ready(function () {
        setInterval(function () {
            var valorPro = 1.00;
            var valorProduto = $('#produtoInput').val();
            var res = valorProduto * valorPro;
            $('#txtValorProduto').text('R$' + res + ',00');


            var valorSer = 10.00;
            var valorServico = $('#servicoInput').val();
            var res2 =  valorServico * valorSer;
            $('#txtValorServico').text('R$  ' + res2 + ',00');

            var total = res2 + res;
            $('#txtTotal').text('R$  ' + total + ',00');
        });
    });
})