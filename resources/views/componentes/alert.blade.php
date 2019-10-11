<div>
    <script>
        swal("{{ $titulo }}", "{{ $mensagem }}", {
            icon: "{{ $tipo  }}",
            buttons: false,
            timer: 3000,
        });
    </script>
</div>
