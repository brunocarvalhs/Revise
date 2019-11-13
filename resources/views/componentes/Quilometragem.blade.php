<div>
    <script>
        function quilometragem(placa) {
            Swal.fire({
                title: "Como deseja inserir a quilometragem?",
                    type: 'question',
                    showCancelButton: true,
                    confirmButtonText: 'Manualmente',
                    cancelButtonText: 'Utilizando Obd2',
                    reverseButtons: true
                }).then((result) => {
                    if(result.value){
                        Swal.fire({
                            title: 'Inserir quilometragem de (' + placa + ')',
                            text: 'Obs.: Insira o valor correto da quilometragem! É de total responsabilidade do usuário a autencidade da quilometragem',
                            html:
                            `<form method="GET" action="{{ route('quilomatragem') }}/${placa}">
                                <input id="swal-input2" name="KM" class="swal2-input">
                                <button type="submit" class="btn btn-warning">Registrar</button>
                            </form>`,
                            showConfirmButton: false,
                            showCancelButton: true
                        })
                    }else{
                        Swal.mixin({
                            confirmButtonText: 'Próximo &rarr;',
                            progressSteps: ['1', '2', '3', '4', '5', '6']
                        }).queue([
                        {
                            title: 'Baixe o Revise App',
                            text: 'Para escanear o veículo é necessário ter o Revise App instalado em seu dispositivo',
                            imageUrl: '{{ asset("img/manual/passo1.png") }}',
                            imageWidth: 200,
                            imageHeight: 200,
                            imageAlt: 'Custom image',
                            animation: false
                        },{
                            title: 'OBD2',
                            text: 'Verifique a compatibilidade do Obd2',
                            imageUrl: '{{ asset("img/manual/passo2.png") }}',
                            imageWidth: 200,
                            imageHeight: 200,
                            imageAlt: 'Custom image',
                            animation: false
                        },{
                            title: 'Entrada do veículo',
                            text: 'Os modelos a partir de 2010 tem suporte para OBD2 (16 pinos)',
                            imageUrl: '{{ asset("img/manual/passo3.png") }}',
                            imageWidth: 400,
                            imageHeight: 200,
                            imageAlt: 'Custom image',
                            animation: false
                        },{
                            title: 'Insira o OBD2',
                            text: 'Conecte-o na entrada encontrada no passo 3, ligue o carro e verifique se as luzes presentes no dispositivo estão ativadas',
                            imageUrl: '{{ asset("img/manual/passo4.png") }}',
                            imageWidth: 200,
                            imageHeight: 200,
                            imageAlt: 'Custom image',
                            animation: false
                        },{
                            title: 'Escaneando o veículo',
                            text: 'Conecte via bluetooth o dispositivo com o Revise App e após o pareamento vá na sessão do scanner do aplicativo e inicie a verificação',
                            imageUrl: '{{ asset("img/manual/passo5.png") }}',
                            imageWidth: 200,
                            imageHeight: 200,
                            imageAlt: 'Custom image',
                            animation: false
                        },{
                            title: 'Tudo pronto!',
                            text: `Agora você poderá ver as notificações das manutenções de componentes do seu veículo`,
                        }
                        ]).then((result) => {
                            window.location.reload()
                        })
                    }
                })
        }
    </script>
</div>
