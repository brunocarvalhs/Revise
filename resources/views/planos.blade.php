@extends('template/padrao')

@section('titulo', 'Planos')

@section('menu_planos','active')

@section('conteudo')

</section>
    <!-- Plano do fisico -->
    <section id="fisico" class="backgroundBlackLight espaco">
        <div class="container">
            <div class="row">
                <div class="col-12 tituloPreto pt-5">
                    <h1>Físico</h1>
                    <hr>
                </div>
                <p class="text-dark card-text h5 descricao ml-3">Planos para usuários que utilizarão a função de
                        notificação das manutenções preditivas</p>

            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
                        <div class="row ">
                                <div class="col-0 col-sm-0 col-md-0 col-lg-2 col-xl-3"></div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 PlanoCard card_hover pt-5 mr-xl-5 mr-lg-5">
                                    <div class="card tamanhoCard shadow pt-2 mb-5">
                                        <div class="card-body">
                                            <h5 class="card-title plano_nomes">Standart</h5>
                                            <hr>
                                            <p class="card-text">
                                                <ul>
                                                    <li class="planos_padding h6">Gratuito</li>
                                                    <li class="planos_padding h6">Máximo 1 carro cadastrado</li>
                                                    <li class="planos_padding h6">App sem suporte para Obd2</li>
                                                    <li class="planos_padding h6">Visualização dos anúncios postados pelos fornecedores
                                                    </li>

                                                </ul>
                                            </p>
                                            <div class="pt-4"></div>
                                            <button type="button" class="btn btn-warning w-100">Assine já</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 PlanoCard card_hover pt-5 ml-xl-4 ml-lg-4">
                                    <div class="card tamanhoCard shadow pt-2 mb-5">
                                        <div class="card-body">
                                            <h5 class="card-title plano_nomes">Gold</h5>
                                            <hr>
                                            <p class="card-text">
                                                <ul>
                                                    <li class="planos_padding h6">R$ 9,99 p/ mês</li>
                                                    <li class="planos_padding h6">Máximo 3 carros cadastrados</li>
                                                    <li class="planos_padding h6">App com suporte para Obd2</li>
                                                    <li class="planos_padding h6">Visualização dos anúncios postados pelos fornecedores
                                                    </li>

                                                </ul>
                                            </p>
                                            <div class="pt-4"></div>
                                            <button type="button" class="btn btn-warning w-100">Assine já</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
    </section>
    <!-- Plano do juridico -->
    <section id="juridico" class="backgroundYellow bg-dark">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 tituloPreto">
                        <h1 class="text-white">Jurídico</h1>
                        <hr class="bg-secondary">
                    </div>
                    <p class="text-white card-text h5 descricao pb-5 pl-3">Escolha quantos serviços e anúncios deseja e faça
                        um orçamento abaixo:</p>
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
                                            <a href="./cadastro_juridico.php" class="btn btn-warning porcentagem">Assinar
                                                agora</a>
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
            var valorTotal = valorServico + valorProduto;
            $('#valorTotal').text('R$  ' + valorTotal);
        });
    });
</script>
@endsection
