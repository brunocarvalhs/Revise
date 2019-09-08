function signIn() {
  window.location.href = './login.html';
}
function signUp() {

  swal("Qual tipo de cadastro você deseja fazer?", {
    icon: "info",
    buttons: {
      cancel: true,
      catch: {
        text: "Jurídico",
        value: "juridico",
      },
      defeat: {
        text: "Físico",
        value: "fisico"
      }

    },
  })
    .then((value) => {
      switch (value) {

        case "juridico":
          window.location.href = './cadastro_juridico.html';
          break;

        case "fisico":
          window.location.href = './cadastro.html';
          break;

      }
    });

}
function btnPerfil() {
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
          //Limpar Campos 
          if (document.getElementById('sistemaJ'))
          {
            document.getElementById('razaoSocial').value = "";
            document.getElementById('nomeFantasia').value = "";
            document.getElementById('campoDoCnpj').value = "";
            document.getElementById('campoEmail').value = "";
          }
          else
          {
            document.getElementById('campoNome').value = "";
            document.getElementById('campoEmail').value = "";
            document.getElementById('campoDoCpf').value = "";
            document.getElementById('campoDeNascimento').value = "";
          }
          //Aparecer botão
          var show = document.getElementById('btn_hidden');
          var hide = document.getElementById('btn_off');

          if (show.style.display == 'none' && hide.style.display == 'block') {
            show.style.display = 'block';
            hide.style.display = 'none';
          }
          else
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
  swal("Suas alterações foram salvas com sucesso", {
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

