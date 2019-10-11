<div>
    <script>
        Swal.fire({
            title: '{{ $titulo }}',
            text: '{{ $mensagem }}',
            type: '{{ $tipo  }}',
            buttons: false,
            timer: 3000,
        });
    </script>
</div>
