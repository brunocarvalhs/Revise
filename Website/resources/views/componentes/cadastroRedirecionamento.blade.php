<div>
    <script>
        function signUp() {
            swal("Qual tipo de cadastro você deseja fazer?", {
                    icon: "info",
                    buttons: {
                        cancel: {
                            text: "Cancelar",
                            className: "swal-button--style"
                        },

                        catch: {
                            text: "Jurídico",
                            value: "juridico",
                            className: "swal-button--style"
                        },
                        defeat: {
                            text: "Físico",
                            value: "fisico",
                            className: "swal-button--style"
                        }

                    },

                })
                .then((value) => {
                    switch (value) {

                        case "juridico":
                            window.location.href = "{{url('/cadastro/juridico')}}";
                            break;

                        case "fisico":
                            window.location.href = "{{url('/cadastro/fisico')}}";
                            break;
                    }
                });

            }
    </script>
</div>
