<!-- Para o correto funcionamento e necessario colocar a tag CANVAS onde será inserido o grafico com o ID nomeado Anuncios -->

<div>
    <script>
        var anuncio = "{{route('an')}}"; //Rota de coleta de dados do banco
        var Anuncio = new Array();
        var Acessos = new Array();
        $(document).ready(function () {
            $.get(anuncio, function (response) {
                response.forEach(function (data) {
                    Anuncio.push(data.Anuncio);
                    Acessos.push(data.Visualizacao);
                });
                var ctx = document.getElementById("Anuncios").getContext('2d'); // Nome do ID onde será implantodo o grafico
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: Anuncio,
                        datasets: [{
                            label: 'Popularidade do Anuncio',
                            data: Acessos,
                            borderWidth: 1,
                            backgroundColor: 'rgba(255, 193, 7, 0.9)'//Amarelo
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                    }
                });
            });
        });
    </script>
</div>
