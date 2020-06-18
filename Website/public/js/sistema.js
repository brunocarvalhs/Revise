// @ts-ignore
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
  // @ts-ignore
  swal({
    title: "",
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
          // @ts-ignore
          swal({
            text: "Digite a quilometragm do seu veículo:",
            closeOnClickOutside: false,
            closeOnEsc: false,
            content: "input",
            button: {
              text: "Salvar",
              className: "swal-button--style"
            }

          }).then((value) => {
            if (value != ''  && isNaN(value) == false) {

              // @ts-ignore
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
                    cancel: "Cancelar"
                }
              })

                .then((value) => {
                  switch (value) {

                    case "ok":

                      // @ts-ignore
                      window.location = './SignIn.php';

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
          // @ts-ignore
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
          // @ts-ignore
          .then((value) => {
            window.location.reload();
          })
        }
      }
    });

  // @ts-ignore
  function salvo() {
    // @ts-ignore
    swal({

      icon: "success",
      title: "Salvo",
      text: "Caso queira alterar vá na área de veículos",
      buttons: {

        catch: {
            text: "Ok",
            value: "Ok",
            className: "swal-button--style"
        },
    },
    });
  }
}
function excluirConta(){
    // @ts-ignore
    swal({
        icon: "warning",
       title: "Deseja realmente excluir sua conta e todos os seus dados?",
        button:
        {
          text: "Sim",
          className: "swal-button--style",
          cancel: true,

        }

      })
      .then((value) => {
        window.location.reload();
      })
    }
