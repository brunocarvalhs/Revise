<!-- Para o correto funcionamento e necessario colocar a tag CANVAS onde será inserido o grafico com o ID nomeado Indice -->

<div>
    <script>
        var indice = "{{route('qt')}}"; //Rota de coleta de dados do banco
        var Visualizacao = new Array();
        var Tipo = new Array();
        $(document).ready(function () {
            $.get(indice, function (response) {
                response.forEach(function (data) {
                    Visualizacao.push(data.Visualizacao);
                    Tipo.push(data.Tipo);
                });
                var ctx = document.getElementById("Indice").getContext('2d'); // Nome do ID onde será implantodo o grafico
                var myChart = new Chart(ctx, {
                    type: 'pie',//Tipo de grafico
                    data: {
                        labels: Tipo,
                        datasets: [{
                            label: 'Acesso a Anuncios',//Titulo
                            data: Visualizacao,
                            borderWidth: 1,
                            backgroundColor: [
                            'rgba(52, 58, 64, 0.9)',//Preto
                            'rgba(255, 193, 7, 0.9)'//Amarelo
                            ],
                        }]
                    }
                });
            });
        });
    </script>
</div>
