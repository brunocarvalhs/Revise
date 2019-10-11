<div>
    <script>

        const swal = require('/xampp/htdocs/node_modules/sweetalert/typings/sweetalert');

        swal("{{ $titulo }}", "{{ $mensagem }}", {
            icon: "{{ $tipo  }}",
            buttons: false,
            timer: 3000,
        });

    </script>
</div>
