<script>
    function Sair() {
        Swal.fire({
            type: "question",
            title: "Deseja realmente sair do sistema?",
            showCancelButton: true,
            confirmButtonText: 'Sim',
            cancelButtonText: 'Cancelar',
            reverseButtons: true
        }).then((result)=>{
            if (result.value) {
                window.location.href = "{{ route('sair') }}";
            }
        });
    }
</script>
