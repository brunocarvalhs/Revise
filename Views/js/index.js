function signIn(){
    window.location.href ='./login.html';
}
function signUp(){
    swal("Qual tipo de cadastro você deseja fazer?", {
        icon: "info",
        buttons: {
          cancel: true,
          catch: {
            text: "Jurídico",
            value: "juridico",
          },
          defeat :{
              text: "Físico",
              value: "fisico"
          }
          
        },
      })
      .then((value) => {
        switch (value) {
       
          case "juridico":
           window.location.href ='./cadastro_juridico.html';
            break;
       
          case "fisico":
          window.location.href ='./cadastro.html';
            break;
    
        }
      });
    
}

