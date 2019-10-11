<div>
    <script>

        document.onload = function() {{{ $tipo }}()};

        function Alert(){
            swal("{{ $titulo }}", "{{ $mensagem }}", {
                icon: "{{ $icone  }}",
                buttons: false,
                timer: 3000,
            });
        }

        function AlertQuestion(){

        }

    </script>
</div>
