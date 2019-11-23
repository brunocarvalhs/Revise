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
            console.log(data[0]);
            document.getElementById("txtMarca").setAttribute('value', data[0].marca);
            document.getElementById("txtAno").setAttribute('value', data[0].anoModelo);
            document.getElementById("txtCor").setAttribute('value', data[0].cor);
            document.getElementById("txtCidade").setAttribute('value', data[0].municipio);
            document.getElementById("txtEstado").setAttribute('value', data[0].uf);
    },
        error: function (erro) {
            swal({
                icon : 'error',
                title : 'Placa não encontrada',
                buttons: {

                    catch: {
                        text: "Ok",
                        value: "Ok",
                        className: "swal-button--style"
                    },
                },
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
                title : 'CEP não encontrado',
                buttons: {

                    catch: {
                        text: "Ok",
                        value: "Ok",
                        className: "swal-button--style"
                    },
                },
            });
            document.getElementById("txtEstado").setAttribute('value', "");
            document.getElementById("txtBairro").setAttribute('value', "");
            document.getElementById("txtCidade").setAttribute('value', "");
            document.getElementById("txtRua").setAttribute('value', "");
        }
    })

}
