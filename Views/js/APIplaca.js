function consultar() {

    document.getElementById("txtMarca").setAttribute('value', "Pesquisando..."); 
    document.getElementById("txtAno").setAttribute('value', "Pesquisando..."); 
    document.getElementById("txtCor").setAttribute('value', "Pesquisando..."); 
    document.getElementById("txtCidade").setAttribute('value', "Pesquisando..."); 
    document.getElementById("txtEstado").setAttribute('value', "Pesquisando..."); 

    var placa = $("#txtplaca").val();
    var urlStr = "./lib/api.php?placa=" + placa;

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