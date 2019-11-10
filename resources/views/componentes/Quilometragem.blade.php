<div>
    <script>
        function quilometragem(placa) {
            Swal.fire({
                title: 'Sistema de verificação',
                    text: "Deseja inserir a quilometragem como?",
                    type: 'question',
                    showCancelButton: true,
                    confirmButtonText: 'Manual',
                    cancelButtonText: 'Automatico',
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
                            confirmButtonText: 'Next &rarr;',
                            showCancelButton: true,
                            progressSteps: ['1', '2', '3', '4', '5', '6']
                        }).queue([
                        {
                            title: 'Baixe o aplicativo Revise',
                            text: 'Para poder escanear o veículo, é necessário ter o Revise App instalado em seu dispositivo.',
                            imageUrl: '{{ asset("img/manual/passo1.png") }}',
                            imageWidth: 200,
                            imageHeight: 200,
                            imageAlt: 'Custom image',
                            animation: false
                        },{
                            title: 'OBD',
                            text: 'Para utilizar função do automático, é necessario possuir o OBD compatível com os modelos suportados pelo Revise. Para aquisição do dispositivo, verifique na página do Revise',
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
                            title: 'Inserir OBD',
                            text: 'Conecte o OBD2 na entrada encontrada no passo 3, ligue o carro e verifique se as luzes presente no dispositivo estão ativados',
                            imageUrl: '{{ asset("img/manual/passo4.png") }}',
                            imageWidth: 200,
                            imageHeight: 200,
                            imageAlt: 'Custom image',
                            animation: false
                        },{
                            title: 'Escaneando veículo',
                            text: `Conecte via bluetooth ao dispositivo presente no veículo no celular com o Revise App instalado.
                            Após o pareamento redirecione para sessão de scanner, presente no aplicativo e inicie o scanner selecionado o
                            dispositivo pareado e placa do veículo avaliado`,
                            imageUrl: '{{ asset("img/manual/passo5.png") }}',
                            imageWidth: 200,
                            imageHeight: 200,
                            imageAlt: 'Custom image',
                            animation: false
                        },{
                            title: 'Conclusão de scanner',
                            text: `Após seguir os passos, o aplicativo notificará as manutenções dos componentes que foram encontradas`,
                        }
                        ]).then((result) => {
                            window.location.reload()
                        })
                    }
                })
        }
    </script>
</div>
