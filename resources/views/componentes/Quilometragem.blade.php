<div>
    <script>
        function quilometragem(placa) {
            Swal.fire({
                title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Manual',
                    cancelButtonText: 'Automatico',
                    reverseButtons: true
                }).then((result) => {
                    if(result.value){
                        Swal.fire({
                            title: 'Inserir quilometragem do veiculo da placa (' + placa + ')',
                            text: 'Obs.: Para certo funcionamento do sistema deve-se inserir a quilometragem correta do veículo, sendo responsabilidade do usuario a autencidade do dado de quilometragem.',
                            html:
                            `<form method="GET" action="{{ route('quilomatragem') }}/${placa}">
                                <input id="swal-input2" name="KM" class="swal2-input">
                                <button type="submit" class="btn btn-warning">Registrar</button>
                            </form>`,
                            showConfirmButton: false,
                        })
                    }else{
                        Swal.mixin({
                            confirmButtonText: 'Next &rarr;',
                            showCancelButton: true,
                            progressSteps: ['1', '2', '3']
                        }).queue([
                        {
                            title: 'Conectar o OBD2',
                            text: 'Para escanear o veículo deve-se inserir o OBD2 no carro ' + placa
                        },{
                            title: 'Question 1',
                            text: 'Chaining swal2 modals is easy'
                        },{
                            title: 'Question 1',
                            text: 'Chaining swal2 modals is easy'
                        }
                        ]).then((result) => {
                            window.location.reload()
                        })
                    }
                })
        }
    </script>
</div>
