<div>
    <script>

    $(document).ready(function () {

        function Alert(){
            swal("{{ $titulo }}", "{{ $mensagem }}", {
                icon: "{{ $icone  }}",
                buttons: false,
                timer: 3000,
            });
        }

        function AlertQuestion(){

        }

        {{ $tipo }}();
    }
    </script>
</div>
