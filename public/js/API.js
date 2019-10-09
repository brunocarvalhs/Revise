function consultar() {

    document.getElementById("txtMarca").setAttribute('value', "Pesquisando...");
    document.getElementById("txtAno").setAttribute('value', "Pesquisando...");
    document.getElementById("txtCor").setAttribute('value', "Pesquisando...");
    document.getElementById("txtCidade").setAttribute('value', "Pesquisando...");
    document.getElementById("txtEstado").setAttribute('value', "Pesquisando...");

    var placa = $("#txtplaca").val();
    var urlStr = "http://revise.ddns.net:8080/placa/" + placa;

    $.ajax({
        url: urlStr,
        type: "get",
        crossDomain: true,
        dataType: "json",
        success: function (data) {
            console.log(data);
            document.getElementById("txtMarca").setAttribute('value', data.marca);
            document.getElementById("txtAno").setAttribute('value', data.anoModelo);
            document.getElementById("txtCor").setAttribute('value', data.cor);
            document.getElementById("txtCidade").setAttribute('value', data.municipio);
            document.getElementById("txtEstado").setAttribute('value', data.uf);
    },
        error: function (erro) {
            swal({
                icon : 'error',
                title : 'Resultado da Consulta',
                text : 'Placa de carro não encontrada: ' + placa,
            });
            document.getElementById("txtMarca").setAttribute('value', "");
            document.getElementById("txtAno").setAttribute('value', "");
            document.getElementById("txtCor").setAttribute('value', "");
            document.getElementById("txtCidade").setAttribute('value', "");
            document.getElementById("txtEstado").setAttribute('value', "");
        }
    })

}
function consultarCep() {

    document.getElementById("txtEstado").setAttribute('value', "Pesquisando...");
    document.getElementById("txtBairro").setAttribute('value', "Pesquisando...");
    document.getElementById("txtCidade").setAttribute('value', "Pesquisando...");
    document.getElementById("txtRua").setAttribute('value', "Pesquisando...");

    var cep = $("#txtCEP").val();
    var urlStr = "https://viacep.com.br/ws/" + cep + "/json/";

    $.ajax({
        url: urlStr,
        type: "get",
        crossDomain: true,
        dataType: "json",
        success: function (data) {
            console.log(data);
            document.getElementById("txtEstado").setAttribute('value', data.uf);
            document.getElementById("txtBairro").setAttribute('value', data.bairro);
            document.getElementById("txtRua").setAttribute('value', data.logradouro);
            document.getElementById("txtCidade").setAttribute('value', data.localidade);
    },
        error: function (erro) {
            swal({
                icon : 'error',
                title : 'Resultado da Consulta',
                text : 'CEP não encontrado: ' + cep,
            });
            document.getElementById("txtEstado").setAttribute('value', "");
            document.getElementById("txtBairro").setAttribute('value', "");
            document.getElementById("txtCidade").setAttribute('value', "");
            document.getElementById("txtRua").setAttribute('value', "");
        }
    })

}
