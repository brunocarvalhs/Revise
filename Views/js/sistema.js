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
                text: "Caso deseje alterar sua quilometragem acesse a área das informações do veículo.",
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

  