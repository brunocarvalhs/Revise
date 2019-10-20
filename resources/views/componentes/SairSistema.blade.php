<script>
    function Sair() {
        Swal.fire({
            type: "question",
            title: "Confirmação",
            text: "Deseja sair do sistema?",
            showCancelButton: true,
            confirmButtonText: 'Sim, sair...',
            cancelButtonText: 'Não, cancelar',
            reverseButtons: true
        }).then((result)=>{
            if (result.value) {
                window.location.href = "{{ route('sair') }}";
            }
        });
    }
</script>
