function signIn(){
    window.location.href ='./login.html';
}
function signUp(){
<<<<<<< HEAD
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
    
=======
    swal("Hello world!");
    //window.location.href ='./redirecionamento.html';
>>>>>>> 931e81176396aee2b366709ec28ff2a11094c4c9
}

