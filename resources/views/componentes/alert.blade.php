<div>
    <script>
        import swal from 'sweetalert';
        swal("{{ $titulo }}", "{{ $mensagem }}", {
            icon: "{{ $tipo  }}",
            buttons: false,
            timer: 3000,
        });
    </script>
</div>
