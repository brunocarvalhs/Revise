<script>
    function Sair() {
        swal({
            icon: "warning",
            title: "Confirmação",
            text: "Deseja sair do sistema?",
            buttons: {
                cancel: {
                    text: "Cancel",
                    value: false,
                    visible: true,
                    className: "",
                    closeModal: true,
                },
                confirm: {
                    text: "Sair",
                    value: true,
                    visible: true,
                    className: "swal-button--style",
                    closeModal: true
                }
            }
        }).then((decicao)=>{
            if(decicao)
                window.location.href = "{{ route('sair') }}";
        });
    }
</script>
