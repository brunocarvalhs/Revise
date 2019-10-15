var bar = new ProgressBar.Line(container, {
  strokeWidth: 4,
  easing: 'easeInOut',
  duration: 1400,
  color: '#FFEA82',
  trailColor: '#eee',
  trailWidth: 1,
  svgStyle: { width: '100%', height: '100%' },
  from: { color: '#FFEA82' },
  to: { color: '#ED6A5A' },
  step: (state, bar) => {
    bar.path.setAttribute('stroke', state.color);
  }
});

bar.animate(1.0);
//Alert da Quilometragem
function infoKm() {
  swal({
    title: "Bem Vindo ao Revise!",
    text: "Para iniciar o sistema é necessário informar a quilometragem do seu carro. Deseja inserir manualmente ou utilizar o Obd2 (sensor do carro)?",
    className: 'quilometragem',
    closeOnClickOutside: false,
    closeOnEsc: false,

    //botões

    buttons: {

      catch: {

        text: "Manualmente",
        value: "Manualmente",
        className: "swal-button--style"
      },
      defeat: {
        text: "Obd2",
        value: "Obd2",
        className: "swal-button--style",
      },

    },

  })
    //tomada de decisão dos botões
    .then((value) => {
      switch (value) {

        case "Manualmente": {
          swal({
            texte: "Digite a quilometragm do seu veículo:",
            closeOnClickOutside: false,
            closeOnEsc: false,
            content: "input",
            button: {
              text: "Salvar",
              className: "swal-button--style"
            }

          }).then((value) => {
            if (value != ''  && isNaN(value) == false) {

              swal({

                title: "Salvo",
                text: "Obs: Caso deseje alterar, acesse a área veículos",
                icon: "success",
                closeOnClickOutside: false,
                closeOnEsc: false,
                button:
                {
                  text: "Ok",
                  className: "swal-button--style",
                  value: "ok",
                  
                }
              })

                .then((value) => {
                  switch (value) {

                    case "ok":

                      window.location = './sistema.php';

                      break;
                  }
                });


            }
           
            else {
              alert('Preencha o campo somente com números');
              window.location.reload();
            }
          })
          break;
        }

        case "Obd2": {
          swal({
            icon: "info",
            closeOnClickOutside: false,
            closeOnEsc: false,
            text: "Para usar a função de captar a quilometragem com o sensor Obd2, baixe o App Revise em seu dispositivo móvel"+ 
           " e siga os passos realizar o escaneamento.",
            button:
            {
              text: "Ok",
              className: "swal-button--style",
            }
          })
          .then((value) => {     
            window.location.reload();     
          })
        }
      }
    });
}

function Sair() {

  swal("Deseja realmente sair?", {
    icon: "warning",
    buttons: {
      cancel: {
        text: "Cancelar",
         className: "swal-button--style"
      },
      
      catch: {
        text: "Sim",
        value: "Sim",
        className: "swal-button--style"
      },
      defeat: {
        text: "Cancelar",
        value: "Cancelar",
        className: "swal-button--style"
      }

    },

  })
    .then((value) => {
      switch (value) {

        case "Sim":
          window.location.href = '../login.php';
          break;
      }
    });

}

function excluirVeiculo(){
  swal("Deseja realmente excluir esse veículo?", {
    icon: "warning",
    buttons: {

      catch: {
        text: "Sim",
        value: "Sim",
        className: "swal-button--style"
      },
      defeat: {
        text: "Cancelar",
        value: "cancelar",
        className: "swal-button--style"
      },

    },
  })
    .then((value) => {
      switch (value) {

        case "Sim":
        swal("Veículo excluído com sucesso!", {
          icon: "success",
          buttons: {
            catch: {
              text: "OK",
              value: "ok",
              className: "swal-button--style"
            },     
          },
          
        })   
        .then((value) => {     
          window.location.reload();     
        })
      }
    });
      
}

function btnExcluirConta() {
  swal("Deseja realmente excluir sua conta?", {
    icon: "warning",
    buttons: {

      catch: {
        text: "Sim",
        value: "Sim",
        className: "swal-button--style"

      },
      defeat: {
        text: "Cancelar",
        value: "cancelar",
        className: "swal-button--style"
      },

    },
  })
    .then((value) => {
      switch (value) {

        case "Sim":
          //Alert do caso sim
          swal({
            icon: "warning",
            title: "Atenção",
            text: "Ao excluir sua conta, todas as informações que foram inseridas serão totalmente deletadas. Caso o seu plano seja pago, mandaremos um email com os procedimentos a serem realizados, conforme o que está escrito em nosso termo de uso.",
            buttons: {

              catch: {
                text: "Ok",
                value: "Ok",
                className: "swal-button--style"

              },
              defeat: {
                text: "Cancelar",
                value: "cancelar",
                className: "swal-button--style"
              },
        
            },
          })
          .then((value) => {
            switch (value) {
              case "Ok":
                  window.location.href = '../login.php';
            }
          })
          break;
      }

    });
}
function disabledKm(){
  document.getElementById('txtKm').disabled = true;
  document.getElementById('btnSalvarKm').style.display = 'none';
}

function alterarKm() {
  swal({
    icon: "warning",
    title:"Deseja realmente alterar?",
    text: "Lembre-se: Ao alterar a quilometragem a contagem dos componentes será reiniciada. Além disso, é necessário que seja informado o valor correto, que aparece no painel do veículo.",
    buttons: {

      catch: {
        text: "Sim",
        value: "Sim",
        className: "swal-button--style"

      },
      defeat: {
        text: "Cancelar",
        value: "cancelar",
        className: "swal-button--style"
      },

    },
  })
    .then((value) => {
      switch (value) {

        case "Sim":
            document.getElementById('txtKm').disabled = false;
            document.getElementById('btnSalvarKm').style.display = 'block';
            document.getElementById('btnAlterarKm').style.display = 'none';              
      }

    });
}

function salvarKm() {
  var txtKm = document.getElementById('txtKm').value;
  if(txtKm == '' || isNaN(txtKm) == true){
    swal("Erro ao salvar", {
      icon: "error",
      buttons: {
        catch: {
          text: "OK",
          value: "OK",
          className: "swal-button--style"
        },
  
      },
  
    })
      .then((value) => {
        switch (value) {
          case "OK":
           
        }
      })
    }
  else{
    swal("Quilometragem alterada com sucesso!", {
      icon: "success",
      buttons: {
        catch: {
          text: "OK",
          value: "OK",
          className: "swal-button--style"
        },
  
      },
  
    })
      .then((value) => {
        switch (value) {
          case "OK":
            window.location.reload();
        }
      })
  }
}