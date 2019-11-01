@extends('template/padrao')

@section('titulo', 'Cadastro')

@section('conteudo')
<section>
    <div class=" backgroundBlackLight espaco">
        <div class="row">
            <div class="col-12">
                <h1>Cadastro Físico</h1>
            </div>
        </div>
        <!-- Barra de progresso -->
        <div class="progress bg-dark">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>
    <!--Inicio dos Forms-->
    <div class="backgroundBlackLight">
        <!--Form dados pessoais-->
        <form name="CadastroFisico" id="CadastroFisico" method="POST" action="{{ url('/CadastroFisico') }}" onSubmit="return ValidarCadastroFisico();">
            @csrf
            <div class="row">
                <div class="col-12">
                    <h4>Dados pessoais</h4>
                </div>
            </div>
            <div class="row formularioCadastro">
                <div class="col-12">
                    <!-- Nome completo -->
                    <div class="form-group inputCadastro">
                        <div class="form-row">
                            <div class="col-12">
                                <label for="campoNome">Nome completo</label>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <input type="text" maxlength="125" class="form-control" id="txtnome" name="txtnome" onkeypress="return bloqueioNumero(event)">
                            </div>
                        </div>
                    </div>
                    <!-- E-mail -->
                    <div class="form-group inputCadastro">
                        <label for="exampleFormControlInput1">Endereço de email</label>
                        <input type="email" class="form-control" maxlength="60" id="txtemail" name="txtemail" placeholder="nome@exemplo.com">
                    </div>
                    <div class="form-group inputCadastro">
                        <div class="form-row">
                            <!-- CPF -->
                            <div class="col-12 col-sm-12 col-md col-lg col-xl">
                                <label for="exampleFormControlInput1">CPF</label>
                                <input type="text" class="form-control" maxlength="14" id="txtcpf" name="txtcpf" placeholder="XXX.XXX.XXX-XX" data-mask="000.000.000-00">
                            </div>
                            <!-- Data de nascimento -->
                            <div class="col-12 col-sm-12 col-md col-lg col-xl">
                                <label for="exampleFormControlInput1">Data de nascimento</label>
                                <input type="date" class="form-control" id="txtNascimento" name="txtNascimento" placeholder="DIA/MÊS/ANO" max="{{  date('Y-m-d', strtotime('- 18 year')) }}" min="{{  date('Y-m-d', strtotime('- 65 year')) }}" >
                            </div>
                        </div>
                    </div>
                    <!-- Senha -->
                    <div class="form-group inputCadastro">
                        <label for="campoSenha">Senha</label>
                        <input type="password" id="txtsenha" maxlength="20" name="txtsenha" class="form-control" aria-describedby="descricaoSenha">
                        <small id="descricaoSenha" class="form-text text-muted">
                            Sua senha deve ter entre 6 e 20 caracteres, os quais devem ser letras e números,
                            sem
                            espaços, caracteres especiais ou emojis.
                        </small>
                    </div>
                    <!-- Confirma senha -->
                    <div class="form-group inputCadastro">
                        <label for="campoSenha">Confirmar senha</label>
                        <input type="password" id="txtcsenha" name="txtcsenha" maxlength="20" class="form-control" aria-describedby="descricaoSenha">
                    </div>
                </div>
            </div>
            <!--Form planos-->
            <br>
            <div class="row">
                <div class="col-12">
                    <h4>Planos</h4>
                </div>
                <br><br>
            </div>
            <!--Seleção-->
            <div class="row">
                <div class="col-5">
                    <div class="input-group mb-3">
                        <select class="custom-select" id="txtplano" name="txtplano" aria-label="Exemplo de select com botão addon">
                            <option value="0" selected>Selecione seu plano...</option>
                            <option value="1">Basic</option>
                            <option value="2">Standart</option>
                            <option value="3">Profission</option>
                            <option value="4">Deluxe Edition </option>

                        </select>
                    </div>
                </div>
            </div>
            <!--Cards plano-->
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 PlanoCard card_hover ">
                    <div class="card tamanhoCard shadow mb-5 bg-white">
                        <div class="card-body">
                            <h5 class="card-title plano_nomes">Basic</h5>
                            <p class="card-text">
                                <ul>
                                    <li class="planos_padding">Gratuito</li>
                                    <li class="planos_padding">Máximo de 2 carros cadastrados</li>
                                    <li class="planos_padding">Obd2 e App não inclusos (compra a
                                        parte opcional)
                                    </li>
                                    <li class="planos_padding">Visualização dos anúncios postados
                                        pelos
                                        fornecedores
                                    </li>
                                    <div class="vazia"></div>
                                </ul>
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 PlanoCard card_hover ">
                    <div class="card tamanhoCard shadow mb-5 bg-white">
                        <div class="card-body">
                            <h5 class="card-title plano_nomes">Standart</h5>
                            <p class="card-text">
                                <ul>
                                    <li class="planos_padding">R$ 9,99 p/ mês</li>
                                    <li class="planos_padding">Máximo de 5 carros cadastrados</li>
                                    <li class="planos_padding">Obd2 e App não inclusos (compra a
                                        parte opcional)
                                    </li>
                                    <li class="planos_padding">Visualização dos anúncios postados
                                        pelos
                                        fornecedores
                                    </li>
                                    <div class="vazia"></div>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 PlanoCard card_hover ">
                    <div class="card tamanhoCard shadow mb-5 bg-white">
                        <div class="card-body">
                            <h5 class="card-title plano_nomes">Profission</h5>
                            <p class="card-text">

                                <ul>
                                    <li class="planos_padding">R$ 39,99 p/ mês</li>
                                    <li class="planos_padding">Máximo de 20 carros cadastrados</li>
                                    <li class="planos_padding">Obd2 e App não inclusos (compra a
                                        parte opcional)
                                    </li>
                                    <li class="planos_padding">Desconto na compra do Obd2 e App</li>
                                    <li class="planos_padding">Visualização dos anúncios postados
                                        pelos
                                        fornecedores
                                    </li>
                                </ul>

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 PlanoCard card_hover ">
                    <div class="card tamanhoCard shadow mb-5 bg-white">
                        <div class="card-body">
                            <h5 class="card-title plano_nomes">Deluxe Edition</h5>
                            <p class="card-text">
                                <ul>
                                    <li class="planos_padding">R$ 99,90 p/ mês</li>
                                    <li class="planos_padding">Máximo de 50 carros cadastrados</li>
                                    <li class="planos_padding">Obd2 e App inclusos (1 unidade)</li>
                                    <li class="planos_padding">Desconto na compra do Obd2 e App</li>
                                    <li class="planos_padding">Visualização dos anúncios postados
                                        pelos
                                        fornecedores
                                    </li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--Botão-->
            <br><br>
            <div class="row">
                <div class="col-0 col-sm-0 col-md-0 col-lg-8 col-xl-8"></div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                    <button class="btn btn-warning btn-block" id="btnContinua">Cadastrar</button>
                </div>
            </div>
    </div>
    </form>
</section>
@endsection

@section('script')
<script src="{{ asset('js/API.js')}}"></script>
<script src="{{ asset('js/validation/CadastroFisico.js')}}"></script>
<script type="text/javascript" src="//assets.locaweb.com.br/locastyle/edge/javascripts/locastyle.js"></script>
@endsection

@section('mensagem')
    @if(session()->has('Cadastro'))
        @if(session()->get('Cadastro')->Status)
            @component('componentes.alert')
                @slot('titulo','SUCESSO')
                @slot('icone','success')
                @slot('mensagem')
                    {{ session()->get('Cadastro')->Mensagem }}
                @endslot
            @endcomponent
        @else
            @component('componentes.alert')
                @slot('titulo','ERRO')
                @slot('icone','error')
                @slot('mensagem')
                    {{ session()->get('Cadastro')->Mensagem }}
                @endslot
            @endcomponent
        @endif
    @endif
@endsection
