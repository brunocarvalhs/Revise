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

          }).then((value) =>{
              if(value != '')
              {
      
                  swal({
              
                    title: "Salvo",
                    text: "Caso queira alterar vá na área de veículos",
                    icon: "success",
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
                      window.location.href('../sistema.php');
                     
                      break;
                  }
                });
            
                }
              else
              {
                alert('Campo Vazio');
                window.location.reload();
              }
            })
          break;
        }
    
        case "Obd2": {
          swal({
            closeOnClickOutside: false,
            closeOnEsc: false,
            text: "Para usar a função de captar a quilometragem com o Obd2 (o sensor que ) baixe o App em seu dispositivo móvel e siga os passos necessários" +
              " para scanear",
              button:
              {
                text: "Ok",
                className: "swal-button--style",
              }
          });
          break;
        }
      }
    });

  function salvo() {
    swal({

      title: "Salvo",
      text: "Caso queira alterar vá na área de veículos",
      icon: "success",
    });
  }
}
