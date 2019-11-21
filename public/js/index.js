function signIn() {
    window.location.href = '/public/SignIn';
}

function signUp() {

    swal("Qual tipo de cadastro você deseja fazer?", {
            icon: "info",
            buttons: {
                cancel: {
                    text: "Cancelar",
                    className: "swal-button--style"
                },

                catch: {
                    text: "Jurídico",
                    value: "juridico",
                    className: "swal-button--style"
                },
                defeat: {
                    text: "Físico",
                    value: "fisico",
                    className: "swal-button--style"
                }

            },

        })
        .then((value) => {
            switch (value) {

                case "juridico":
                    window.location.href = '/public/cadastro/juridico';
                    break;

                case "fisico":
                    window.location.href = '/public/cadastro/fisico';
                    break;

            }
        });

}

function btnPerfilJuridico() {
    swal("Deseja realmente alterar suas informações?", {
            icon: "warning",
            buttons: {

                catch: {
                    text: "Sim",
                    value: "Sim",
                    color: "warning",
                },
                defeat: {
                    text: "Cancelar",
                    value: "cancelar",
                    color: "warning",
                },

            },
        })
        .then((value) => {
            switch (value) {

                case "Sim":
                    //habilitando inputs
                    document.getElementById("razaoSocial").disabled = false;
                    document.getElementById("nomeFantasia").disabled = false;
                    document.getElementById("campoDoCnpj").disabled = false;
                    document.getElementById("campoEmail").disabled = false;
                    document.getElementById("endereco").disabled = false;
                    document.getElementById("bairro").disabled = false;
                    document.getElementById("cidade").disabled = false;
                    document.getElementById("estado").disabled = false;
                    document.getElementById("pais").disabled = false;

                    //Aparecer botão
                    var show = document.getElementById('btn_hidden');
                    var hide = document.getElementById('btn_off');
                    if (show.style.display == 'none' && hide.style.display == 'block') {
                        show.style.display = 'block';
                        hide.style.display = 'none';
                    } else
                        show.style.display = 'block';
                    hide.style.display = 'none';
                    break;

                case "cancelar":
                    window.location.href('../index.html');
                    break;
            }

        });


}

function btnPerfilFisico() {
    swal("Deseja realmente alterar suas informações?", {
            icon: "warning",
            buttons: {

                catch: {
                    text: "Sim",
                    value: "Sim",
                    color: "warning",
                },
                defeat: {
                    text: "Cancelar",
                    value: "cancelar",
                    color: "warning",
                },

            },
        })
        .then((value) => {
            switch (value) {

                case "Sim":
                    //habilitando inputs
                    document.getElementById("campoNome").disabled = false;
                    document.getElementById("campoEmail").disabled = false;
                    document.getElementById("campoDoCpf").disabled = false;
                    document.getElementById("campoDeNascimento").disabled = false;
                    document.getElementById("txtPlano").disabled = false;
                    //Aparecer botão
                    var show = document.getElementById('btn_hidden');
                    var hide = document.getElementById('btn_off');
                    if (show.style.display == 'none' && hide.style.display == 'block') {
                        show.style.display = 'block';
                        hide.style.display = 'none';
                    } else
                        show.style.display = 'block';
                    hide.style.display = 'none';
                    break;

                case "cancelar":
                    window.location.href('../index.html');
                    break;
            }

        });


}

function Salvar() {
    swal("Suas alterações foram salvas com sucesso!", {
            icon: "success",
            buttons: {
                catch: {
                    text: "OK",
                    value: "ok",
                },

            },
        })
        .then((value) => {
            switch (value) {

                case "ok":
                    window.location.reload();
                    break;
            }
        });

}

function Cancelar() {
    window.location.reload();

}
//Tooltips
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})

function disableJuridico(){
        document.getElementById("razaoSocial").disabled = true;
        document.getElementById("nomeFantasia").disabled = true;
        document.getElementById("campoDoCnpj").disabled = true;
        document.getElementById("campoEmail").disabled = true;
        document.getElementById("endereco").disabled = true;
        document.getElementById("bairro").disabled = true;
        document.getElementById("cidade").disabled = true;
        document.getElementById("estado").disabled = true;
        document.getElementById("pais").disabled = true;

}

function disableFisico(){
    document.getElementById("campoNome").disabled = true;
    document.getElementById("campoEmail").disabled = true;
    document.getElementById("campoDoCpf").disabled = true;
    document.getElementById("campoDeNascimento").disabled = true;
    document.getElementById("txtPlano").disabled = true;

}


