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
        value: "cancel",
        color: "warning",
      },
   
    },
  })
    .then((value) => {
      switch (value) {

        case "Sim":
          //Limpar Campos 
          document.getElementById('campoNome').value = "";
          document.getElementById('campoEmail').value = "";
          document.getElementById('campoDoCpf').value = "";
          document.getElementById('campoDeNascimento').value = "";
          //Aparecer botão
          var show = document.getElementById('btn_hidden');

          if (show.style.display = 'none') {
            show.style.display = 'block';

          }
          else
            show.style.display = 'block';
          break;

          case "cancel":
            window.location.href('./perfilFisico.php')
        }
       
    });
    

  }

  function Salvar()
  {
    swal ( {
      title : " Alterações realizadas com sucesso!" , 
      ícone : "success" , 
    } ) ; 
    
    
  }
 