<div>
    <script>
        function quilometragem(placa) {
            Swal.fire({
                title: 'Sistema de verificação',
                    text: "Qual tipo de sistema irá utilizar para verificar seu veículo?",
                    type: 'question',
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
                            text: 'Para escanear o veículo deve-se ter o aplicativo do Revise instalado no seu dispositivo.',
                            imageUrl: '{{ asset("img/manual/passo1.png") }}',
                            imageWidth: 200,
                            imageHeight: 200,
                            imageAlt: 'Custom image',
                            animation: false
                        },{
                            title: 'OBD',
                            text: 'Para utilizar função do automatico, é necessario possuir o OBD compativel com os modelos suportados pelo Revise, para aquisição do dispositivo verifique na pagina do Revise.',
                            imageUrl: '{{ asset("img/manual/passo2.png") }}',
                            imageWidth: 200,
                            imageHeight: 200,
                            imageAlt: 'Custom image',
                            animation: false
                        },{
                            title: 'Entrada do veículo',
                            text: 'Os modelos á partir de 2010 tem suporte para OBD2 16 pinos, encontre a entrada para analise do OBD.',
                            imageUrl: '{{ asset("img/manual/passo3.png") }}',
                            imageWidth: 400,
                            imageHeight: 200,
                            imageAlt: 'Custom image',
                            animation: false
                        },{
                            title: 'Inserir OBD',
                            text: 'Conecte o OBD na entrada encontrada no passo 3, ligue o carro e verifique se as luzes presente no dispositivo estão ativados.',
                            imageUrl: '{{ asset("img/manual/passo4.png") }}',
                            imageWidth: 200,
                            imageHeight: 200,
                            imageAlt: 'Custom image',
                            animation: false
                        },{
                            title: 'Escaneando veículo',
                            text: `Conecte via bluetooth ao dispositivo presente no veículo no celular com o aplicativo Revise instalado,
                            após o pareamento, redirecione para sessão de scanner presente no aplicativo e inicie o scanner selecionado o
                            dispositivo pareado e placa do veículo avaliado.`,
                            imageUrl: '{{ asset("img/manual/passo5.png") }}',
                            imageWidth: 200,
                            imageHeight: 200,
                            imageAlt: 'Custom image',
                            animation: false
                        },{
                            title: 'Conclusão de scanner',
                            text: `Após seguir os passos, o aplicativo dará baixa no sistema verificando seus componentes avariados e notificando na página de notificação ou inicio do sistema web,
                            no caso do aplicativo verificando na sessão de notificação presentes no veículo selecionado.`,
                        }
                        ]).then((result) => {
                            window.location.reload()
                        })
                    }
                })
        }
    </script>
</div>
