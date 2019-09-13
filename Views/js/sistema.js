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
    title: "Bem Vindo(a)!",
    text: "Para iniciar o sistema é necessário inserir a quilometragem do seu carro:",
    content: "input",
    className: 'quilometragem',
    buttons: {
      catch: {
        text: "Continuar",
        value: "Continuar",
      },
      defeat: {
        text: "Usar Obd2 para captar Km ",
        value: "Obd2",
      },

    },
  })
    .then((value) => {
      switch (value) {

        case "Continuar": { 
          swal({
            title: "Bem Vindo(a)!",
            text: "Para iniciar o sistema é necessário inserir a quilometragem do seu carro:",
            content: "input",
            className: 'quilometragem',
            buttons: true
          }).then((value) =>{
            swal({
              icon: "info",
              text: value,
            });
          });
          break;
        }

        case "Obd2": {
          swal({
            icon: "warning",
            text: "Para usar a função de captar a quilometragem com o Obd2 (o sensor que ) baixe o App em seu dispositivo móvel e siga os passos necessários" +
              " para scanear",
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