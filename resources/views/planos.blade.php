@extends('template/padrao')

@section('titulo', 'Planos')

@section('menu_planos','active')

@section('conteudo')

</section>
<!-- Plano do fisico -->
<section id="fisico" class="backgroundBlackLight espaco">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-auto col-lg-auto col-xl-auto tituloPreto">
                <h1>Físico</h1>
                <p class="text-dark card-text h5 descricao">Planos para usuários que utilizarão o sistema de
                    notificação das manutenções veículares</p>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 PlanoCard card_hover">
                        <div class="card tamanhoCard shadow mb-5 bg-white">
                            <div class="card-body">
                                <h5 class="card-title plano_nomes">Basic</h5>
                                <p class="card-text">
                                    <ul>
                                        <li class="planos_padding">Gratuito</li>
                                        <li class="planos_padding">Máximo de 2 carros cadastrados</li>
                                        <li class="planos_padding">Obd2 e App não inclusos (compra a parte opcional)
                                        </li>
                                        <li class="planos_padding">Visualização dos anúncios postados pelos
                                            fornecedores
                                        </li>
                                        <div class="vazia"></div>
                                    </ul>
                                </p>
                                <a href="cadastro.php" class="btn btn-outline-dark porcentagem">Assinar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 PlanoCard card_hover">
                        <div class="card tamanhoCard shadow mb-5 bg-white">
                            <div class="card-body">
                                <h5 class="card-title plano_nomes">Standart</h5>
                                <p class="card-text">
                                    <ul>
                                        <li class="planos_padding">R$ 9,99 p/ mês</li>
                                        <li class="planos_padding">Máximo de 5 carros cadastrados</li>
                                        <li class="planos_padding">Obd2 e App não inclusos (compra a parte opcional)
                                        </li>
                                        <li class="planos_padding">Visualização dos anúncios postados pelos
                                            fornecedores
                                        </li>
                                        <div class="vazia"></div>
                                    </ul>
                                </p>
                                <a href="cadastro.php" class="btn btn-outline-dark porcentagem">Assinar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 PlanoCard card_hover">
                        <div class="card tamanhoCard shadow mb-5 bg-white">
                            <div class="card-body">
                                <h5 class="card-title plano_nomes">Profission</h5>
                                <p class="card-text">

                                    <ul>
                                        <li class="planos_padding">R$ 39,99 p/ mês</li>
                                        <li class="planos_padding">Máximo de 20 carros cadastrados</li>
                                        <li class="planos_padding">Obd2 e App não inclusos (compra a parte opcional)
                                        </li>
                                        <li class="planos_padding">Desconto na compra do Obd2 e App</li>
                                        <li class="planos_padding">Visualização dos anúncios postados pelos
                                            fornecedores
                                        </li>
                                    </ul>

                                </p>
                                <a href="cadastro.php" class="btn btn-outline-dark porcentagem">Assinar </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 PlanoCard card_hover">
                        <div class="card tamanhoCard shadow mb-5 bg-white">
                            <div class="card-body">
                                <h5 class="card-title plano_nomes">Deluxe Edition</h5>
                                <p class="card-text">

                                    <ul>
                                        <li class="planos_padding">R$ 99,90 p/ mês</li>
                                        <li class="planos_padding">Máximo de 50 carros cadastrados</li>
                                        <li class="planos_padding">Obd2 e App inclusos (1 unidade)</li>
                                        <li class="planos_padding">Desconto na compra do Obd2 e App</li>
                                        <li class="planos_padding">Visualização dos anúncios postados pelos
                                            fornecedores
                                        </li>
                                    </ul>

                                </p>
                                <a href="cadastro.php" class="btn btn-outline-dark porcentagem">Assinar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>
<!-- Plano do juridico -->
<section id="juridico" class="backgroundYellow">
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-auto col-lg-auto col-xl-auto tituloPreto">
                    <h1 class="text-white">Jurídico</h1>
                    <p class="text-white card-text h5 descricao">Escolha quantos serviços e anúncios deseja e faça
                        um orçamento abaixo:</p>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="card shadow mb-5 bg-white">
                                <div class="card-body ">
                                    <h5 class="card-title">Anúncios</h5>
                                    <p class="card-text">
                                        <div class="row">
                                            <div class="col">
                                                <span>Serviço</span>
                                                <input id="servicoInput" type="number" class="form-control"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <span>Produtos</span>
                                                <input id="produtoInput" type="number" class="form-control"
                                                    placeholder="">
                                            </div>
                                        </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="card shadow mb-5 bg-white">
                                <div class="card-body">
                                    <h5 class="card-title">Plano mensal personalizado</h5>
                                    <p class="card-text">
                                        <br>
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">
                                                <h6>Serviço:</h6>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                                <h6><b id="valorServico"></b></h6>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">
                                                <h6>Produtos anunciados:</h6>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                                <h6><b id="valorProduto"></b></h6>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row border-top-5">
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">
                                                <h5>Total:</h5>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                                <h5><b id="valorTotal"></b></h5>
                                            </div>
                                        </div>
                                        <br>
                                        <a href="./cadastro_juridico.php" class="btn btn-outline-dark porcentagem">Cadastar para assinar
                                            plano</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
<script>
    $(document).ready(function () {
        $('#servicoInput').click(function () {
            var valorPro = 1.00;
            var valorProduto = $('#produtoInput').val();
            $('#valorProduto').text('R$  ' + valorProduto * valorPro);
        });
        $('#produtoInput').click(function () {
            var valorPro = 1.00;
            var valorProduto = $('#produtoInput').val();
            $('#valorProduto').text('R$  ' + valorProduto * valorPro);
        });
        setInterval(function () {
            var valorPro = 1.00;
            var valorProduto = $('#produtoInput').val();
            $('#valorProduto').text('R$  ' + valorProduto * valorPro);
            var valorSer = 10.00;
            var valorServico = $('#servicoInput').val();
            $('#valorServico').text('R$  ' + valorServico * valorSer);
            $('#valorTotal').text('R$  ' + (valorServico + valorProduto));
        });
    });
</script>
@endsection
