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
function aparecer_botao() {
  var ue = document.getElementById('btn_hidden');
  if (ue.style.display = 'none') {
    ue.style.display = 'block';

  }
  else
    ue.style.display = 'block';
}
function confirmacao() {

  swal("Deseja alterar suas informações de perfil?", {
    icon: "warning",
    buttons: {
     
      catch: {
        text: "Sim",
        value: "Sim",
      color: "warning",
      },
      cancel: true,
    },
  })
    .then((value) => {
      switch (value) {

        case "Sim":
          window.location.href = './';
          break;

      }
    });
}
