function consultar() {
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
            console.log(erro);
        }
    })

}