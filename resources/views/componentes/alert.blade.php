<div>
    <script>

        function Alert(){
            swal("{{ $titulo }}", "{{ $mensagem }}", {
                icon: "{{ $icone  }}",
                buttons: false,
                timer: 3000,
            });
        }

        function AlertQuestion(){

        }

        onload.{{ $tipo }}();

    </script>
</div>
