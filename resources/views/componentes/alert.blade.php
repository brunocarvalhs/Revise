<div>
    <script>
        Swal.fire({
            title: {{ $titulo }},
            text: {{ $mensagem }},
            type: {{ $icone  }},
            buttons: false,
            timer: 5000,
        });
    </script>
</div>
