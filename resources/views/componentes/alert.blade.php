<div>
    <script>
        Swal.fire({
            title: '{{ $titulo }}',
            text: '{{ $mensagem }}',
            type: '{{ $icone  }}',
            buttons: false,
            timer: 3000,
        });
    </script>
</div>
