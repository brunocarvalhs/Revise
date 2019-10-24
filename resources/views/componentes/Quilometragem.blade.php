<div>
    <script>
        function quilometragem(placa) {
        Swal.fire({
            title: 'Inserir quilometragem do veiculo da placa (' + placa + ')',
            text: 'Obs.: Para certo funcionamento do sistema deve-se inserir a quilometragem correta do veículo, sendo responsabilidade do usuario a autencidade do dado de quilometragem.',
            input: 'text',
            inputAttributes: {
                autocapitalize: 'off'
            },
            showCancelButton: true,
            confirmButtonText: 'Registrar',
            showLoaderOnConfirm: true,
            preConfirm: (km) => {
                return fetch(`{{ route('quilomatragem') }}/${placa}/${km}`)
                .then(response => {
                    if (!response.ok) {
                    throw new Error(response.statusText)
                    }
                    return response.json()
                })
                .catch(error => {
                    Swal.showValidationMessage(
                    `Request failed: ${error}`
                    )
                })
            },
            allowOutsideClick: () => !Swal.isLoading()
            }).then((result) => {
            if (result.value) {
                Swal.fire({
                title: `Registrado`,
                text: result.Placa,
                type: 'success'
                })
                setTimeout(()=>{
                    window.location.reload()
                },2000);
            }
            })
        }
    </script>
</div>
